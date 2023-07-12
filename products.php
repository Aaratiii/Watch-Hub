<?php
	require './include/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Watch Hub </title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require './include/header.php';
			require './include/check-if-added.php';
		?>
		<div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to Watch Hub!</h1>
				<p>We have the best  watches  for you. No need to hunt
					around, we have all in one place.<br>
				YOUR WATCH SAYS EVERYTHING ABOUT YOU</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/2.png" alt="watch">
						<div class="caption">
							<h3>Watch 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/3.png" alt="watch" >
						<div class="caption">
							<h3>Watch 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img class="shirt" src="images/4.png" alt="watch">
						<div class="caption">
							<h3>Watch 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/5.png" alt="wach">
						<div class="caption">
							<h3>Watch 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/9.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/10.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/11.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail" >
						<img src="images/12.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require './include/footer.php';
		?>
	</body>
</html>
