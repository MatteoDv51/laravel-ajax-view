<?php

namespace MatteoDv51\LaravelAjaxView;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MatteoDv51\LaravelAjaxView\Commands\LaravelAjaxViewCreateViewFile;

class LaravelAjaxViewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ajax-view')
            ->hasCommand(LaravelAjaxViewCreateViewFile::class);
    }
}
