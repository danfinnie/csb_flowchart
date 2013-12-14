<?php $page = "projects"; ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		 <link rel="stylesheet" href="http://yui.yahooapis.com/2.8.0r4/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
		 <link rel="stylesheet" type="text/css" href="/style.css" />
		 <link rel="icon" type="image/gif" href="/images/favicon.gif" />
		<title>Daniel Finnie : CSB Flowchart</title>
		<!-- http://developer.yahoo.com/yui/articles/hosting/?button&connectioncore&json&MIN -->
		<!-- Combo-handled YUI CSS files: -->
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.8.2r1/build/button/assets/skins/sam/button.css">
		<!-- Combo-handled YUI JS files: -->
		<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js&2.8.2r1/build/event-mouseenter/event-mouseenter-min.js&2.8.2r1/build/element/element-min.js&2.8.2r1/build/button/button-min.js&2.8.2r1/build/connection/connection_core-min.js&2.8.2r1/build/json/json-min.js"></script>
		<script src="script.js" type="text/javascript"></script>
	</head>

	<body class="yui-skin-sam" id="<?= $page ?>">
		<div id="doc" class="yui-t2">
			<div id="leftcol">
				<div id="hd" role="banner">
					<h1>Dan Finnie</h1>
					<div id="navbar">
						<!-- The following line must not have any whitespace because the elements are display: inline-block -->
						<ul><?php
							foreach(
								array(
									"index" => "Home",
									"resume" => "Resume",
									"projects" => "Projects",
									"contact" => "Contact",
								) as $code => $human):
						?><li class="<?= ($code == $page ? "current" : "" )?>"><a href="/<?= $code ?>.php"><?= $human ?></a></li><?php endforeach; ?></ul>
					</div>
				</div>
					<div id="yui-main">
						<div class="yui-b">
							<div role="main" class="yui-g">
			<p>This interactive diagram of courses for Lehigh University's Computer Science and Business program is designed to succeed Ed Kay's <a href="http://www.cse.lehigh.edu/undergraduate/BS-CSB.html">current flowchart</a>.  A couple features to keep in mind:</p>
			<ul>
				<li><p>Yellow boxes represent courses that are available to you now, that is, courses for which you've satisfied all the prerequisites of.  Click on courses to mark them as taken and see which courses you need to take.  Start with your highest level courses as the system is smart enough to assume that you took the prerequisites of any course you have taken.</p></li>
				<li><p>In the bottom right hand corner you can select between Fall, Spring, and any.  This will graphically show you which courses are available for the upcoming season.  For instance, if you select Fall then all courses offered only in the spring will be crossed out.  This feature is experimental and does not work in Internet Explorer.</p></li>
			</ul>
			<p>Enjoy! <a href="/contact.html">Contact me</a> with any problems/suggestions...</p>
		</div>
		<div id="flowchart">
			<div id="season-button-group" class="yui-buttongroup">
				<span id="season-button-fall" class="yui-button yui-radio-button">
					<span class="first-child">
							<button type="button" name="season-radio-group" value="fall">
								Fall
							</button>
						</span>
					</span>
					<span id="season-button-spring" class="yui-button yui-radio-button">
						<span class="first-child">
							<button type="button" name="season-radio-group" value="spring">
								Spring
							</button>
						</span>
					</span>
				  <span id="season-button-any" class="yui-button yui-radio-button yui-button-checked">
					  <span class="first-child">
							<button type="button" name="season-radio-group" value="any">
								Any
							</button>
						</span>
					</span>
			</div>
			<div id="tooltip" class="hidden">
				<img src="tooltip-info.png" />
				<div id="tooltip-title">Title</div>
				<div id="tooltip-desc">Desc</div>
				<div id="tooltip-link"><a href="" id="tooltip-a">Link</a></div>
			</div>
			<!-- <img src="postit.png" id="postit" /> -->
							</div>
						</div>
					</div>
					<div role="navigation" class="yui-b">
						<h1 class="boxify">Projects</h1>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
