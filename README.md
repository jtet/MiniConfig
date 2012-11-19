MiniConfig
==========

Simple configuration file loader for PHP in 20 lines of code.

##Using MiniConfig

Mini Config can load YAML (.yml) or INI (.ini) files. The variables in your configuration file can be accessed as if they were properties of the Config object.

```php  
$c = new \JTet\Mini\Config("config.yml");
echo $c->db_user;
```

##Getting MiniConfig

Add the following to your [composer.json](http://getcomposer.org) file and run `composer update`.

```
"require": {
        "jtet/miniconfig": "dev-master"
    }
```

##License
MiniConfig is available for your use under the [OSL-3.0](http://www.spdx.org/licenses/OSL-3.0#licenseText) license.
