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
		<a href="#contactme">Contact Me</a>
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
	</script>
	  
	  <p>Currently, I am focusing in further developing &#128200 this website. If you wish to give suggestion(s), 
	  you can contact &#128241 me through my given social media accounts. Though you can email me at nrmasotes@student.apc.edu.ph, please 
	  be reminded that I cannot answer it on time, please consider checking my local time. 
	  <button onclick="this.innerHTML=Date()">Click to see my local time. &#128355</button> </p>

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
			<div id="myportfolio">   
			<h1>My Portfolio</h1>
			<p>Here are the past projects that I worked together with my groupmates from my previous subjects. I did enjoy (including hard times) designing wireframes and a Python application</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
				in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			  <div class="projects">
				  <img src="RAMS Portal mobile ver.  INMEDIA (1).gif" 
				  alt="profile pic" width="400" height="300"  style="width: 200px; 
				  margin-left: 200px; position: relative; border-radius: 2%;">
				  <img src="proj2.png" 
				  alt="pnr demo" width="1000px" height="250px"  style="width: 500px; 
				  margin-left: 200px; position: relative; border-radius: 2%; margin-top: 1px;">
			  </div>
			  <br>
			  <br>
			  <br>
			  <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="row">
		<div id="contactme">  
			<h1>Contact me!</h1>
			<p><span class="error">You can contact me by filling up the required form below.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>	 
			Comment/Suggestion: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
			</form>

			<?php
			echo "<h4>Your Input:</h4>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
			?>
		<br>
		<br>
		<br>
		<br>
</div>
		<div class="footer">
				<h3>&copy; Nathaniel Masotes  2023</h3>
		</div>
<script src="myscript.js"></script>
</body>
</html>