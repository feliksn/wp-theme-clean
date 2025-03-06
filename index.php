<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if( have_posts() ) { ?>
            <?php while( have_posts() ) { ?>
                <?php the_post(); ?>
                <div class="card mb-3 shadow-sm border-light-subtle rounded-0">
                    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?> </h5>
                        <div class="card-text">
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="card-link">Ссылка на страницу записи</a>
                        <div class="mt-3">
                            Рубрики: <?php the_category(); ?>
                        </div>
                        <div class="mt-3">
                            <?php the_tags(); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h5>Записей не найдено!</h5>
        <?php } ?>
    </div>
</div>



<?php get_footer(); ?>