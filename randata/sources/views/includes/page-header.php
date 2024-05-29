<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Randata</title>
	<!-- <link rel="stylesheet" href="./public/styles/style.css"> -->
</head>

<body>
	<header>
		<nav>
			<ul>
				<li class="home"><a href="./">Home</a></li>
				<?php if (!isset($_SESSION["user"])) : ?>
					<li><a href="./subscribe">Subscription</a></li>
					<li><a href="./login">Login</a></li>
				<?php else : ?>
					<li><a href="./logout">Logout</a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</header>