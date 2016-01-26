<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pedidos app</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Pedido App</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo get_post_type_archive_link( 'cliente' ); ?>">Clientes</a></li>
                        <li><a href="<?php echo get_post_type_archive_link( 'pedido' ); ?>">Pedidos</a></li>
                        <li><a href="<?php echo get_post_type_archive_link( 'produto' ); ?>">Produtos</a></li>
                        <li><a href="wp-admin/">Administração</a></li>
                    </ul>
                </div>
            </div>
        </nav>
