
# composer-package-starter-kit

A Laravel package scaffolding tool designed to speed up package development with Laravel support.

## ✨ Features
```markdown

- Laravel package auto-discovery support
- PSR-4 autoloading for `src` and `tests` directories
- Service Provider and optional Facade auto-registration
- Composer-based package structure
- Directory structure for:
  - Config files
  - Migrations
  - Views
  - Routes
  - Tests
- Supports Laravel 8, 9, 10,....
- PHPUnit and Orchestra Testbench for easy package testing
- `dev` stability with `prefer-stable` enabled
```
## 📦 Installation

```
git clone https://github.com/nurul-komor/composer-package-starter-kit
cd composer-package-starter-kit
```

Then run:

```bash
composer update
```

## 🛠 Usage in Laravel

If you're using Laravel 5.5+ the package will be auto-discovered.

Otherwise, manually register:

### Add the Service Provider

```php
// config/app.php

'providers' => [
    YourVendor\MyPackage\MyPackageServiceProvider::class,
],
```

### Add the Facade (optional)

```php
// config/app.php

'aliases' => [
    'MyPackage' => YourVendor\MyPackage\Facades\MyPackage::class,
],
```

### Publish Config (if applicable)

```bash
php artisan vendor:publish --tag=my-package-config
```

### Example Usage

```php
use MyPackage;

MyPackage::doSomethingCool();
```

## ✅ Testing

Run tests via PHPUnit:

```bash
vendor/bin/phpunit
```

## 🧱 Folder Structure

```
my-package/
├── src/                    # Main package source code
├── config/                 # Configuration files
├── database/migrations/    # Package migrations
├── resources/views/        # Blade views
├── routes/                 # Custom package routes
├── tests/                  # Unit and feature tests
└── composer.json           # Package metadata
```

## 📄 License

MIT © [Nurul Komor](https://nurulkomor.vercel.app/)
```



