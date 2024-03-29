<html>
	<head>
	</head>
	<body style="background-color:rgb(193,237,244);color:darkblue">
	<form method=post>
	<?php
		/*extract($_POST);*/
		$con=mysqli_connect('localhost','root',"","collage");
		$q="select * from marks";
		$result=mysqli_query($con,$q);
		$n=$result->num_rows;
		if($n==0)
			echo'<font style="position:absolute;top:42%;left:39%;font-size:50px">EMPTY LIST</font>';
		else
		{

			?>
			<center>
			<h2 style="color:red;text-shadow: 1.5px 1.5px black"><u>STUDENT LIST </u></h2>
			<table cellspacing=0 border=1 cellpadding=10 width=98%>
				<thead>
				<tr>
					<th>Roll no.</th>
					<th>Name</th>
					<th>Course</th>
					<th>Sub 1</th>
					<th>Marks</th>
					<th>Sub 2</th>
					<th>Marks</th>
					<th>Sub 3</th>
					<th>Marks</th>
					<th>Sub 4</th>
					<th>Marks</th>
					<th>Sub 5</th>
					<th>Marks</th>
					<th>Total Marks</th>
					<th>Percentage</th>
					<th>Grade</th>
				</tr>
				</thead>
				<tbody>
				<?php
					$num=15;
					for($i=1;$i<=$n;$i++)
					{
						$row=$result->fetch_array();
						echo"<tr>";
						for($j=0;$j<=$num;$j++)
						{
							echo"<td> $row[$j]</td>";
						}
						echo"</tr>";
					}
					?>
				</tbody>
			</table>
		<?php
		}
		?>
	<center>
	</form>
	</body>
</html>
	
