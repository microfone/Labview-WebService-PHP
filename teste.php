<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<?php
			$num1=$_POST["a"];
			$num2=$_POST["b"];
			if(isset($_POST["add"])){
				$url = "http://127.0.0.1:8001/WebService1/add?b=$num1&a=$num2";	
			}else if(isset($_POST["sub"])){
				$url = "http://127.0.0.1:8001/WebService1/sub?b=$num2&a=$num1";
			}else{
				$url=null;
			}
		?>
		<form action="teste.php" method="post">
			A: <input type="number" name="a"><br>
			B: <input type="number" name="b"><br>
			<input type="submit" value="add" name="add"><br>
			<input type="submit" value="subtract" name="sub"><br><br>
		</form>
		
		<?php echo file_get_contents($url);?>
	</body>
</html>