<?php

namespace Porot\Common;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;

class AbstractClient extends Client
{
    public static function factory($config = array())
    {
        // Provide a hash of default client configuration options
        $default = array('base_url' => 'http://api.porot.com');

        // The following values are required when creating the client
        $required = array(
            'base_url',
            'token'
        );

        // Merge in default settings and validate the config
        $config = Collection::fromConfig($config, $default, $required);

        // Create a new client
        $client = new self($config->get('base_url'), $config);

        return $client;
    }
}
