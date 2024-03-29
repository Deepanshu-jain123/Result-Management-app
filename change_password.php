<html>
	<body bgcolor=lightblue text=darkblue>
	<form method=post>
	<center>
		<h2 style="color:red;text-shadow: 1.5px 1.5px black"><u>CHANGE PASSWORD</u></h2>
		<table cellspacing=20>
			<tr>
				<td>Enter name</td><td><input type=text size=20 name=t1></td>
			</tr>
			<tr>
				<td>Password</td><td><input type=password size=20 name=t2></td>
			</tr>
		</table>
		<br>
		<input type=submit value=VERIFY name=b1 style="background-color:darkblue;color:white;width:150;height:30"><br><br>
		<hr color=darkblue size=1>
<?php
			extract($_POST);
			if(isset($b1))
			{
				$con=mysqli_connect('localhost','root',"","collage");
				$q="select * from admin where Name='$t1' and Password='$t2'";
				$result=mysqli_query($con,$q);
				$n=$result->num_rows;
				if($n==0)
				{
					echo"error";
				}
				else
				{
					$row=$result->fetch_array();
					if($row[0]==$t1 && $row[1])
					{
?>
						<table cellspacing=20>
							<tr>
								<td>New password</td><td><input type=password name=t3></td>
							</tr>
							<tr>
								<td>Confirm password</td><td><input type=password name=t4></td>
							</tr>
						</table>
						<br>
						<input type=submit name=b2 value=UPDATE style="background-color:darkblue;color:white;width:150;height:30">
<?php
					}
				}
			}
			extract($_POST);
			if(isset($b2))
			{
				if(strcmp($t3,$t4)!==0)
				{
					echo "Not match";
				}
				else
				{
					$con=mysqli_connect('localhost','root',"","collage");
					$q="update admin set Password='$t3'";
					if(mysqli_query($con,$q))
					{
						echo"Successfully saved";
					}
					else
					{
						echo"Connection error";
					}
				}
			}
?>
	</center>
	</form>
</body>
 </html> 