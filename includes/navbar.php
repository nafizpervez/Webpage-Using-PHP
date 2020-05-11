<!-- Navigation -->
<nav class="navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
			<p>
				<a class="navbar-logo" href="index.php">Your Destination</a>
			</p>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class= "nav-link <?php if($page=='Sikkim'){echo 'active';} ?>" href="index.php">Sikkim<a/>
				</li>
				<li class="nav-item">
					<a class= "nav-link <?php if($page=='about'){echo 'active';} ?>"" href="about.php">About<a/>
				</li>
				<li class="nav-item active">
					<a class= "nav-link <?php if($page=='placestogo'){echo 'active';} ?>"" href="placestogo.php">Places To Go<a/>
				</li>
				<li class="nav-item active">
					<a class= "nav-link <?php if($page=='food'){echo 'active';} ?>"" href="food.php">Food<a/>
				</li>
				<li class="nav-item active">
					<a class= "nav-link <?php if($page=='connection'){echo 'active';} ?>"" href="connection.php">Connection<a/>
				</li>
		</div>
	</div>
</nav>