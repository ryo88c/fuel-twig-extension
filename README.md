# twig-extension

The extra extensions for Twig.

## Usage

1. Deploy at `packages` directory.
2. Load the package on a configuration page.

```php:fuel/app/config/config.php
return array(
    'always_load' => array(
        'twig-extension'
    )
);
```

3. Load the extension on a configuration page.

```php:fuel/app/config/parser.php
return array(
    'View_Twig' => array(
        'extensions' => array(
            'TwigExtension\Extension'
        )
    ),
);
```