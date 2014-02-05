# Porot API Client Library

## Installation

The Porot API client library is best used with [composer](http://getcomposer.org).

Add the library to your project's `composer.json`

``` json
    "require": {
        ...,
    	"porot/api-client:" "dev-master",
    	...
    },
    ...
```

Then run `php composer.phar install` or `php composer.phar update`.

Alternatively, download or clone it from github.

## Usage

### Career advice API client

``` php
$porot = Porot::factory(array('token' => YOUR_POROT_API_TOKEN));

$client = $porot->get('career_advice');
```

See Porot\Api\Resources\career-advice.json for the detail of available methods.

## Dependencies

The Porot API Client is based on the [Guzzle HTTP Client library](http://docs.guzzlephp.org/en/latest/#).
