<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .banner {
            width: 100%;
            max-height: 100px;
            margin-bottom: 20px;
            object-fit: contain;
        }
        h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        p {
            margin: 5px 0;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <img src="{{ asset('images/banner-perusahaan.png') }}" alt="PT. Mahir Trans Bersaudara" class="banner">

        <h2>Invoice #{{ $invoice['invoice_no'] }}</h2>

        <p><strong>Jenis Pemesanan:</strong> {{ $invoice['jenis'] }}</p>
        <p><strong>Nama Pemesan:</strong> {{ $invoice['nama'] }}</p>
        <p><strong>Email:</strong> {{ $invoice['email'] }}</p>
        <p><strong>Harga Total:</strong> Rp {{ number_format($invoice['total'], 0, ',', '.') }}</p>

        <div class="footer">
            Terima kasih telah mempercayakan kebutuhan Anda kepada kami.<br>
            &copy; {{ date('Y') }} PT. Mahir Trans Bersaudara. Semua hak cipta dilindungi.
        </div>
    </div>

</body>
</html>
