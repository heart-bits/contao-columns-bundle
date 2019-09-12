contao-columns-bundle
===================

Just a little extension for the content management system 'contao', which allows the backend-user to generate rows and columns for a foundation grid.

Add the following parameter to your **config.yml**, if you don't want to load the standard stylesheets from foundation:
```yaml
# app/config/config.yml

parameters:
    # Heartbits\ContaoColumns configuration
    use_columns_stylesheets: false
```

After these changes the contao-cache should be cleared.
```
vendor/bin/contao-console cache:clear --env=dev
vendor/bin/contao-console cache:clear --env=prod
```