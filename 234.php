<!DOCTYPE html>
<html>
	<head>
		<title>Fav color</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="123.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

<link href="https://cdn.boomcdn.com/libs/animate-css/3.7.0/animate.css">
	</head>
	<body>
		<div class="main">
			<div class="center">
				<p id="calculator">PHP CALCULATOR</p>
				<form method="POST">
                 <div class="form">
					 <div  class="1">
						 <input style="width:25rem; height:2rem ; text-align:center; margin-left:2rem;margin-top:2rem;" type="text" name="num1" placeholder="ENTER FIRST NUMBER">
					 </div>
					 <div class="2">
						 <input style="width:25rem; height:2rem ; text-align:center; margin-left:2rem;margin-top:3rem;" type="text" name="num2"  placeholder="ENTER SECOND NUMBER">
					 </div>
					 <div class="select">
						 <select name="Choice">
                             <option value="add">ADDITION</option>
							 <option value="sub">SUBTRACTION</option>
							 <option value="mul">MULTIPLICATION</option>
							 <option value="div">DIVISION</option>
							 <option value="mod">MODULUS</option>
						 </select>
					 </div>
					 <div class="ty">
						 <input class="submit" type="submit" name="submit" value="SUBMIT" >
					 </div>
					 
				 </div>
</form>
				 <div class="php">
					 <p>
						 <?php
						 if(isset($_POST['submit'])){
                           $num1=$_POST['num1'];
						   $num2=$_POST['num2'];
						   $operation=$_POST['Choice'];
						   switch($operation){
                            case "add":
								$sum=$num1 +$num2;
								echo "Addition of two number is $sum";
								break;
								case "sub":
									$sub=$num1 - $num2;
									echo "Subtraction of two number is $sub";
									break;
									case "mul":
										$mul=$num1  * $num2;
										echo "Multiplication of two number is $mul";
										break;
										case "div":
											$div=$num1 / $num2;
											echo "Division of two number is $div";
											break;
											case "mod":
												$mod=$num1 % $num2;
												echo "Mod of two number is $mod";
												break;
						   }
						 }
						 ?>
					 </p>
				 </div>
			</div>
		</div>
		
		
	</body>
</html>
