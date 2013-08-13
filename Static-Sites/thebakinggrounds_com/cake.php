<?php 
	include('includes/meta.php'); 
?>

<div id="content">
	
	<div <?php if($_GET['cat'] == 'wedding') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Wedding Cake</h1>
		
		<p>
			These are just a few examples of our Wedding Cakes. We have been serving the Atlanta Metro area since 2000.
			Our Wedding Cake is always made fresh for your Wedding. We make our Wedding Cake from A scratch recipe that
			has been developed over the last 50 years. We have not only beautiful wedding cakes, but we believe, and our
			customers agree, they are delicious wedding cakes too! Call now for a free no obligation consultation. Enjoy
			a beverage of choice, look at our photo album of wedding cake pictures, and take some cake home with you to
			share with your family and friends. Don't forget to visit our grooms cake page as well. We are booking fast,
			so make your appointment today!
		</p>
		
		<?php $_GET['cat'] == 'wedding' ? include('database/database.php') : ''; ?>
	</div>
	
	<div <?php if($_GET['cat'] == 'groom') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Grooms Cake</h1>
		
		<p>
			We will be adding more Grooms Cake pictures soon. Let the groom express himself with a custom made grooms cake.
			What are his hobbies and interests? Many times the groom is not real involved with the details of the wedding.
			Here is a chance to let him add a personal touch to the event of your lives together. We have made many 3D 
			cakes that express a theme the groom desires. Whether it be job related, sports related, or just his hobby, we
			can customize grooms cake to his liking. Or, surprise him with a specialty cake from you to him. A more recent
			tradition has been to have the Grooms Cake delivered to the rehearsal dinner as well. Whatever your needs, we 
			can help!
		</p>
		
		<?php $_GET['cat'] == 'groom' ? include('database/database.php') : ''; ?>
	</div>
		
	<div <?php if($_GET['cat'] == 'anniversary') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Anniversary Cake</h1>
		
		<p>
			Many more anniversary cake pictures are coming soon! Surprise the loved ones in your life with a custom made 
			anniversary cake. Many folks never had a special Wedding Cake or Grooms cake when they were married. Here is a
			chance to make a special anniversary that much more memorable. We can do just about any kind of cake. If you 
			have pictures of the original wedding cake, we can recreate it for an extra special celebration. Call us to 
			schedule a tasting, and discuss how we can create a beautiful Anniversary Cake just for you and your loved ones.
			After all, aren't they worth it?
		</p>
		<?php $_GET['cat'] == 'anniversary' ? include('database/database.php') : ''; ?>
	</div>
	
	<div <?php if($_GET['cat'] == 'lunch') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Lunch</h1>
		
		<p>
			We offer simple delicious lunches on your choice of bread, and always served with a fresh baked cookie, chips, 
			and a pickle spear! Your choice of American Cheese or White Swiss Cheese available at no additional charge. A
			few of our sandwiches include:
		</p>
		
		<ul id="lunch-list">
			<li>
				<strong class="block">Our Famous Chicken Salad Sandwich</strong>
				All white meat boneless, skinless chicken breast, seasoned just right and oven roasted right here. Then we
				add walnuts, red seedless grapes, celery, and just the right amount of mayo, for a fresh, tasty experience.
				Also available by weight, so you can take it one and make sandwiches for your family.
			</li>
			<li>
				<strong class="block">Honey Ham Sandwich</strong>
				Thin sliced Honey Ham with no fillers and just a touch of sweetness. Try it on a fresh baked croissant and
				you'll be calling it "Heavenly Ham"...
			</li>
			<li>
				<strong class="block">Oven Roasted Turkey Sandwich</strong>
				All freshly sliced breast of turkey with a touch of smokiness to tempt your taste buds. We suggest a toasted
				Whole Wheat bread with Spicy Mustard, lettuce and tomato....yummy!
			</li>
			<li>
				<strong class="block">Deli Style Chicken Sandwich</strong>
				Thinly sliced all white meat chicken breast, try it on a bagel for an extra special treat!<br />
				(Bagels not always available)
			</li>
		</ul>
		
		<p>
			We also serve daily specials like Corned Beef, Roast Beef, BBQ Chicken Sandwiches, as well as old fashioned 
			Chicago style Hot Dogs on the weekend (Fri &amp; Sat) limited to availability....
		</p>
		
		<p>
			And be sure to try our signature soups, which vary daily. Soup choices include, but are not limited to Chicken
			Pot Pie, Broccoli Cheddar, Gourmet Tomato, Cheese Burger, and our exclusive (and favorite) Taco Soup! We change
			soups daily, as well as with the seasons...
		</p>
		
		<p>
			All our lunch items are available to go, or dine in. We also do larger catering box lunches. Call for pricing
			or to place your order!
		</p>
		
	</div>

	<div <?php if($_GET['cat'] == 'testimonials') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Testimonials</h1>
		
		<p class="testimonial clearfix">
			" Thank you for the beautiful work of art. We were extremely pleased with your beautiful cake....the cake was not
			only gorgeous, but delicious too! "
			<em class="block">-Don &amp; Sharon K Dec 2003</em>
		</p>
		
		<p class="testimonial clearfix">
			" We wanted to express our gratitude for the beautiful wedding cake that you had created. On top of the cake being
			absolutely delicious, it was so elegant and simple as well, just what I wanted. Thank you for making our wedding 
			day so memorable. "
			<em class="block">-Mauricio &amp; Jenny M</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Malinda, I just wanted to tell you again how wonderful the wedding and grooms cake were. The cookies were
			also delicious! Thank you for doing such a great job and being so easy to work with. I'm giving your card to all
			my friends! "
			<em class="block">-Carol C.</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Malinda, I just wanted to say thank you for the beautiful job you did on our wedding and grooms cake. The
			wedding cake was so pretty and the bulldog grooms cake was great! They also tasted delicious too! Thanks for doing
			such a great job on our cookie favors as well, everyone was talking about how cute they were! "
			<em class="block">-Melissa C.</em>
		</p>
		
		<p class="testimonial clearfix">
			" Malinda, I just wanted to drop you a note to say "Bravo" on a job exquisitely done on our wedding cakes. We 
			received so many compliments on the taste, design, texture, colors, beauty, you name it, we heard it. Working with
			you was honestly a pleasure! "
			<em class="block">-Tanika L Aug. 06</em>
		</p>
		
		<p class="testimonial clearfix">
			" Malinda, Thank you for making us a very yummy and beautiful wedding cake. We received so many compliments on the
			taste of the cake, and the design. We also LOVED the carrot cake grooms cake with the cream cheese icing, and it 
			went very quickly! "
			<em class="block">-Danielle &amp; Brent L, Oct. 2006</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Malinda, We wanted to thank you for doing such a wonderful job on our wedding cake. Not only was it beautiful,
			but it was absolutely delicious! It came out better than I imagined and thank you for all your hard work! "
			<em class="block">-Lauren and Josh B.</em>
		</p>
		
		<p class="testimonial clearfix">
			" Hi There, Its hard to believe its been 6 months since our wedding! I thought you might like these pictures of our 
			cakes. We loved them! You did a fabulous job! Thank you "
			<em class="block">-Matt &amp; Amanda H. June 2nd, 2007</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Mr. &amp; Mrs. McCaslin- Tom &amp; I wanted to thank you for our beautiful wedding &amp; grooms cake for our wedding on 
			Nov. 25th, 2005. We heard so many compliments about how delicious they were. Thank you so much &amp; Bless you. "
			<em class="block">-Tom &amp; Dana R</em>
		</p>
		
		<p class="testimonial clearfix">
			" Lorne &amp; Malinda, We just wanted to thank you so much for the wonderful job you did on our daughters wedding cake. 
			It was just gorgeous and it tasted wonderful. It was exactly what Katie wanted. It was just beautiful. Thank you
			again for a job well done. "
			<em class="block">-Katie J &amp; Family</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Malinda, I just wanted to send you this note to thank you for the beautiful and delicious cake you baked for
			my wedding. It was absolutely wonderful. I received so many compliments on how pretty it was and how good it tasted.
			David &amp; I enjoyed the left overs for a week after we got back from our honeymoon. You did a great job to with the 
			Rugby ball shaped cake. He was really impressed...It was perfect. "
			<em class="block">-Kristen &amp; David S.</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Everyone who had a part in making, decorating, and delivering Amy &amp; Jesse's wedding cake. Thank you so much 
			for everything you did to make this part of their wedding so special! They were thrilled with the cake and it looked
			so beautiful! We will definitely send our friends to you for their special events! "
			<em class="block">-Janice &amp; Ed E.</em>
		</p>
		
		<p class="testimonial clearfix">
			" Dear Malinda, I want to thank you so much for the great job you did on Jaclyn &amp; Michal's wedding cake &amp; favors!
			Everything was perfect! "
			<em class="block">-Faith Schieclanstern, 4/25/09</em>
		</p>
		
		<p class="testimonial clearfix">
			" Our wedding cake exceeded our expectations! We were so pleased with the appearance. Thank you for taking the time
			to match the flowers from our arrangements and placing them on the cake. Plus, the cake was delicious! Everyone was 
			pleased and complimentary. I would definitely recommend your services to any bride! "
			<em class="block">-Carrie and Tim Davis, 6-06-09</em>
		</p>
	</div>
	
	<div <?php if($_GET['cat'] == 'faq') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>FAQ</h1>
		
		<ul id="faq-list">
			<li class="accordionButton"> <strong>How soon should I order the cake?</strong></li>
			<li class="accordionContent">
				Most wedding cakes are ordered 6-12 months in advance. For us, we only take a specific number of orders for each
				date, and for that reason, we advise you to order asap (if you decide to use us for your special day!) so we can
				hold your date.
			</li>
			<li class="accordionButton"> <strong>What are your terms?</strong></li>
			<li class="accordionContent">
				50% down payment is due to hold the date and our services. Balance and final details are due 30 days before your
				event.
			</li>
			<li class="accordionButton"> <strong>Do you have a portfolio of previous wedding cakes you've made that we can look at?</strong></li>
			<li class="accordionContent">
				Yes, when you come in for your tasting..
			</li>
			<li class="accordionButton"> 
				<strong>
					Will you be having a tasting soon that we can attend and try various kinds of wedding cake and cake fillings?
				</strong>
			</li>
			<li class="accordionContent">
				We do custom cake tastings for you. We generally have two flavors of cake, and three fillings. If you have a 
				particular flavor you want to try, let us know and we'll do our best to have it for your consultation.
			</li>
			<li class="accordionButton"> <strong>Can you supply references?</strong></li>
			<li class="accordionContent">
				Yes, and you can also look at our "testimonials" page on our website
			</li>
			<li class="accordionButton"> <strong>Will you do a custom wedding cake, or are there a set number of designs for us to choose from?</strong></li>
			<li class="accordionContent">
				We do any and all styles. We encourage you to bring your ideas to the tasting.
			</li>
			<li class="accordionButton"> <strong>How adaptable are wedding cake designs, especially due to budget concerns?</strong></li>
			<li class="accordionContent">
				Very. We currently have several specials listed on the home page of our website.
			</li>
			<li class="accordionButton"> <strong>Do you have or can you rent items like cake stands, columns, and fountains?</strong></li>
			<li class="accordionContent">
				Will we be billed extra? We have several, and the rental starts at 35.00
			</li>
			<li class="accordionButton"> 
				<strong>
					If I want to use fresh flowers on my cake, will you coordinate with my florist, or will I have to manage getting
					the flowers to you?
				</strong>
			</li>
			<li class="accordionContent">
				If they are real flowers, we will be glad to coordinate with your florist. If artificial, you can bring them to us
				for placement if you wish.
			</li>
			<li class="accordionButton"> <strong>What ingredients do you typically use?</strong></li>
			<li class="accordionContent">
				What kind of icing do you use? We use only the best. Fresh butter, flavor emulsions, and fillings. Our butter creme
				is by far the most popular, however we do fondant, cream cheese icing, and several others.
			</li>
			<li class="accordionButton"> <strong>Are your wedding cakes priced by the slice?</strong></li>
			<li class="accordionContent">
				We price our cakes differently than most cake bakers. We price it by size, and give you the range of servings we
				feel it will serve. Be careful to compare this with other bakery pricing. For instance, one of our competitor's 
				claims a three tier cake serves 100. The same size cake from us we believe only serves 80 at most. If you want a 
				razor thin slice for your guests, then add 30% to our serving guidelines. We also currently have specials that can
				save you as much as 20%!!! (restrictions apply)
			</li>
			<li class="accordionButton"> <strong>Is there an extra cost for special fillings or details?</strong></li>
			<li class="accordionContent">
				This is another great area for you to compare our pricing with others. We offer FREE fillings for all of our cakes,
				as well as almost all designs. Most others charge several different "upgrade" prices by the slice/ serving.
			</li>
			<li class="accordionButton"> <strong>Is there a price list I can see?</strong></li>
			<li class="accordionContent">
				Yes, just click on "Our Products" and scroll down for a basic listing of prices and servings.
			</li>
			<li class="accordionButton"> <strong>Can you give me a written proposal I can take home?</strong></li>
			<li class="accordionContent">
				Available upon request.
			</li>
			<li class="accordionButton"> <strong>Do you do deliver?</strong></li>
			<li class="accordionContent">
				Yes.
			</li>
			<li class="accordionButton"> <strong>How much does it cost?</strong></li>
			<li class="accordionContent">
				Delivery starts at 50.00 and is based on time and distance. Please add 50.00 min. for Sunday deliveries.
			</li>
			<li class="accordionButton"> 
				<strong>
					Will the delivery person be able to make emergency frosting or decoration repairs and arrange the cake table?
				</strong>
			</li>
			<li class="accordionContent">
				Absolutely, only professionals deliver our wedding cakes, usually the person who decorates it.
			</li>
			<li class="accordionButton"> <strong>How much experience do you have?</strong></li>
			<li class="accordionContent">
				We have been in the bakery & cake business for more than 30 years. We are second generation bakers decorators. 
				My father owned a bakery since 1957, as well as his brothers.
			</li>
		</ul>
	</div>
	
	<div <?php if($_GET['cat'] == 'cupcakes') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
	  <h1>Gourmet Cupcakes</h1>
		<p align="center"><strong>CLASSIC WHITE</strong>…Wedding  cake with fresh butter crème icing</p>
        <p align="center"><strong>STRAWBERRY</strong>…Strawberry  pound cake and strawberry butter crème icing</p>
        <p align="center"><strong>RED VELVET</strong>…Red Velvet  cake with scratch made cream cheese icing</p>
        <p align="center"><strong>KEY LIME</strong>…A fresh key  lime cake with a key lime butter crème icing</p>
        <p align="center"><strong>LEMON SUPREME</strong>…Moist  lemon cake with lemon mousse butter crème icing</p>
        <p align="center"><strong>ORANGE DREAMSICLE</strong>…  Orange pound cake &amp; orange mousse butter crème icing</p>
        <p align="center"><strong>&ldquo;THE ELVIS&rdquo;</strong>…Peanut  butter banana cake and peanut-butter butter crème icing</p>
        <p align="center"><strong>PINK  LEMONADE</strong>…Summertime in a cupcake! The name says it all!</p>
        <p align="center"><strong>CHOC PEANUT BUTTER  CUP</strong>… Choc cake with peanut butter icing</p>
        <p align="center"><strong>&ldquo;THE OLD  FASHIONED&rdquo;</strong>…Butter pound cake with choc. butter crème icing</p>
        <p align="center"><strong>CHOC. OVERLOAD</strong>…Choc  cake w/ choc butter crème dipped in fudge</p>
        <p align="center"><strong>RASPBERRY ALMOND  DELIGHT</strong>…Rasp. Alm. cake with rasp. mousse butter crème icing</p>
        <p align="center"><strong>COOKIES &amp;  CRÈME</strong>…Think Oreo cookie in a cupcake!</p>
        <p align="center"><strong>CARROT CRAVINGS</strong>…Moist  and fresh carrot cake with cream cheese icing</p>
        <p align="center"><strong>*1.99 Each or 21.89  !!!</strong><br />
          **All flavors not  available every day<br />
          ***please allow three  days notice for special orders</p>
		<!--<p>&nbsp;</p>-->
		
		<?php $_GET['cat'] == 'cupcakes' ? include('database/database.php') : ''; ?>
	</div>
	
	<div <?php if($_GET['cat'] == 'cookies') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Cookies and Cupcakes</h1>
		
		<?php $_GET['cat'] == 'cookies' ? include('database/database.php') : ''; ?>
	</div>
	
	<div <?php if($_GET['cat'] == 'birthday') { echo 'style="display:block;"'; } else { echo 'style="display:none;"'; } ?>>
		<h1>Birthday Cakes</h1>
		
		<?php $_GET['cat'] == 'birthday' ? include('database/database.php') : ''; ?>
	</div>
	
</div>

<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/btm.php'); ?>
<?php include('includes/footer.php'); ?>



