<html>

<head>
<title>	BuyBookBy.com | Books to live by	</title>

	<script type="text/javascript" src="javascripts/x.js"></script>

	<style>
			
		* {
			box-sizing: border-box;
		
		}	
		
		ul{
				    list-style-type: none;
					margin: 0;
					padding: 0;
					overflow: hidden;
					background-color: black;
				
		}
		li {
					float: left;
		}
		li a {
					display: block;
					color: white;
					text-align: center;
					padding: 14px 16px;
					text-decoration: none;
		}
		li a:hover {
					background-color: red;
		}
		.searchBox{
					margin-top:20px;
					float:right;
					margin-right:10px;
		}
		button{
					float:right;
					color:red;
		
		}
		body{
					background-image:url("Images/book_136_7.JPG");
					background-size:100%;
					
		}
		
	
		
		
		
		.button {
				border-radius: 50px;
				background-color: #f4511e;
				border: none;
				color: #FFFFFF;
				text-align: center;
				font-size: 28px;
				padding: 8px;
				width: 120px;
				cursor: pointer;

		}

		.button:hover span {
				padding-right: 45px;
		}
		.button2{
				border-radius: 450px;
				background-color: #f4511e;
				border: none;
				color: #FFFFFF;
				text-align: center;
				font-size: 28px;
				padding: 8px;
				width:120px;
				cursor: pointer;

		}
		.button2:hover span {
				padding-right: 45px;
		}
		.button4{
				border-radius: 450px;
				background-color: #f4511e;
				border: none;
				color: #FFFFFF;
				text-align: center;
				font-size: 28px;
				padding: 8px;
				width: 115px;
				cursor: pointer;
				float:right;
		}
		.button4:hover span {
				padding-right: 45px;
		}
		
		}
		
	</style>
	</head>

	<h4>
	<div class="header">
	<div class="topnavigationBar" align="center">
		<BIG>
		
		
		<a href="PrivacyPolicy.php">Privacy Policy </a>|
		<a href="Terms&Conditions.php">Terms & Conditions </a>
		</BIG>
	</div>
		<img src="Images/stack_of_books_copy.png" width="200">
		<img src="Images/imageedit_21_8261312846.gif" width="500"> 
	
		<button class="button" onclick="location.href='register.php'"><span>Register</span></button>|
		<button class="button2" onclick="location.href='Login.php'"><span>Login</span></button>
		<button class="button4" onclick="location.href='#"><span>Logout</span></button>
		
	</div>
	</h4>
	
	
	<div class="secondnavBar">
    <ul>
	 
		<li><a href="home.php">Home</a></li>
		<li><a href="AboutUs.php">About Us</a></li>
		<li><a href="Categories.php">Categories</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="Feedback.php">Feedback</a></li>
		<li><a href="ContactUs.php">Contact Us</a></li>
	</ul> 
			<form class="searchBox">
				<input type="text" placeholder="Search books">
				<button>Search</button>
			</form>
	</div>
	<div class="slide" style="max-width:1500px">
	<img class="slides" src="Images/2.jpg" style="width:100%">
	<img class="slides" src="Images/31.jpg" style="width:100%">
	<img class="slides" src="Images/1.jpg" style="width:100%">
	<img class="slides" src="Images/3.jpg" style="width:100%">
	<img class="slides" src="Images/4.jpg" style="width:100%">
	</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
}
</script>
	



	
	<table width="500" cellpadding="27px;">
				
			
	<tr>
	
		<tr>
		
		<td align="center"align="justify">
 			<div class = "showbook slide"><a  href="#"><img src="Images/basic.jpg.jpg"  height="200"width="150"/></a>
			<p>BASIC
		 	PATHOLOGY<br />
		 	PRICE :Rs.100</p>
			<br />
		</td></div>
		<td align="center"align="justify">
			<div class = "showbook slide"><a href="#"><img src="Images/bbb1.jpg.jpeg"  height="200"width="150"/></a>
			<p>THE
			 	ODYSSEY<br />
			 	PRICE :Rs.100</p>
			<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="#"><img src="Images/bulent.jpg.jpg"  height="200"width="150"/></a>
			<p>BULENT ATALAY<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="#"><img src="Images/chummy.jpg.jpeg"  height="200"width="150"/></a>
		 	<p>LAST'S 
		 	ANATOMY<br />
		 	PRICE :Rs.100</p>
			<br />
		</td></div>

		<td align="center"align="justify">
			<div class = "showbook slide"><a href="#"><img src="Images/dan.jpg.jpg"  height="200"width="150"/></a>
			<p>ANGELS <br/>
				AND DEAMONS <br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>
	</tr>
	
	<tr>
		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="#"><img src="Images/davincl.jpg.jpg"  height="199"width="150"/></a>
			<p>DAVINCI
			 	CODE<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>
		
		<td align="center"align="justify">
			<div class = "showbook slide"><a href="#"><img src="Images/mab19.jpg"  height="200"width="150"/></a>
			 <p>DISCRETE MATHEMATICS 
			 	<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
			<div class = "showbook slide"><a href="#"><img src="Images/rb06.JPG"  height="200"width="150"/></a>
			 <p>FIFTY SHADES<br/>
			 	OF GREY<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="#"><img src="Images/pb18.jpg"  height="200"width="150"/></a>
				  <p>HOMER<br/>
				  	THE ILIAD<br />
				 	PRICE :Rs.100</p>
					<br />
		</td></div>


		<td align="center"align="center">
			<div class = "showbook slide"><a href="#"><img src="Images/rb07.jpeg"  height="200"width="150"/></a>
				 <p>MICHAEL
				 	ONDAATJE<br />
				 	PRICE :Rs.100</p>
					<br />
		</td></div>

	</tr>
	
	

</table>
	
	
	
	<center>
		<br>
		<p style="font-size:12px">&copy; Copyright 2018 BuyBookBy.com.All Rights Reserved.</p>
		</center>
</body>
</html>