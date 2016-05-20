<!DOCTYPE html>
<html>
<head>
	<title>Sport News</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<!--<script src="http://code.jquery.com/jquery-1.7.1.main.js"></script>-->
  	<script src="js/bootstrap.main.js"></script>
  	<script>
  		$(document).ready(function(){
  			//initial
  			$('.content').load('home.php');
  			//handle menu clicks
  			$('div.menu div.menu1 a').click(function(){
  				var page = $(this).attr('href');
  				$('.content').load(page + '.php');
  				return false;
  			});
  			$('div.news a').click(function(){
  				var page = $(this).attr('href');
  				$('.content').load(page + '.php');
  				return false;
  			});
  		});
  	</script>
</head>
<body>
	<!--Menu-->
	<div class="menu">
		<div class="menu1"><a style="text-decoration: none; color: white; font-size: 16px;" href="home">Home</a></div>
		<div class="dropdown">
		  <button class="dropbtn">Buscketball</button>
		  <div class="dropdown-content">
		    <a href="#">Womens</a>
		    <a href="#">Mens</a>
		    <a href="#">Kids</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Football</button>
		  <div class="dropdown-content">
		    <a href="#">Womens</a>
		    <a href="#">Mens</a>
		    <a href="#">Kids</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Golf</button>
		  <div class="dropdown-content">
		    <a href="#">Womens</a>
		    <a href="#">Mens</a>
		    <a href="#">Kids</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Rugby</button>
		  <div class="dropdown-content">
		    <a href="#">Womens</a>
		    <a href="#">Mens</a>
		    <a href="#">Kids</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Tennis</button>
		  <div class="dropdown-content">
		    <a href="#">Womens</a>
		    <a href="#">Mens</a>
		    <a href="#">Kids</a>
		  </div>
		</div>
		<div class="menu2"><a style="text-decoration: none; color: white" href="login.php">Login</a></div>
		<div class="menu2"><a style="text-decoration: none; color: white" href="sign_up.php">Sign Up</a></div>
	</div>

	<div class="content"></div>

	<div class="news">
		<div style="width: 100%; height: 20px; background-color: green; margin-top: 15px;">
			<div style="float: left; color: white; text-align: center; font-size: 15px; margin-left: 550px;">Main News</div>
			<div style="float: left; color: white; margin-left: 180px;">|</div>
			<div style="float: left; color: white; text-align: center; font-size: 15px; margin-left: 185px;">Videos</div>
		</div>
		<img src="Atletico-Madrid-vs-Bayern-Munich-260x146.jpg" style="margin-left:-1030px; margin-top: 10px;">
		<a href="news1" style="position:absolute; margin-top: 10px; margin-left: 5px; font-weight: bold; font-size: 24px;">Saul star in Atletico Madrid 1-0 1st Leg win<br/> over Bayern Munich</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">Saul Niguez's well done single strike set Atletico Madrid in charge of<br/> their Champions League semi-final against German giants Bayern<br/> Munich. Saul jinked past a grab of Bayern defenders before curling into<br/> the corner, providing…</p>

		<img src="Mancity-vs-Real-Madrid-260x146.jpg" style="margin-left: 8px; margin-top: -10px;">
		<a href="news2" style="position: absolute; margin-top: -10px; margin-left: 5px; font-weight: bold; font-size: 24px;">Man City Goalless Draw With Real Madrid In<br/> 1st Leg Semi Final</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">Joe Hart kept Manchester City's desires of achieving their very 1st<br/> Champions League final hopes alive with 2 amazing delayed saves that<br/> made sure their semi-final 1st leg with Real Madrid ended goalless. With<br/> star…</p>

		<img src="Lions-vs-Hurricanes-260x146.jpg" style="margin-left: 8px; margin-top: -5px;">
		<a href="news3" style="position: absolute; margin-left: 5px; margin-top: -3px; font-weight: bold; font-size: 24px;">Hurricanes Big Victory Over Lions</a>
		<p style="margin-top: -115px; margin-left: 273px; font-size: 16px;">The Hurricanes carried the Lions back down to earth with a large knock<br/> by smashing the Johannesburg team 17-50 at Emirates (Ellis) Park. The<br/> Hurricanes win is their seventh successive win against the Lions as…</p>

		<img src="Liverpool-vs-Chelsea-260x146.jpg" style="margin-left: 8px; margin-top: 50px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/13/epl-benteke-late-strike-leads-liverpool-draw-with-chelsea/" style="position: absolute; margin-left: 5px; margin-top: 50px; font-weight: bold; font-size: 24px;">Benteke Late Strike Leads Liverpool Draw<br/> With Chelsea</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">Christian Benteke's delayed header stopped out Eden Hazard's amazing<br/> solitary goal as Liverpool held alive their thin desires of a top-six league<br/> end. Chelsea winger Hazard fired a reduced shot into the corner after a…</p>

		<img src="West-Ham-Vs-Manchester-United-260x146.jpg" style="margin-left: 8px; margin-top: 16px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/13/epl-west-ham-fight-back-from-behind-to-beat-man-united/" style="position: absolute; margin-left: 5px; margin-top: 17px; font-weight: bold; font-size: 24px;">West Ham Fight Back From Behind To Beat<br/> Man United</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">West Ham United noted their leaving from Upton Park after 112 years with a<br/> wonderful win which will have finished Manchester United's opportunities of<br/> Champions League eligibility. Louis van Gaal's Tea, realized win here and…</p>

		<img src="Luis-Suarez-260x146.jpg" style="margin-left: 8px; margin-top: 16px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/13/luis-suarez-on-course-for-one-more-milestone/" style="position: absolute; margin-left: 5px; margin-top: 17px; font-weight: bold; font-size: 24px;">Luis Suarez On Course For One More<br/> Milestone</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">Luis Suarez MAY surpass the goal-scoring record at Barcelona of other<br/> Uruguayan Ramon Alberto Villaverde Vazquez this weekend, having<br/> equalled in just 2 edition what his compatriot aggregated in a decade with<br/> the club. Barca…</p>

		<img src="Federer-Djokovic-260x146.jpg" style="margin-left: 8px; margin-top: -5px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/13/federer-joined-djokovic-and-murray-in-the-3rd-round-of-the-rome-masters/" style="position: absolute; margin-left: 5px; margin-top: -3px; font-weight: bold; font-size: 24px;">Federer Joined Djokovic And Murray In The<br/> 3rd Round Of The Rome Masters</a>
		<p style="margin-top: -77px; margin-left: 273px; font-size: 16px;">Roger Federer together Novak Djokovic and Andy Murray in attaining the<br/> 3rd round of the Rome Masters on Wednesday with the Swiss confessing<br/> that he was completely hoping to lose against Alexander Zverev.<br/> "I'm careful…</p>

		<img src="Leicester-City-EPL-Champions-260x146.jpg" style="margin-left: 8px; margin-top: -7px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/10/leicester-city-are-premier-league-champions-2015-16/" style="position: absolute; margin-left: 5px; margin-top: -4px; font-weight: bold; font-size: 24px;">Leicester City Are Premier League Champions<br/> 2015-16</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">Champions Leicester easily defeat Everton before getting presented with the<br/> Premier League trophy on a day of celebrations at the King Power Stadium.<br/> Jamie Vardy have scored double but failed out on a hat-trick by…</p>

		<img src="Novak-Djokovic-2-260x146.jpg" style="margin-left: 8px; margin-top: 18px;">
		<a href="http://www.worldsportnewstoday.com/2016/05/10/djokovic-beat-murray-to-win-the-madrid-open-title/" style="position: absolute; margin-left: 5px; margin-top: 20px; font-weight: bold; font-size: 24px;">Djokovic Beat Murray To Win The Madrid Open<br/> Title</a>
		<p style="margin-top: -80px; margin-left: 273px; font-size: 16px;">World No 1 Novak Djokovic defeat defending winner Andy Murray 6-2 3-6 6-3<br/> in the Madrid Open final match. The beat means the 28-year-old Briton may<br/> lose his world number 2 ranking to Roger Federer on…</p>
	</div>	

	<div class="container" style="margin-top: 40px;">
	  <div class="panel panel-default">
	    <div class="panel-footer">COPYRIGHT 2016 | SPORTS NEWS LITE BY <a href="#" style="text-decoration: none;">WORLD SPORTS NEWS TODAY</a></div>
	  </div>
	</div>
</body>
</html>