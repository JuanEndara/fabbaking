<!DOCTYPE HTML>
<html>
	<head>
        <?php include_once 'htmlHeader.php'; ?>
	</head>
	<body>
	<!-- container -->
		  <?php include_once 'navMenu.php'; ?>
	<!-- service -->
<div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">new varieties</h3>
			<ul id="flexiselDemo3">
				<li>
					<div class="biseller-column">
					<img src="images/11.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Delicious</h4>
						<p>$ 170.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/12.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Printed Cake</h4>
						<p>$ 600.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="images/13.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Forest Egg</h4>
						<p>$ 400.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				</li>
	     	</ul>
			</div>
		</div>	

			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
				<div class="best-seller">
				<div class="container">
					<div class="biseller-info">
					 <h3 class="new-models">varieties</h3>
					<ul id="flexiselDemo1">
						<li>
							<div class="biseller-column">
							<img src="images/18.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Chocolate </h4>
						<p>$ 200.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/15.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Birthday Cakes </h4>
						<p>$ 180.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/16.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Flower Types </h4>
						<p>$ 140.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/17.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.html">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Sheet Cake </h4>
						<p>$ 150.99</p>
					</div>
						<a href="singlepage.html"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
			     	</ul>
					</div>
			</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
			<div class="clearfix"></div>


	<!-- footer -->
<?php include_once 'footer.php'; ?>
	<!-- /footer -->
	</body>
</html>

