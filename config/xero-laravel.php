<?php

// config for Sprintdigital/XeroLaravel
return [
    /*
    |--------------------------------------------------------------------------
    | Xero Laravel configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the configuration Xero Laravel package.
    |
    */

    'apps' => [
        'default' => [
            'client_id'     => env('XERO_CLIENT_ID'),
            'client_secret' => env('XERO_CLIENT_SECRET'),
            'redirect_uri'  => env('XERO_REDIRECT_URI'),
            'scope'         => 'openid profile email accounting.transactions accounting.contacts offline_access accounting.settings',
        ],
        'invoice_model' => \App\Models\Invoice::class, // Change this to your Invoice model
        'invoice_line_item_model' => \App\Models\InvoiceLineItem::class, // Change this to your Invoice Line Item model
    ],
];
