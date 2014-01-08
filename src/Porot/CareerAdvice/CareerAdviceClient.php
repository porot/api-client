<?php

namespace Porot\CareerAdvice;

use Porot\Common\AbstractClient;
use Guzzle\Service\Description\ServiceDescription;

class CareerAdviceClient extends AbstractClient
{
    public static function factory($config = array())
    {
        $client = parent::factory($config);

        // Set the service description
        $client->setDescription(ServiceDescription::factory(__DIR__  . '/Resources/career_advice.json'));

        return $client;
    }
}
