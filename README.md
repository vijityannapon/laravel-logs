# Laravel Logs


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

and use this in terminal or cmd
~~~
php artisan vendor:publish --provider="Vijityannapon\Logs\LogsServiceProvider"
~~~

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
