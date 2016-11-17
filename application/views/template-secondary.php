<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
		{caboose_styles}
	</head>
	<body>
		<div id="container">
			{navbar}
			<div class="jumbotron">
				<h1>We're hiring</h1>
				<p>You know it would look great on your resume!</p>
				<p>Check out our current offerings and benefits below.</p>
			</div>
			{content}
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
				{ci_version}</p>
        </div>
		{caboose_scripts}
		{caboose_trailings}
	</body>
</html>