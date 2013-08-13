<?php # gallery.php
$page_title = 'Photo Gallery';
include ('includes/header2.php');
?>

<div id = "content">
	
	
	<div id = "services-list">
	<h5>Interior Services</h5>
				<ul>
					<li><a href="kitchens.php">Kitchen Remodeling</a></li>
					<li><a href="bathrooms.php">Bathroom Remodeling</a></li>
					<li><a href="basements.php">Basement Finishing</a></li>
					<li><a href="hardwood.php">Hardwood Flooring</a></li>
				</ul>
				
				<div class = "cl20"></div>
	<h5>Exterior Services</h5>
				<ul>
					<li><a href="decks.php">Decks</a></li>
					<li><a href="gazebos.php">Gazebos</a></li>
					<li><a href="porches.php">Front Porches</a></li>
					<li><a href="pergolas.php">Pergolas</a></li>
					<li><a href="pools.php">Pool and Hot Tub Decks</a></li>
					<li><a href="stairs.php">Staircases</a></li>
				</ul>
	</div> <!-- services-list -->

<div id = "galleria">
    <a href = "images/kitchens/109.jpg"><img src="images/kitchens/109.jpg" alt = ""></a>
    <a href = "images/pergolas/802.jpg"><img src="images/pergolas/802.jpg" alt = ""></a>
    <a href = "images/porches/701.jpg"><img src="images/porches/701.jpg" alt = ""></a>
    <a href = "images/pools/902.jpg"><img src="images/pools/902.jpg" alt = ""></a>
    <a href = "images/decks/505.jpg"><img src="images/decks/505.jpg" alt = ""></a>
    <a href = "images/gazebos/602.jpg"><img src="images/gazebos/602.jpg" alt = ""></a>
   
    </div> <!-- gallery -->
    
   <script type = "text/javascript">
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    Galleria.run ('#galleria');
</script>
	

<div class = "cl"></div>

</div> <!-- content -->
	
<?php
include ('includes/footer.html');
?>

</body>

</html>
div id = "content">
	
