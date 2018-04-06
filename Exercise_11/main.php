<nav>
	<div class="navigation">
		<a href="index.php">Home</a>
		<a href="#">O nama</a>
		<a href="#">Kontakt</a>
	</div>
	
	<div class="logout">
		<a href="logout.php">Logout</a>
	</div>
</nav>
<div class="container">
	
	<h2>Welcome <?php echo ucfirst($_SESSION['firstname'] .' '. $_SESSION['lastname']); ?></h2>
	
</div>