<style type="text/css">
	.home {
		background-color: #e6e6e6;
	}
	.product {
		background-color: #edf4f6;
		width: 80%;
		margin: 20px auto;
		padding: 20px 40px;
	}
	input, select {
		height: 30px;
		background-color: white;
		border: none;
		margin: 5px;
		padding: 5px;
	}
	.informations {
		
	}
</style>
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<?= $this->Html->css('product') ?>
<?= $this->Html->css('product_responsive') ?>

<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/product_background.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Buy</div>
				<div class="breadcrumbs">
					<p>Get your appropriate items !</p>
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="/">Home</a></li>
						<li><a href="/pages/buy">Buy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="product">

		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<!-- premier colonne -->
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<?php
										$i = 0;
										foreach ($pieces as $piece) {
									?>
											<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
												<div class="product_image_<?php echo $i ?> product_image" style="width: 70%;">
													<img src="<?php echo $piece->photo ?>" alt="">
												</div>
												<div class="informations" style="width: 28%; margin: 40px">
													<table>
														<tr>
															<td><label>Price</label></td>
															<td class="product_price"><?php echo $piece->price ?>MAD</td>
														</tr>
														<tr>
															<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
															<input type="hidden" name="cmd" value="_s-xclick">
															<input type="hidden" name="hosted_button_id" value="Q4J54EVWXSLTW">
															<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width: 70%; margin: auto; height: 70%; border: none;">
															<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
															</form>

														</tr>
													</table>
												</div>
											</div>
									<?php
										}
									?>
								</div>
							</div>
							<!-- deuxieme colonne -->
							<div class="product_sidebar order-lg-2 order-1">
								<form action="#" id="product_form" class="product_form">
									<div class="">
										Product name ? 
										<input type="text" name="product_name">
									</div>
									<div class="">
										Max price ? 
										<input type="number" name="product_price_max">
									</div>
									<div class="">
										Product Color ? 
										<select name="product_color">
											<option></option>
											<option>White</option>
											<option>Black</option>
											<option>Gray</option>
											<option>Yellow</option>
											<option>Red</option>
											<option>Orange</option>
											<option>Blue</option>
											<option>Violet</option>
										</select>
									</div>
									<div class="">
										Product size ? 
										<select name="product_size" type="number">
											<option></option>
											<option>35</option>
											<option>36</option>
											<option>37</option>
											<option>38</option>
											<option>39</option>
											<option>40</option>
											<option>41</option>
											<option>42</option>
										</select>
									</div>
									<button class="cart_button trans_200">Search</button>
									<div class="similar_products_button trans_200"><a href="categories.html">see similar products</a></div>
								</form>
								<div class="product_links">
									<ul class="text-center">
										<li><a href="#">See guide</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Returns</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/product.js"></script>