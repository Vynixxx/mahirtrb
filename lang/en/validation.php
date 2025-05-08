<?php

return [
    'required' => 'This field is required.',
    'email' => 'The format you entered is invalid.',
    'custom' => [
        'nama' => [
            'required' => 'Name is required.',
        ],
        'nohp' => [
            'required' => 'Phone number is required.',
            'regex' => 'Invalid phone number format.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'email' => 'Invalid email format.',
            'regex' => 'Invalid email format.',
        ],
        'jenis' => [
            'required' => 'Vehicle type must be selected.',
        ],
        'jml' => [
            'required' => 'Quantity is required.',
            'integer' => 'Quantity must be a number.',
            'min' => 'Minimum quantity is 1.',
        ],
        'awal' => [
            'required' => 'Start date is required.',
        ],
        'akhir' => [
            'required' => 'End date is required.',
            'after_or_equal' => 'End date cannot be before start date.',
        ],
        'jenis_pabrikasi' => [
            'required' => 'Fabrication type must be selected.',
            'in' => 'Selected fabrication type is invalid.',
        ],
        'jenis_kendaraan' => [
            'required' => 'Vehicle type is required.',
            'in' => 'Invalid vehicle type.',
        ],
        'jumlah_kebutuhan' => [
            'required' => 'Required quantity is required.',
            'integer' => 'Quantity must be a number.',
            'min' => 'Minimum quantity is 1.',
        ],
        'durasi' => [
            'required' => 'Duration is required.',
            'integer' => 'Duration must be a number.',
            'min' => 'Minimum duration is 1.',
        ],
        'satuan_durasi' => [
            'required' => 'Duration unit must be selected.',
            'in' => 'Invalid duration unit.',
        ],
        'awal_penyewaan' => [
            'required' => 'Start date is required.',
            'date' => 'Invalid date format.',
        ],
        'dengan_tim' => [
            'required' => 'Please specify whether with team or not.',
        ],
        'nopol' => [
            'required' => 'License plate number is required.',
            'max' => 'License plate number must not exceed 12 characters.',
        ],
        'jenis' => [
            'required' => 'Vehicle type is required.',
            'max' => 'Vehicle type must not exceed 255 characters.',
        ],
        'kendala_kendaraan' => [
            'required' => 'Vehicle issue is required.',
        ],
        'nama_barang' => [
            'required' => 'Item name is required.',
            'max' => 'Item name must not exceed 255 characters.',
        ],
        'merek_spesifikasi' => [
            'max' => 'Brand or specification must not exceed 255 characters.',
        ],
        'jumlah' => [
            'required' => 'Quantity is required.',
            'integer' => 'Quantity must be a number.',
            'min' => 'Quantity must be at least 1.',
        ],
        'satuan' => [
            'required' => 'Unit is required.',
            'in' => 'Invalid unit selected.',
        ],
        'tanggal_kebutuhan' => [
            'required' => 'Required date must be selected.',
            'date' => 'Invalid date format.',
        ],
    ],
    'order_success' => 'Your order has been placed successfully. Our team will contact you shortly.',
    'order_error' => 'An error occurred. Please try again.',

];
