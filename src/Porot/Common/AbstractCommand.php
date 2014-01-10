<?php

namespace Porot\Common;

use Guzzle\Service\Command\OperationCommand;

abstract class AbstractCommand extends OperationCommand
{
    /**
     * {@inheritdoc}
     */
    protected function build()
    {
        parent::build();
        $this->request->getQuery()->set('token', $this->getClient()->getConfig('token'));
    }
}
