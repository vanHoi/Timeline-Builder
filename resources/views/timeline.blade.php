<!DOCTYPE html>
<html lang="en">
<head>
	<title>A Free and Easy Timeline Builder</title>
	<link rel="stylesheet" href="/css/timeline.css">
	<link rel="stylesheet" href="/css/vis.min.css">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Analytics>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110162572-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-110162572-1');
	</script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

<br>

<div class="container text-center">
	
	<p class="text-right"><a href="/index.html">English</a> | <a href="/index_nl.html">Nederlands</a></p>
	
	<h1>Timeline Builder</h1>
	
	<br>
	
	<p>A free tool that allows you to create a timeline fast and easy.<br>
		Fill in the fields below, and see a timeline come about!
	</p>
	
	<p>In the first box you set the (start)date or the (start)year of the event. In the second box you can add an
		optional end date. Finally, you can add a description in the last box.<br>
		<span class="font-weight-bold">Tip:</span> When you move your mouse over the timeline window, you can zoom and
		slide!</p>
	
	<br>
	
	<label for="timelineTitleInput">Enter a title:</label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Title" id="timelineTitleInput">
	</div>
	
	<br>
	
	<label>Events</label>
	
	<div class="row" id="event1">
		<div class="col-xl-2 col-md-3 col-sm-6">
			<div class="input-group">
				<input type="number" class="form-control" placeholder="Date From" id="eventStart1" required>
			</div>
		</div>
		<div class="col-xl-2 col-md-3 col-sm-6">
			<div class="input-group">
				<input type="number" class="form-control" placeholder="Date To" id="eventEnd1">
			</div>
		</div>
		<div class="col-xl-8 col-md-6 col-sm-12">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Event" id="eventName1" required>
			</div>
		</div>
	</div>
	
	<div id="addEventsHere"></div>
	
	<div class="clearfix"></div>
	<br>
	
	<button class="btn btn-primary" onclick="addEvent('addEventsHere')">Add Event</button>
	<button class="btn btn-success"
	        onclick="createTimeline('visualization', 'timelineTitleInput', 'timelineTitle', 'downloadButton')">
		Generate Timeline
	</button>
	
	<div id="clearfix"></div>
	<br>
	
	<div id="timeline">
		<h1 id="timelineTitle" class="text-center"></h1>
		<div id="visualization"></div>
	</div>
	
	<div id="downloadButton" style="visibility: hidden;">
		<div class="clearfix"></div>
		<br>
		<h2>Download your timeline!</h2>
		<p>First click on 'Step 1: Generate Photo', then you can click 'Step 2: Download Timeline' to download your
			timeline as PNG file!</p>
		<button class="btn btn-warning" onclick="downloadTimeline('timeline', 'downloadKnop')">Step 1: Generate Photo
		</button>
		<a href="" id="downloadKnop" download>
			<button class="btn btn-warning">Step 2: Download Timeline</button>
		</a>
	</div>
	
	<div class="clearfix"></div>
	<br>
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Tijdlijn Bouwer -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-7525147214420876"
	     data-ad-slot="9694502402"
	     data-ad-format="auto"></ins>
	<script>
        (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	
	<div class="clearfix"></div>
	<br>
	<hr>
	<br>
	<p>Made by Ivo Reumkens, using <a href="http://visjs.org/index.html" target="_blank">vis.js</a> and <a
				href="https://html2canvas.hertzen.com/" target="_blank">html2canvas</a>. </p>

</div>

<!-- Javascript -->
<!-- Tijdlijn bouwer scripts -->
<script src="/js/timelineBuilder.js"></script>
<!-- vis.js -->
<script src="/js/vis.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- html2canvas -->
<script src="/js/html2canvas/html2canvas.min.js"></script>
<script src="/js/html2canvas/html2canvas.svg.min.js"></script>
<!-- Cookiemelding -->
<script type="text/javascript">
    window.cookieconsent_options = {
        "message": "This website uses cookies to ensure you get the best experience on our website.",
        "dismiss": "Dismiss",
        "learnMore": "",
        "link": null,
        "theme": "dark-bottom"
    };
</script>
<script async type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>

</body>
</html>