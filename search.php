<?php include 'inc/header.php'; ?>


<?php
		if( isset($_REQUEST['search']) ) {
			
			$searchProduct = $pd->getSearcbaleProduct($_REQUEST['search']);
		}
	?>
 
 <div class="main">
    <div class="content">
	<div class="content_top">
    	<div class="heading">
    		<h3>Searching Data</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
				if($searchProduct == null) echo "Nothing to found !!!";
				if( isset($searchProduct) && $searchProduct != null) {
					while( $result=$searchProduct->fetch_assoc() ) {
			?>

			<div class="col-md-6">
				<div class="card custom-card">
				
					<a href="details.php?productId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2> <?php echo $result['productName']; ?> </h2>
					<p> <?php echo $fm->textShorten($result['body'], 60); ?> </p>
					<p><span class="price">$<?php echo $result['price']; ?></span></p>
					<button class="btn btn-secondary button"><span><a href="details.php?productId=<?php echo $result['productId']; ?>" class="details">Details</a></span></button>
				</div>
			</div>

				<?php } } ?>
		</div>
	</div>
 </div>
 
<?php include 'inc/footer.php'; ?>

