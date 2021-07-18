<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">AIFM</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php if (is_user_logged_in()) { ?>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="#">Challenge</a></li>
					<li class="nav-item"><a class="nav-link" href="#">League</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Market</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="myTeamDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Team</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="myTeamDropdown">
							<li><a class="dropdown-item" href="#">Game plan</a></li>
							<li><a class="dropdown-item" href="transfer">Transfer</a></li>
							<li><a class="dropdown-item" href="squad">Squad</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Items</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="badge bg-light text-dark">Thu Nt</span></a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
							<li><a class="dropdown-item" href="#">Edit profile</a></li>
							<li><a class="dropdown-item" href="#">Award</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="<?php echo wp_logout_url(home_url('/')); ?>">Log out</a></li>
						</ul>
					</li>
				</ul>
			<?php } else { ?>
				<a href="login" class="btn btn-sm btn-outline-success ms-auto">Log In</a>
			<?php } ?>
		</div>

	</div>
</nav>