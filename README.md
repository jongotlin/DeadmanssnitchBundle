# DeadmanssnitchBundle

This bundle is an extension to [dizda/CloudBackupBundle](https://github.com/dizda/CloudBackupBundle) and lets you ping [deadmanssnitch.com](http://www.deadmanssnitch.com) when a successful backup is completed.

Installation (>=Symfony 2.1)
------------

### Composer

Download DeadmanssnitchBundle and its dependencies to the vendor directory. You can use Composer for the automated process:

```bash
$ php composer.phar require jongotlin/deadmanssnitch-bundle
```

Composer will install the bundle to `jongotlin/deadmanssnitch-bundle` directory.

### Adding bundle to your application kernel

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new JGI\DeadmanssnitchBundle\JGIDeadmanssnitchBundle()(),
        // ...
    );
}
```

Configuration
-------------

Here is the default configuration for the bundle:

```yml
# app/config/config.yml
jgi_deadmanssnitch:
    url: %deadmanssnitch_url%
```

```yml
# app/config/parameters.yml
deadmanssnitch_url: https://nosnch.in/xxxxxxxx
```
