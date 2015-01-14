# twig-extension

The extra extensions for Twig.

## Usage

1. Deploy at `packages` directory.
2. Load the package on `fuel/app/config/config.php`

```php
return array(
    'always_load' => array(
        'twig-extension'
    )
);
```

3. Load the extension on `fuel/app/config/parser.php`

```php
return array(
    'View_Twig' => array(
        'extensions' => array(
            'TwigExtension\Extension'
        )
    ),
);
```
