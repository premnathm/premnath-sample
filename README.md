# premnath-sample

Package
-------

1. Composer init

2. Minimum Stabiility - dev

3. PAckage type : library

4. License : MIT

5. depencies - No
6, no

---------------------------
composer.json

"autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "App\\": "app/",
            "Premanth\\Sample\\": "packages/premnath/sample/src"
        }
    },


composer dump-autoload


php artisan vendor:publish

[6] Provider: Premnath\Sample\SampleServiceProvider

> 6

Publishing complete




}
