<?php
$token = 'TOKKEN_GITHUB';

$projectLinks = [
    'https://api.github.com/repos/username/project1',
    'https://api.github.com/repos/username/project2',
    'https://api.github.com/repos/username/project3'
];

$headers = [
    'Authorization: token ' . $token,
    'User-Agent: MyPortfolioApp'
];

$projects = [];

foreach ($projectLinks as $link) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    
    if (isset($data['name'])) {
        $languagesUrl = $link . '/languages';
        curl_setopt($ch, CURLOPT_URL, $languagesUrl);
        $languagesResponse = curl_exec($ch);
        $languagesData = json_decode($languagesResponse, true);
        $languages = array_keys($languagesData);

        $projects[] = [
            'name' => $data['name'],
            'description' => $data['description'] ?? 'Pas de description disponible.',
            'url' => $data['html_url'],
            'languages' => implode(', ', $languages)
        ];
    }

    curl_close($ch);
}

header('Content-Type: application/json');
echo json_encode($projects);
