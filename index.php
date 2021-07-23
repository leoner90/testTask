<!-- INCLUDING HEADER -->
<?php include 'assets/header.php'; ?>
<body>
	<div class='mainPageWrapper'>
		<center>
			<?php
			// MSG APPEARS IF WE HAVE GET RESULT , WHEN TEST IS FINISHED USER WILL BE REDIRECTED TO MAIN PAGE WITH SCORE OF THE TEST
			if(!empty($_GET['message'])) {
				echo '<div class="successMsg"> Success <br> YOUR SCORE IS :' . $_GET['message']."</div>";
			}
			?>
			<div class="mainPageContent">
			<h1 class="mainHeader">PUT YOUR NAME AND START THE TEST</h1>
			<!-- FORM JUST REDIRECTS AS TO NEXT PAGE , AND PROVIDE NAME AND SURNAME  -->
			<form class="mainPageForm" action="pages/startTest.php" method="POST">
				<p>
					<label="Name" class="mainPageLable">Name:</label>
					<input class="mainPageInput" type="text" name="name" required>
				</p>
				<p>
					<label="Surname" class="mainPageLable">Surname:</label>
					<input class="mainPageInput" type="text" name="surname" required>
				</p>
				<p>
					<input class="mainPageInput btn btn-info" type="submit" name="submit" id="Sumbit" onclick="startTest()" value="START TEST">
				</p>
			</form>
			</div>
		</center>
	</div>
</body>
</html>