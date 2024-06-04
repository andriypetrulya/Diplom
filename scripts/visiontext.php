<?php
if($_POST['vision'] != '') {
// Замените 'YOUR_API_KEY' вашим API ключом OpenAI
$apiKey = 'sk-proj-2nGCaTAuBdahtV2EEbgzT3BlbkFJDxl2s7Ar5j4bhYqC6Xxg';

// URL для API OpenAI
$url = 'https://api.openai.com/v1/chat/completions';

//$text = 'Этот текст предназначен для взрослых от 21 года. Если вам меньше 21, вам запрещено это читать';
$text = $_POST['vision'];
$prompt = 'Если текст который я напишу ниже можно читать детям до 18, то напиши 1, иначе 0 \n' . $text;
// Данные, которые будут отправлены в теле запроса
$data = [
    "model" => "gpt-4", // Модель, которая подойдет для вашего запроса
    "messages" => [
        ["role" => "system", "content" => "Вы помощник, который оценивает уместность текста детям до 18 лет."],
        ["role" => "user", "content" => $prompt]
    ],
    "max_tokens" => 10 // Максимальное количество токенов для генерации ответа
];

// Преобразуем массив в JSON-формат
$jsonData = json_encode($data);

// Инициализация cURL
$ch = curl_init($url);

// Устанавливаем параметры для cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Выполняем запрос и сохраняем ответ
$response = curl_exec($ch);

// Закрываем cURL
curl_close($ch);

// Преобразуем JSON-ответ обратно в PHP массив
$responseData = json_decode($response, true);

// Выводим результат
print_r($responseData['choices'][0]['message']['content']);
}
?>