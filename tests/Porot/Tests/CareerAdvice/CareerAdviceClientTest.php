<?php

/**
 * Copyright 2014 Cabinet Porot & Partenaire. All Rights Reserved.
 *
 */

namespace Porot\Tests\CareerAdvice;

use Porot\CareerAdvice\CareerAdviceClient;

class CareerAdviceClientTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @covers Porot\CareerAdvice\CareerAdviceClient::factory
     */
    public function testFactoryInitializesClient()
    {
        $client = CareerAdviceClient::factory(array(
            'token' => 'foo'
        ));

        $this->assertEquals('http://api.porot.com', $client->getBaseUrl());
    }}
