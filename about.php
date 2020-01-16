

<?php session_start(); 
include "includes/header.php";
include "includes/bootstrap.php";
include "includes/navigation.php";

?>
<div class="list-group">

<?php  
include "database/db.php";
$selectArticles = "SELECT * FROM articles ORDER BY prio DESC";
if(!$q = $mysqli->query($selectArticles)) {
	echo "sql error!";
}
else {
	while($red = $q->fetch_object()) {
		$href = "reviewArticles.php?articleId=" . $red->articleId;
		?>
		<hr>
		
			<a class="list-group-item list-group-item-action flex-column align-items-start active" href = <?php echo $href; ?>> <div class="d-flex w-100 justify-content-between" > <h5 class="mb-1"><?php echo  $red->name  ?>  
				, by <?php echo  "<i> ". $red->author ." </i>" ?>  </h5> </div>
			<p class="mb-1">
				<?php echo $red->article ?>
			</p>
		

		<?php


	}

}
?>

</div>
</body>
</html>