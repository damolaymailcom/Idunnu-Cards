<?php 
/* Site Title */
$sitetitle = "Shop | Idunnu Cards";
?>
<?php include("includes/_doc_head.php"); ?>

<!-- ///////////////////////////////////////////////////////////////////////////////////// BEGIN BODY CONTENTS ///////////////////////// -->

  
  <!-- BEGIN MAIN CONTENTS -->
  <div id="contents" class="shopmaincontents">
  	
      <!-- DIVIDER -->
      <div class="adire"></div>
      
      
      <!-- VIEWPORT -->
      <div class="viewport">
      	<img src="../images/adike.png">
        <h1>Select from our vast collections <br>of cards with messages that spread <span>happiness</span></h1>
      </div>
      
      <!-- DIVIDER -->
      <div class="adire-light"></div>
      
      
      
      <!-- SHOP SECTION -->
      <div id="shop-section">
      	<div class="row">
        	<h1>browse, select and personalize your card</h1>
        </div>
        
        
        <div><!-- row container -->
        	

            <section class="main">
				
				<div class="wrapper"><!-- begin wrapper -->

					<div class="topbar">
						<span id="close" class="back">&larr;</span>
						<h2>Beautiful African Art</h2><h3 id="name"></h3>
					</div>
					
					<ul id="tp-grid" class="tp-grid">

						

						<!-- Celebration Cards -->
						<li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>On to Easter</span></span>
								<img src="cards/celebrations/t1.png" />
							</a>
						</li>
						<li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Love Birds</span></span>
								<img src="cards/celebrations/t2.png" />
							</a>
						</li>
						<li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t3.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t4.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t5.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="http://drbl.in/esQV">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t6.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t7.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="http://drbl.in/esQV">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t8.png" />
							</a>
						</li>
                        <li data-pile="Celebration">
							<a href="#">
								<span class="tp-info"><span>Here Fishy fishy</span></span>
								<img src="cards/celebrations/t9.png" />
							</a>
						</li>

						<!-- Love & Romance -->
						<li data-pile="Love">
							<a href="#">
								<span class="tp-info"><span>Blowing Kisses</span></span>
								<img src="cards/love/t1.png" />
							</a>
						</li>
                        
                        <li data-pile="Love">
							<a href="#">
								<span class="tp-info"><span>Loving You</span></span>
								<img src="cards/love/t2.png" />
							</a>
						</li>
                        
                        <li data-pile="Love">
							<a href="#">
								<span class="tp-info"><span>Eku Ife</span></span>
								<img src="cards/love/t3.png" />
							</a>
						</li>
                        
                        <li data-pile="Love">
							<a href="#">
								<span class="tp-info"><span>I Love You</span></span>
								<img src="cards/love/t4.png" />
							</a>
						</li>
                        
                        <li data-pile="Love">
							<a href="#">
								<span class="tp-info"><span>My heart</span></span>
								<img src="cards/love/t5.png" />
							</a>
						</li>
						
						

						<!-- Andrea Austoni -->
						<li data-pile="Andrea Austoni">
							<a href="http://drbl.in/cyWa">
								<span class="tp-info"><span>Growth in 2012 (Holiday Card)</span></span>
								<img src="images/4/1.jpg" />
							</a>
						</li>
						<li data-pile="Andrea Austoni">
							<a href="http://drbl.in/cRkb">
								<span class="tp-info"><span>Grady Wilson</span></span>
								<img src="images/4/2.jpg" />
							</a>
						</li>
						<li data-pile="Andrea Austoni">
							<a href="http://drbl.in/cSKM">
								<span class="tp-info"><span>More Cowbell</span></span>
								<img src="images/4/3.jpg" />
							</a>
						</li>
					</ul>
				</div><!-- end wrapper -->
			</section>
            

        </div><!-- end row container
      </div><!-- end shop section -->
  
  	    
    
  </div>
  <!-- END MAIN CONTENTS -->


     <script type="text/javascript" src="scripts/jquery.stapel.js"></script>
		<script type="text/javascript">	
			$(function() {

				var $grid = $( '#tp-grid' ),
					$name = $( '#name' ),
					$close = $( '#close' ),
					$loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
					stapel = $grid.stapel( {
						randomAngle : true,
						delay : 50,
						gutter : 70,
						pileAngles : 5,
						onLoad : function() {
							$loader.remove();
						},
						onBeforeOpen : function( pileName ) {
							$name.html( pileName );
						},
						onAfterOpen : function( pileName ) {
							$close.show();
						}
					} );

				$close.on( 'click', function() {
					$close.hide();
					$name.empty();
					stapel.closePile();
				} );

			} );
		</script>    
    
<?php include("includes/_doc_foot.php");  ?>