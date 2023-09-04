# Introduction
Sample extension how to override various things in Live Helper Chat. In this sample is shown how you

* Override template
* Override module
* Listen for a php event
* Listen for a JS event
* Add your own custom CSS
* Override images
* Override various widget styles `design/clientoverridetheme/css/widgetv2`
* Add a custom PHP class

For more information please read https://doc.livehelperchat.com/docs/development/quick-guide

# Install

Edit main settings file `lhc_web/settings.ini.php`
```
'extensions' =>
    array (
    'clientoverride'
    ),
```

While developing please disable cache https://doc.livehelperchat.com/docs/debug#disabling-cache