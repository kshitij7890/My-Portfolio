<?php
    error_reporting(E_ALL &~ E_NOTICE);
	$emailTo = "kshitijsingla7890@gmail.com";
	$subject = "Message from portfolio reader";
	$body = $_POST["message"];
	$header = "From:".$_POST["email"];
	mail($emailTo, $subject, $body, $header);
?>


<!DOCTYPE html>
<html>

<head>

	<title>My Portfolio</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=700, initial-scale=1, shrink-to-fit=no">

    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body data-spy="scroll" data-target="#header" data-offset="100">



	<div id="mobile-menu-open" class="shadow-large">
	        <i class="fa fa-bars" aria-hidden="true"></i>
	    </div>
	    <!-- End #mobile-menu-toggle -->
	    <header>
	        <div id="mobile-menu-close">
	            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
	        </div>
	        <ul id="menu" class="shadow">
	            <li>
	                <a href="#about">About</a>
	            </li>
	            <li>
	                <a href="#experience">Experience</a>
	            </li>
	            <li>
	                <a href="#education">Education</a>
	            </li>
	            <li>
	                <a href="#project">Projects</a>
	            </li>
	            <li>
	                <a href="#skills">Skills</a>
	            </li>
							<li>
	                <a href="#certificates">Certificates</a>
	            </li>
	            <li>
	                <a href="#contact">Contact</a>
	            </li>
	        </ul>
	    </header>
	    <!-- End header -->

	<div id="lead">
        <div id="lead-content">
            <h1>Kshitij Kumar</h1>
            <h2>Web Developer</h2>
            <a href="#" class="btn-rounded-white">Download Resume</a>
        </div>
        <!-- End #lead-content-->

        <div id="lead-overlay"></div>


        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

	<div id="about">

    	<p id="about-heading">
    		About me
    	</p>

	    	<p>

		        <div id="my-image">

		        	<img src="me.jpg" width="200" style="border-radius: 50%;" align="right">

		        </div>
		        <div id="para">
		        My name is Kshitij Kumar, I am a Computer Science Engineering student at Vellore Institute of Technology situated in Vellore.
						 I pursued non medical science stream  after 10th because I like maths, I prepared for engineering entrance exams and ultimately reached here at VIT.
						 I am looking forward to become a software engineer now. I like coding, I've learnt languages like Python, C/C++, Java, HTML, CSS, Javascript/Jquery, PHP.
						  I do competitive coding  as well on online portals like hackerrank, codechef, leetcode in my free time.
							<br><br>&emsp;&emsp;Other than my professional I am huge sports fan.
							I follow a lot of sports like cricket, football, tennis, badminton, baseball, basketball.
							 Some of my favourite sports personalities are Virat Kohli(Cricket), Cristiano Ronaldo(Football), Roger Federer(Tennis).
							 My favourite football club is Real Madrid & my favourite cricket franchise is Mumbai Indians.
							  I believe sports is not only fun but we also get to learn a lot from them.
								These sports personalities, they not only entertain but also motivate us and teach us things like how to fight back whenever you're down.
								 I also play sports like cricket, badminton. In short, I'm very passionate about sports.<br><br>&emsp;&emsp;
								 I also watch TV Series and movies a lot.
							 I've watched a large number of TV series and some of my most favourites which
							 I would like to recommend to you as well are Game of Thrones, Breaking Bad, Friends.
							 I find it difficult to name my favourite movie but some the movies which I liked a lot are Interstellar, Inception, Dunkirk...
							 all directed by Christopher Nolan.
		        </div>
		    </p>

    <div class="clear"></div>
	</div>

	<div id="education" style="margin-top: 50px">

		<p class="content-header">
    		Education
    	</p>

    	<div style="padding-bottom: 5%;margin:0 auto">
			<div class="card education-card shadow p-3 mb-5 bg-white rounded">

			    <div class="card-body">

			        <h5 class="card-title" style="float: left;">Modern Public School , Delhi</h5>
			        <p align="right" class="date">April 2015 - May,2016</p>
			        <h6 class="card-subtitle mb-2 text-muted">Class X</h6>
			        <p class="card-text">CGPA: 10.0</p>

			    </div>

			</div>

			<div class="card education-card shadow p-3 mb-5 bg-white rounded">

			    <div class="card-body">

			        <h5 class="card-title" style="float: left;">Modern Public School , Delhi</h5>

			        <p align="right" class="date">April 2017 - May 2018</p>
			        <h6 class="card-subtitle mb-2 text-muted">Class XII</h6>
			        <p class="card-text">Percentage: 92%</p>

			    </div>

			</div>

			<div class="card education-card shadow p-3 mb-5 bg-white rounded" >

			    <div class="card-body">

			        <h5 class="card-title" style="float: left;">Vellore Institute of Technology, Vellore</h5>

			        <p align="right" class="date">July 2018 - Present</p>
			        <h6 class="card-subtitle mb-2 text-muted">B.Tech, Computer Science Engineering</h6>
			        <p class="card-text">CGPA: 8.96</p>

			    </div>

			</div>
		</div>

	</div>
	<div id="experience" style="margin-top: 50px">

		<p class="content-header">
    		Experience
    	</p>

    	<div style="padding-bottom: 5%;margin:0 auto">
			<div class="card education-card shadow p-3 mb-5 bg-white rounded">

			    <div class="card-body">

			        <h5 class="card-title" style="float: left;">Codechef-VIT</h5>
			        <p align="right" class="date">Dec 2018 - June 2019</p>
			        <p class="card-text">Core Committee Member</p>

			    </div>

			</div>

			<div class="card education-card shadow p-3 mb-5 bg-white rounded">

 				 <div class="card-body">

 						 <h5 class="card-title" style="float: left;">Prakriti Initiatives</h5>
 						 <p align="right" class="date">May 2020 - June 2020</p>
 						 <p class="card-text">Web Development Intern</p>

 				 </div>

 		 </div>

		</div>

	</div>

	<div id="project">

		<p class="content-header">
    		Projects
    	</p>

		<div class="card project-card shadow p-3 mb-5 bg-white rounded" >

		    <div class="card-body">

		        <h2 class="card-title" align="middle">Criminal Database Management</h2>

		        <p class="description">This Prison Management Project is a fullstack project involving backend using PHP and it helps the police officers to maintain a database of all the criminals .<br><a href="https://github.com/kshitij7890/Criminal-Database-Management" style="margin-left: 0  auto;" target="_blank">View Project</a></p>

		    </div>

		</div>

		<div class="card project-card shadow p-3 mb-5 bg-white rounded" >

		    <div class="card-body">

		        <h2 class="card-title" align="middle">DevConnect</h2>

		        <p class="description">This is a MERN Fullstack project. Basically it is a social media platform where developers can interact. <br><a href="https://github.com/kshitij7890/DevConnect" style="margin-left: 0  auto" target="_blank">View Project</a></p>

		    </div>

		</div>

		<div class="card project-card shadow p-3 mb-5 bg-white rounded">

		    <div class="card-body">

		        <h2 class="card-title" align="middle">To Do List</h2>
		        <p class="description">This is a mini project where we can list our day to day works and it is a fully function webpage. For backend NodeJS is used
							and data gets stored with help of MongoDB.<br><a href="https://github.com/kshitij7890/To-Do-List" style="margin-left: 0  auto" target="_blank">View Project</a></p>
		    </div>

		</div>

	</div>


	<div class="clear"></div>

	<div id="skills">

		<p class="content-header">
    		Skills
    	</p>

		<div id="badge-list">
			<ul>
			<li class="badge badge-warning skill-badges" >C++</li>
			<li class="badge badge-danger skill-badges">Python</li>
			<li class="badge badge-secondary skill-badges" >HTML</li>
			<li class="badge badge-dark skill-badges" >CSS</li>
			<li class="badge badge-info skill-badges" >Javascript</li>
			<li class="badge badge-danger skill-badges" >Jquery</li>
			<li class="badge badge-success skill-badges" >Node.js</li>
			<li class="badge badge-dark skill-badges" >MongoDB</li>
			<li class="badge badge-warning skill-badges" >MySQL</li>
			<li class="badge badge-success skill-badges">Data Structures & Algorithms</li>
			<li class="badge badge-info skill-badges">PHP</li>
			<li class="badge badge-danger skill-badges" >Public Speaking</li>
			</ul>

		</div>

	</div>

	<div id="certificates" style="text-align: center;">

		<p class="content-header">
    		Certificates
    	</p>

    	<img class="certificate-img shadow-lg p-3 mb-5 bg-white rounded" width="470" src="certificate1.png" >

    	<img class="certificate-img shadow-lg p-3 mb-5 bg-white rounded" width="500" src="certificate2.png" >

    	<img class="certificate-img shadow-lg p-3 mb-5 bg-white rounded" width="500" src="certificate3.png" >

	</div>




	<div id="contact">

		<p style="font-size:350%;" class="content-header">
    		Get in Touch
    	</p>

    	<div id="error-msg"></div>
		<form  id="contact-form" method="post">

			<div class="form-group row">

			    <div class="col-sm-10">
			        <input type="email" name="email" class="form-control form-control-lg contact-form-content" id="email" placeholder="Your Email">
			    </div>

			</div>

			<div class="form-group row">

			    <div class="col-sm-10">
			        <textarea class="form-control form-control-lg contact-form-content" id="message" rows="3" placeholder="Type your message here..." name="message"></textarea>
			    </div>

			</div>

			<button type="submit" id="submit" name="submit" class="btn btn-white btn-lg" style="float:left;">Send</button>

		</form>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>