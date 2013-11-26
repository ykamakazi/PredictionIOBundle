<?php

namespace Ykamakazi\PredictionIOBundle\Service;

use PredictionIO\PredictionIOClient;

class PredictionIOWrapper extends PredictionIOClient
{

    /**
     * @param string $key
     * @param string $url
     * @param string $port
     */
    public function __construct($key, $url, $port)
    {
        $config = array(
            'appkey' => $key,
            'apiurl' => $url.':'.$port
        );
        parent::factory($config);
    }
} 