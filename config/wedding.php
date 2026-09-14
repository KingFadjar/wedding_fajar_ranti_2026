<?php

return [
    'drive' => [
        'adat' => env('WEDDING_DRIVE_ADAT', 'https://drive.google.com/drive/folders/1qNZKQ1sOoCgs85AVJyJlKHDSJ9Q8-DXQ'),
        'modern' => env('WEDDING_DRIVE_MODERN', 'https://drive.google.com/drive/folders/1Lw3ywzYd4bHm3IfHg8B_N0jIC_jM4HZv'),
    ],

    'admin' => [
        'user' => env('RSVP_ADMIN_USER', 'admin'),
        'password' => env('RSVP_ADMIN_PASSWORD', ''),
    ],
];
