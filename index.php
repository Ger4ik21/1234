<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Интернет-магазин компьютерных игр GAME HUB! Низкие цены, круглосуточная и отзывчивая поддержка, удобный интерфейс, моментальная доставка.">
    <meta name="keywords" content="магазин компьютерных игр, интернет магазин компьютерных игр, компьютерные магазины купить игру, магазины продаж компьютерных игр, невысокая цена, понятный интерфейс, интуитивно понятный интерфейс, поддержка, служба поддержки">
    <meta name="google-site-verification" content="4MqINANgr0wTKtvIUX1v9s2rGwdio1kJs474MA0XM7I" />
    <title>GAME HUB</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link type="image/x-icon" href="http://site/wp-content/uploads/2021/12/favic.png" rel="shortcut icon">
</head>
<body>
<?php get_header(); ?>

<div class="content">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h1> <?php the_title(); ?> </h1>
    <p><?php the_content(('(more...)'));?></p>
    <hr> <?php endwhile;else: ?>
    <p> <?php _e('Sorry, no posts'); ?> </p><?php endif; ?>
</div>

<?php comment_form();?>

<?php get_footer(); ?>

</body>
</html>

