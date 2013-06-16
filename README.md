# EhannFrontendBundle

Twitter Bootstrap-ready frontend and layout bundle for Symfony2.

### Twig Layouts

The bundle provides two Twig templates:

1. Ehann::base.html.twig
2. Ehann:layouts:bootstrap.html.twig

The __Ehann::base.html.twig__ template contains a boilerplate set of Twig blocks and the Modernizr library (version set in composer.json).

The __Ehann:layouts:bootstrap.html.twig__ template extends the Ehann::base.html.twig template and adds __jQuery__, __Twitter Bootstrap__, __Font-Awesome__, __Bootbox__, and __Bootstrap DateTime Picker__. With the exception of Font-Awesome, the versions of all of these libraries are controlled by the EhannFrontendBundle's composer.json file. Font-Awesome is not installed via composer because of limitations with Assetic - there does not appear to be a way to rewrite fonts using Assetic. This means that Font-Awesome cannot locate its font files if it is installed outside of a bundle without a filesystem/symlink hack.

### Assetic Filters
This EhannFrontendBundle also has a tricked-out Assetic configuration with various configured filters for your use. The tools associated with these filters are downloaded when you install the module. The filters are:

1. phpcssembed
2. yui_css
3. yui_js
4. lessphp
5. scssphp

### Related Bundles

<a href="https://github.com/ethanhann/EhannNotificationBundle">EhannNotificationBundle</a> - Utilizes the <a href="http://symfony.com/doc/current/components/http_foundation/sessions.html#flash-messages">Symfony2 flash message feature</a> to add Twitter Bootstrap-ready notifications to your application.

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

Composer repositories can only be defined in the root application's composer.json file.
Add these respoistories to your application's composer.json file:

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
            "version": "v3.2.0",
            "name": "makeusabrew/bootbox",
            "source": {
                "url": "https://github.com/makeusabrew/bootbox.git",
                "type": "git",
                "reference": "master"
            },
            "dist": {
                "url": "https://github.com/makeusabrew/bootbox/zipball/v3.2.0",
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

Specify the global default layout template, making it accessible to all bundles in your application.

```yaml
# app/config/config.yml
ehann_frontend:
    default_layout: "EhannFrontendBundle:layouts:bootstrap.html.twig"
```

Extend your own templates by extending the default layout.

```twig
{% extends ehann_frontend_default_layout  %}
```
