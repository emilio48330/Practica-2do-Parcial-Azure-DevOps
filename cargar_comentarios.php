<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

        <?php
    

        if (file_exists($comments_file)) {
            $comments = file($comments_file, FILE_IGNORE_NEW_LINES);
            $total_comments = count($comments);
            
            foreach ($comments as $comment) {
                list($username, $comment_text) = explode(':', $comment, 2);
                $username = trim($username);
                $comment_text = trim($comment_text);

                echo "<div class='instagram-comment'>";
                echo "<div class='comment-header'>";
                echo "<div class='user-avatar'><i class='fas fa-user'></i></div>";
                echo "<div class='user-info'>";
                echo "<span class='username'>" . htmlspecialchars($username) . "</span>";
                echo "</div>";
                echo "</div>";
                echo "<div class='comment-content'>" . htmlspecialchars($comment_text) . "</div>";
                echo "<div class='comment-footer'>";
                echo "<span class='comment-actions'>";
                echo "<a href='#' class='like-button'><i class='far fa-heart'></i> Me gusta</a>";
                echo "<a href='#' class='reply-button'><i class='far fa-comment'></i> Responder</a>";
                echo "</span>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-center'>No hay comentarios aún. ¡Sé el primero en comentar!</p>";
        }
        ?>
    </div>
</body>
</html>
