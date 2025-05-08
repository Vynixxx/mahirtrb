<?php
return [
    'required' => 'Kolom ini wajib diisi.',
    'email' => 'Format yang Anda masukkan salah.',
    'custom' => [
        'nama' => [
            'required' => 'Nama wajib diisi.',
        ],
        'nohp' => [
            'required' => 'Nomor HP wajib diisi.',
            'regex' => 'Format nomor tidak valid.',
        ],
        'email' => [
            'required' => 'Email wajib diisi.',
            'email' => 'Format email salah.',
            'regex' => 'Format email salah.',
        ],
        'jenis' => [
            'required' => 'Jenis kendaraan wajib dipilih.',
        ],
        'jml' => [
            'required' => 'Jumlah kebutuhan wajib diisi.',
            'integer' => 'Jumlah harus berupa angka.',
            'min' => 'Jumlah minimal adalah 1.',
        ],
        'awal' => [
            'required' => 'Tanggal awal ekspedisi wajib dipilih.',
        ],
        'akhir' => [
            'required' => 'Tanggal akhir ekspedisi wajib dipilih.',
            'after_or_equal' => 'Tanggal akhir tidak boleh sebelum tanggal awal.',
        ],
        'jenis_pabrikasi' => [
            'required' => 'Jenis pabrikasi wajib dipilih.',
            'in' => 'Pilihan jenis pabrikasi tidak valid.',
        ],
        'jenis_kendaraan' => [
            'required' => 'Jenis kendaraan wajib diisi.',
            'in' => 'Jenis kendaraan tidak valid.',
        ],
        'jumlah_kebutuhan' => [
            'required' => 'Jumlah kebutuhan wajib diisi.',
            'integer' => 'Jumlah harus berupa angka.',
            'min' => 'Jumlah minimal adalah 1.',
        ],
        'durasi' => [
            'required' => 'Durasi wajib diisi.',
            'integer' => 'Durasi harus berupa angka.',
            'min' => 'Durasi minimal adalah 1.',
        ],
        'satuan_durasi' => [
            'required' => 'Satuan durasi wajib dipilih.',
            'in' => 'Pilihan satuan durasi tidak valid.',
        ],
        'awal_penyewaan' => [
            'required' => 'Tanggal awal penyewaan wajib dipilih.',
            'date' => 'Format tanggal tidak valid.',
        ],
        'dengan_tim' => [
            'required' => 'Mohon pilih apakah dengan tim atau tidak.',
        ],
        'nopol' => [
            'required' => 'Nomor polisi wajib diisi.',
            'max' => 'Nomor polisi maksimal 12 karakter.',
        ],
        'jenis' => [
            'required' => 'Jenis kendaraan wajib diisi.',
            'max' => 'Jenis kendaraan maksimal 255 karakter.',
        ],
        'kendala_kendaraan' => [
            'required' => 'Kendala kendaraan wajib diisi.',
        ],
        'nama_barang' => [
            'required' => 'Nama barang wajib diisi.',
            'max' => 'Nama barang maksimal 255 karakter.',
        ],
        'merek_spesifikasi' => [
            'max' => 'Merek atau spesifikasi maksimal 255 karakter.',
        ],
        'jumlah' => [
            'required' => 'Jumlah wajib diisi.',
            'integer' => 'Jumlah harus berupa angka.',
            'min' => 'Jumlah minimal 1.',
        ],
        'satuan' => [
            'required' => 'Satuan wajib diisi.',
            'in' => 'Satuan tidak valid.',
        ],
        'tanggal_kebutuhan' => [
            'required' => 'Tanggal kebutuhan wajib dipilih.',
            'date' => 'Format tanggal tidak valid.',
        ],
    ],

    'order_success' => 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.',
    'order_error' => 'Terjadi kesalahan. Silakan coba lagi.',

];
