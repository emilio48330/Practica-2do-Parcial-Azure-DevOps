document.addEventListener('DOMContentLoaded', function() {
    const commentsList = document.getElementById('commentsList');
    const toggleComments = document.getElementById('toggleComments');
    const commentCount = document.getElementById('commentCount');

    // Actualizar el contador de comentarios
    const comments = commentsList.getElementsByTagName('div');
    commentCount.textContent = comments.length;

    toggleComments.addEventListener('click', function() {
        if (commentsList.style.display === 'none') {
            commentsList.style.display = 'block';
            toggleComments.innerHTML = '<i class="fas fa-chevron-up"></i> Ocultar comentarios';
        } else {
            commentsList.style.display = 'none';
            toggleComments.innerHTML = '<i class="fas fa-chevron-down"></i> Ver comentarios';
        }
    });
});
