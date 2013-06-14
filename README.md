# Frontend Bundle

The Ehann Frontend bundle provides base Twig layouts and various client side assets for Symfony2 applications.

## Installation

Add EhannFrontEndBundle in your composer.json:

```js
// composer.json
{
    "require": {
        "ehann/frontend-bundle": "0.*"
    }
}
```

Download bundle:

``` bash
$ php composer.phar update ehann/frontend-bundle
```

Add the EhannFrontendBundle to your AppKernel.php

```php
public function registerBundles()
{
    $bundles = array(
        ...
        new Ehann\FrontendBundle\EhannFrontendBundle(),
        ...
    );
    ...
}
```

Add the EhannFrontendBundle assetic.yml file into your application config file.

```yaml
# app/config/config.yml
imports:
      - { resource: "@EhannFrontendBundle/Resources/config/assetic.yml" }
```

### Composer Repositories

Composer repositories can only be defined in the root application's composer.json file. Add these respoistories to your application's composer.json file:

```js
// composer.json
"repositories": [
    {
        "type": "package",
        "package": {
            "name": "yui/yui-compressor",
            "version": "2.4.7",
            "dist": {
                "url": "https://github.com/downloads/yui/yuicompressor/yuicompressor-2.4.7.zip",
                "type": "zip"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "version": "3.2.0",
            "name": "makeusabrew/bootbox",
            "source": {
                "url": "https://github.com/makeusabrew/bootbox.git",
                "type": "git",
                "reference": "master"
            },
            "dist": {
                "url": "https://github.com/makeusabrew/bootbox/zipball/master",
                "type": "zip"
            }
        }
    },
    {
        "type": "package",
        "package": {
            "version": "v0.0.11",
            "name": "tarruda/bootstrap-datetimepicker",
            "source": {
                "url": "https://github.com/tarruda/bootstrap-datetimepicker.git",
                "type": "git",
                "reference": "master"
            },
            "dist": {
                "url": "https://github.com/tarruda/bootstrap-datetimepicker/zipball/v0.0.11",
                "type": "zip"
            }
        }
    }
]
```

## Config

Config setting sets the default layout template. This makes the template the default layout for all bundles in the application.

```yaml
  ehann_html_base:
      default_layout: "EhannFrontendBundle:layout:bootstrap.html.twig"
```
