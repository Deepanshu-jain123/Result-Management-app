<html>
<body bgcolor=lightblue>
<form method=POST>
		<center>
			<div style="width:40%; height:75%">
			<br>
			<font style="color:red;font-size:40"><u>ADMINISTRATOR</u></font><br><br>
			<img src="tmu logo.jpg" alt="doremon" width=40% height=40%><br><p><br>
			<input type=text name=t1 required size=30 placeholder="<NAME>"><br><p>
			<input type=text name=t2 required size=30 placeholder="<PASSWORD>"><br><p><br>
			<input type=submit  name=b1 value=LOGIN style="background-color:darkblue;color:white;width:150px;height:30px">
			</div>
		</center>
		<?php
			extract($_POST);
			if(isset($b1))
			{
				$con=mysqli_connect('localhost','root',"","collage");
				$q="select * from admin where name='$t1' and password='$t2'";
				$result=mysqli_query($con,$q);
				$n=$result->num_rows;
				if($n==0)
					echo"<h2 align=center>Invalid UserName/Password</h2>";
				else{
					header("location:admin_panel.php");
				}
			}
		?>
</body>
</html>
