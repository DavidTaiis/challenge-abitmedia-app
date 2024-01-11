<?php
$value_active = 'ACTIVE';
$value_inactive = 'INACTIVE';
$value_available = 'AVAILABLE';
$value_used = 'USED';
return [
    'response_codes' => [
        'success' => '200',
        'validation_error' => '422',
        'internal_server_error' => '500',
    ],
    'response_status' => [
        'success' => 'success',
        'validation_error' => 'fail',
        'internal_server_error' => 'error',
        'common_error' => 'error',
    ],
    'active_status' => $value_active,
    'inactive_status' => $value_inactive,
    'available_status' => $value_available,
    'used_status' => $value_used,
    'status_model' => [
        $value_active => 'Activo',
        $value_inactive => 'Inactivo',
    ],
    'roles' => [
        'role_administrator' => 'Administrador',
    ],
    'oauthPassport' => [
        'tokenAccessClient' => env('CLIENT_ACCESS_TOKEN')
    ]

];
