<?php include 'inc/header.php'; ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Acer</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <?php
	 		$accers = $pd->getBrandProduct(1);   
	    ?>
	      <div class="section group">
			 <?php
			 	if(isset($accers)) {
					 while($result = $accers->fetch_assoc()){
			 ?>
				<div class="grid_1_of_4 images_1_of_4">

					<a href="details.php?productId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2> <?php echo $result['productName']; ?> </h2>
					<p> <?php echo $fm->textShorten($result['body'], 80); ?> </p>
					<p><span class="price">$<?php echo $result['price']; ?></span></p>
					<div class="button"><span><a href="details.php?productId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>

				</div>
			<?php } } ?>
			</div>


		<div class="content_bottom">
    		<div class="heading">
    		<h3>Samsung</h3>
    		</div>
    		<div class="clear"></div>
		    
		    </div>
	    <?php
	 		$samsung = $pd->getBrandProduct(2);   
	    ?>
	      <div class="section group">
			 <?php
			 	if(isset($samsung)) {
					 while($result = $samsung->fetch_assoc()){
			 ?>
				<div class="grid_1_of_4 images_1_of_4">

					<a href="details.php?productId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2> <?php echo $result['productName']; ?> </h2>
					<p> <?php echo $fm->textShorten($result['body'], 80); ?> </p>
					<p><span class="price">$<?php echo $result['price']; ?></span></p>
					<div class="button"><span><a href="details.php?productId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>

				</div>
			<?php } } ?>
			</div>

			<div class="content_bottom">
    		<div class="heading">
    		<h3>Iphone</h3>
    		</div>
    		<div class="clear"></div>
		    
		    </div>
	    <?php
	 		$iphone = $pd->getBrandProduct(3);   
	    ?>
	      <div class="section group">
			 <?php
			 	if(isset($iphone)) {
					 while($result = $iphone->fetch_assoc()){
			 ?>
				<div class="grid_1_of_4 images_1_of_4">

					<a href="details.php?productId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2> <?php echo $result['productName']; ?> </h2>
					<p> <?php echo $fm->textShorten($result['body'], 80); ?> </p>
					<p><span class="price">$<?php echo $result['price']; ?></span></p>
					<div class="button"><span><a href="details.php?productId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>

				</div>
			<?php } } ?>
			</div>


	<div class="content_bottom">
    		<div class="heading">
    		<h3>Canon</h3>
    		</div>
    		<div class="clear"></div>
    		</div>
	    <?php
	 		$canon = $pd->getBrandProduct(4);   
	    ?>
	      <div class="section group">
			 <?php
			 	if(isset($canon)) {
					 while($result = $canon->fetch_assoc()){
			 ?>
				<div class="grid_1_of_4 images_1_of_4">

					<a href="details.php?productId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2> <?php echo $result['productName']; ?> </h2>
					<p> <?php echo $fm->textShorten($result['body'], 80); ?> </p>
					<p><span class="price">$<?php echo $result['price']; ?></span></p>
					<div class="button"><span><a href="details.php?productId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>

				</div>
			<?php } } ?>
			</div>
    </div>
 </div>

 
<?php include 'inc/footer.php'; ?>