<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Personal Profile Page</title>

	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

<h1 class="meetjohn">Hi, I am John!</h1>


<div class="button1"> 
	<button id="button">Introducing myself!</button>
</div>

<div id="content">
	<img src="images/aff.jpg" alt="Jorel's Picture"style="width:240px;height:350px;" class="mypicture">
<br>

<hr>

<div class="Personal_Information">
	<div class="PersonalInformation">
		<h2 class="PersonalInfo">Personal Information</h2>
	</div>

	<p><strong>Full Name:</strong> <span id="FullName"></p>

	<p><strong>Nickname:</strong> JJ</p>

	<p><strong>Birthday:</strong><span id="bday"></p>

	<p><strong>Age:</strong> <span id="age"></span></p>

	<p><strong>Hobbies / Interests / libangan:</strong><br><span id="hobbies"></p>
</div>



<hr>
<div class="SchoolInformation">
	<h2 class="SchoolInfo">School Information</h2>
</div>


<p><strong>Senior High School Graduated From:</strong> <br> - Signal Village National High School in Taguig City </strong> </p>

<p><strong>Course:</strong> <br> - Bachelor of Science in Information Technology with specialization in Mobile and Internet 
Technologies </p>

<p><strong>Scholarship:</strong> <br> - Public High School Graduate Scholarship with 50% discount </p>

<p><strong>Why did you choose this course:</strong> <br> - I have always had a sensation of being highly interested and attached to technology 
generally since I was a kid.<br> I perceive technology as giving us an access to a whole new 
digital perspective and a helping hand to do what we <br>request it to do. In this current 
situation, I want to be a part of the tech industry where I can provide IT solutions to users. </p>


<p><strong>I.T. Experience: Programming / Gaming / Others:</strong> <br> - I have only programmed basic programs but 
looking forward to building advanced and complicated projects in the future.
<p id="ITExperience"></p>

<hr>

<div class="OtherInterestingAspects">
	<h2 class="InterestingAspects">Other interesting aspects of my life</h2>
</div>
<p><strong>My Interests:</strong><br> - I am really obsessed to football. I have a team that I have been religiously supporting, 
Manchester United. I would not miss <br> a single game of my favorite team to watch. Watching 
football which gives me a rollercoaster ride filled with emotions is one of <br> the reasons why I 
am still interested in the sport.</p>

<p><strong>Goals in Life:</strong><br>- To graduate and become a successful IT professional and would like to pursue a master’s
degree about IT.</p>

<p><strong>Dreams wish to fulfill:</strong><br> - The ultimate reason for my hardwork and dedication in this life is to give a better life for my 
family where I can support the needs <br> and wants of every member of my family and be skillful on the craft I wish to dive in and take.
</p>

<hr>

<div class="Picturesaboutme">
	<h2 class="PicturesaboutMyself">Pictures about yourself and your interests</h2>
</div>
<div class="container1">
	<img src="images/family picture.jpg" width="300px" height="250px" class="familypic">
	<p class="familyp"> - I am a son of two loving parents, <strong>Graciano Landicho</strong> and <strong>Josefina Landicho</strong>. I also have two sisters older than me, <strong>Graciel Landicho</strong> (left) <br> and <strong>Josiebel Landicho(middle)</strong>. We are a happy family.</p>
</div>

<div class="container2">
	<img src="images/aff.jpg" alt="Jorel's Picture"style="width:240px;height:350px;" class="affsuzuki">
	<p class="affsuzukip"> - The picture on the left is where I have myself taken a picture with the AFF Mitsubishi Cup 2023 trophy. I have watched our national football team play against<br> Brunei and fortunately, we clinched the victory 5-<span id="one"> in favor of the Philippines. It was a fun experience.</p>
</div>

<footer>
	<h3>Follow me on my socials:</h3>
	<a href="https://www.facebook.com/nhojrerojwertyy/" alt=Facebook >
		<img src="images/fb.png" width="40px" height="auto">
	</a>
	<a href="https://www.reddit.com/user/newboo2105" alt="Reddit" class="reddit">
		<img src="https://seeklogo.com/images/R/reddit-logo-23F13F6A6A-seeklogo.com.png" width="40px">
	</a>

	<p id="dateandtime"></p>
	<p> <span id="pagepath"></p>
	<?php
	// My first PHP comment
	$greeting1 = "This is the first time";
	$greeting2 = "I have written a variable on PHP"; 
	echo $greeting1 ." ". $greeting2;


	// Echo/Print
	echo "<br>";
	$one = 1;
	$two = 2;
	echo $one * $two;

	echo "<br>";
	echo "<br>";

	// Data Types
	var_dump($one);
	echo "<br>";
	var_dump($greeting1);

	echo "<br>";
	echo "<br>";

	//Strings
	$characters = "The characters in this statement (including the spaces) are: ";
	echo $characters;
	echo strlen($characters);

	echo "<br>";
	echo "<br>";

	// Operators & Math
	echo 0 . " ".  150 . " " . 30 . " " . 20 . " " .  -8 . " " .  -200;

	echo "<br>";

	echo "The highest number in this list is: ";
	echo(max(0, 150, 30, 20, -8, -200));

	?>
</footer>


<script src="js/script.js"></script>
</div>





</body>

</html>