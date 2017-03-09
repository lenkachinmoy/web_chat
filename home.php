<?php
	include "connect.db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEB_CHAT</title>
	<link type="text/css" rel="stylesheet" href="main.css"/>
</head>
<body>
	<div id="contain">	
		<div id="insert1">
		<?php
			if(isset($_POST["submit"]))
			{
				$name=$_POST["name"];
				$msg=$_POST["message"];
				if(empty($name)||empty($msg))
				{
					echo "<script>
					alert('Both fields required to be filled');
					window.location.href='home.php';
					</script>";
					die(mysql_error());
				}
				$sql="insert into chat_table(user,message) values('$name','$msg')";
				if(mysql_query($sql))
				{
				}
				else
				{
					die(mysql_error());
				}
				
			}
		?>
		</div>
		<div id="input">
			<form action="home.php" method="post">
				<input type="text" name="name" placeholder="user name" id="name"><br><br>
				<textarea rows="5" cols="18" name="message" placeholder="Enter message" id="message"></textarea><br>
				<input type="submit" name="submit" value="send">
			</form>
		</div>
		<div id="select">

		</div>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="auto_chat.js"></script>
	</div>
</body>
</html>
