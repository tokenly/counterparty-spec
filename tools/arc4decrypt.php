<?php 

// takes a txid and a data
//   and returns the ARC4 decrypted version

$txid = isset($argv[1]) ? $argv[1] : null;
$hexadecimal_data = isset($argv[2]) ? $argv[2] : null;

if (!strlen($txid) OR !strlen($hexadecimal_data)) {
    echo "Usage: {$argv[0]} <txid> <data>\n";
    exit(1);
}

$decrypted_binary_data = arc4decrypt(hex2bin($txid), hex2bin($hexadecimal_data));

print "\n";
print "Deobfuscated:\n";
print bin2hex($decrypted_binary_data)."\n";



function arc4decrypt($arc4_decrypt_key, $encrypted_text)
{
    $init_vector = '';
    return mcrypt_decrypt(MCRYPT_ARCFOUR, $arc4_decrypt_key, $encrypted_text, MCRYPT_MODE_STREAM, $init_vector);
}

?>