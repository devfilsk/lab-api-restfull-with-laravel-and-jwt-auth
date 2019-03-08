<?php
//header.payload.signature

//header
$header = [
    'alg' => 'HS256', //HMAC - SHA256
    'typ' => 'JWT'
];

$header_json = json_encode($header);
$header_base64 = base64_encode($header_json);

echo "Cabecalho: $header_json";
echo "\n";
echo "Cabecalho JWT: $header_base64";

$payload = [ //somente para informações uteis e não sensíveis
    "first_name" => 'Filipe',
    'last_name' => 'Maciel',
    'email' => 'devfilsk@gmail.com',
    'ext' => (new \DateTime())->getTimestamp() //
];

$payload_json = json_encode($payload);
$payload_base64 = base64_encode($payload_json);

echo "\n\n";
echo "Payload: $payload_json";
echo "\n";
echo "Payload JWT: $payload_base64";
echo "\n";
echo "\n";

//Assignature

$key = '78sdfasd65asdf5757sdf98sd3s2f65sdf8s';

//token jwt
$signature = hash_hmac('sha256', "$header_base64.$payload_base64", $key, true);
$signature_base64 = base64_encode($signature);

echo "Assinatura RAW: $signature";
echo "Assinatura JWT: $signature_base64";

$token = "$header_base64.$payload_base64.$signature_base64";
echo "\n\n";
echo "TOKEN: $token";
echo "\n\n";
