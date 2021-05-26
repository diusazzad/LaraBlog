<?php

return [

    'item_per_page' => 15,

    /*
    |-----------------------------------------------------------------
    | Frontend Design Template
    |-----------------------------------------------------------------
    |
    | This config is responsible for setting up the frontend design.
    | Available design's are tailwindcss, bootstrap
    */
    'frontend_design' => env('MIX_FRONTEND_DESIGN', 'tailwindcss'),
];
