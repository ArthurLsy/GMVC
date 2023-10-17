# GMVC
Simple MVC sample using composer and php 7.4 or higher.

## Installation
```bash
$ git clone https://github.com/ArthurLsy/GMVC.git
$ cd GMVC
$ composer install
```

## Usage

### Local server
If you don't set URL_SUBFOLDER in config file change directory to public and run php local server.
```bash
$ php -S localhost:8080
```

### Routes
Route template. Add this in routes/web.php
```php
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'viewController', 'method'=>'home'), array()));
```

### Controllers
Controller template. Add this in app/controllers/viewController.php
```php
class viewController
{
    public function home(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/homeView.php';
    }
}
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
