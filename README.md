nguide
======

DIRECTORY STRUCTURE
-------------------

```
common
	config/				contains shared configurations
	mail/				contains view files for e-mails
	models/				contains common model classes
console
	config/				contains console configurations
	controllers/		contains console controllers (commands)
	migrations/			contains database migrations
	models/				contains console-specific model classes
	runtime/			contains files generated during runtime
backend
	assets/				contains application assets such as JavaScript and CSS
	config/				contains backend configurations
	controllers/		contains Web controller classes
	models/				contains backend-specific model classes
	runtime/			contains files generated during runtime
	tests/				contains various tests for the backend application
	views/				contains view files for the Web application
	web/				contains the entry script and Web resources
vendor/					contains dependent 3rd-party packages
environments/			contains environment-based overrides
```

REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.

INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `advanced` that is directly under the Web root.

Then follow the instructions given in "GETTING STARTED".


### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the application using the following command:

~~~
php composer.phar create-project ...
~~~

OR for windows:
~~~
"path/to/php.exe" "path/to/composer" create-project ...
~~~
example:
~~~
"C:\PHP\php.exe" "C:\ProgramData\Composer\bin\composer.phar" create-project ...
~~~

GETTING STARTED
---------------

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Run command `init` to initialize the application with a specific environment.
2. Create a new database and adjust the `components['db']` configuration in `common/config/main-local.php` accordingly.
3. Apply migrations with console command `yii migrate`. This will create tables needed for the application to work.
4. Set document roots of your Web server:

- for backend `/path/to/yii-application/backend/web/` and using the URL `http://anyYourDomain/`