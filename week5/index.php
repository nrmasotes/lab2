<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="mystyle.css">
	<link rel="shortcut icon" type="image/png" href="nm.png">
	<script src="https://kit.fontawesome.com/9f49c4b2c4.js" crossorigin="anonymous"></script>
    <title>nrmasotes</title>

</head>
<body>
	<main>
		<div class="topnav">
		<li style="float:right"><a  href="#row"></a>
		<a class="active" href="#Aboutme">About Me</a>
		<a href="#myportfolio">My Portfolio</a>
		<a href="resource.html">Resources</a>
		
		<a href="https://www.facebook.com/nathaniel.masotes11/"><i class="fa-brands fa-facebook"></a></i>
		<a href="https://github.com/nrmasotes"><i class="fa-brands fa-github"></i></a>
		<a href="https://www.linkedin.com/in/nathaniel-hope-masotes-92971321b/"><i class="fa-brands fa-linkedin"></i></a>
		
		<li style="float:left"><a  href="#row">
			<img src="nm.png" width="25px" height="25px" overflow="hidden" margin-top="-6px" margin-right="10px"></a></li>
	</main>

	
	</style>
	</head>
    <div class="row">
      <div class="column1">   
      <h1>Hi there, <br>I'm Nathaniel Masotes</h1>
	  <p>I am currently studying &#128304 at 
	  Asia Pacific College &#127970, 2nd year BSIT student &#128187.
	  I have different hobbies from playing instruments like piano &#127929 and guitar &#127928, 
	  sports&#127936&#127955, reading novels &#128218, and competitive video games &#127918 depending on my mood&#128528 on 
	  which I feel I want to do. Ohhh... in case you are wondering about my height, I stand only at 6 feet flat. </p>

	  <script>
		function goBack() {
		  window.history.back()
		}
		function goForward() {
  window.history.forward()
}
	</script>
	  
	  <p>Currently, I am focusing in further developing &#128200 this website. If you wish to give suggestion(s), 
	  you can contact &#128241 me through my given social media accounts. Though you can email me at nrmasotes@student.apc.edu.ph, please 
	  be reminded that I cannot answer it on time, please consider checking my local time. 
	  <button onclick="this.innerHTML=Date()">Click to see my local time. &#128355</button> </p>
	  
	
	  <p id="p2">"I Can Do All Things Through Christ Who Strengthens Me!" - Philippians 4:13</p>

	  <script>
	  document.getElementById("p2").style.color = "violet";
	  document.getElementById("p2").style.fontFamily = "Courier New";
	  document.getElementById("p2").style.fontSize = "larger";
	  </script>
	  <p id="examplemess"></p>
	  <script>

	
		let message = "";
		
		message = () => {
		  return "Try clicking these buttons!";
		}
		
		document.getElementById("examplemess").innerHTML = message();
		</script>
	  <input type="button" value="Back" onclick="goBack()">
	  <button onclick="myFunction()">Click to see the surprise. &#128514</button>
	  <input type="button" value="Forward" onclick="goForward()">

	<p id="demo"></p>
		</div>
		<div class="pfp">
			<img src="pfp.gif" 
			alt="profile pic" width="400" height="350"  style="width: 250px; 
			margin-left: 50px; position: relative; border-radius: 5%;" >
		</div> 

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="row">
			<div id="getintouch">  
				<h1>Contact Me!</h1>
				<p><i class="fa-regular fa-envelope"></i> nrmasotes@student.apc.edu.ph</p>
				<p><i class="fa-solid fa-phone"></i> 09496723641</p>
	
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<input type="text" name="name" placeholder="Name" required>
				<br>
				<br>
				<input type="email" name="email" placeholder="Email" required>
				<br>
				<br>
				<textarea name="comment" rows="6" placeholder="Comment/Suggestion"></textarea>
				<br>
				<br>
				<button type="submit" class="btn btn2">Submit</button>
				</form>
			<br>
			<br>
			<br>
			<br>
	<?php include 'forms.php'; ?>
	</div>
			<div class="footer">
					<h3>&copy; Nathaniel Masotes  2023</h3>
			</div>
	<script src="myscript.js"></script>
	</body>
	</html>