# Test Plugin.

Zum testen der composer install/php setup.php update Prozesse

# How to reproduce

Clone Plugin into `Customizing/global/plugins/Services/UIComponent/UserInterfaceHook/`

go back to the ilias base dir.

run
`composer install`
or
`php setup/cli.php build-artifacts --yes`

Now the composer install log includes some echos of the test plugin from the ci.php (the inner one because the classname is duplicated)
