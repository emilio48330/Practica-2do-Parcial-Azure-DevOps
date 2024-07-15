<?php
$comments_file = 'data/comentarios_save.txt';

if (file_exists($comments_file)) {
    $comments = file($comments_file, FILE_IGNORE_NEW_LINES);
    $total_comments = count($comments);
    echo "<p class='comment-counter'>Total de comentarios: " . $total_comments . "</p>";
} else {
    echo "<p class='comment-counter'>No hay comentarios aún.</p>";
}
?>
