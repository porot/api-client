<?php
/**
 * Copyright 2014 Cabninet Porot & Partenaire. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

return array(
    'class' => 'Porot\Common\Porot',
    'services' => array(
        'default_settings' => array(
            'base_url' => 'http://api.porot.com'
        ),

        'career_advice' => array(
            'alias'   => 'CareerAdvice',
            'extends' => 'default_settings',
            'class'   => 'Porot\CareerAdvice\CareerAdviceClient'
        )
    )
);
