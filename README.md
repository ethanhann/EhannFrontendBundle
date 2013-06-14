# EhannFrontendBundle

Twitter Bootstrap-ready frontend and layout bundle for Symfony2.

## Related Bundles

<a href="https://github.com/ethanhann/EhannNotificationBundle">EhannNotificationBundle</a>

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

Specify the global default layout template for all bundles in your application.

```yaml
  ehann_html_base:
      default_layout: "EhannFrontendBundle:layout:bootstrap.html.twig"
```
