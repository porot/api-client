<?php

namespace Porot\Api\CareerAdvice;

use Guzzle\Service\Description\ServiceDescription;

use Porot\Api\AbstractClient;

class Client extends AbstractClient
{
    public static function factory($config = array())
    {
        $client = parent::factory($config);

        // Set the service description
        $client->setDescription(ServiceDescription::factory(__DIR__  . '/career_advice.json'));

        return $client;
    }
}
