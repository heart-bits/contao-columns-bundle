contao-grid-bundle
===================

An extension for the content management system 'Contao', which allows the backend-user to generate a grid for nested content elements.

Add the following parameter to your **config.yml**, if you don't want to load the default stylesheets from foundation:
```yaml
# app/config/config.yml

parameters:
    # Heartbits\ContaoGrid configuration
    use_grid_stylesheets: false
```

After these changes the contao-cache must be cleared.
```
vendor/bin/contao-console cache:clear --env=dev
vendor/bin/contao-console cache:clear --env=prod
```