# Simply create a blade view integrating an ajax script with the csrf token

![image](https://user-images.githubusercontent.com/104217825/234743332-088aa023-1720-41de-926c-d7d919271e45.png)


## Installation

You can install the package via composer:

```bash
composer require matteodv51/laravel-ajax-view
```



## Usage


add ``<meta name="csrf-token" content="{{ csrf_token() }}">`` and 
``<link rel="stylesheet" href="{{ asset('css/ajax/_ajax_form.css')}}">``
in your header layout base



```php
run php artisan make:ajax-view {filename : the name of your file}  
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Matteo Berlanas](https://github.com/MatteoDv51)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
