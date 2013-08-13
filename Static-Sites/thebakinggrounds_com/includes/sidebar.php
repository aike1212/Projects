	<div id="sidebar">
					
		<ul id="sidebar-nav">
			<li><a href="cake.php?cat=wedding&#content" <?php isActiveSidebarLink("wedding");?>><span>Wedding Cake </span></a></li>
			<li><a href="cake.php?cat=groom&#content" <?php isActiveSidebarLink("groom");?>><span>Groom Cake </span></a></li>
			<li><a href="cake.php?cat=anniversary&#content" <?php isActiveSidebarLink("anniversary");?>><span>Anniversary Cake </span></a></li>
			<li><a href="cake.php?cat=lunch&#content" <?php isActiveSidebarLink("lunch");?>><span>Lunch </span></a></li>
			<li><a href="cake.php?cat=testimonials&#content" <?php isActiveSidebarLink("testimonials");?>><span>Testimonials </span></a></li>
			<li><a href="cake.php?cat=faq&#content" <?php isActiveSidebarLink("faq");?>><span>FAQ </span></a></li>
			<li><a href="cake.php?cat=cupcakes&#content" <?php isActiveSidebarLink("gourmet");?>><span>Gourmet Cupcakes </span></a></li>
			<li><a href="cake.php?cat=cookies&#content" <?php isActiveSidebarLink("cookies");?>><span>Cookies</span></a></li>
			<li><a href="cake.php?cat=birthday&#content" <?php isActiveSidebarLink("birthday");?>><span>Birthday Cakes </span></a></li>
		</ul>
		
		<?php 
			include('subscriptionSourceCode.php');
			if($errorBit != 0) { 
		?>
		
		<form method="post" action="<?php echo PHPSELF; ?>" id="Subscription">
			<fieldset>
				<label for="name-field">Subscribe to our newsletter</label>
				<input id="name-field" name="name-field" type="text" value="<?php  echo (isset($_POST["name-field"]))? $_POST["name-field"] : ""; ?>" />
				<input id="btn-subscribe" class="right" type="submit" value="Subscribe Now" />
			</fieldset>
		</form>
		
		<script type="text/javascript">
            var frmvalidator = new Validator("Subscription");
            frmvalidator.addValidation("name-field","req","Please enter your name");
        </script>
		
		<?php } ?>
		
	</div>

</div>