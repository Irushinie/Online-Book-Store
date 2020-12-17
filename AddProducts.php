
<html>

<head>

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
					background-image:url("Images/030729.JPG");
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
				width: 200px;
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
				width: 200px;
				cursor: pointer;

		}
		.button2:hover span {
				padding-right: 45px;
		}
		
		}
		
	</style>
	</head>

	<h4>
	<div class="header">
	<div class="topnavigationBar" align="center">
		<BIG>
		
		<a href="BUYBOOKBYCOM.html"> Sign out </a>|
		<a href="PrivacyPolicy.php">Privacy Policy </a>|
		<a href="Terms&Conditions.php">Terms & Conditions </a>|
		</BIG>
	</div>
		<img src="Images/stack_of_books_copy.png" width="200">
		<img src="Images/imageedit_21_8261312846.gif" width="500"> 
	
		
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
	
	
	
<body>	
					<img src ="Images/imageedit_6_8973970077.gif"  width="800" align= "center">
			<div class="content">
			<p>
				<form action="AddProducts_query.php" method="post">
					<font color="red"><big>
					Fill this form to add new books to the database.<br /><br />Don't leave any fields empty. <br /> <br />
					</big></font>
					<table align="center">
						<tr>
							<td><font color="white">
								Book ID	: 
								</font>
							</td>
							<td><font color="white">
								<input type="text" name="BID" />
							</font></td>
						</tr>
						<tr>
							<td><font color="white">
								Name :
							</font></td>
							<td><font color="white">
								 <input type="text" name="Name" /><br />
							</font></td>
						</tr>
						<tr>
							<td><font color="white">
								Category :
							</font></td>
							<td><font color="white">
								<input type="text" name="Category" /><br />
							</font></td>
						</tr>
						<tr>
							<td><font color="white">
								AutherID :
							</font></td>
							<td><font color="white">
								<input type="text" name="AID" /><br />
							</font></td>
						</tr>
						<tr>
							<td><font color="white">
								PublisherID :
							</font></td>
							<td><font color="white">
								<input type="text" name="PID" /><br />
							</font></td>
						</tr>
						
							<td><font color="white">
								Price :
							</font></td>
							<td><font color="white">
								<input type="text" name="Price" /><br />
							</font></td>
						<tr>
							<td><font color="white">
								ISBN :
							</font></td>
							<td><font color="white">
								 <input type="text" name="ISBN" /><br />
							</font></td>
						</tr>
						
						
						
							<td>
								<input  type="submit" value="Submit" />
							</font></td>
						</tr>
					</table>
					
				</form>
			</p>
		</div>

		<center>
		<br>
		<p style="font-size:12px">&copy; Copyright 2018 BuyBookBy.com.All Rights Reserved.</p>
		</center>
</body>
</html>
