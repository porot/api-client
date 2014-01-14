<?php

namespace Porot\Api\CareerAdvice;

use Porot\Api\AbstractCommand;

class CommandTopic extends AbstractCommand
{
    protected function build()
    {
        parent::build();
        
        // Add topic id param to path
        $path = $this->request->getPath();
        $path .= $this->data['id'];
        $this->request->setPath($path);
    }
}
