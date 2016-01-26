<?php get_header(); ?>

<div class="container">
    <div class=" row">
        <div class="page-header">
            <h1>Pedidos</h1>
        </div>
    </div>
    <?php
    $args = array('post_type' => 'pedido');
    $query = new WP_Query($args);
    $posts = $query->have_posts();

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>

            <div class="row">
                <h2><?php the_title(); ?></h2>
                <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>

                <p>Dados</p>

                <?php
                $produtos = get_field('produto');
                $clientes = get_field('cliente');
                ?>

                <?php if ($clientes) : ?>
                    <p>Clientes:</p>
                    <ul>
                        <?php foreach ($clientes as $cliente):?>
                        <li><?php echo get_the_title($cliente -> ID) ?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?> 
                    
                <?php if ($produtos) : ?>
                    <p>Produtos:</p>
                    <ul>
                        <?php foreach ($produtos as $produto):?>
                        <li><?php echo get_the_title($produto -> ID) ?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?> 
                    
            </div>
        <?php endwhile ?>
        <div class="navegacao">
            <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
            <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
        </div>

    <?php else: ?>
        <div class="artigo">
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div> 

    <?php endif; ?>
</div>

<?php get_footer(); ?>

