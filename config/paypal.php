<?php
return array(
    // set your paypal credential
    'client_id' => 'AYQozvoWZi7sK26SqcTsAkMEguk0tcerBUnWxkptgR6UDiKfJjkRwRO0P7ZNN9DLyJT78opRcJQt-nfY',
    'secret' => 'ENR9En0v4Nzjf3XxhyF-HYm9X-6FE1-qjSiwdQRNR-_sDpJmxSgX5bAb3QF353eSMoHzcuG13FcJQq_z',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

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