<?php

/**
 * Copyright 2014 Cabinet Porot & Partenaire. All Rights Reserved.
 *
 */

namespace Porot\Tests\Common;

use Porot\Common\Porot;

/**
 * @covers Porot\Common\Porot
 */
class PorotTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testFactoryInstantiatesAwsObjectUsingDefaultConfig()
    {
        $builder = Porot::factory();
        $this->assertTrue($builder->offsetExists('career_advice'));
        $this->assertArrayHasKey('career_advice', $builder->getConfig());
    }

    public function testTreatsArrayInFirstArgAsGlobalParametersUsingDefaultConfigFile()
    {
        $builder = Porot::factory(array(
            'token'  => 'foo'
        ));

        $this->assertEquals('foo', $builder->get('career_advice')->getConfig('token'));
    }

    public function testReturnsDefaultConfigPath()
    {
        $this->assertContains('porot-config.php', Porot::getDefaultServiceDefinition());
    }
}
