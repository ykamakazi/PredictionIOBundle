<?php

namespace Ykamakazi\PredictionIOBundle\Service;

use PredictionIO\PredictionIOClient;

class PredictionIOWrapper extends PredictionIOClient
{

    public function __construct($key)
    {
        $config = array(
            'appkey' => $key
        );
        parent::factory($config);
    }
} 