<?php
		include 'model/databaseconnection.php'; 
		session_start();

	function getAllItems() {

		include 'model/databaseconnection.php'; 

	$sql = "SELECT manufacturer_id, manufacturer_name, manufacturer_desc, manufacturer_logo, manufacturer_page_location FROM manufacturers";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

		<div class="col-auto mb-3">
			<div class="card" style="width: 18rem;">             
			<div class="card-body">
				<img alt="<?php echo $manufacturer_name; ?> + logo" class="img-fluid" src="<?php echo $record['manufacturer_logo']; ?>">
				<br><h5 class="card-title"><?php echo $record['manufacturer_name']; ?></h5>
				<p class="card-text"><?php echo $record['manufacturer_desc']; ?></p>	 
				<a class="card-link" href="<?php echo $record['manufacturer_page_location']; ?>"><?php echo 'View in detail';?></a>
				</div>
			</div>
		</div> 
		<?php } 
	}

	function getComments(){
		include 'model/databaseconnection.php'; 

	$sql = "SELECT user_commented_ID, comment_body FROM comments";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

		<div class="col-auto mb-3">
			<div class="card" style="width: 18rem;">             
			<div class="card-body">
				<br><h5 class="card-title"><?php echo $record['user_commented_ID']; ?></h5>
			</div>
				<p class="card-text"><?php echo $record['comment_body']; ?></p>	
			</div>
		</div> 
		<?php } 
	}

	function getManufacturerById($id)
	{
		global $conn;
		$stmt = mysqli_stmt_init($conn);
		$sql = "SELECT * FROM manufacturers WHERE manufacturer_id= ? LIMIT 1" ;
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, 's', $id);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row=mysqli_fetch_array($result) ;  //there is only 1 row
		return json_encode($row);
	}

	function getAudArticle() {

		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 1 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getBMWArticle() {

		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 2 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getCitArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 3 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getDacArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 4 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getForArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 5 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getHonArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 6 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getKiaArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 7 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getLanArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 8 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getMerArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 9 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getNisArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 10 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getRenArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 11 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

	function getVolArticle() {


		include '../../../model/databaseconnection.php';

		$sql = "SELECT article_ID, article_Title, original_article_date, original_Site_Name, article_body, manufacturer_ID, author_Name FROM articles, authors  WHERE manufacturer_ID = 12 AND articles.article_author_ID = authors.author_ID";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
		?>

			<div class="col-auto mb-3">
				<div class="card">
				<div class="card-body">
					<h2 class="card-title"><?php echo $record['article_Title']; ?></h5>

					<h5 class="card-title"><?php echo 'By: '; echo $record['author_Name']; ?></h5>
				</div>
					<p class="card-text"><?php echo $record['article_body']; ?></p>	
				</div>
			</div> 
		<?php } 
	}

?>
	
	