 <?php  get_header() ?>

 <?php if (have_posts()): while (have_posts()): the_post(); ?>
    Здесь HTML код и функции вывода значений поста (заголовок, дата, ссылка, текст и т.д.)
<?php endwhile; else: ?>
    <p>Записей не найдено.</p>
<?php endif; ?>

<?php  get_footer() ?>