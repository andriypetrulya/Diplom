<?php
if($_POST['vision'] != '') {
$apiKey = 'sk-proj-2nGCaTAuBdahtV2EEbgzT3BlbkFJDxl2s7Ar5j4bhYqC6Xxg';

$url = 'https://api.openai.com/v1/chat/completions';

$text = $_POST['vision'];
$prompt = 'Если текст который я напишу ниже можно читать детям до 18, то напиши 1, иначе 0 \n' . $text;
$data = [
    "model" => "gpt-4",
    "messages" => [
        ["role" => "system", "content" => "Вы помощник, который оценивает уместность текста детям до 18 лет."],
        ["role" => "user", "content" => $prompt]
    ],
    "max_tokens" => 10 
];

$jsonData = json_encode($data);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($ch);

curl_close($ch);

$responseData = json_decode($response, true);

print_r($responseData['choices'][0]['message']['content']);
}
?>
