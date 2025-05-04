

````markdown
# System Logger Package for Laravel

A starter kit for building a Laravel package — includes support for local development, route registration, and service provider loading.

## 📦 Installation (Local Development)

To test and develop this package locally in a Laravel project, follow these steps:

### 1. Add Local Repository Path

In your Laravel application's `composer.json`, add this inside the root level:

```json
"repositories": [
  {
    "type": "path",
    "url": "../composer-package-starter-kit",
    "options": {
      "symlink": true
    }
  }
]
````

> ✅ Make sure the path `"../composer-package-starter-kit"` is correct relative to your Laravel project.

---

### 2. Require the Package

Run this command in your Laravel project root to install the package:

```bash
composer require nurul-komor/composer-package-starter-kit:@dev
```

---

### 3. Run Artisan and Composer Commands

Make sure Laravel discovers and loads your package correctly:

```bash
composer dump-autoload
php artisan config:clear
php artisan cache:clear
php artisan package:discover
```

---

## 🛠️ Package Features

* Service Provider loading
* Facade support (if needed)
* Custom route registration from the package
* Ideal for local development with `symlink`

---

## ✅ Test Your Package

You can define a route inside your package like so:

### Example: `src/routes/web.php`

```php
use Illuminate\Support\Facades\Route;

Route::get('/system-logger/test', function () {
    return 'System Logger package is working!';
});
```

### Register This Route in Your Service Provider

In your `SystemLoggerServiceProvider.php`:

```php
public function boot()
{
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
}
```

Now visit:

```
http://localhost/system-logger/test
```

You should see:

```
System Logger package is working!
```

---

## 📁 Folder Structure (Basic)

```
composer-package-starter-kit/
├── composer.json
├── src/
│   ├── SystemLoggerServiceProvider.php
│   └── routes/
│       └── web.php
├── tests/
└── README.md
```

---

## 📝 License

This package is open-sourced software licensed under the [MIT license](LICENSE).


