<html>
	<body style="background-color:rgb(193,237,244);color:darkblue">
	<form method=POST>
		<center>
			Enter roll no<input type=text required name=t1>
			<br><br>
			<input style="background-color:darkblue;color:white;width:150;height:30" type=submit value="SHOW RESULT" name=b1>
			<?php
				extract($_POST);
				if(isset($b1))
				{
					$con=mysqli_connect('localhost','root',"","collage");
					$q="select * from marks where roll_no='$t1'";
					$result=mysqli_query($con,$q);
					$row=$result->fetch_array();
					$n=$result->num_rows;
					if($n==0)
					{
						echo'<font style="position:absolute;left:39%;top:42%;font-size:50px">NOT FOUND</font>';
					}
					else
					{
						?>
						<hr color=darkblue>
					<center>
						<div style="display:flex;justify-content:space-between">
							<div>
								<img style="width:100px;height:100px"  src="tmu logo.jpg" alt="tmu logo">
							</div>
							<div style="margin-left:150px">
								<font style="font-size:25;color:darkblue">TEERTHANKER MAHAVEER UNIVERSITY<br>Delhi road,Moradabad</font>
							</div>	
							<div>
								<font style="font-size:25;color:black"></font>
							</div>
							<div >
								<img style="background-color:white;width:200px;height:200px"  src="<?php echo "$row[18]"?>" alt="Priyanshu">
							</div>
						</div>
					</center>
						<table cellspacing=20>
							<tr>
								<td style="color:darkblue;font-size:20px;width:160px">Name&nbsp;&nbsp;:--</td><td style="background-color:white;width:160px"><center><?php echo "$row[1]"?></center></td> 
								<td style="color:darkblue;font-size:20px;width:160px">Roll number &nbsp;&nbsp;:--</td><td bgcolor=white><center><?php echo " $row[0]"?></center></td>
							</tr>
							<tr>
								<td style="color:darkblue;font-size:20px">Father name&nbsp;&nbsp;:--</td><td style="background-color:white;width:160px"><center><?php echo "$row[2]"?></center></td>
								<td style="color:darkblue;font-size:20px">Course&nbsp;&nbsp;:--</td><td style="background-color:white;width:160px"><center><?php echo" $row[3]"?></center></td>
							</tr>
						</table>
						<table cellspacing=20>
						<thead>
							<tr>
								<th>Course code</th>
								<th>Subjects</th>
								<th>Maximum marks</th>
								<th>Marks Obtained</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:white;width:100px"><center>EAS113</center></td>
								<td style="background-color:white;width:160px"><center><?php echo $row[4]?></center></</td>
								<td style="background-color:white;width:100px"><center>100</center></td>
								<td style="background-color:white;width:100px"><center><?php echo $row[5] ?></center></td>
							</tr>
							<tr>
								<td style="background-color:white;width:100px"><center>EAS116</center></td>			
								<td style="background-color:white;width:160px"><center><?php echo $row[6]?></center></</td>
								<td style="background-color:white;width:100px"><center>100</center></td>
								<td style="background-color:white;width:100px"><center><?php echo $row[7]?></center></td>
							</tr>
							<tr>
								<td style="background-color:white;width:100px"><center>EEC111</center></td>
								<td style="background-color:white;width:160px"><center><?php echo $row[8]?></center></<td>
								<td style="background-color:white;width:100px"><center>100</center></td>
								<td style="background-color:white;width:100px"><center><?php echo $row[9]?></center></td>
							</tr>
							<tr>
								<td style="background-color:white;width:100px"><center>TMU101</center></td>
								<td style="background-color:white;width:160px"><center><?php echo $row[10]?></center></td>
								<td style="background-color:white;width:100px"><center>100</center></td>
								<td style="background-color:white;width:100px"><center><?php echo $row[11]?></center></td>
							</tr>
							<tr>
								<td style="background-color:white;width:100px"><center>TMUGE101</center></td>
								<td style="background-color:white;width:160px"><center><?php echo $row[12]?></</td>
								<td style="background-color:white;width:100px"><center>100</center></td>
								<td style="background-color:white;width:100px"><center><?php echo $row[13]?></center></td>
							</tr>
						</table>
						<hr color=darkblue>
						<center>
						<table cellspacing=20>
							<tr>
								<td style="font-size:25px;color:red">MAXIMUM MARKS</td>
								<td style="width:50px;heigt:30px;background-color:white"><center>500</center></td>
								<td style="font-size:25px;color:red">MARKS OBTAINED</td>
								<td style="width:50px;heigt:30px;background-color:white"><center><?php echo $row[14] ?></center></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td style="color:red;font-size:25px">PERCENTAGE</td>
								<td style="background-color:white;width:50px;height:30px"><center><?php echo $row[15]?></center></td>	
								<td style="color:red;font-size:25px">GRADE</td>
								<td style="background-color:white;width:50px;height:30px"><center><?php echo $row[16]?></center></td>
								<td style="color:red;font-size:25px">RESULT</td>
								<td style="background-color:white;width:50px;height:30px"><center><?php echo $row[17] ?></center></td>
							</tr>
						</table>
					<?php
					}
				}
					?>
			</center>
		</center>
		</form>
	</body>
</html>