## Composer
Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

### `composer.json`: Project setup
To start using Composer in your project, all you need is a `composer.json` file. This file describes the dependencies of your project and may contain other metadata as well.

#### The  `require`  key

The first (and often only) thing you specify in  `composer.json`  is the  `require`  key. You are simply telling Composer which packages your project depends on.

```javascript
{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}
```

As you can see,  `require` takes an object that maps  **package names**  (e.g.  `monolog/monolog`) to  **version constraints**  (e.g.  `1.0.*`). (Semantic versioning)

### Installing dependencies
To install the defined dependencies for your project, run the  `install`  command.

```bash
composer install
```
When you run this command, one of two things may happen:
* Installing without  `composer.lock`
* Installing with  `composer.lock`

### Updating dependencies to their latest versions
As mentioned above, the `composer.lock` file prevents you from automatically getting the latest versions of your dependencies. To update to the latest versions, use the `update` command. This will fetch the latest matching versions (according to your `composer.json` file) and update the lock file with the new versions.

```bash
composer update
```

### Autoloading

```php
require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
```

You can even add your own code to the autoloader by adding an  `autoload` field to  `composer.json`.

```javascript
{
    "autoload": {
        "psr-4": {"Acme\\": "src/"}
    }
}
```

Composer will register a  [PSR-4](http://www.php-fig.org/psr/psr-4/)  autoloader for the  `Acme`  namespace.

## Command-line interface / Commands
### init
In the  Libraries chapter we looked at how to create a  `composer.json`  by hand. There is also an  `init`  command available that makes it a bit easier to do this.

When you run the command it will interactively ask you to fill in the fields, while using some smart defaults.

```bash
composer init
```

### install / i
The  `install`  command reads the  `composer.json`  file from the current directory, resolves the dependencies, and installs them into  `vendor`.

```bash
composer install
```

If there is a  `composer.lock`  file in the current directory, it will use the exact versions from there instead of resolving them. This ensures that everyone using the library will get the same versions of the dependencies.

If there is no  `composer.lock`  file, Composer will create one after dependency resolution.

### update / u

In order to get the latest versions of the dependencies and to update the  `composer.lock`  file, you should use the  `update`  command. This command is also aliased as  `upgrade`  as it does the same as  `upgrade`  does if you are thinking of  `apt-get`  or similar package managers.

```bash
composer update
```

This will resolve all dependencies of the project and write the exact versions into  `composer.lock`.

### require

The  `require`  command adds new packages to the  `composer.json`  file from the current directory. If no file exists one will be created on the fly.

```bash
php composer.phar require
```

After adding/changing the requirements, the modified requirements will be installed or updated.

### remove

The  `remove`  command removes packages from the  `composer.json`  file from the current directory.

```bash
composer remove vendor/package vendor/package2
```

After removing the requirements, the modified requirements will be uninstalled.

