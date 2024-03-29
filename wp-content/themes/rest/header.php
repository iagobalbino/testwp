<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name')?></title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<?php wp_head(); ?>
	</head>

	<body>
		
		<header>
			<nav>
				<ul>
					<li class="current_page_item"><a href="/teste-wp/">Menu</a></li>
					<li><a href="/teste-wp/sobre/">Sobre</a></li>
					<li><a href="/teste-wp/contato/">Contato</a></li>
				</ul>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

			<?php $contato = get_page_by_title('contato');  ?>
			<p><?php the_field('endereco_header', $contato); ?> </p>
			<p class="telefone">2<?php the_field('telefone_header', $contato); ?></p>
		</header>