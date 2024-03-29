<html>
	<body style="background-color:rgb(193,237,244);color:darkblue">
	<form method=POST>
		<center>
		<h2><font style="color:red;text-shadow: 1.5px 1.5px black"><u>DELETE MARKS ENTRY</u></font></h2>
		<br>
		Enter Roll no<input type=text required name=t1>
		<br><br><br>
		<input style="background-color:darkblue;color:white;width:150;height:30" type=submit value=VARIFY name=b1>
		<?php
			extract($_POST);
			if(isset($b1))
			{
				$con=mysqli_connect('localhost','root',"","collage");
				$q="select * from marks where roll_no='$t1'";
				$result=mysqli_query($con,$q);
				$n=$result->num_rows;
				if($n==0)
				{
					echo"<br><br><h2>NOT FOUND</h2>";
				}
				else
				{
					$row=$result->fetch_array();
					?>
					<br><br>
					<table cellspacing=20>
						<tr>
							<td>Roll no</td>
							<td style="background-color:white"><center><?php echo $row[0]; ?></center></td>
							<td>Name</td>
							<td style="background-color:white"><center><?php echo $row[1]; ?></center></td>
						<tr>
							<td><center>Subject 1</center></td>
							<td style="background-color:white"><center><?php echo $row[4]; ?></center></</td>
							<td><center>Marks</center></td>
							<td style="background-color:white"><center><?php echo $row[5]; ?></center></td>
						</tr>
						<tr>
							<td><center>Subject 2</center></td>
							<td style="background-color:white;width:160px"><center><?php echo $row[6]; ?></center></</td>
							<td><center>Marks</center></td>
							<td style="background-color:white;width:160px"><center><?php echo $row[7]; ?></center></td>
						</tr>
						<tr>
							<td><center>Subject 3</center></td>
							<td style="background-color:white"><center><?php echo $row[8]; ?></center></<td>
							<td><center>Marks</center></td>
							<td style="background-color:white"><center><?php echo $row[9]; ?></center></td>
						</tr>
						<tr>
							<td><center>Subject 4 </center></td>
							<td style="background-color:white"><center><?php echo $row[10]; ?></center></td>
							<td><center>Marks</center> </td>
							<td style="background-color:white"><center><?php echo $row[11]; ?></center></td>
						</tr>
						<tr>
							<td><center>Subject 5</center></td>
							<td style="background-color:white"><center><?php echo $row[12]; ?></center></</td>
							<td><center>Marks</center></td>
							<td style="background-color:white"><center><?php echo $row[13]; ?></center></td>
						</tr>
					</table>
					<hr color=darkblue><br>
					<input style="background-color:darkblue;color:white;width:150;height:30" type=submit value=DELETE name=b2>
	<?php
				}
			}
			extract($_POST);
			if(isset($b2))
			{
				$con=mysqli_connect('localhost','root',"","collage");
				$q1="delete from marks where roll_no=$t1";
				if(mysqli_query($con,$q1))
				{
					echo"<h2> DELETE SUCCESSFULL</h2>";
				}
				else
				{
					echo"<h3>Connection error</h3>";
				}
			/*	mysqli_close($con);*/
			}
?>
		</form>
	</body>
</html>