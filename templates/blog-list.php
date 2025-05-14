<?php include 'header.php'; ?>

<main>
    <!-- Se utiliza la variable 'sectionTitle' para un segundo nivel de encabezado -->
    <h2><?php echo isset($sectionTitle) ? htmlspecialchars($sectionTitle) : 'Entradas Recientes'; ?></h2>
    
    <?php if (!empty($posts)) : ?>
        <?php foreach ($posts as $post): ?>
            <article>
                <!-- Cada post puede tener su propio título y esos valores ya vendrán de la base de datos -->
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <small>Publicado el: <?php echo htmlspecialchars($post['created_at']); ?></small>
            </article>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay entradas disponibles.</p>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>