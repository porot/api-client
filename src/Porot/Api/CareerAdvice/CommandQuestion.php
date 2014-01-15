<?php

namespace Porot\Api\CareerAdvice;

use Porot\Api\AbstractCommand;

class CommandQuestion extends AbstractCommand
{
    protected function build()
    {
        parent::build();

        // Add question id param to path
        $path = $this->request->getPath();
        $path .= $this->data['id'];
        $this->request->setPath($path);
    }
}
