<?php
$comments_file = 'data/comentarios_save.txt';

if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    if (!empty($name) && !empty($comment)) {
        $comment_entry = $name . ": " . $comment . "\n";
        file_put_contents($comments_file, $comment_entry, FILE_APPEND);
    }
}

header('Location: index.php');
exit();
