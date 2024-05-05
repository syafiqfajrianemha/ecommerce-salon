<?php

return [
    'idMerchant' => env('MIDTRANS_ID_MERCHANT'),
    'clientKey' => env('MIDTRANS_CLIENT_KEY'),
    'serverKey' => env('MIDTRANS_SERVER_KEY'),
    'isProduction' => env('MIDTRANS_IS_PRODUCTION', false),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is3ds' => env('MIDTRANS_IS_3DS', true)
];
