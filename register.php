<html>
<head>
	
	<meta charset="utf-8">
	<script type="text/javascript" src="javascripts/regvalid.js"></script>
	
	<style>
	

.button3 {
    background-color:A71B5A;
    color:black;
    padding: 24px ;
    margin: 18px;
    cursor: pointer;
    width: 75%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: A4921D;
}

.container {
    padding: 15px;
}
.modal-content {
    background-color: blue;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%; 
}
.close {
    
    right: 25px;
    top: 0;
    font-size: 50px;
    font-weight: bold;
}
	
	
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
		.glasslog {
				  float: left;
				  width: 300px;
				  margin: 0 auto;
				  background: rgba(130,130,130,.3);
				  padding: 20px 22px;
				  border: 1px solid;
				  border-top-color: rgba(255,255,255,.4);
				  border-left-color: rgba(255,255,255,.4);
				  border-bottom-color: rgba(60,60,60,.4);
				  border-right-color: rgba(60,60,60,.4);
}

		.glasslog input, .glasslog button {
				  width: 212px;
				  border: 2px solid;
				  border-bottom-color: rgba(255,255,255,.5);
				  border-right-color: rgba(60,60,60,.35);
				  border-top-color: rgba(60,60,60,.35);
				  border-left-color: rgba(80,80,80,.45);
				  background-color: rgba(0,0,0,.2);
				  padding: 8px 24px 8px 10px;
				  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
				  letter-spacing: .075em;
				  color: #fff;
				  text-shadow: 0 1px 0 rgba(0,0,0,.1);
				  margin-bottom: 19px;
				}

				form input:focus { background-color: rgba(0,0,0,.4); }

		.glasslog input.email {

				  background-position: 220px 10px;
				}

		.glasslog button[type=submit] {
				  width: 215px;
				  margin-bottom: 0;
				  color: #3f898a;
				  letter-spacing: .05em;
				  text-shadow: 0 1px 0 #133d3e;
				  text-transform: uppercase;
				  border-top-color: #9fb5b5;
				  border-left-color: #608586;
				  border-bottom-color: #1b4849;
				  border-right-color: #1e4d4e;
				  cursor: pointer;
				}
			.glasslogreg{
				  float: left;
				  width: 620px;
				  margin: 0 auto;
				  background: rgba(130,130,130,.3);
				  padding: 20px 22px;
				  border: 1px solid;
				  border-top-color: rgba(255,255,255,.4);
				  border-left-color: rgba(255,255,255,.4);
				  border-bottom-color: rgba(60,60,60,.4);
				  border-right-color: rgba(60,60,60,.4);
				}	
			.glasslogreg input, .glasslogreg button {
				  width: 212px;
				  border: 2px solid;
				  border-bottom-color: rgba(255,255,255,.5);
				  border-right-color: rgba(60,60,60,.35);
				  border-top-color: rgba(60,60,60,.35);
				  border-left-color: rgba(80,80,80,.45);
				  background-color: rgba(0,0,0,.2);
				  padding: 8px 24px 8px 10px;
				  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
				  letter-spacing: .075em;
				  color: #fff;
				  text-shadow: 0 1px 0 rgba(0,0,0,.1);
				  margin-bottom: 19px;
				}
			.glasslogreg button[type=submit] {
				  width: 215px;
				  margin-bottom: 0;
				  color: #3f898a;
				  letter-spacing: .05em;
				  text-shadow: 0 1px 0 #133d3e;
				  text-transform: uppercase;
				  border-top-color: #9fb5b5;
				  border-left-color: #608586;
				  border-bottom-color: #1b4849;
				  border-right-color: #1e4d4e;
				  cursor: pointer;
				}
	</style>
</head>
	<h4>
	<div class="header">
	<div class="topnavigationBar" align="center">
		<BIG>
		
	
		<a href="PrivacyPolicy.php">Privacy Policy </a>|
		<a href="Terms&Conditions.php">Terms & Conditions </a>|
		</BIG>
	</div>
		<img src="Images/stack_of_books_copy.png" width="200">
		<img src="Images/imageedit_21_8261312846.gif" width="500"> 
	
		<button class="button" onclick="location.href='register.php'"><span>Register</span></button>|
		<button class="button2" onclick="location.href='Login.php'"><span>Login</span></button>
			
		
		
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
	 
	 <h1><b><i><big>REGISTER</big></i></b></h1>
	 <img id="pic" src="Images/imageedit_45_7444005202.gif" align="right" width="45%" height="65%">
<body>	 
		<div id="bg"></div>

<form class="glasslogreg" onsubmit="return formValidate()">

<form action="register_query.php" method="post">    
	  <table>
		<tr>
				<td> Customer ID : </td>
				<td><input type="text" name="CID" ></td>
			</tr>
			<tr> </tr>
	  
		<tr>
				<td> Username : </td>
				<td><input type="text" name="Username" ></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> Password : </td>
				<td><input type="Password" name="txtj" ></td>
			</tr>
			<tr> </tr><tr> </tr>
			
			<tr>
				<td> NIC Number : </td>
				<td><input type="text" name="NIC" ></td>
			</tr>
			<tr> </tr>
			<tr> </tr><tr> </tr>
			<tr>
				<td> E-mail : </td>
				<td><input type="Email" name="email" ></td>
			</tr>
			<tr>
				<td> Home No : </td>
				<td><input type="text" name="Home_no" ></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> Street  : </td>
				<td><input type="text" name="street" ></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> City : </td>
				<td><input type="text" name="City"></td>
			</tr><tr> </tr>
			<tr> </tr>
			<tr>
				<td> Post Code : </td>
				<td><input type="text" name="Postcode" ></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
		
			<tr> </tr><tr> </tr><tr> </tr><tr> </tr>
			<tr>
				<td> </td>
				<td>
				<input type="reset"  value="Reset">
				<input type="submit"  value="Submit">
				</td>
			</tr>
		</table>
		</form> 
  
</div>


	</body>
	
</html>




