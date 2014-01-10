<?php

namespace Porot\Api;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;

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
        $client = new static($config->get('base_url'), $config);

        $client->setDescription(ServiceDescription::factory(__DIR__  . '/Resources/' . static::SERVICE_DESCRIPTION));

        return $client;
    }

    public function getBaseUrl($expand = true)
    {
        return parent::getBaseUrl($expand) . $this->getPath();
    }

    public function getPath()
    {
        return $this->getDescription()->getData('path');
    }
}
