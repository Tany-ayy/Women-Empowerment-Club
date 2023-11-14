<?php
$url = 'https://sheets.googleapis.com/v4/spreadsheets/1Y2etzUkQoAV_cKMoJThZ99MmrcZ_t-seqfQe4EkC-iQ/values/Sheet1!A1:Z100?key=YOUR_API_KEYAIzaSyCelL8ernSkz8CAC6f3tlFvFDtcH45tNiI';

$data = [
    'values' => [
        ['Form Data 1', 'Form Data 2', 'Form Data 3'],
        // Add more rows as needed
    ]
];

$options = [
    'http' => [
        'header' => "Content-type: application/json\r\n",
        'method' => 'PUT',
        'content' => json_encode($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === false) {
    echo 'Error updating Google Sheet';
} else {
    echo 'Google Sheet updated successfully';
}
?>

