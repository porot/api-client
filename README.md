# Porot API Client Library

## Installation

Add the library to your project's `composer.json`

``` json
    "require": {
        ...,
    	"porot/api-client:" "dev-master",
    	...
    },
    ...
```

## Usage

``` php
$porot = Porot::factory('path/to/config.php');
$client = $porot->get('career_advice');
```
