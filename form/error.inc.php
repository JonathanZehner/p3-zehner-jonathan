<style media="screen">
* {
  border: 0;
  margin: 0;
  padding: 0;
}

/*----------------------------------


      Universal Styling


-----------------------------------*/

body {
  background: #161717c7;
  color: #161717;
  font: normal 16px/1.5 'mr-eaves-xl-modern', 'opificio', sans-serif;
}

div {
  background: #fffffff2 url(../images/celestial-hands-notext-background.png) repeat fixed center;
  border: 5px solid #a8a096;
  margin: 0 auto;
  padding: 10px 20px;
  position: absolute;
  top: 40%;
  width: 80%;
}

.small {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.logo {
  width: 250px;
}

a {
  text-decoration: none;
  color: #161717;
}

/*-- Unvisited Link --*/
a:link {
  color: #161717;
}

/*-- Visisted Link --*/
a:visited {
  color: #9783AA;
  font-weight: bold;
}

/*-- Mouse Over Link --*/
a:hover {
  text-decoration: underline;
  font-size: 1.3em;
  transition: .2s;
}

/*-- Header Styling --*/

header {
  background: #d7bcb7;
  padding: 15px 25px;
  position: fixed;
  width: 100%;
  z-index: 999;
}

header img {
  position: absolute;
}

nav ul li a{
  list-style-type: none;
  padding: 5px 15px;
  transition: .2s
}

.main-menu {
  position: relative;
  text-align: center;
  border: none;
}

.main-menu ul li {
  display: inline-block;
  padding: 20px;
  margin: 10px;
  text-transform: uppercase;
}

.top-right-menu {
  min-width: 200px;
  position: fixed;
  right: 10px;
  top: 15px;
  border: none;
}

.top-right-menu ul li {
  display: inline-block;
  margin: 10px;
}
/*-- header end --*/


/*-- footer begin --*/

footer {
  background: #d7bcb7;
  position: relative;
  height: 150px;
  top: 80%;
}

footer .small {
    position: absolute;
    margin: 34px 50px;
    background: white;
    border: 2px solid #a8a096;
    border-radius: 10px;
    width: 75px;
    height: 75px;
}

.resources,
.about,
.other-links {
  position: relative;
  float: left;
  left: 10%;
  display: block;
  margin: 15px 50px;
  padding: 10px 0;
  padding-left: 95px;
  border-left: 2px solid #16171778;
  text-align: center;
}

.resources a,
.about a,
.other-links a {
    display: block;
    transition: .2s;
}

address {
  line-height: 1.2;
}

.address {
    position: relative;
    text-align: left;
    margin: 15px 25px;
    z-index: 999;
    float: right;
    border-left: 2px solid #16171778;
    padding-left: 50px;
}

address a {
    color: blanchedalmond;
}

.nwd {
    line-height: 1.2;
    margin: 3px auto;
}
/*-- footer end --*/
</style>

<body>
  <header>

  <!--- Brand Logo --------->
    <h1><img src="images/bird-navlogo-transparent.png" class="logo" alt="flyCOLLECTIVE logo" title="Robin's Nest"></h1>

  <!--- Navigation Bar ----->
    <nav class="nav-bar">
      <section class="main-menu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="boutique.html">Boutique</a></li>
          <li><a href="health.html">Health</a></li>
        </ul>
      </section>

      <section class="top-right-menu">
        <ul>
          <li><a href="#">Search</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Subscribe</a></li>
        </ul>
      </section>
    </nav>
  </header>

	<div class="container">


		<h1>Missing fields</h1>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
	</div>





<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

	<footer>
		<img src="images/flycollective-logo.png" class="small" alt="image of logo" title="flyCOLLECTIVE">

		<section class="resources">
			<h4>Resources</h4>
			<a href="#">Robin's Nest</a>
			<a href="#">Domestic Violence Link</a>
			<a href="#">DV Link</a>
		</section>

		<section class="about">
			<h4>About</h4>
			<a href="#">About</a>
			<a href="#">Products</a>
			<a href="#">Health and Wellness</a>
		</section>

		<section class="other-links">
			<h4>Other Links</h4>
			<a href="#">Sip & Shop</a>
			<a href="#">Facebook</a>
			<a href="#">Instagram</a>
		</section>

		<section class="address">
			<address>
				<p><a href="mailto:kelle.zehner@gmail.com">Kelle Zehner</a></p>
				<p>P.O. Box ####</p>
				<p>Jacksonville, NC 28540</p>
				<p><a href="tel:+17199306427">719.930.6427</a></p>
			</address>

			<p class="nwd">&copy; <strong>Created by<br><a href="www.nomadwebdesigns.com">NomadWebDesigns</a></strong></p>
		</section>
	</footer>
</body>
