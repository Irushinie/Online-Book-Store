<!DOCTYPE html>
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
				background-image:url("Images/book_136_7.JPG"); background-size:100% 100%; background-repeat:repeat; 
				font-family: Arial, Helvetica, sans-serif;
					
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
		

		.btn-buy{
			background:url(img/buttons_PNG156.png);
			background-size:100% 100%;
			background-repeat:repeat;
			width:150px;
			height:50px;
			margin-left:510px;
			text-align:center;
			border: none;
}

/*category*/

#myBtnContainer{	
		width:145px;
		height:550px;
		/*border:0.05cm solid blue;*/
		float:left;
		margin-left:00px;
		margin-top:45px;
		background:url(img/1730260802.jpg);
		background-size:100% 100%; background-repeat:repeat
}

		.container{
	
		margin-left:250px;
		margin-right:0px;
		margin-top:80px;
		/*border:0.05cm solid black;*/
		width:890px;
		height:610px;
		/*background:url(img/1730260802.jpg); background-size:100% 100%; background-repeat:repeat; */
}

		#book1{

		border: none;
		width:202px;
		height:202px;
		float:left;
		margin-left:20px;
		margin-right:20px;

}

		#bu1{
		margin-left:60px;
		margin-right:5px;
		border:0.05cm;
		margin-top:170px;
	
}
		#buy{
		background:url(img/buttons_PNG156.png);
		background-size:100% 100%;
		background-repeat:repeat; 
		width:100px;
		height:30px;
		margin-left:-50px;
		border: none;
}
		.cat{
		color:black;
}
		a{
			margin-left:5px;
			text-align:left;
			color:blue;
	
	
}
		a:link {
			text-decoration: none;
	
	
}

		a:visited {
			text-decoration: none;
	
}

		a:hover {
			text-decoration: underline;
			color: white;
}

		a:active {
			text-decoration: underline;
			color:red;
	
}




		/* The Modal (background) */
			.modal {
				display: none; 
				position: fixed; 
				z-index: 1; 
				padding-top: 100px; 
				left: 0;
				top: 0;
				width: 100%; 
				height: 100%;
				overflow: auto; 
				background-color: rgb(0,0,0); 
				background-color: rgba(0,0,0,0.8); 
				color:black;
}
			p{
				text-align:center;
}

		/* Modal Content */
			.modal-content {
				background:url(img/173026080.jpg); 
				background-size:100% 100%; 
				background-repeat:repeat; 
				margin: auto;
				padding: 20px;
				border: 2px solid white;
				width:780px;
				height:450px;

}

		/* The Close Button */
			.close {
				color: white;
				float: right;
				font-size: 38px;
				font-weight: bold;
}

			.close:hover,
			
			.close:focus {
				color: red;
				text-decoration: none;
				cursor: pointer;
}
		#text{
			border:0.05cm solid white;
			width:500px;height:400px;
			float:right;background:url(img/1730260802.jpg); 
			background-size:100% 100%; 
			background-repeat:repeat;
			color:white;
}
		h3{
		text-decoration: underline ;
		color:black;
		text-align:center;
}
		#imgB{
			border:0.05cm solid white;
			width:200px;
			height:200px;
}



		.filterDiv {

			width:160px;
			height:230px;
			float:left;
			border:none;
			color: #ffffff;
			text-align: center;
			display: none;
			margin-top:10px;
			margin-left:55px;
			margin-right:50px;
}

		.show {
			display: block;
}

		.container {
			margin-top: 20px;
			overflow: hidden;
}

		/* Style the buttons */
			.btn {
				border: none;
				outline: none;
				padding: 12px 16px;
				cursor: pointer;
				margin-top:0px;
				width:145px;
				background:url(img/173026080.jpg);
				background-size:100% 100%; 
				background-repeat:repeat;
  
  
}

			.btn:hover {
				background-color: #ddd;
}

			.btn.active {
				background-color: #666;
				color: white;
}

#CDbt {
	width:50px;
	height:30px;
	background:none;
	border:none;
	color:blue;
	cursor: pointer;
	font-size:15px;
	float:right;	
	border: none;
}

#CDbt:hover {
    color: black;
}

#CDbt1 {
	width:50px;
	height:30px;
	background:none;
	border:none;
	color:blue;
	cursor: pointer;
	font-size:15px;
	float:right;	
	border: none;
}

#cDetial{
	border:none;
	height:40px;
	width:290px;
	float:left;
	margin-left:5px;
	border:none;
	color: black;
}

#Itext{
	width:200px;
	height:20px;
	margin-left:0px;
	margin-top:5px;
}

#bt {

    width: 100px;
	height:50px;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
	float:right;
	margin-right:200px;
}
#bt2 {
    float:left;
    width: 150px;
	height:35px;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: none;
    border-left: none;
    cursor: pointer;
	
}
#bt2:hover {
    color: black;
}
#bt:hover {
    color: black;
}

#bt::after {
    content: "";
    clear: both;
    display: table;
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
	 
<body >



<div id="myBtnContainer" >
<h3>Catagory<h3>
 <button   class="btn active" onclick="filterSelection('chilB')"><a class="cat"> Children's Books</a></button>
 <button  class="btn" onclick="filterSelection('AAB')"><a class="cat">Action and Adventure Books</a></button>
  <button class="btn" onclick="filterSelection('RoB')"><a class="cat">Romance Books</a></button>
  <button class="btn" onclick="filterSelection('ClB')"><a class="cat">Classic Books</a></button>
  <button class="btn" onclick="filterSelection('HiB')" ><a class="cat"> Historical Books</a></button>
  <button class="btn" onclick="filterSelection('PhB')" ><a class="cat">Philosophical Books</a></button>
  <button class="btn" onclick="filterSelection('HoB')" ><a class="cat">Horror Books</a></button>
  <button class="btn" onclick="filterSelection('SSB')" ><a class="cat">Short Story Books</a></button>

</div>


<div class="container" >  
  
	<!--Children’s Books-->
	<!--book1-->
		<div id="book">
		<div class="filterDiv chilB">
			<!-- Trigger/Open The Modal -->
			
			<a id="myBtn111" href="#"><B>The Jungle Book</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\jungle_book.jpg" >
			</div>
			<div id="bu1">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00001','The Jungle Book',560.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal111" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\jungle_book.jpg" >
			
			<!--text-->
			<div id="text">
			<h3 style="text-align:center">The Jungle Book</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1894<p>
				<p><B>Author: </B>  Rudyard Kipling</P>
				<p><B>Series: </B> The Jungle Books</P>
				<p><B>Genre: </B> Children's literature</P>
				<p><B>Illustrator: </B> John Lockwood Kipling</P>
				<p><B>Characters: </B> Mowgli, Baloo, Kaa, Bagheera, Shere Khan, Akela, Raksha, Colonel Hathi, Tabaqui, Father Wolf, Ikki</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.560.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	
			
			<!--book2-->
		<div id="book">
		<div class="filterDiv chilB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn1" href="#"><B>The Secret Garden</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\The_Secret_Garden.jpg" >
			</div>
			<div id="bu1">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00002','The Secret Garden',560.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal1" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Secret_Garden.jpg">
			
			<!--text-->
			<div id="text">
			<h3 >The Secret Garden</h3>
				<p style="margin-top:20px"><B>Originally published:</B>August 1911<p>
				<p><B>Author: </B>  Frances Hodgson Burnett</P>
				<p><B>Page count:</B> 306</P>
				<p><B>Genre: </B> Children's literature</P>
				<p><B>Illustrator: </B> Frances Hodgson Burnett, Charles Robinson</P>
				<p><B>Characters: </B> Mary Lennox, Sir Colin Craven, Dickon Sowerby, Ben Weatherstaff, Martha Sowerby</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.620.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
	
			<!--book3-->
		<div id="book">
		<div class="filterDiv chilB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn2" href="#"><B>Heidi</B></a>
			<div id="book1"style="margin-top:10px;">
			<img id="imgB" src="img\heidi.jpg" >
			</div>
			<div id="bu1">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00003','Heidi',890.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal2" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\heidi.jpg">
			
			<!--text-->
			<div id="text">
			<h3>Heidi</h3>
				<p style="margin-top:20px"><B>Originally published:</B>1880<p>
				<p><B>Author: </B>   Johanna Spyri</P>
				<p><B>Country:</B>  Switzerland</P>
				<p><B>Genre: </B> Children's literature</P>
				<p><B>Original language: </B>  German</P>
				<p><B>Characters: </B> Fräulein Rottenmeier, Clara, Dete, Heidi's Grandfather, Peter, Heidi</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.890.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
			<!--book4-->
		<div id="book">
		<div class="filterDiv chilB" style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn3" href="#"><B>Thumbelina</br>***</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Thumbelina.jpg">
			</div>
			<div id="bu1">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00004','Thumbelina',500.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal3" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Thumbelina.jpg">
			
			<!--text-->
			<div id="text">
			<h3>Thumbelina</h3>
				<p style="margin-top:20px"><B>Originally published:</B> December 16, 1835<p>
				<p><B>Author: </B>   Hans Christian Andersen</P>
				<p><B>Original title:</B>  "Tommelise"</P>
				<p><B>Genre: </B>Fairy tale</P>
				<p><B>Original language: </B>   Danish</P>
				<p><B>Country: </B> Kingdom of Denmark</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.500.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
		<!--book5-->
		<div id="book">
		<div class="filterDiv chilB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn4" href="#"><B>The Wind in the Willows</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\wind_willows.jpg" >
			</div>
			 
			<div id="bu1"style="border:0.05cm  ;margin-top:170px">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00005','The Wind in the Willows',550.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal4" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\wind_willows.jpg" >
			
			<!--text-->
			<div id="text">
			<h3><B>The Wind in the Willows</B></h3>
				<p style="margin-top:20px"><B>Originally published:</B> June 15, 1908<p>
				<p><B>Author: </B>  Kenneth Grahame</P>
				<p><B>Genre:</B>  Children's literature</P>
				<p><B>Characters:</B> Mr. Toad, Ratty, Badger, Mole, The Narrator</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.550.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	
<!--book6-->
		<div id="book">
		<div class="filterDiv chilB" style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			
			<a id="myBtn5" href="#"><B>The Jungle Book</B></a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\jungbook.jpg"  >
			</div>
			<div id="bu1"style="border:0.05cm  ;margin-top:170px">
			<input type="button"id="buy" value="Add to cart" onclick="AddtoCart('BID00006','The Jungle Book',560.00 )"/>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal5" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\jungbook.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>The Jungle Book</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1894<p>
				<p><B>Author: </B>  Rudyard Kipling</P>
				<p><B>Series: </B> The Jungle Books</P>
				<p><B>Genre: </B> Children's literature</P>
				<p><B>Illustrator: </B> John Lockwood Kipling</P>
				<p><B>Characters: </B> Mowgli, Baloo, Kaa, Bagheera, Shere Khan, Akela, Raksha, Colonel Hathi, Tabaqui, Father Wolf, Ikki</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.560.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>			
			
			
<!---Action and Adventure Books-->
		<!--book1-->
		<div id="book">
		<div class="filterDiv AAB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn6" href="#"><B>Harry Potter and the Chamber of Secrets</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Harry_Potter.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal6" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB"src="img\Harry_Potter.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Harry Potter and the Chamber of Secrets</h3>
				<p style="margin-top:20px"><B>Originally published:</B>July 2, 1998<p>
				<p><B>Author: </B> J. K. Rowling</P>
				<p><B>Release number: </B> 2nd in series</P>
				<p><B>Preceded by:</B> Harry Potter and the Philosopher's Stone</P>
				<p><B>Genre:</B>  Fantasy, Detective fiction</P>
				<p><B>Characters:</B> Harry Potter, Hermione Granger, Ron Weasley, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1200.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	
			
			<!--book2-->
		<div id="book">
		<div class="filterDiv AAB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn7" href="#"><B>The Princess </br>Bride</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\The_Princess_Bride.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal7" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Princess_Bride.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>The Princess Bride</h3>
				<p style="margin-top:20px"><B>Originally published:</B>1973<p>
				<p><B>Author: </B> William Goldman</P>
				<p><B>Page count: </B> 493</P>
				<p><B>Publisher:</B>Harcourt (USA)</P>
				<p><B>Genre:</B>   Fantasy Fiction, Romance</P>
				<p><B>Characters:</B> Westley, Buttercup, Inigo Montoya, Fezzik, Prince Humperdinck</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.800.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>

<!--book3-->
		<div id="book">
		<div class="filterDiv AAB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn8" href="#"><B>sandstorm james rollins</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\sandstorm_james_rollins.jpg"  >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal8" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\sandstorm_james_rollins.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>sandstorm james rollins</h3>
				<p style="margin-top:20px"><B>Originally published:</B>June 9, 2004<p>
				<p><B>Author: </B>James Rollins</P>
				<p><B>Followed by: </B> Map of Bones</P>
				<p><B>Publisher:</B>Harcourt (USA)</P>
				<p><B>Genre:</B>   Fiction, Science Fiction, Thriller, Suspense, Speculative fiction, Adventure fiction</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1000.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	

<!--book4-->
		<div id="book" >
		<div class="filterDiv AAB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn9" href="#"><B>Shoot First</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Shoot_First.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal9" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Shoot_First.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Shoot First </h3>
				<p style="margin-top:20px"><B>Originally published:</B>April 10, 2018<p>
				<p><B>Author: </B> Stuart Woods</P>
				<p><B>Followed by: </B>Turbulence</P>
				<p><B>Preceded by:</B> The Money Shot, Unbound</P>
				<p><B>Genre:</B>   Fiction, Thriller, Suspense, Adventure fiction</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.600.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	
<!--book5-->
		<div id="book">
		<div class="filterDiv AAB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn10" href="#"><B>Treasure Island</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Treasure_Island.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal10" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Treasure_Island.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Treasure Island </h3>
				<p style="margin-top:20px"><B>Originally published:</B>January 28, 1882<p>
				<p><B>Author: </B> Robert Louis Stevenson</P>
				<p><B>Illustrator: </B>N. C. Wyeth</P>
				<p><B>Publisher:</B> Cassell (London)</P>
				<p><B>Genre:</B> Adventure fiction, Young adult fiction</P>
				<p><B>Characters:</B>Long John Silver, Jim Hawkins, Billy Bones, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1500.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>		

<!--book6-->
		<div id="book">
		<div class="filterDiv AAB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn11" href="#"><B>Fantastic Beasts....</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Fantastic_Beasts_and_Where_to_Find_Them.jpg">
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal11" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Fantastic_Beasts_and_Where_to_Find_Them.jpg">
			
			<!--text-->
			<div id="text">
			<h3>Shoot First </h3>
				<p style="margin-top:20px"><B>Originally published:</B>2001<p>
				<p><B>Author: </B> J. K. Rowling</P>
				<p><B>Series:  </B>Harry Potter (Literary Series)</P>
				<p><B>Page count:</B>128</P>
				<p><B>Illustrator: </B>J. K. Rowling</P>
				<p><B>Genre:</B>   Fiction, Thriller, Suspense, Adventure fiction</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.990.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>					

<!---Romance Books-->			
<!--book1-->
		<div id="book">
		<div class="filterDiv RoB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn12" href="#"><B>Craving (The Steel Brothers Saga)</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Craving_(The_Steel_Brothers_Saga).jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal12" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Craving_(The_Steel_Brothers_Saga).jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Craving (The Steel Brothers Saga) </h3>
				<p style="margin-top:20px"><B>Originally published:</B>May 3, 2016<p>
				<p><B>Author: </B>Helen Hardt</P>
				<p><B>Followed by: </B> Obsession</P>
				<p><B>Preceded by:</B> The Money Shot, Unbound</P>
				<p><B>Genre:</B>   Erotic literature, Fiction, Romance novel, Contemporary romance</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.750.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	
<!--book2-->
		<div id="book">
		<div class="filterDiv RoB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn13" href="#"><B>The Secret of Flirting</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\The_Secret_of_Flirting.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal13" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Secret_of_Flirting.jpg">
			
			<!--text-->
			<div id="text">
			<h3>The Secret of Flirting</h3>
				<p style="margin-top:20px"><B>Originally published:</B>March 27, 2018<p>
				<p><B>Author: </B> Sabrina Jeffries</P>
				<p><B>Followed by: </B>The Pleasures of Passion</P>
				<p><B>Genre:</B> Romance novel, Historical Fiction, Historical romance, Regency romance</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.450.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	

<!--book3-->
		<div id="book">
		<div class="filterDiv RoB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn14" href="#"><B>His Wicked Charm</B> </a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\His_Wicked_Charm.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal14" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\His_Wicked_Charm.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>His Wicked Charm</h3>
				<p style="margin-top:20px"><B>Originally published:</B>March 27, 2018<p>
				<p><B>Author: </B> Candace Camp</P>
				<p><B>Genre:</B>  Romance novel, Historical romance</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1000.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>

<!--book4-->
		<div id="book">
		<div class="filterDiv RoB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn15" href="#"><B>Love, Chloe</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Love_Chloe.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal15" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Love_Chloe.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Love, Chloe </h3>
				<p style="margin-top:20px"><B>Originally published:</B> March 14, 2016<p>
				<p><B>Author: </B> Alessandra Torre</P>
				<p><B>Genre:</B>  Erotic literature, Fiction, Romance novel, Chivalric romance, New adult fiction, Contemporary romance</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1500.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	

<!--book5-->
		<div id="book">
		<div class="filterDiv RoB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn16" href="#"><B>Feverborn</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Feverborn.jpg">
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal16" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Feverborn.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Feverborn</h3>
				<p style="margin-top:20px"><B>Originally published:</B>January 19, 2016<p>
				<p><B>Author: </B> Karen Marie Moning</P>
				<p><B>Followed by: </B> Feversong, Feverborn, High Voltage</P>
				<p><B>Nominations:</B>Goodreads Choice Awards Best Fantasy</P>
				<p><B>Preceded by:</B>Burned</P>
				<p><B>Genre:</B> Fiction, Romance novel, Fantasy Fiction, Urban fantasy, Paranormal romance, Paranormal fiction, Paranormal Fantasy</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1500.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>				

<!--book6-->
		<div id="book">
		<div class="filterDiv RoB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn17" href="#"><B>Marry in Scandal</B> </a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Marry_in_Scandal.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal17" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Marry_in_Scandal.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Marry in Scandal </h3>
				<p style="margin-top:20px"><B>Originally published:</B> April 3, 2018<p>
				<p><B>Author: </B> Anne Gracie</P>
				<p><B>Genre:</B>  Romance novel, Historical Fiction, Historical romance, Regency romance</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1200.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>	

<!---Classical Books-->
<!--book1-->
		<div id="book">
		<div class="filterDiv ClB">
			<!-- Trigger/Open The Modal -->
			
			<a id="myBtn18" href="#"><B>Little Women</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Little_Women.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal18" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Little_Women.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Little Women</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1869<p>
				<p><B>Author: </B>  Louisa May Alcott</P>
				<p><B>Followed by: </B> Little Men</P>
				<p><B>Genre: </B> Coming-of-Age Fiction, Bildungsroman</P>
				<p><B>Adaptations: </B>Little Women (1994), Little Women (1949), MORE</P>
				<p><B>Characters: </B>Jo March, Mrs. March, Beth March, Amy March, Meg March</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.560.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book2-->
		<div id="book">
		<div class="filterDiv ClB">
			<!-- Trigger/Open The Modal -->
			
			<a id="myBtn19" href="#"><B>Robinson Crusoe</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Robinson_Crusoe.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal19" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Robinson_Crusoe.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Robinson Crusoe</h3>
				<p style="margin-top:20px"><B>Originally published:</B>April 25, 1719<p>
				<p><B>Author: </B> Daniel Defoe, Steven Zorn</P>
				<p><B>Original language: </B> English</P>
				<p><B>Genre: </B> Adventure fiction, Historical Fiction</P>
				<p><B>Adaptations: </B> The Wild Life (2016), Crusoe (2008), MORE</P>
				<p><B>Characters: </B> Robinson Crusoe, Friday, Xury, The Portuguese captain, The Spaniard, Robinson Crusoe</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.700.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book3---->
		<div id="book">
		<div class="filterDiv ClB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn20" href="#"><B>Peter and Wendy</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Peter_and_Wendy.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal20" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Peter_and_Wendy.jpg">
			
			<!--text-->
			<div id="text">
			<h3>Peter and Wendy</h3>
				<p style="margin-top:20px"><B>Originally published:</B>November 19, 2017<p>
				<p><B>Author: </B>   James Matthew Barrie</P>
				<p><B>Genre: </B> Fantasy</P>
				<p><B>Illustrator: </B>Francis Donkin Bedford</P>
				<p><B>Characters: </B> Peter Pan, Wendy Darling, Tinker Bell, Captain Hook, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.670.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book4---->
		<div id="book">
		<div class="filterDiv ClB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn21" href="#"><B>The Adventures of Sherlock Holmes</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\The_Adventures_of_Sherlock_Holmes.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal21" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Adventures_of_Sherlock_Holmes.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>The Adventures of Sherlock Holmes</h3>
				<p style="margin-top:20px"><B>Originally published:</B>  October 14, 1892<p>
				<p><B>Author: </B>  Arthur Conan Doyle</P>
				<p><B>Page count: </B> 307</P>
				<p><B>Genre: </B> Short story, Fiction, Crime Fiction, Mystery, Detective fiction, Noir fiction</P>
				<p><B>Publisher: </B> George Newnes</P>
				<p><B>Characters: </B> Sherlock Holmes, Doctor Watson, Mycroft Holmes, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.900.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book5------>
		<div id="book">
		<div class="filterDiv ClB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn22" href="#"><B>Hamlet </B></a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\Hamlet.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal22" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img src="img\Hamlet.jpg" width="150px" height="150px">
			
			<!--text-->
			<div id="text">
			<h3>Hamlet </h3>
				<p style="margin-top:20px"><B>Originally published:</B>1609<p>
				<p><B>Author: </B> William Shakespeare</P>
				<p><B>Original language: </B> English</P>
				<p><B>Genre: </B> Tragedy</P>
				<p><B>Adaptations: </B> The Lion King (1994), Hamlet (1996), Haider (2014), MORE</P>
				<p><B>Characters: </B> Ophelia, Claudius, Polonius, Laertes, Gertrude, Horatio, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.560.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
<!--book6---->
		<div id="book">
		<div class="filterDiv ClB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn23" href="#"><B>The Hobbit</B></a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\The_Hobbit.jpg" ">
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal23" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Hobbit.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>The Hobbit</h3>
				<p style="margin-top:20px"><B>Originally published:</B> September 21, 1937<p>
				<p><B>Author: </B> J. R. R. Tolkien</P>
				<p><B>Illustrator:  </B> J. R. R. Tolkien</P>
				<p><B>Genre: </B> High fantasy, Juvenile fantasy</P>
				<p><B>Characters: </B> Bilbo Baggins, Gandalf, Thorin Oakenshield, Smaug, MORE</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.960.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
<!---history-->
<!--book1---->
		<div id="book">
		<div class="filterDiv HiB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn24" href="#"><B>I, Claudius</B></a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\I_Claudius.jpg">
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal24" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\I_Claudius.jpg">
			
			<!--text-->
			<div id="text">
			<h3>I, Claudius</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1934<p>
				<p><B>Author: </B>  Robert Graves</P>
				<p><B>Followed by: </B> Claudius the god</P>
				<p><B>Genre: </B> Fiction, Historical Fiction, Biographical Fiction</P>
				<p><B>Adaptations: </B> I, Claudius (1976), I, Claudius (1937)</P>
				<p><B>Characters: </B>  Gaius Octavian, Tiberius, Claudius, Livia Drusilla, Germanicus</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.580.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book2---->
		<div id="book">
		<div class="filterDiv HiB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn25" href="#"><B>War and Peace</B></a>
			<div id="book1"style="margin-top:30px">
			<img id="imgB" src="img\War_and_Peace.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal25" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\War_and_Peace.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>War and Peace</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1867<p>
				<p><B>Author: </B>  Leo Tolstoy</P>
				<p><B>Original title: </B> error: text has italic markup (help)</P>
				<p><B>Genre: </B>  Novel (Historical Fiction)</P>
				<p><B>Page count: </B> 1,225 (first published edition)</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.560.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>

<!--book3---->
		<div id="book">
		<div class="filterDiv HiB">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn26" href="#"><B>Genghis Khan and the Making ......</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\Genghis_Khan_and_the_Making_of_the_Modern_World.jpg">
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal26" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\Genghis_Khan_and_the_Making_of_the_Modern_World.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>Genghis Khan and the Making of the Modern World</h3>
				<p style="margin-top:20px"><B>Originally published:</B>  March 16, 2004<p>
				<p><B>Author: </B> Jack Weatherford</P>
				<p><B>Preceded by: </B> The history of money</P>
				<p><B>Genre: </B>  Biography</P>
				<p><B>Followed by: </B>  The Secret History of the Mongol Queens</P>
				<p><B>Page count: </B> 312</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.960.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book4---->
		<div id="book">
		<div class="filterDiv HiB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn27" href="#"><B>How the Irish Saved Civilization</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\How_the_Irish_Saved_Civilization.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal27" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\How_the_Irish_Saved_Civilization.jpg" >
			
			<!--text-->
			<div id="text">
			<h3>How the Irish Saved Civilization</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1995<p>
				<p><B>Author: </B> Thomas Cahill</P>
				<p><B>Followed by: </B> The Gifts of the Jews</P>
				<p><B>Page count: </B> 246</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1200.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
<!--book5---->
		<div id="book">
		<div class="filterDiv HiB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn28" href="#"><B>The Path Between the Seas</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\The_Path_Between_the_Seas.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal28" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\The_Path_Between_the_Seas.jpg">
			
			<!--text-->
			<div id="text">
			<h3>The Path Between the Seas</h3>
				<p style="margin-top:20px"><B>Originally published:</B> 1977<p>
				<p><B>Author: </B> David McCullough</P>
				<p><B>Genre:  </B> History</P>
				<p><B>Publisher:   </B> Simon & Schuster</P>
				<p><B>Awards:  </B>National Book Award for History</P>
				<p><B>Page count: </B> 698</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.700.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
			
<!--book6---->
		<div id="book">
		<div class="filterDiv HiB"style="margin-top:50px">
			<!-- Trigger/Open The Modal -->
			<a id="myBtn29" href="#"><B>How the World Became Modern</B></a>
			<div id="book1"style="margin-top:10px">
			<img id="imgB" src="img\How_the_World_Became_Modern.jpg" >
			</div>
			<div id="bu1"  >
			<button id="buy"  onclick="buyfuntion()"><a href="cart1.php">buy</a></button>
			</div>
			</div>
			<!-- The Modal -->
			<div id="myModal29" class="modal">
			
			<!-- Modal content -->
			<div class="modal-content">
			<span class="close">&times;</span>
			<img id="imgB" src="img\How_the_World_Became_Modern.jpg">
			
			<!--text-->
			<div id="text">
			<h3>How the World Became Modern</h3>
				<p style="margin-top:20px"><B>Originally published:</B> September 19, 2011<p>
				<p><B>Author: </B>  Stephen Greenblatt</P>
				<p><B>Genre: </B>   Non-fiction</P>
				<p><B>Publisher:</B> W. W. Norton & Company</P>
				<p><B>Page count: </B> 356</P>
				<p><B>Awards:  </B> Pulitzer Prize for General Nonfiction, National Book Award for Nonfiction</P>
				<div style="margin-top:60px">
				<p><B>Price:</B>RS.1160.00</p>
				</div>
			</div>
			</div>
			</div>
			</div>
</div>


<!---payment---->
<img  src="img\text.gif" style="margin-top:2px" >
		<form id="demo" style="background:url(1730260802.jpg);display:none;border-style: solid; border-color: gray; border-width: 3px;width:600px;height:170px;margin-left:300px;margin-top:20px">
			<p style="text-decoration:underline"><BIG><B>Pay with</B></BIG><p>
						<div style="border-bottom: 1px solid grey;">
							<input type="radio" name="pay" value="Paypal" style="margin-top:20px"> Paypal
							<button style="width:50;height:20px;float:right;margin-top:-30px" type="button" onclick="myfunctionpaypal()" ><i class="down">DOWN</i></button>
							
						</div>
					</td>
					<td>
						<div style="border-bottom: 1px solid grey;">
						<input type="radio" name="pay" value="Credit card" style="margin-top:20px"> Credit card<br>
						<button style="width:50;height:20px;float:right;margin-top:-30px" type="button" onclick="myfunction2()" ><i class="down">DOWN</i></button>
						</div>
						<button id="CDbt" type="button" value="cancel" onclick="myfunctioncancelpay()" style="margin-right:30px"><i><B>CANCEL</B></i></button>
		</form>
		
		
		<form id="demopaypal" style="background:url(1730260802.jpg); background-size:100% 100%; background-repeat:repeat;display:none;border-style: solid; border-color: gray; border-width: 3px;height:200px;margin-left:300px;width:600px;margin-top:-10px">
					<p style="margin-top:10px"><u><B>Paypal Account Information</B></u></p>
							<div id="cDetial" style="margin-left:100px">
								<label>User Name</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right">
							</div>
							
							<div id="cDetial" style="margin-left:100px">
								<label>Password</label>
								<input id="Itext" type="password" style="margin-right:30px;float:right">
							</div>
							
							</div>
							<div style="border:none;height:27px;margin-top:120px;margin-right:250px">
							<button id="CDbt" type="button" value="cancel" onclick="myfunctioncancelpaypal()"><i><B>cancel</B></i></button>
							<button  id="CDbt" type="submit"value="Done" ><i><B>Done</B></i></button>
							<button id="CDbt" type="reset" value="Reset"><i><B>Reset</B></i></button>
							</div>
		</form>
		
							
		<form id="demo1" style="background:url(1730260802.jpg); background-size:100% 100%; background-repeat:repeat;display:none;border-style: solid; border-color: gray; border-width: 3px;height:490px;margin-left:300px;width:600px;margin-top:-10px">
					<p style="margin-top:0px"><u><B>Card information</B></u></p>
							<div id="cDetial">
								<label>Card number</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right">
							</div>
							
							<div id="cDetial" style="margin-left:2px">
								<label>Payment type</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right">
							</div>
							<div id="cDetial" style="margin-top:10px">
								<label>Expiration Date</label>
								<input id="Itext" type="text" placeholder="mm/dd/yyyy" style="margin-right:125px;float:right;width:100px;margin-top:5px">
							</div>
							<div id="cDetial" style="margin-top:10px">
								<label>CSC</label>
								<input  type="text" style="margin-top:20px;margin-right:180px;float:right;width:50px">
							</div>
							<hr/>
							
							<p style="margin-top:100px"><u><B>Billing information</B></u></p>
							<div id="cDetial">
								<label>Surname</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right;margin-top:20px">
							</div>
							<div id="cDetial">
								<label>Given name</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right;margin-top:1px">
							</div>
							<div id="cDetial"style="margin-top:10px">
								<label>Address line 1</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right">
							</div>
							<div id="cDetial"style="margin-top:10px">
								<label>Address line 2</label>
								<input id="Itext" type="text" placeholder="(OPTIONAL)" style="margin-right:30px;float:right">
							</div>
							<div id="cDetial" style="margin-top:10px">
								<label>Postcode</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right;margin-top:20px" >
							</div>
							<hr/>
							
							<p style="margin-top:150px"><u><B>Contact information</B></u></p>
							<div id="cDetial" style="margin-top:10px">
								<label>Telephone</label>
								<input id="Itext" type="text" style="margin-right:30px;float:right;margin-top:5px">
							</div>
							<div id="cDetial"style="margin-top:10px">
								<label>Email</label>
								<input id="Itext" type="text"style="margin-right:30px;float:right;margin-top:20px">
							</div>
							
							</div>
							<div style="border:none;height:27px;margin-top:90px;margin-right:50px">
							<button id="bt2" type="button" value="cancel" onclick="myfunctioncancel()"style="float:left;margin-left:45px;margin-top:10px" ><i><B>cancel</B></i></button>
							<button  id="bt2" type="submit"value="Done" style="float:left;margin-left:25px;margin-top:10px;margin-right:2px"><i><B>Done</B></i></button>
							<button id="bt2" type="reset" value="Reset" style="float:right;margin-left:10px;margin-top:10px"><i><B>Reset</B></i></button>
							</div>
		</form>
						
		

<!----shopping cart-->
	<div >
		
		<div style="background:url(img/1730260802.jpg); background-size:100% 100%; background-repeat:repeat;border-style: solid; border-color: gray; border-width: 3px;width:1000px;height:600px;margin-left:102px;margin-top:20px">
		<td valign="top" >
            <table cellpadding="4" cellspacing="4" border="1" id="orderedProductsTbl">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Description
                        </td>
                        <td>
                            Price
                        </td>
                    </tr>
                </thead>
                <tbody id="orderedProductsTblBody">
           </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" align="right" id="cart_total">

                        </td>
                    </tr>
                </tfoot>
            </table>
        </td>
		<td>
					<form class="nowrap tr italic" style="width:500px;height:60px;margin-top:-10px;margin-left:400px">
						
						<button id="bt2" style="float:left;margin-left:195px;margin-top:-35px;margin-right:1px" ><i>Reset</i></button> 
						<button id="bt2"  style="float:right;margin-left:10px;margin-top:-35px" type="button" onclick="myFunction()"><i>submit</i></button>
					</form>
				</td>
</table>
				
		</div>
	</div>




<footer>
		<p>Copyright 2018 BuyBookBy.com.All Rights Reserved</p>			
</footer>


<!--  Javascript  -->

<script>
filterSelection("chilB")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  
  if (c == "Children’s Books") c = "";
  for (i = 0; i < x.length; i++) {

    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }


}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });

}

// modal children books
// modal 1
var modal111 = document.getElementById('myModal111');

var btn = document.getElementById("myBtn111");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal111.style.display = "block";
}
span.onclick = function() {
    modal111.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal111) {
        modal111.style.display = "none";
		}
}
// modal 2
var modal1 = document.getElementById('myModal1');

var btn = document.getElementById("myBtn1");

var span = document.getElementsByClassName("close")[1];

btn.onclick = function() {
    modal1.style.display = "block";
}
span.onclick = function() {
    modal1.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
		}
}

// modal 3
var modal2 = document.getElementById('myModal2');

var btn = document.getElementById("myBtn2");

var span = document.getElementsByClassName("close")[2];

btn.onclick = function() {
    modal2.style.display = "block";
}
span.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
		}
}

// modal 4
var modal3 = document.getElementById('myModal3');

var btn = document.getElementById("myBtn3");

var span = document.getElementsByClassName("close")[3];

btn.onclick = function() {
    modal3.style.display = "block";
}
span.onclick = function() {
    modal3.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
		}
}

// modal 5
var modal4 = document.getElementById('myModal4');

var btn = document.getElementById("myBtn4");

var span = document.getElementsByClassName("close")[4];

btn.onclick = function() {
    modal4.style.display = "block";
}
span.onclick = function() {
    modal4.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
		}
}

//modal6
var modal5 = document.getElementById('myModal5');

var btn = document.getElementById("myBtn5");

var span = document.getElementsByClassName("close")[5];

btn.onclick = function() {
    modal5.style.display = "block";
}
span.onclick = function() {
    modal5.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
		}
}

//Action and Adventure Books
// modal 1
var modal6 = document.getElementById('myModal6');

var btn = document.getElementById("myBtn6");

var span = document.getElementsByClassName("close")[6];

btn.onclick = function() {
    modal6.style.display = "block";
}
span.onclick = function() {
    modal6.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal6) {
        modal6.style.display = "none";
		}
}

// modal 2
var modal7 = document.getElementById('myModal7');

var btn = document.getElementById("myBtn7");

var span = document.getElementsByClassName("close")[7];

btn.onclick = function() {
    modal7.style.display = "block";
}
span.onclick = function() {
    modal7.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal7) {
        modal7.style.display = "none";
		}
}

// modal 3
var modal8 = document.getElementById('myModal8');

var btn = document.getElementById("myBtn8");

var span = document.getElementsByClassName("close")[8];

btn.onclick = function() {
    modal8.style.display = "block";
}
span.onclick = function() {
    modal8.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal8) {
        modal8.style.display = "none";
		}
}
// modal 4
var modal9 = document.getElementById('myModal9');

var btn = document.getElementById("myBtn9");

var span = document.getElementsByClassName("close")[9];

btn.onclick = function() {
    modal9.style.display = "block";
}
span.onclick = function() {
    modal9.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal9) {
        modal9.style.display = "none";
		}
}

// modal 5
var modal10 = document.getElementById('myModal10');

var btn = document.getElementById("myBtn10");

var span = document.getElementsByClassName("close")[10];

btn.onclick = function() {
    modal10.style.display = "block";
}
span.onclick = function() {
    modal10.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal10) {
        modal10.style.display = "none";
		}
}
// modal 6
var modal11 = document.getElementById('myModal11');

var btn = document.getElementById("myBtn11");

var span = document.getElementsByClassName("close")[11];

btn.onclick = function() {
    modal11.style.display = "block";
}
span.onclick = function() {
    modal11.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal11) {
        modal11.style.display = "none";
		}
}

//Romens Book
// modal 1
var modal12 = document.getElementById('myModal12');

var btn = document.getElementById("myBtn12");

var span = document.getElementsByClassName("close")[12];

btn.onclick = function() {
    modal12.style.display = "block";
}
span.onclick = function() {
    modal12.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal12) {
        modal12.style.display = "none";
		}
}

// modal 2
var modal13 = document.getElementById('myModal13');

var btn = document.getElementById("myBtn13");

var span = document.getElementsByClassName("close")[13];

btn.onclick = function() {
    modal13.style.display = "block";
}
span.onclick = function() {
    modal13.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal13) {
        modal13.style.display = "none";
		}
}

// modal 3
var modal14 = document.getElementById('myModal14');

var btn = document.getElementById("myBtn14");

var span = document.getElementsByClassName("close")[14];

btn.onclick = function() {
    modal14.style.display = "block";
}
span.onclick = function() {
    modal14.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal14) {
        modal14.style.display = "none";
		}
}

// modal 4
var modal15 = document.getElementById('myModal15');

var btn = document.getElementById("myBtn15");

var span = document.getElementsByClassName("close")[15];

btn.onclick = function() {
    modal15.style.display = "block";
}
span.onclick = function() {
    modal15.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal15) {
        modal15.style.display = "none";
		}
}

// modal 5
var modal16 = document.getElementById('myModal16');

var btn = document.getElementById("myBtn16");

var span = document.getElementsByClassName("close")[16];

btn.onclick = function() {
    modal16.style.display = "block";
}
span.onclick = function() {
    modal16.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal16) {
        modal16.style.display = "none";
		}
}
// modal 6
var modal17 = document.getElementById('myModal17');

var btn = document.getElementById("myBtn17");

var span = document.getElementsByClassName("close")[17];

btn.onclick = function() {
    modal17.style.display = "block";
}
span.onclick = function() {
    modal17.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal17) {
        modal17.style.display = "none";
		}
}
//Classic Book
// modal 1
var modal18 = document.getElementById('myModal18');

var btn = document.getElementById("myBtn18");

var span = document.getElementsByClassName("close")[18];

btn.onclick = function() {
    modal18.style.display = "block";
}
span.onclick = function() {
    modal18.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal18) {
        modal18.style.display = "none";
		}
}
// modal 2
var modal19 = document.getElementById('myModal19');

var btn = document.getElementById("myBtn19");

var span = document.getElementsByClassName("close")[19];

btn.onclick = function() {
    modal19.style.display = "block";
}
span.onclick = function() {
    modal19.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal19) {
        modal19.style.display = "none";
		}
}
// modal 3
var modal20 = document.getElementById('myModal20');

var btn = document.getElementById("myBtn20");

var span = document.getElementsByClassName("close")[20];

btn.onclick = function() {
    modal20.style.display = "block";
}
span.onclick = function() {
    modal20.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal20) {
        modal20.style.display = "none";
		}
}
// modal 4
var modal21 = document.getElementById('myModal21');

var btn = document.getElementById("myBtn21");

var span = document.getElementsByClassName("close")[21];

btn.onclick = function() {
    modal21.style.display = "block";
}
span.onclick = function() {
    modal21.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal21) {
        modal21.style.display = "none";
		}
}
// modal 5
var modal22 = document.getElementById('myModal22');

var btn = document.getElementById("myBtn22");

var span = document.getElementsByClassName("close")[22];

btn.onclick = function() {
    modal22.style.display = "block";
}
span.onclick = function() {
    modal22.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal22) {
        modal22.style.display = "none";
		}
}
// modal 6
var modal23 = document.getElementById('myModal23');

var btn = document.getElementById("myBtn23");

var span = document.getElementsByClassName("close")[23];

btn.onclick = function() {
    modal23.style.display = "block";
}
span.onclick = function() {
    modal23.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal23) {
        modal23.style.display = "none";
		}
}

//Historical Books
// modal 1
var modal24 = document.getElementById('myModal24');

var btn = document.getElementById("myBtn24");

var span = document.getElementsByClassName("close")[24];

btn.onclick = function() {
    modal24.style.display = "block";
}
span.onclick = function() {
    modal24.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal24) {
        modal24.style.display = "none";
		}
}

// modal 2
var modal25 = document.getElementById('myModal25');

var btn = document.getElementById("myBtn25");

var span = document.getElementsByClassName("close")[25];

btn.onclick = function() {
    modal25.style.display = "block";
}
span.onclick = function() {
    modal25.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal25) {
        modal25.style.display = "none";
		}
}

// modal 3
var modal26 = document.getElementById('myModal26');

var btn = document.getElementById("myBtn26");

var span = document.getElementsByClassName("close")[26];

btn.onclick = function() {
    modal26.style.display = "block";
}
span.onclick = function() {
    modal26.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal26) {
        modal26.style.display = "none";
		}
}

// modal 4
var modal27 = document.getElementById('myModal27');

var btn = document.getElementById("myBtn27");

var span = document.getElementsByClassName("close")[27];

btn.onclick = function() {
    modal27.style.display = "block";
}
span.onclick = function() {
    modal27.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal27) {
        modal27.style.display = "none";
		}
}
// modal 5
var modal28 = document.getElementById('myModal28');

var btn = document.getElementById("myBtn28");

var span = document.getElementsByClassName("close")[28];

btn.onclick = function() {
    modal28.style.display = "block";
}
span.onclick = function() {
    modal28.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal28) {
        modal28.style.display = "none";
		}
}
// modal 6
var modal29 = document.getElementById('myModal29');

var btn = document.getElementById("myBtn29");

var span = document.getElementsByClassName("close")[29];

btn.onclick = function() {
    modal29.style.display = "block";
}
span.onclick = function() {
    modal29.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal29) {
        modal29.style.display = "none";
		}
}
//Philosophical Books

//Horror Books

//Short Story Books

function myFunction(){
document.getElementById('demo').style.display='block';
}
function myfunction2(){
document.getElementById('demo1').style.display='block';
document.getElementById('demopaypal').style.display='none';
}
function myfunctioncancel(){
document.getElementById('demo1').style.display='none';

}

function myfunctioncancelpay(){
document.getElementById('demo').style.display='none';
document.getElementById('demo1').style.display='none';
document.getElementById('demopaypal').style.display='none';
}

function myfunctionpaypal(){
document.getElementById('demopaypal').style.display='block';
document.getElementById('demo1').style.display='none';
}

function myfunctioncancelpaypal(){
document.getElementById('demopaypal').style.display='none';

}








<!--
 var shoppingCart = [];

    function displayShoppingCart(){
        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
        while(orderedProductsTblBody.rows.length>0) {
            orderedProductsTblBody.deleteRow(0);
        }

        var cart_total_price=0;
        for(var product in shoppingCart){ 
            var row=orderedProductsTblBody.insertRow();
            var cellName = row.insertCell(0);
            var cellDescription = row.insertCell(1);
            var cellPrice = row.insertCell(2);
			var cell1 = row.insertCell(3);
			cell1.innerHTML = '<button onclick="myDeleteFunction()">Delete row</button>'; 
			
            cellPrice.align="right";
            cellName.innerHTML = shoppingCart[product].Name;
            cellDescription.innerHTML = shoppingCart[product].Description;
            cellPrice.innerHTML = shoppingCart[product].Price;
            cart_total_price+=shoppingCart[product].Price;
        } 
        document.getElementById("cart_total").innerHTML=cart_total_price;
		
    }


    function AddtoCart(name,description,price,img){
       var singleProduct = {};
       singleProduct.Name=name;
       singleProduct.Description=description;
       singleProduct.Price=price;
       shoppingCart.push(singleProduct);
       displayShoppingCart();

    } 
	   function deleteProduct(product_id, e) {
            e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
            for (var i = 0; i < products.length; i++) {
                if (products[i].product_id == product_id) {
                    products.splice(i, 1);
                }
            }
        }
			
function myDeleteFunction() {
    document.getElementById("orderedProductsTblBody").deleteRow(0);
}

</script>








</script>

</body>
</html>