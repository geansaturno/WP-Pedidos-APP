<?php get_header(); ?>

<div class="container">
    <div class=" row">
        <div class="page-header">
            <h1>Clientes</h1>
        </div>
    </div>
    <?php 
        $args = array('post_type' => 'cliente');
        $query = new WP_Query($args);
        $posts = $query->have_posts();
        
    if ($query->have_posts()) : while ($query -> have_posts()) : $query -> the_post(); ?>

            <div class="row">
                <h2><?php the_title(); ?></h2>
                <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                <p>Telefone: <?php echo (the_field( 'telefone'));?></p>
                <p>Email: <?php echo (the_field( 'email'));?></p>
            </div>
        <?php endwhile ?>
        
    <?php else: ?>
        <div class="artigo">
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div> 

    <?php endif; ?>
</div>

<?php get_footer(); ?>