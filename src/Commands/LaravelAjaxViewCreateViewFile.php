<?php

namespace MatteoDv51\LaravelAjaxView\Commands;

use Illuminate\Console\Command;

class LaravelAjaxViewCreateViewFile extends Command
{
    public $signature = 'make:ajax-view {filename : the name of your file}';

    public $description = 'Create view in specific directory implementing ajax js script';

    protected function getStub():string{
        return __DIR__.'/../../resources/views/stub.blade.php';
    }

    protected function getCssFile():string{
        return __DIR__.'/../../resources/views/ajax_form.css';    

    }

    protected function getOutputDir():string{

        return resource_path()."/views/ajax/";
    }

    protected function createBladeFile(){
       
        $output = $this->getOutputDir();
        $filename= '_'.$this->argument('filename').'.blade.php';
        if (!is_dir($output)) {
            mkdir($output, 0777, true); 
        }
        if(!file_exists($output.$filename)){

            $myfile = fopen($output.$filename, "x") or die("Unable to open file!");
            $content = file_get_contents($this->getStub());
            fwrite($myfile, $content);
            fclose($myfile);
        }

    }
    protected function createCssFile(){
       
        $output =   public_path()."/css/ajax/";
        $filename= '_ajax_form.css';
        if (!is_dir($output)) {
            mkdir($output, 0777, true); 
        }

        if(!file_exists($output.$filename)){

            $myfile = fopen($output.$filename, "x") or die("Unable to open file!");
            $content = file_get_contents($this->getCssFile());
            fwrite($myfile, $content);
            fclose($myfile);
        }

    }

    public function handle(): int
    {
       
        $this->createBladeFile();
        $this->createCssFile();
        $filename= '_'.$this->argument('filename').'.blade.php';
        $output = $this->getOutputDir();
        $css_path=  resource_path()."/css/ajax/";
       
        $this->comment("View $filename successfully created in $output");
        $this->comment("file _ajax_form.css successfully created in $css_path");

        return self::SUCCESS;
    }
}
