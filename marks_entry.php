<html>
<head>
<!--	<style>
	</style>  -->
</head>
<body style="background-color:rgb(193,237,244);COLOR:darkblue">
<form method=POST>
	<center>
		<h2><font style="color:red;text-shadow: 1.5px 1.5px black"><u>MARKS ENTRY</u></font></h2>
		<table cellspacing=20>
			<tr>
				<td>Name</td><td><input style="border:none" type=text name=t1></td> 
				<td>Roll number</td><td><input style="border:none" type=text name=t2></td>
			</tr>
			<tr>
				<td>Father name</td><td><input style="border:none" type=text name=t3></td>
				<td>Course</td><td><input style="border:none" type=text name=t4></td>
			</tr>
		</table>
		<table cellspacing=20>
		<tr>
			<td><center>Subject 1</center></td>
			<td><select style="border:none;color:darkblue;width:150" Name="subject1"><option>English</option></select></td>
			<td><center>Marks</center></td>
			<td><center><input style="border:none;hover:background-color:blue" type=text required name="marks1"></center></td>
		</tr>
		<tr>
			<td><center>Subject 2</center></td>
			<td><select style="border:none;color:darkblue;width:150" name=subject2><option>Maths</option></select></td>
			<td><center>Marks</center></td>
			<td><center><input style="border:none"  type=text required name="marks2"></center></td>
		</tr>
		<tr>
			<td><center>Subject 3</center></td>
			<td><select style="border:none;color:darkblue;width:150" Name=subject3><option>Hindi</option></select></td>
			<td><center>Marks</center></td>
			<td><center><input style="border:none"  type=text required name="marks3"></center></td>
		</tr>
		<tr>
			<td><center>Subject 4 </center></td>
			<td><select style="border:none;color:darkblue;width:150" name=subject4><option>Computer</option></select></td>
			<td><center>Marks</center> </td>
			<td><center><input style="border:none" type=text required name="marks4"></center></td>
		</tr>
		<tr>
			<td><center>Subject 5</center></td>
			<td><select style="border:none;color:darkblue;width:150" Name=subject5><option>General knowledge</option></select></td>
			<td><center>Marks</center></td>
			<td><center><input style="border:blue" type=text required name="marks5"></center></td>
		</tr>
		</table>
		<hr color=darkblue><br>
		<input style="background-color:darkblue;color:white;width:150;height:30" type=submit value=SAVE name=b1>  
		<input style="background-color:darkblue;color:white;width:150;height:30" type=submit value=RESET>
	</center>
	<?php
		extract($_POST);
		if(isset($b1))
		{
			$tm=$marks1+$marks2+$marks2+$marks3+$marks4+$marks5;
			$p=$tm*100/500;
			if($p>=90)
			{
				$g="A";
			}
			elseif($p>=80 && $p<=89.99)
			{
				$g="B";
			}
			else{
				$g="C";
			}
			if($p>=45)
			{
				$r="PASS";
			}
			else
			{
				$r="FAIL";
			}
			$ph="photo";
			$con=mysqli_connect('localhost','root',"","collage");
			$p=$tm*100/500;
			$q="insert into marks values($t2,'$t1','$t3','$t4','$subject1',$marks1,'$subject2',$marks2,'$subject3',$marks3,
			'$subject4',$marks4,'$subject5',$marks5,$tm,$p,'$g','$r','$ph')";
			if(mysqli_query($con,$q))
			{
				echo"<h2>Successfully saved</h2>";
			}
			else
			
				echo"<h2>connection error</h2>";
			
		}
	?>
</form>
</body>
</html>