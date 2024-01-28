<!DOCTYPE html>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AVB</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<input type="file" value="./demo.txt" style="display:none" id="inputdocument">
<script type="text/plain" id="scriptinputdoc">
<?php       
            $ressource = fopen('demo.txt', 'rb');
            echo fread($ressource, filesize('demo.txt'));
        ?></script>
<link  href="./demo.txt" id="linkext" type="text/plain">
<object data="./demo.txt" id="objectext" ></object>
</head>
<body>
<!-- Main Container -->
	<div class ="container" style="height:auto; padding-top:40px; padding-bottom:20px">
		<div class="headdiv" style="width:80%; margin-left: 10%; margin-right: 10%;">
			<table style="width: 100%">
				<tr>
					<td id="name">
						<div id="name">
							<h1 class="name" id="couleurprimaire"> Antoine Van Biesbroeck</h1>
							<h4 class="soustitre">PhD candidate,<br> CMAP, Ecole Polytechnique & CEA Saclay<br>Paris-Saclay, France</h4>
						</div>
					</td>
					<td id="photo">
						<div id="photo">
					    <img class="spotlight" src="pers/IMG20230828185509_.jpg" alt=""/></div>
					</td>
				</tr>
			</table>
		</div>
	<div class="container"> 
  <!-- Navigation -->
  <header> <a href="./index.html">
    <p class="logo">Home</p>
    </a>
    <nav>
      <ul>
        <li><a href="./research.html">Research</a></li>
        <li><a href="./cv.pdf">About</a></li>
        <li> <a href="./contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <!-- About Section -->
	<section class="about" id="couleurneutresecondaire"  style="padding-bottom: 40px; vertical-align: middle">
		<h3 class="finaltext">Publications</h3>
		<p class="finaltext">
			<ul class="finaltext" id="ullistpublications">
				<li><strong>2023</strong>. A. Van Biesbroeck,&nbsp;<em id=titlearticle>Generalized mutual information and their reference prior under Csizar f-divergence</em>. arXiv 2310.10530. <a href="https://doi.org/10.48550/arXiv.2310.10530">link</a></li>
				<li><strong>2023</strong>. C. Gauchy, A. Van Biesbroeck, C. Feau, J. Garnier,&nbsp;<em id=titlearticle>Inférence variationelle de lois a priori de référence</em>, proceedings des 54èmes Journées de Statistique de la SFDS.</li>
				<li><strong>2023</strong>. A. Van Biesbroeck, C. Gauchy, J. Garnier, C. Feau,&nbsp;<em id=titlearticle>Connections between reference prior theory and global sensitivity analysis, an illustration with f-divergences</em>, proceedings des 54èmes Journées de Statistique de la SFDS. <a href="https://hal.science/hal-04171446">link</a></li>
				<li><strong>2023</strong>. A. Van Biesbroeck, C. Gauchy, C. Feau, J. Garnier,&nbsp;<em id="titlearticle">Influence of the choice of the seismic Intensity Measure on fragility curves estimation in a Bayesian framework based on reference prior</em>, proceedings of the 5th ECCOMAS Thematic Conference on Uncertainty Quantification in Computational Sciences and Engineering. <a href="https://doi.org/10.7712/120223.10327.19899">link</a></li>
<li><strong>2023</strong>. A. Van Biesbroeck, C. Gauchy, C. Feau, J. Garnier,&nbsp;<em id=titlearticle>Reference prior for Bayesian estimation of seismic fragility curves</em>, arXiv 2302.06935. <a href="https://doi.org/10.48550/arXiv.2302.06935">link</a></li>
		</ul>
		<script src="js/sort_publications.js"></script>
		</p><br>
	  <p class="finaltext">Find more in my <a href="./cv.pdf">resume</a>.</p>
    </section>
  <!-- Stats Gallery Section -->
  
  <!-- Parallax Section -->
  
  <!-- More Info Section -->
  <!-- Footer Section -->
  
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2024- <strong>Antoine Van Biesbroeck&nbsp;</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
