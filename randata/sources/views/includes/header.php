<header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>

			<?php if (!isset($_SESSION["user"])) : ?>

				<li><a href="subscribe">Subscription</a></li>
				<li><a href="login">Login</a></li>

			<?php else : ?>

				<li><a href="logout">Logout</a></li>

			<?php endif ?>
		</ul>
	</nav>
</header>