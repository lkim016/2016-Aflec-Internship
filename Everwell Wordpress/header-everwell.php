<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="initial-scale=1"> //this messes up mobile formatting-->
	<title>Test</title>

<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="normalize.css">

<style>
html {
  font-family: "Century Gothic";
}

html,
body {
    width: 100%;
    height: 100%;
	margin: 0px;
    background-color: white;
}

html, header, body {
	min-width: 580px;
}

/*Header ***************************************/
#headerWrapper{
	width: 75%;
	margin: 0 auto;
	padding-top: 10px;
	height: 600px;}
.header{height:100%;}
.aflac-logo{width: 200px;}
.ever-logo{
	float: right;
	margin-top: -10px;}
.blue-box{
	background-color: #01a7e5;
	height: 100%;
}
.guyDiv{
	width: 35%;
	top: 20%;
	position: relative;
	display: inline-block;}
.guy{width: 100%;}
.tableWrap{
	width: 64%;
	float: right;
	height: 90%;
}
.acc-dates{
	position: relative;
	float: right;
	width: 85%;
	top: 5%;
	right: 15%;
	color: #fff;}
.acc-dates h1 {
	border-bottom: 2px solid #fff;
	text-align: center;}
/*for tabs*/
.tabsHeader {
	position: relative;
	margin-top: 82px;
	height: 65%;
	width: 86%;
	top: 7%;}
.tabHeader {float: left;}
.tabHeader label {
	background: #01a7e5; 
	color: #fff;
	padding: 10px; 
	margin-left: -1px; 
	position: relative;
	left: 1px; }
.tabHeader [type=radio] {display: none;}
.content {
	position: absolute;
	top: 28px;
	left: 0;
	background: white;
	right: 0;
	bottom: 0;
	padding: 20px;
	border: 1px solid #ccc; }
.contentHeader {
	position: absolute;
	top: 28px;
	left: 0;
	background: white;
	right: 0;
	bottom: 0;
	padding: 20px;
	border: 1px solid #ccc; }
[type=radio]:checked ~ label {
	background: white;
	color: #01a7e5;
	font-weight: bold;
	border-bottom: 2px solid white;
	z-index: 2;}
[type=radio]:checked ~ label ~ .content {z-index: 1;}
.tabz {border-radius: 10px 10px 0 0;}

/*end of tabs*/
/*/*Desktop Breakpoints*/
@media screen and (max-width: 900px) {
	#headerWrapper{height: 710px;}
	.aflac-logo{
		margin: 0 auto;
		display: block;
	}
	.ever-logo{display: none;}
	.blue-box{background-color: #01a7e5;}
	.guyDiv {
		margin: 0 auto;
		display: block;
		top: 0;
		width: 50%;
	}
	.tableWrap{
		width: 100%;
		height: 45%;
		position: relative;
		top: 0px;
	}
	.acc-dates {
		position: static;
		margin: 0 auto;
		padding-bottom: 20px;
		width: 50%;
		float: none;
	}
	.tabsHeader {
		width: 70%;
		margin: 0 auto;
		top: -10px;
		height: 95%;
	}
}
/*mobile PORTRAIT & LANDSCAPE*/
@media(max-device-width: 450px){ 
	#headerWrapper{
		width: 100%;
		height: 700px;}
	.aflac-logo{
		margin: 0 auto;
		display: block;}
	.ever-logo{display: none;}
	.blue-box{
		background-color: #01a7e5;
		position: relative;}
	.guyDiv{
		display: block;
		margin: 0 auto;
		top: 10px;
		}
	.tableWrap{
		width: 100%;
		height: 70%;
	}
	.acc-dates {display: none;}
	.acc-dates h1 {border-bottom: none;}
	.tabsHeader {
		position: relative;
		top: 0px;
		left: 210px;
		height: 325px;
		width: 60%;
		}}	

/*END OF HEADER *******************************/




/*BODY *****************************************/


/* ----------------Career Section ----------- */


.service-text {
	padding: 80px 40px;
	background-color: white;
	margin-top:30px;
	width: 100%;
	}

.service-text p {
	padding-bottom: 0px;
  }

.service-thumb {
	overflow: hidden;
  	position: relative;
}

.service-thumb {
	width: 200px;
	height: 200px;
  	background-image: url("images/service.png");
	background-size: cover;
}

/* ----------------
.service-thumb .overlay-p {
position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #72b842; visibility: hidden; opacity: 0; -webkit-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -o-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;}  ----------- */


.service-text {
	padding: 20px 40px;
	background-color: white;
	margin-top:20px;
	margin-right:auto;
  	margin-left:auto;
	}

.service-text p {
	padding-bottom: 0px;
  }

.service-thumb {
	overflow: hidden;
 	position: relative;
}

.service-thumb {
	width: 200px;
	height: 200px;
  	background-image: url("images/service.png");
  	background-size: auto;
}
/* ----------------
.service-thumb .overlay-p {
position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #72b842; visibility: hidden; opacity: 0; -webkit-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -o-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;}  ----------- */

.service-item {
  	width: 200px;
  	text-align: center;
}


.service-thumb:hover {
	visibility: visible; 
	opacity: 0.5;
}


.service-container{
  padding-top: 20px;
  padding-right:15px;
  padding-left:15px;
  margin-right:auto;
  margin-left:auto;\
  height: 100%;
}

.service-container:before,.service-container:after{
  display:table;content:"";
}

.service-container:after{
  clear:both;
}

.job-column-3,.job-column-1,.job-column-2{
  position:relative;
  padding-right:15px;
  padding-left:15px;
  padding-bottom: 25px;
  width: 200px;
  text-align: center;
}

.job-column-3,.job-column-1,.job-column-2 a{
	font-family: "Century Gothic";
	text-decoration: none;
  	color: #01a7e5;
}
.job-column-3,.job-column-1,.job-column-2 a:hover{
  color: orange;
}

a p{
  margin-top: 0px;
  margin-bottom: 0px;
}

.job-column-1{float:left}

.job-column-1{width:230px;}

@media(min-width:540px){
.job-column-2{float:left}

.job-column-2{width:230px;}}

@media(min-width:982px){
  .job-column-3{
  float:left
  }

  .job-column-3{
  width:230px;
  }
}

.register_div{
	padding-top: 50px;
	padding-bottom: 100px;
	text-align: center;
}

.registerButton{
	position: relative;
	font-size: 25px;
	font-weight: bold;
	font-family: "Century Gothic";
	text-decoration: none;
	color: #fff;
	padding: 33px 14% 33px 14%;
	background-color: #01a7e5;
	moz-border-radius: 15px;
  	-webkit-border-radius: 15px;
  	border: 5px solid;
	border-color: #01a7e5;
}

.registerButton:hover{
	background-color: #FFF;
	color: #01a7e5;
	border: 5px solid;
	border-color: #01a7e5;
}


@media(min-width:550px){
	.service-container{width:490px;}
	.registerButton{width: 70%;}}

@media(min-width:800px){
	.service-container{width:720px;}
	.registerButton{width: 60%;}}

@media(min-width:1200px){
	.service-container{width:950px;}
	.registerButton{width: 50%;}}

.popup_content{
    display: none;
    position: fixed;
    top: 15%;
    left: 20%;
    width: 60%;
    height: 70%;
    padding: 16px;
    border: 10px solid #01a7e5;
    border-radius: 10px;
    background-color: white;
    z-index:1002;
    overflow: auto;
    text-align: center;
    font-size: 14px;
    }

.popup_Title{
	text-align: center;
	color: #01a7e5;
	margin-top: 0px;
}

.popup_content p.popup_Text, ul, li {
	text-align: left;
	padding-bottom: 10px;
}
.black_overlay{
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index:1001;
    -moz-opacity: 0.5;
    opacity:.50;
    filter: alpha(opacity=80);
}

.popup_Close{
	text-decoration: none;
	font-weight: bold;
  	color: #01a7e5;
  	bottom: 18%;
  	left: 48%;
  	position: fixed;
}
.popup_Close:hover{
  	color: orange;
}

/*MOBILE VERSION*************/

@media only screen and (max-device-width: 750px) and (orientation: landscape){
	.service-thumb {
		width: 200px;
		height: 200px;}

	.service-item {
		width:200px;}

	.popup_content{
		top: 15%;
    	left: 5%;
    	width: 90%;
    	height: 70%;
	}

	@media(min-width:900px){.service-container{width:720px;}}

	.job-column-1{width:230px;}

	@media(min-width:960px){.job-column-3{width:230px;}}

	.job-column-3,.job-column-1,.job-column-2{
		padding-right:15px;
		padding-left:15px;}

	.job-column-3,.job-column-1,.job-column-2 a{
		font-size: 20px;
	}

	.learnFont{
		font-size: 16px;
	}
}	

@media only screen and (max-device-width: 450px) and (orientation: portrait){
	.service-thumb {
		width: 300px;
		height: 300px;}

	.service-item {
		width:300px;}

	.popup_content{
		top: 15%;
    	left: 5%;
    	width: 90%;
    	height: 70%;}

	.registerButton{
		font-size: 45px;
	}

	@media(min-width:640px){.service-container{width:700px;}}

	.job-column-1{width:230px;}

	@media(min-width:450px){.job-column-2{width:330px;}}

	.job-column-3,.job-column-1,.job-column-2{
		padding-right:15px;
		padding-left:15px;}

	.job-column-3,.job-column-1,.job-column-2 a{
		font-size: 30px;
	}
	.learnFont{
		font-size: 25px;
	}
}

@media print{img{page-break-inside:avoid}img{max-width:100%!important}}

*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}







/*END OF BODY **************************************/

/* Footer ******************************************/

footer {
}

.footerContain {
	width: 75%;
	height: 325px;
	margin: auto;
	padding-top: 30px;
	background-color: #01a7e5;
}

table {
	width: 100%;
	height: 50%;
	margin: auto;
	/** all of the font styles except font-weight apply except
	to input[...btnsubmit] **/
	font-family: "Century Gothic";
	color: white;
	font-weight: lighter;
	letter-spacing: 1.5px;
	background-color: #01a7e5;
	border-collapse: collapse;
}

th {
	font-size: 120%;
}

td {
	text-align: center;
}

td > p {
	font-size: 100%;
}

/* !!fix spacing between th and td after fixing the inputs!! */

/* COLUMN 1 */

.column1 {
	width: 30%;
}

/* COLUMN 2 */

.column2 {
	width: 50%;
	border-left: 1px solid white;
	border-right: 1px solid white;
}

form {
	padding: 2.5% 0;
}

form > p {
	/** spacing between the input boxes **/
	margin: 7.5px 0 7.5px 0;
}

input {
	width: 65%;
	height: 25px;
	border: 1px solid white;
}

input[name = "btnsubmit"] {
	height: 25px;
	font-family: "Century Gothic";
	font-size: 100%;
	color: white;
	background-color: #01a7e5;
	border: 1px solid white;
}

input[name = "email"], input[name = "subject"], textarea[name="message"]{
	color: black;
	font-size: 80%;
}

textarea {
	width: 65%;
	height: 100px;
	resize: none;
}

.mobCol {
	display: none;
}

/* COLUMN 3 */

.column3 {
	width: 20%;
}

.column3 img {
	width: 65px;
	height: 65px;
	/** spacing between widgets **/
	margin-top: 5px;
	margin-right: auto;
	margin-left: auto;
}

img[name="fbImage"]:hover {
	content: url('http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/facebookcolor.png');
}
img[name="twitImage"]:hover {
	content: url('http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/TwitterHoverImage.png');
}
img[name="instaImage"]:hover {
	content: url('http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/InstaHover.png');
}

/*** MEDIA QUERY BEGINS ***/
/** BROWSER **/

@media(max-width: 800px) {
/* FOOTERCONTAINTER*/
 .footerContain {
	width: 100%;
	padding-top: 25px;
 }

 /* COLUMNS */
 .column1 {
	display: none;
 }

 .column2 {
	border: none;
 }

 .column3 {
	display: none;
 }

/* COLUMN 3 */
 .mobCol {
	height: 100px;
	padding-top: 1.5%;

	display: block;
 }

 .mobCol img {
	width: 65px;
	height: 65px;
}

 .mobCol > div {
	width: 65%;
	margin: auto;
 }

}

@media(max-width: 515px) {
/* COLUMN 3 */
 .mobCol img {
	width: 20%;
 }
}

/*** MOBILE ***/
@media only screen and (max-device-width: 750px) {
.footerContain {
	width: 100%;
 }

 /* COLUMNS */
 .column1 {
	display: none;
 }

 .column2 {
	border: none;
 }

 .column3 {
	display: none;
 }

/* COLUMN 3 */
 .mobCol {
	height: 125px;

	display: block;
 }

 .mobCol > div {
	width: 50%;
	margin: auto;
 }

 .mobCol img {
	width: 15%;
	margin: auto;
 }
}
</style>

</head>

<body>
<header>
	<div id="headerWrapper">
		<div class="header">
		<!-- Alfac and Everwell logos go here -->
			<img src="http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/aflacLogo.png" alt="Aflac Main Logo" class="flexbox-item aflac-logo">
			<img src="http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/everwell-logo.png" alt="Everwell Main Logo" class="flexbox-item ever-logo">
			<!-- Blue Box goes here -->
			<section class="blue-box">
				<div class="guyDiv">	
					<img class="guy" src="http://www.everwellpasadenabeta.com/wp-content/uploads/2016/03/guy.png" alt="Picture in blue box">
				</div>	
        <div class="tableWrap">
					<div class="acc-dates">
						<h1>ACCOUNT</h1>
					</div>	
						<!-- Tabs -->
			<div class="tabsHeader">
			    <div class="tabHeader">
			       <input type="radio" id="tab-1" name="tab-group-1" checked>
			       <label class="tabz" for="tab-1">AGENT</label>
			       <div class="content">
			           
			<!-- section inside the agent tab -->
				<section>

					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

				

						<br class="clear">

			

					</article>
					<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'Everwell' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

				</section>
			<!-- /section -->

			       </div> 
			    </div>
			   <div class="tabHeader">
			       <input type="radio" id="tab-2" name="tab-group-1">
			       <label class="tabz" for="tab-2">DATES</label>       
			       <div class="contentHeader">
			           DATES
			       </div> 
			   </div>
			</div> 
      </div>  
			 <!-- end of tabs -->
			</section>
		</div>					
	</div>
</header>