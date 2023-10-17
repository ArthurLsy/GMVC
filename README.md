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
MIT License

Copyright (c) [2023] [ArthurLsy]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.