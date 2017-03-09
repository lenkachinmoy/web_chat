<div id="insert">
<?php
			include "connect.db.php";
			$sql="select * from chat_table order by Msg_ID DESC";
			$result=mysql_query($sql);
			if(!$result)
				die(mysql_error());
			while($row=mysql_fetch_assoc($result))
			{
				echo "<strong>".$row['user']." Sent</strong><br>";
				echo $row["message"]."<br><br>";
			}	
?>
</div>
