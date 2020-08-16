<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="custom/site/img/Fundo1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-black">
							<span>Venha conhecer</span>
							<h2>Nossos produtos</h2>
							<p>Modernos, bonitos e estilosos. </p>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>O melhor</span>
						<h2>&#128525;</h2>
						<p>Do mundo</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="custom/site/img/Fundo2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-black">
							<span>Aparelhos Retrô</span>
							<h2>E incríveis</h2>
							<p>Bastante diversidade e Excelência.</p>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Com</span>
						<h2>&#128516;</h2>
						<p>Qualidade</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="custom/site/img/icons/1.png" alt="#">
						</div>
						<h2>Confiável</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature" id="cor">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="custom/site/img/icons/2.png" alt="#">
						</div>
						<h2><span>O melhor</span></h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="custom/site/img/icons/3.png" alt="#">
						</div>
						<h2>Envio Seguro</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section" id="Produtos">
		<div class="container">
			<div class="section-title">
				<h2>PRODUTOS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
						<div class="pi-links">
							<a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-card"><i class="flaticon-bag"></i><span>COMPRAR</span></a>
							<a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="wishlist-btn"><i class="flaticon-info"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>R$<?php echo formatPrice($value1["vlprice"]); ?></h6>
						<p><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="custom/site/img/banner-bg.jpg">
				<div class="tag-new">EXCLUSIVO</div>
				<span>Produtos com</span>
				<h2>EXCELÊNCIA</h2>
				<a class="site-btn" id="corbtn">É só aqui!</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->