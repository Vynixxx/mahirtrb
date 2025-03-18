<?php

namespace App\Helpers;

class EncryptionHelper
{
    public static function encrypt($plaintext, $key)
    {
        $nonce = random_bytes(SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES);
        $ciphertext = sodium_crypto_aead_chacha20poly1305_ietf_encrypt($plaintext, null, $nonce, $key);
        return base64_encode($nonce . $ciphertext);
    }

    // Fungsi untuk mendekripsi teks
    public static function decrypt($encryptedText, $key)
    {
        $decoded = base64_decode($encryptedText);
        $nonce = substr($decoded, 0, SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES);
        $ciphertext = substr($decoded, SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES);
        return sodium_crypto_aead_chacha20poly1305_ietf_decrypt($ciphertext, null, $nonce, $key);
    }
}
