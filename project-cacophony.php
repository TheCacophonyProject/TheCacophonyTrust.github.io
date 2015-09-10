<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>The Cacophony Project</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>
	<link rel="stylesheet" href="/css/app.css" />
	<link rel="icon" type="image/png" href="/favicon.png">
<meta name="keywords" content="The Cacophony Project" />
<meta name="description" content="The Cacophony Project" />
	<script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="js/d3.min.js"></script>	<!-- move to bower_components -->
</head>
<body id="project-cacophony">

<?php include('includes/nav.php'); ?>

	<!-- hero -->
<section class="project-header hero" id="subpage-hero">
	<div id="hero-text">
		<div class="row">
			<div class="small-12 columns">
				<h1>Unleashing Moore’s Law on the pests</h1>
			</div>
		</div>
	</div>
</section>

<section id="cacophonometer">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<img src="/img/cacophonometer-icon.png">
		</div>
		<div class="small-12 medium-6 columns">
				<h2>Data collection hardware – Cacophonometer</h2>
				<p>The aim of this project is to have a cheap reliable way of collecting and uploading data to the cloud. Our initial assumption is that sound is a pretty good high level indicator of what is going on in local area.</p>

				<p>A cheap smart phone is the ideal first Cacophonometer and it has all the required electronics. We put the cacophonometer in a water proof container with a plug in microphone and solar charger. This give us an inexpensive way to capture the state of the environement in lots of places. …Detailed specification of initial data logger is here</p>
				<p>We are keen on any contributions that will help create a cheaper more reliable device. Buy one to play with here.</p>
		</div>
	</div>
</section>

<section id="components" class="gray">
	<div class="row">
		<div class="small-12 columns">
			<h2>Main components</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">

				<ul>
					<li>Core processor – eg Arduino or cheap smart phone</li>
					<li>Data input devices – sound recorder, GPS, temp</li>
					<li>Data transfer devices (one of…wifi, cell data, Bluetooth, SD card)</li>
					<li>Power supply – solar collector</li>
				</ul>
		</div>
		<div class="small-12 medium-6 columns">
				<ul>
					<li>Photo/video capability</li>
					<li>Battery</li>
					<li>Water proof enclosure – attachment method</li>
				</ul>
		</div>
	</div>
</section>

<section id="data-collection" class="green">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#cacophonometer" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<h2>Data collection, upload and storage software</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<p>The software on the devices is designed to be upgradable so that the sampling, processing and uploading algorithms can be upgraded as it is learned the best way to collect and analyse data. This will also be configurable for different environments and objectives.</p>
			<ul>
				<li>Data sampling method – how often and of what quality it the data collected</li>
				<li>Data processing – how is it processed in hardware before uploading – eg turned into MP3 format to reduce data size</li>
				<li>Data uploading method – wifi, cell data, Bluetooth walk/flyby, SD card</li>
				<li>Data cleaning – removing any voices before going into the database so there are no possible privacy issues</li>
				<li>Storage structure – pretty simple, recording, time, GPS, other in intervals of 1 minute?</li>
			</ul>
			<p>The first cacophonometer is an android phone that records and automatically uploads the data to the cloud from WiFi or cell data. One of the projects on the wish list is to use the open source mesh network software available on Android phones to allow data collection where there is no cell phone reception.</p>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/pukeko-icon.jpg">
		</div>
	</div>
</section>

<section id="analysis" class="gray">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#data-collection" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-5 columns">
				<img src="/img/analysis.png">
		</div>
		<div class="small-12 medium-7 columns">
				<h2>Ways the data can be analysed</h2>
				<p>Our assumption here is that the way we can analysis this now is only a fraction of what may be possible in the future so we want to make it as easy as possible to store in a way that gives flexibility for future analysis. There are an infinite number of ways this could possibly be analysed Some suggested types of analysis possible</p>
				<ul>
					<li>Cacophony index - The first objective is to have a simple index of the health of the ecosystem based on sound analysis. While this will never be perfect it is at least objective and can be retrospectively analysed as techniques improve. Eg every 5 second interval tested for if there is a bird noise or not – then gives score from 0-100 on quantity of bird noise in any given period.</li>
					<li>Graph to show the trend in cacophony index at each data collection point</li>
					<li>Analysis of pest noises – can you detect possums or rats based on sound?</li>
					<li>Analysis of control methods – can you detect a trap going off?</li>
					<li>Analysis of types of birds – can you identify types of birds?</li>
					<li>Maps – so anyone can see visually where the high cacophony and dead zones are</li>
					<li>Experiment design – can we suggest best ways to design experiments for pest eradication/control. Eg monitors in place for 1 month before traps set and two areas the same one with and one without trapping to compare….</li>
					<li>Data collection analysis – from all of the above can you estimate optimal spacing and data collection methods…</li>
				</ul>
		</div>
	</div>
</section>

<section id="applications">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#analysis" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-7 columns">
			<h2>Aps for community engagement</h2>
			<p>
				This can include any form of interaction with general public or people engaged in conservation. A list of ideal project would be
			</p>
			<ul class="hide-for-medium-up">
  				<li>Ap that allowed anyone to hold phone up, press record for set time (eg 1-5 minutes), enter email and then get sent a cacophony measurement for their area</li>
				<li>Assess other data in your area to see how well you are doing</li>
				<li>Enter simple trap update data – GPS, time and state of trap – reset, maintained, re-baited etc</li>
				<li>Ap in walking mode to collect data while on a tramp – uploaded when return. Most people have a powerful  mobile computer so we should use to help the birds</li>
				<li>Have a map of traps in your area that need working on in your region</li>
				<li>Suggested things you can do to improve the cacophony in your area</li>
				<li>Have graph to show trends in cacophony in area and who has contributed to it – eg john smith – easy link to update to Facebook etc</li>
			</ul>
		</div>
	</div>
	<div class="row hide-for-small">
		<div class="small-12 columns">
				<img src="/img/community.png">
		</div>
	</div>
</section>

<section id="first-product" class="green">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#applications" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<h2>First product</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">

			<p>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <br><br>

Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. <br><br>

Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? <br><br>

Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
			</p>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/product-tree.png">
		</div>
	</div>
</section>

<section id="open-source">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#first-product" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<h2>Open Source - Participation and Reuse</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<p>Our main goals with this project are to:</p>
			<ol>
				<li>create a community of interested technologists, biologists, and other researchers around the hardware, software and scientific problems we need to address to make the project a success, and</li>
				<li>encourage commercial interests to provide services which dovetail with or benefit from the work we are doing.</li>
			</ol>
			<p>We are working to ensure that our licensing first and foremost protects the interests of our community and collaborators. Our next priority is to be an attractive partner to commercial interests.</p>
			<h3>License types</h3>
			<p>The software components of the Cacophony Project are made available as "Free Software", which is also open source, under <a href="http://www.gnu.org/copyleft/copyleft.en.html">copyleft</a> licenses like the <a href="http://www.gnu.org/licenses/gpl-3.0.en.html">GNU General Public License, v3 or later</a> (GPL) or the <a href="http://www.gnu.org/licenses/agpl-3.0.en.html">Affero General Public , v3 or later</a> (AGPL). We do this to protect the interests of both users and developers, who are often the very same people.</p>
			<p>To the extent to which we are able, we will entertain requests to make individual software components available to commercial partners under different licenses which allow commerical exploitation, however we will do this only if a sufficiently strong, mutually beneficial case for doing so can be made, as these sorts of arrangements can strain the relationships of open source communities.</p>

			<h3>Toolset</h3>
			<p>This project is built around a small set of open source collaboration tools: OnlineGroups.Net for email list communication, Git for source code control, and Taiga for Kanban-style project coordination. All of these tools are both open source and gratis (free of cost) to use.</p>
			<p>If you want to find out more about the project - regardless of whether you're a software developer, scientist, or just an interested member of the the public, we invite you to <a href="http://groups.nzoss.org.nz/groups/projectcacophony">join our OnlineGroups.Net mailing list</a> (provided by the <a href="https://nzoss.org.nz">NZ Open Source Society</a>) and get involved in the discussion, or just browse/search the past discussion in the archives! It's the easiest way to participate, and participation is what we're after!</p>
			<p>The main project, with its software sub-components is the <a href="https://github.com/TheCacophonyProject">Cacophony Project on GitHub</a>. You are welcome to peruse the existing code base, and we encourage you to test our code - feel free to fork away! We love pull requests.</p>
			<p>We manage the day to day work on the project via our <a href="https://tree.taiga.io/project/the-cacophony-project/">Cacophony Project</a> on <a href="http://taiga.io">Taiga.io</a> (Taiga is similar to Trello, but is free to use, and fully open source, i.e. you can create your own self-hosted instances of Taiga) - you currently need a <a href="https://tree.taiga.io/register">user account</a> (available at no cost) on Taiga to join the project.</p>

			<h3>Technology stack</h3>
			<p>We have selected technologies for a number of the planned components of the Cacophony Project, and number are still in the planning stages. Technology choices will be made based on what our committed contributors believe offers the best likelihood of success and future viability. We will, of course, only use free and open source technologies to ensure that all interested contributors are able to participate without any artificial barriers.</p>
			<p>For our Cacophonometers, we are using the following technology stack:</p>
			<ul>
				<li>Android (4.0 or better) OS</li>
				<li>Android SDK and developer tools</li>
				<li>Commodity hardware</li>
			</ul>
			<p>For server components, including our sound file aggregation and distribution service, we are planning to use (subject to compelling arguments for other technologies):</p>
			<ul>
				<li>Linux Server (virtual instances) - Ubuntu 14.04 LTS</li>
				<li>Node.JS</li>
				<li>PostgreSQL</li>
				<li>Amazon S3 for sound data storage</li>
			</ul>

			<h3>Links to project </h3>
			<p>
				List of links to varous parts of project...
			</p>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/open-source-icon.png">
		</div>

	</div>
</section>





<section id="call-out">
	<div class="row">
		<div class="small-12 columns">
			<h2>There are a number of ways you can help. Find out more <a href="#">here</a></h2>
			<h4>If you think you can help then <a href="#">sing out</a></h4>
		</div>
	</div>
</section>


<script>
$('#the-project-link').css("font-weight","bold");
</script>
<?php include('includes/footer.php'); ?>

</body>
</html>
