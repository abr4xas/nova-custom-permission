## Nova Custom Permission tool for Laravel Nova


This only for my needs ;)

### Installation

You can install the package via composer:

```bash
composer require abr4xas/nova-custom-permission
```

Then, you will need to register the tool within the `NovaServiceProvider.php`:

```php
use Abr4xas\NovaCustomPermission\NovaCustomPermissionTool;
...

/**
 * Get the tools that should be listed in the Nova sidebar.
 *
 * @return array
 */
public function tools()
{
    return [
        // other tools
        new NovaCustomPermissionTool,
    ];
}
```

> Keep in mind that this is an 15 minutes work tool, so use carefully
