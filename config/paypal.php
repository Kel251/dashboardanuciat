<?php
return array(
    // set your paypal credential
    'client_id' => 'AQDikgBg2CBeIVoqv12CXOBxmyAcPocQOGhyxq0teRHx_rJE4NroZJJs0InA4FAEp-Livdvovfx5xgrY',
    'secret' => 'EN7h5ILP4YR_3dUxre5rtXEF4MK1zUnVKn8_-bzTcfSLkSVMPIhX4ei28Rm5quHzuYzZWXCosRmJucj-',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);