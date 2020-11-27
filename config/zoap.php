<?php

return [

    // Service configurations.

    'services' => [

        'students' => [
            'name' => 'Student Soap Service',
            'class' => 'App\Soap\Student\StudentService',
            'exceptions' => [
                'Exception'
            ],
            'types' => [
                'keyValue' => '\App\Soap\Types\KeyValue',
                'student' => '\App\Soap\Types\Student'
            ],
            'strategy' => 'ArrayOfTypeComplex',
            'headers' => [
                'Cache-Control' => 'no-cache, no-store'
            ],
            'options' => []
        ]

    ],


    // Log exception trace stack?

    'logging' => true,


    // Mock credentials for demo.

    'mock' => [
        'user' => 'test@test.com',
        'password' => 'tester',
        'token' => 'tGSGYv8al1Ce6Rui8oa4Kjo8ADhYvR9x8KFZOeEGWgU1iscF7N2tUnI3t9bX'
    ],


];
