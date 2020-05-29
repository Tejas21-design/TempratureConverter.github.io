<!DOCTYPE html>
<html>
<head>

	<title>Temprature CONVERSION</title>
	<style>
		*{
			margin:0; padding: 0; box-sizing: border-box;
		}

		header{
			background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgb(0, 0, 0, 0.5)), url('images/landscape-photography-of-green-mountains-910411.jpg');
			height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
		}

		h1{
			text-align: center; line-height: 20vh;
		}
		.main-div{
			width: 100%; height: 80vh; display: flex; justify-content: space-around; align-items: center;
		}
         .left-side{
           background-color: gray;
           border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
         }
         .left-side img{
         	max-width: 400px;
         	height: auto;
         }
         .right-side{
         	width: 400px;
         	height: 300px;
         	background-color: gray;
         	border-radius: 15px;
         	display:flex;
         	flex-direction: column;
         	justify-content: center;
         	align-items: center;
         	text-align: center;
         }
         .input1{
         	height: 40px;
         	width: 250px;
         	padding: 5px;
         	border-radius: 1px solid gray;
         	border-radius: 5px;
         	outline: none;

         }
         .selection{
         	width: 100%;
         	margin: 15px;
         }
         .btn{
         	padding: 10px 18px;
         	border-radius: 10px;
         	outline: none;
         	border: none;
         	background-color: blue;
         	color: white;
         	font-size: 0.6em;
         	text-align: center;
         }
          p{
          	margin: 20px 0 0 0;
          	color: white;
          }

          .convt{
          	text-align: center;
          	color: white;
          }
	</style>
</head>
         
<body>

	<header>

		<h1> Temprature Conversion</h1>
		<div class="convt">
		<h2> EASY TO USE AND QUICK TO ACCESS</h2>
	</div>
		<div class="main-div">
			<div class="left-side">
				<img src="images/—Pngtree—_blue smoke abstract_3780311.png">
				<
				
			</div>
			<div class="right-side">

					<form method="POST">
						<input type="text" name="num" placeholder="enter your number" class="input1">
						<div class="selection">
							<label>celc</label>
							<input type="radio" name="units" value="celc">
							<label>farh</label>
							<input type="radio" name="units" value="farh">
							
						</div>

                       <input type="submit" name="submit" value="Convert Now" class="btn">					
				</form>
				<div>
					<p> 
                         <?php
                                if(isset($_POST['submit'])){

                                  $num = $_POST['num'];
                                  $temp = $_POST['units'];
                                  if($temp == "celc"){
                                  	$result = $num*9/5 +32;
                                  	echo "The conversion of celcius to farhenheit is:" .$result;
                                  }else{
                                  	$result = ($num-32)*5/9;
                                  	echo "The conversion of farenheit to celcius is:" .$result;
                                  }




                                }


                         ?>


			</p>
				</div>
	</header>

</body>
</html>