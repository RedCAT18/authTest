<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |
     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins' => ['http://localhost:8080'],
    'allowedHeaders' => ['Content-Type', 'Origin', 'X-Requested-with', 'Access-Control-Allow-Origin', 'Authorization'],
    'allowedMethods' => ['GET','POST'],
    'exposedHeaders' => [],
    'maxAge' => 0,
];

