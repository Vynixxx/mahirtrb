<?php

return [
    'required' => 'This field is required.',
    'email' => 'The format you entered is invalid.',
    'custom' => [
        'name' => [
            'required' => 'Name is required.',
        ],
        'whatsapp' => [
            'required' => 'WhatsApp number is required.',
        ],
        'subject' => [
            'required' => 'Subject is required.',
        ],
        'message' => [
            'required' => 'Message is required.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'email' => 'Invalid email format.',
            'regex' => 'Invalid email format.',
        ],
    ],
];
