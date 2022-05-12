<?php

$posts = [];

// Генерируем посты
for ($i = 0; $i < 50; $i++){
    array_push($posts, [ 'title' => 'Заголовок ' . $i, 'content' => 'Текст ' . $i ]);
}

if (isset($_GET['tek']) && $_GET['kol']) {
    $tek = $_GET['tek'];
    $kol = $_GET['kol'];
    $posts = array_slice($posts, $tek, $kol);
    echo json_encode($posts);
} else {
    echo json_encode(array('success' => false));
}
