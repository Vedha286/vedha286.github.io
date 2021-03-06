<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vedha Krishna</title>
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i&display=swap" rel="stylesheet">
	
	<link href="css/bootstrap-min.css" rel="stylesheet">	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<style>

.nav {
	padding-left: 0;
	margin-bottom: 0;
	list-style: none
}

.nav>li {
	position: relative;
	display: block
}

.nav>li>a {
	position: relative;
	display: block;
	padding: 10px 15px
}

.nav>li>a:focus,.nav>li>a:hover {
	text-decoration: none;
	background-color: #eee
}

.nav>li.disabled>a {
	color: #777
}

.nav>li.disabled>a:focus,.nav>li.disabled>a:hover {
	color: #777;
	text-decoration: none;
	cursor: not-allowed;
	background-color: transparent
}

.nav .open>a,.nav .open>a:focus,.nav .open>a:hover {
	background-color: #eee;
	border-color: #337ab7
}

.nav .nav-divider {
	height: 1px;
	margin: 9px 0;
	overflow: hidden;
	background-color: #e5e5e5
}

.nav>li>a>img {
	max-width: none
}

.nav-tabs {
	border-bottom: 1px solid #ddd
}

.nav-tabs>li {
	float: left;
	margin-bottom: -1px
}

.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0
}

.nav-tabs>li>a:hover {
	border-color: #eee #eee #ddd
}

.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover {
	color: #555;
	cursor: default;
	background-color: #fff;
	border: 1px solid #ddd;
	border-bottom-color: transparent
}

.nav-tabs.nav-justified {
	width: 100%;
	border-bottom: 0
}

.nav-tabs.nav-justified>li {
	float: none
}

.nav-tabs.nav-justified>li>a {
	margin-bottom: 5px;
	text-align: center
}

.nav-tabs.nav-justified>.dropdown .dropdown-menu {
	top: auto;
	left: auto
}

@media (min-width:768px) {
	.nav-tabs.nav-justified>li {
		display: table-cell;
		width: 1%
	}

	.nav-tabs.nav-justified>li>a {
		margin-bottom: 0
	}
}

.nav-tabs.nav-justified>li>a {
	margin-right: 0;
	border-radius: 4px
}

.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover {
	border: 1px solid #ddd
}

@media (min-width:768px) {
	.nav-tabs.nav-justified>li>a {
		border-bottom: 1px solid #ddd;
		border-radius: 4px 4px 0 0
	}

	.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover {
		border-bottom-color: #fff
	}
}

.nav-pills>li {
	float: left
}

.nav-pills>li>a {
	border-radius: 4px
}

.nav-pills>li+li {
	margin-left: 2px
}

.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover {
	color: #fff;
	background-color: #337ab7
}

.nav-stacked>li {
	float: none
}

.nav-stacked>li+li {
	margin-top: 2px;
	margin-left: 0
}

.nav-justified {
	width: 100%
}

.nav-justified>li {
	float: none
}

.nav-justified>li>a {
	margin-bottom: 5px;
	text-align: center
}

.nav-justified>.dropdown .dropdown-menu {
	top: auto;
	left: auto
}

@media (min-width:768px) {
	.nav-justified>li {
		display: table-cell;
		width: 1%
	}

	.nav-justified>li>a {
		margin-bottom: 0
	}
}

.nav-tabs-justified {
	border-bottom: 0
}

.nav-tabs-justified>li>a {
	margin-right: 0;
	border-radius: 4px
}

.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover {
	border: 1px solid #ddd
}

@media (min-width:768px) {
	.nav-tabs-justified>li>a {
		border-bottom: 1px solid #ddd;
		border-radius: 4px 4px 0 0
	}

	.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover {
		border-bottom-color: #fff
	}
}

.tab-content>.tab-pane {
	display: none
}

.tab-content>.active {
	display: block
}

.nav-tabs .dropdown-menu {
	margin-top: -1px;
	border-top-left-radius: 0;
	border-top-right-radius: 0
}

.navbar {
	position: relative;
	min-height: 50px;
	margin-bottom: 20px;
	border: 1px solid transparent
}

@media (min-width:768px) {
	.navbar {
		border-radius: 4px
	}
}

@media (min-width:768px) {
	.navbar-header {
		float: left
	}
}

.navbar-collapse {
	padding-right: 15px;
	padding-left: 15px;
	overflow-x: visible;
	border-top: 1px solid transparent;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
	-webkit-overflow-scrolling: touch
}

.navbar-collapse.in {
	overflow-y: auto
}

@media (min-width:768px) {
	.navbar-collapse {
		width: auto;
		border-top: 0;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.navbar-collapse.collapse {
		display: block!important;
		height: auto!important;
		padding-bottom: 0;
		overflow: visible!important
	}

	.navbar-collapse.in {
		overflow-y: visible
	}

	.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse {
		padding-right: 0;
		padding-left: 0
	}
}

.navbar-fixed-bottom,.navbar-fixed-top {
	position: fixed;
	right: 0;
	left: 0;
	z-index: 1030
}

.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
	max-height: 340px
}

@media (max-device-width:480px) and (orientation:landscape) {
	.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
		max-height: 200px
	}
}

@media (min-width:768px) {
	.navbar-fixed-bottom,.navbar-fixed-top {
		border-radius: 0
	}
}

.navbar-fixed-top {
	top: 0;
	border-width: 0 0 1px
}

.navbar-fixed-bottom {
	bottom: 0;
	margin-bottom: 0;
	border-width: 1px 0 0
}

.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header {
	margin-right: -15px;
	margin-left: -15px
}

@media (min-width:768px) {
	.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header {
		margin-right: 0;
		margin-left: 0
	}
}

.navbar-static-top {
	z-index: 1000;
	border-width: 0 0 1px
}

@media (min-width:768px) {
	.navbar-static-top {
		border-radius: 0
	}
}

.navbar-brand {
	float: left;
	height: 50px;
	padding: 15px 15px;
	font-size: 18px;
	line-height: 20px
}

.navbar-brand:focus,.navbar-brand:hover {
	text-decoration: none
}

.navbar-brand>img {
	display: block
}

@media (min-width:768px) {
	.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand {
		margin-left: -15px
	}
}

.navbar-toggle {
	position: relative;
	float: right;
	padding: 9px 10px;
	margin-right: 15px;
	margin-top: 8px;
	margin-bottom: 8px;
	background-color: transparent;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 4px
}

.navbar-toggle:focus {
	outline: 0
}

.navbar-toggle .icon-bar {
	display: block;
	width: 22px;
	height: 2px;
	border-radius: 1px
}

.navbar-toggle .icon-bar+.icon-bar {
	margin-top: 4px
}

@media (min-width:768px) {
	.navbar-toggle {
		display: none
	}
}

.navbar-nav {
	margin: 7.5px -15px
}

.navbar-nav>li>a {
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 20px
}

@media (max-width:767px) {
	.navbar-nav .open .dropdown-menu {
		position: static;
		float: none;
		width: auto;
		margin-top: 0;
		background-color: transparent;
		border: 0;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a {
		padding: 5px 15px 5px 25px
	}

	.navbar-nav .open .dropdown-menu>li>a {
		line-height: 20px
	}

	.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover {
		background-image: none
	}
}

@media (min-width:768px) {
	.navbar-nav {
		float: left;
		margin: 0
	}

	.navbar-nav>li {
		float: left
	}

	.navbar-nav>li>a {
		padding-top: 15px;
		padding-bottom: 15px
	}
}

.navbar-form {
	padding: 10px 15px;
	margin-right: -15px;
	margin-left: -15px;
	border-top: 1px solid transparent;
	border-bottom: 1px solid transparent;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
	margin-top: 8px;
	margin-bottom: 8px
}

@media (min-width:768px) {
	.navbar-form .form-group {
		display: inline-block;
		margin-bottom: 0;
		vertical-align: middle
	}

	.navbar-form .form-control {
		display: inline-block;
		width: auto;
		vertical-align: middle
	}

	.navbar-form .form-control-static {
		display: inline-block
	}

	.navbar-form .input-group {
		display: inline-table;
		vertical-align: middle
	}

	.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn {
		width: auto
	}

	.navbar-form .input-group>.form-control {
		width: 100%
	}

	.navbar-form .control-label {
		margin-bottom: 0;
		vertical-align: middle
	}

	.navbar-form .checkbox,.navbar-form .radio {
		display: inline-block;
		margin-top: 0;
		margin-bottom: 0;
		vertical-align: middle
	}

	.navbar-form .checkbox label,.navbar-form .radio label {
		padding-left: 0
	}

	.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio] {
		position: relative;
		margin-left: 0
	}

	.navbar-form .has-feedback .form-control-feedback {
		top: 0
	}
}

@media (max-width:767px) {
	.navbar-form .form-group {
		margin-bottom: 5px
	}

	.navbar-form .form-group:last-child {
		margin-bottom: 0
	}
}

@media (min-width:768px) {
	.navbar-form {
		width: auto;
		padding-top: 0;
		padding-bottom: 0;
		margin-right: 0;
		margin-left: 0;
		border: 0;
		-webkit-box-shadow: none;
		box-shadow: none
	}
}

.navbar-nav>li>.dropdown-menu {
	margin-top: 0;
	border-top-left-radius: 0;
	border-top-right-radius: 0
}

.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
	margin-bottom: 0;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0
}

.navbar-btn {
	margin-top: 8px;
	margin-bottom: 8px
}

.navbar-btn.btn-sm {
	margin-top: 10px;
	margin-bottom: 10px
}

.navbar-btn.btn-xs {
	margin-top: 14px;
	margin-bottom: 14px
}

.navbar-text {
	margin-top: 15px;
	margin-bottom: 15px
}

@media (min-width:768px) {
	.navbar-text {
		float: left;
		margin-right: 15px;
		margin-left: 15px
	}
}

@media (min-width:768px) {
	.navbar-left {
		float: left!important
	}

	.navbar-right {
		float: right!important;
		margin-right: -15px
	}

	.navbar-right~.navbar-right {
		margin-right: 0
	}
}

.navbar-default {
	background-color: #f8f8f8;
	border-color: #e7e7e7
}

.navbar-default .navbar-brand {
	color: #777
}

.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover {
	color: #5e5e5e;
	background-color: transparent
}

.navbar-default .navbar-text {
	color: #777
}

.navbar-default .navbar-nav>li>a {
	color: #777
}

.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover {
	color: #333;
	background-color: transparent
}

.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover {
	color: #555;
	background-color: #e7e7e7
}

.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover {
	color: #ccc;
	background-color: transparent
}

.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover {
	color: #555;
	background-color: #e7e7e7
}

@media (max-width:767px) {
	.navbar-default .navbar-nav .open .dropdown-menu>li>a {
		color: #777
	}

	.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
		color: #333;
		background-color: transparent
	}

	.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
		color: #555;
		background-color: #e7e7e7
	}

	.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
		color: #ccc;
		background-color: transparent
	}
}

.navbar-default .navbar-toggle {
	border-color: #ddd
}

.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover {
	background-color: #ddd
}

.navbar-default .navbar-toggle .icon-bar {
	background-color: #888
}

.navbar-default .navbar-collapse,.navbar-default .navbar-form {
	border-color: #e7e7e7
}

.navbar-default .navbar-link {
	color: #777
}

.navbar-default .navbar-link:hover {
	color: #333
}

.navbar-default .btn-link {
	color: #777
}

.navbar-default .btn-link:focus,.navbar-default .btn-link:hover {
	color: #333
}

.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover {
	color: #ccc
}

.navbar-inverse {
	background-color: #222;
	border-color: #080808
}

.navbar-inverse .navbar-brand {
	color: #9d9d9d
}

.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover {
	color: #fff;
	background-color: transparent
}

.navbar-inverse .navbar-text {
	color: #9d9d9d
}

.navbar-inverse .navbar-nav>li>a {
	color: #9d9d9d
}

.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover {
	color: #fff;
	background-color: transparent
}

.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover {
	color: #fff;
	background-color: #080808
}

.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover {
	color: #444;
	background-color: transparent
}

.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover {
	color: #fff;
	background-color: #080808
}

@media (max-width:767px) {
	.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
		border-color: #080808
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu .divider {
		background-color: #080808
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
		color: #9d9d9d
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
		color: #fff;
		background-color: transparent
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
		color: #fff;
		background-color: #080808
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
		color: #444;
		background-color: transparent
	}
}

.navbar-inverse .navbar-toggle {
	border-color: #333
}

.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover {
	background-color: #333
}

.navbar-inverse .navbar-toggle .icon-bar {
	background-color: #fff
}

.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form {
	border-color: #101010
}

.navbar-inverse .navbar-link {
	color: #9d9d9d
}

.navbar-inverse .navbar-link:hover {
	color: #fff
}

.navbar-inverse .btn-link {
	color: #9d9d9d
}

.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover {
	color: #fff
}

.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover {
	color: #444
}
		
		hr.style-four {
			height: 12px;
			border: 0;
			box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
			padding-bottom:50px;
		}
		.desk-img{
			top:0px;
			width:100%;
			position:absolute;
			opacity: 0.8;
			background:orange
		}
		#heading-name{
			font-family: 'Open Sans', sans-serif;
			font-weight:800;
			font-stretch:expanded;
			padding-top:30px;
			font-size:40px;
			color: #ff076e;
			color: #de025d;
			color: #f21b74;
			color: #f21b74;
		}
		#heading-hello{
			font-family: 'Open Sans', sans-serif;
			padding-bottom:30px;
			font-size:23px;
			color:#17a2b8;
			color:#f21b74;
			font-weight:100px;
		}
		
		#heading-main{
			font-family: 'Open Sans', sans-serif;
			padding-top:0px;
			font-size:30px;
			color:#303030;
			font-weight:100px;
		}
		
		
		
		/*TIMELINE */

		/* The actual timeline (the vertical ruler) */
		.timeline {
		  position: relative;
		  max-width: 1200px;
		  margin: 0 auto;
		}

		/* The actual timeline (the vertical ruler) */
		.timeline::after {
		  content: '';
		  position: absolute;
		  width: 6px;
		  background-color: #14213D;
		  top: 0;
		  bottom: 0;
		  left: 50%;
		  margin-left: -3px;
		}

		/* Container around content */
		.timeline_card {
		  padding: 10px 40px;
		  position: relative;
		  background-color: inherit;
		  width: 50%;
		}

		/* The circles on the timeline */
		.timeline_card::after {
		  content: '';
		  position: absolute;
		  width: 25px;
		  height: 25px;
		  right: -17px;
		  background-color: #14213D;
		  border: 4px solid #14213D;
		  top: 15px;
		  border-radius: 50%;
		  z-index: 1;
		}

		/* Place the container to the left */
		.left {
		  left: 0;
		}

		/* Place the container to the right */
		.right {
		  left: 50%;
		}

		/* Add arrows to the left container (pointing right) */
		.left::before {
		  content: " ";
		  height: 0;
		  position: absolute;
		  top: 22px;
		  width: 0;
		  z-index: 1;
		  right: 30px;
		  border: medium solid #14213D;
		  border-width: 10px 0 10px 10px;
		  border-color: transparent transparent transparent #14213D;
		}

		/* Add arrows to the right container (pointing left) */
		.right::before {
		  content: " ";
		  height: 0;
		  position: absolute;
		  top: 22px;
		  width: 0;
		  z-index: 1;
		  left: 30px;
		  border: medium solid #14213D;
		  border-width: 10px 10px 10px 0;
		  border-color: transparent #14213D transparent transparent;
		}

		/* Fix the circle for containers on the right side */
		.right::after {
		  left: -16px;
		}

		/* The actual content */
		.content-heading {
		  padding: 10px 20px;
		  font-family: 'Open Sans', sans-serif;
		  color:#E5E5E5;
		  background-color: #14213D;
		  position: relative;
		  border-radius: 5px 5px 0px 0px;
		}

		.content-body {
		  padding: 10px 20px;
		  background-color: #E5E5E5;
		  position: relative;
		  border-radius: 0px 0px 5px 5px;
		}


		/* Media queries - Responsive timeline on screens less than 600px wide */
		@media screen and (max-width: 600px) {
		  /* Place the timelime to the left */
		  .timeline::after {
		  left: 31px;
		  }
		  
		  /* Full-width containers */
		  .timeline_card {
		  width: 100%;
		  padding-left: 70px;
		  padding-right: 25px;
		  }
		  
		  /* Make sure that all arrows are pointing leftwards */
		  .timeline_card::before {
		  left: 60px;
		  border: medium solid #14213D;
		  border-width: 10px 10px 10px 0;
		  border-color: transparent #14213D transparent transparent;
		  }

		  /* Make sure all circles are at the same spot */
		  .left::after, .right::after {
		  left: 15px;
		  }
		  
		  /* Make all right containers behave like the left ones */
		  .right {
		  left: 0%;
		  }
		}
		
		.hr_name {
			width: 0%;
			  min-width: 20%;
			  max-width: 100%;
			  margin: 0 auto;
			  border: none;
			  border-bottom: 1px solid #666;
			  position: relative;
			  transition: box-shadow 200ms ease-in-out;
			  box-shadow: 0px 0px 0px 0px #f9f9f9;
		}
		
.dots {
  color: #000;
  border-width: 0 0 3px;
  border-style: solid;
  border-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 1" width="8" height="4"><circle fill="#{orange}" cx="1" cy="0.5" r="0.5"/></svg>') 0 0 100% repeat;
   width: 500px;
}

.blue-bg{
	background-color:0ccccf; 
}
		
	</style>


</head>
<body>
	
<!--Join hands-->
<img src="images/desk2.jpg" alt="logo" class="desk-img"/>
<div class="disk-div" style="height:500px;">
		<div class="container-fluid">
			<div class="row welcome text-center">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						<ul class="nav navbar-nav">
									  <li role="presentation" class="active"><a href="#">Home</a></li>
									  <li role="presentation"><a href="#about-me">About Me</a></li>
									  <li role="presentation"><a href="#skills">Skills</a></li>
									  <li role="presentation"><a href="#work">Work Experience</a></li>
									  <li role="presentation"><a href="#edu">Education</a></li>
									  <li role="presentation"><a href="#projects">University Porjects</a></li>
									  <li role="presentation"><a href="#leader">Leadership Experience</a></li>
									  <li role="presentation"><a href="#train">Training and Certification</a></li>
									</ul>
					  </div>
					</nav>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
						
						<br/><br/><br/>
						<hr class="dots"/>
						
						<!--<div style="border: 2px solid black; text-align:center; width:550px;">-->
							<h1 id="heading-name">Vedha Krishna Velthapu</h1>
							<h1 id="heading-hello" style="">3rd year Computer Science Student</h1>
						<!--</div>-->
						<hr class="dots"/>
						<br/><br/>
						<button class="btn btn-info">Download CV</button>
						&nbsp;&nbsp;
						<button class="btn btn-info">Contact Me</button>
						<br/><br/><br/>
					
				</div>			
			</div>
		</div>
	</div>
	<div class="container blue-bg" style="">	
		<div class="row text-center">
			<div class="col-12">
				<h2 id="about-me">About Me</h2>
			</div>
		</div>
		<div class="row welcome text-left" style="background-color:white; ">
			
			<!--<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
				<img class="card-img-top" src="images/vedha.jpg" alt="Card image cap">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">-->
			<div class="col-12" style="padding-right:100px; padding-left:100px;">
			
				<p class="card-text">
					I am a third year Computer Science student at University of Pretoria. I am an optimistic and self-motivated student, with a practical approach to problem solving. I am interested in enhancing my career and branching into web and mobile application development, and AI. My goal is to complete my Master’s degree in Computer Science with my majors in Computer and Information security, Artificial Intelligence and Data Science.
				</p>
			</div>
		</div>
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="skills">Skills</h2>
			</div>
		</div>
		<div class="row text-left" style="background-color:white; ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
				<h6>HTML 5</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
					</div>
				</div>
				<br/>
				
				<h6>CSS 3</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
					</div>
				</div>
				
				<br/>
				<h6>JSON</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
					</div>
				</div>
				<br/>
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
				<h6>JavaScript</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
					</div>
				</div>
				<br/>
				
				<h6>PHP</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
					</div>
				</div>
			</div>
		</div>
		
		<br>
		<br>
		<hr/><br>
		
		<div class="row text-left" style="background-color:white; ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
			
				<h6>Java</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
					</div>
				</div>
				<br/>
				
				<h6>Python</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
					</div>
				</div>
				
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
				<h6>C++</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%;">
					</div>
				</div>
				<br/>
				
				<h6>Assembly</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
					</div>
				</div>
				
			</div>
		</div>
		<br>
		<br>
		<hr/><br>
		
		<div class="row text-left" style="background-color:white; ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
				<h6>MySQL</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-green3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
					</div>
				</div>
				<br/>				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-left:50px; padding-right:50px;">
			</div>
		</div>
		
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="work">Work Experience</h2>
			</div>
		</div>
		<div class="row text-left" style="background-color:white; ">
			<div class="col-12">
				<h4>Teaching Assistant for Netcentric Computer Systems (COS 216)</h4>
				<h6>Reference: &nbsp;&nbsp; asingh@cs.up.ac.za </h6>
				<h6>Date: &nbsp;&nbsp; Feburary 2020 - present</h6>

				<h6>Job roles:</h6>
				<ul class="">
				  <li class="active">Marking student practicals.</li>
				  <li>Assisting students with practical assignments and any module related work during practical sessions.</li>
				</ul>

			</div>
		</div>
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="edu">Education</h2>
			</div>
		</div>
		<div class="row text-left" style="background-color:white; ">		
			<div class="col-12">
				<h4>Bachelor of Science (BsC) in Computer Science:</h4>
				<h6>Current year: &nbsp;&nbsp; 3rd year </h6>
				<h6>Date: &nbsp;&nbsp; Feburary 2018 - current </h6>
				<h6>Institution: &nbsp;&nbsp; University Of Pretoria </h6>
			</div>
		</div>
		<br>
		<hr/><br>
		<div class="row text-left" style="background-color:white; ">		
			<div class="col-12">
				<h4>National Senior Certificate:</h4>
				<h6>Date: &nbsp;&nbsp; January 2013 - December 2017 </h6>
				<h6>Institution: &nbsp;&nbsp; Sutherland High School </h6>
			</div>
		</div>
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="projects">University Porjects</h2>
			</div>
		</div>
		
		<div class="row text-left" style="background-color:white; ">
			<div class="col-12">
				<h4>University Group Project - Build own Compiler:</h4>
				<h6>Date: &nbsp;&nbsp; February 2020 - May 2020</h6>
				<p>
				Our compiler had to covert SPL language code to BASIC code that could be executed by a BASIC compile. We had to validate the code, and the syntax then convert it.</p>
				<h6>Technologies:</h6>
				<ul class="">
				  <li>Java</li>
				</ul>
			</div>
		</div>
		<br>
		<hr/><br>
		<div class="row text-left" style="background-color:white; ">
			<div class="col-12">
				<h4>University Group Project - Mouthpiece Project:</h4>
				<h6>Date: &nbsp;&nbsp; February 2020 - Apr*il 2020</h6>
				<p>
				Mouthpiece is a fun phone app that synchronizes the lip movements of an animated image of a mouth with
a voice stream recorded using the phone's microphone. The Mouthpiece is accompanied by a web service to
support the installation, configuration and customization of Mouthpiece.
</p>
				<h6>Duties:</h6>
				<ul class="">
				  <li>Involved in documenting functional requirements and quality requirements</li>
				  <li>Involved in creating use case diagrams.</li>
				  <li>Involved in creating domain model and deployment model(diagrams)</li>
				  <li>Worked in the converter team that converted voice into usable data that could be used to animate the mouth.</li>
				</ul>
				
				<h6>Technologies:</h6>
				<ul class="">
				  <li>Java</li>
				  <li>Android</li>
				</ul>
			</div>
		</div>
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="leader">Leadership Experience</h2>
			</div>
		</div>
		
		<div class="row text-left" style="background-color:white; ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<h4>Cum Laude Honours for Leadership:</h4>
				<h6>Date: &nbsp;&nbsp; Feburary 2017 </h6>
				<h6>Institution: &nbsp;&nbsp; Sutherland High School </h6>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<h4>Twelve months mentorship of junior learners:</h4>
				<h6>Mentored junior learner for 12 months in Sutherland High School </h6>
				<h6>Date: &nbsp;&nbsp; January 2016 - December 2016</h6>
				<h6>Institution: &nbsp;&nbsp; Sutherland High School </h6>
			</div>
		</div>
		
		<br>
		<hr class="style-four"/>
		<div class="row text-center" style="background-color:white; ">
			<div class="col-12">
				<h2 id="train">Training and Certification</h2>
				<BR/>
				<div class="timeline">
				<div class="timeline_card left">
					<div class="content-heading">
						<h5>Udemy Learn Android Application Development</h5>
					</div>
					<div class="content-body">
						<h6>May 2019 – Currently</h6>
					</div>
				</div>
				<div class="timeline_card right">
					<div class="content-heading">
						<h5>Introduction to Artificial Intelligence with Python</h5>
					</div>
					<div class="content-body">
						<h6>May 2019 – Currently</h6>
					</div>
				</div>
				
				<div class="timeline_card left">
					<div class="content-heading">
						<h5>Short course in Ready for work – Career Planning, University of Pretoria</h5>
					</div>
					<div class="content-body">
						<h6>2018</h6>
					</div>
				</div>
				<div class="timeline_card right">
						<div class="content-heading">
						<h5>Short course in Ready for work – Job Preparation, University of Pretoria</h5>
					</div>
					<div class="content-body">
						<h6>2018</h6>
					</div>
				</div>
				
				<div class="timeline_card left">
					<div class="content-heading">
						<h5>Certificate in Project Management, Sutherland High School</h5>
					</div>
					<div class="content-body">
						<h6>October 2016</h6>
					</div>
				</div>
				<div class="timeline_card right">
					<div class="content-heading">
						<h5>Certificate in Leadership, Sutherland High School</h5>
					</div>
					<div class="content-body">
						<h6>June 2016</h6>
					</div>
				</div>
			</div>
			</div>
		</div>
		
	</div>
	
	
	
	<?php include_once 'php/footer.php';?>
</body>
</html>









<!--- Check out my course on Udemy! -->
<!-- <div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="http://bit.ly/advanced-bootstrap-course" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="https://www.w3newbie.com/wp-content/uploads/nuno-udemy-banner.png" style="max-width: 100%; min-width: 100%;"></a>
</div> -->


