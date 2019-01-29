DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

```$xslt
composer install
```


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=teststeps',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8mb4',
    'attributes' => [
      \PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));",
    ],
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.

### Migrations and Seeds


Please use the following command:
```$xslt
php yii migrate
```

### Crete VHost for testing (apache2 conf)
###### example: http://test-steps.local
The file /etc/apache2/sites-available/test-steps.local.conf
```$xslt
<VirtualHost *:80>
   ServerAdmin test@test.local
   ServerName test-steps.local
   ServerAlias www.test-steps.local
   DocumentRoot /var/www/test-steps/web
   ErrorLog ${APACHE_LOG_DIR}/test-steps.local-error.log
   CustomLog ${APACHE_LOG_DIR}/test-steps.local-access.log combined
	<Directory "/var/www/test-steps/web">
		AllowOverride All
	 	RewriteEngine on
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . index.php	    
	</Directory>
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
```

Inside /etc/hosts file
```$xslt
127.0.0.1 test-steps.local
127.0.0.1 www.test-steps.local
```

## Test steps via 
```
GET     http://test-steps.local/steps 

or

POST    http://test-steps.local/steps 
```

