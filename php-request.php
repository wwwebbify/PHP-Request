$url = 'http://URI.com';
$data = [
    'key1'   => 'value1,
    'key2'   => 'value2,
    'key3'   => 'value3,
];

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = json_decode(file_get_contents($url, false, $context));

if($result == false){
//Return some error here
}

var_dump($result);
