<?php

// return [
//     'modules' => [
//         'locations' => [
//             'title' => 'Locations',
//             'routePrefix' => 'admin',
//             'customFields' => true, // Ensures Twill uses custom fields
//         ],
//     ],
// ];


return [
    // 'modules' => [
    //     'locations' => [
    //         'title' => false, // Disables the default 'title' field
    //     ],
    // ],

    'modules' => [
    'locations' => [
        'name' => 'locations',
        'title' => 'Locations',
        'model' => App\Models\Location::class,
        'controller' => App\Http\Controllers\Twill\LocationController::class,
    ],

    'media_library' => [
    'disk' => 'public',
    'endpoint_type' => 'local', // For local development
    'local_path' => 'uploads',
    'allowed_extensions' => ['jpg', 'jpeg', 'png', 'gif', 'svg'],
],

],

];

