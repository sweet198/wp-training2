<?php
/*
Template Name: Наша команда
*/
?>

<?php
    get_heager();
?>

<div class="specialists">
    <div class="container">
        <div class="title"><?php the_field('team_title'); ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php // подставляем изображение (вариант с массивом) из группы полей
                $image = get_field('team_img');

                if (!empty($image)): ?>
                    <img class="specialists__img"
                         src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>">
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>