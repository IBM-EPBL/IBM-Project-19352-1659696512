<html>
		
	<style>
	body{
		background-color:white;
		font-family:Times New Roman;
		font-size:25px;
		font-weight:bold;
	}
	</style>
	<body>
		<marquee>Welcome <?php echo $_POST["name"]; ?><br></marquee>
		
		<h1>USER DETAILS:</h1>
		
		<p>USER NAME:</p> <?php echo $_POST["name"]; ?><br>
		<p>EMAIL ID:</p> <?php echo $_POST["email"]; ?><br>
		<p>MOBILE NUMBER</p> <?php echo $_POST["mobile"]; ?><br>
	</body>
	
</html>
		