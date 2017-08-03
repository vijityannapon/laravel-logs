# Laravel Logs

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Install

``` bash
$ composer require "vijityannapon/logs":"*"
```

or 

Add this to composer.json
``` php
"vijityannapon/logs": "*"
```


## Usage
Add this to providers config/app.php 
``` php
Vijityannapon\Logs\LogsServiceProvider::class,
```


Add this to Facades config/app.php 
``` php
Logs' => Vijityannapon\Logs\Facades\Logs::class,
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
