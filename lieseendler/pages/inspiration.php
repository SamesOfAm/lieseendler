<!DOCTYPE html>
<html>
<head>
	<title>Liese Endler</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet"> 
            <link type ='text/css' rel='stylesheet' href='../css/bootstrap.min.css'>
			<link rel="icon" type="image/ico" href="../assets/img/favicon3.ico">
			<link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='../css/style.css'/>
    <script type='text/javascript' src="../js/jquery-1.11.3.min.js"></script>
    <script type='text/javascript' src="../js/jquery-ui.min.js"></script>
    <script type='text/javascript' src="../js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../js/trouble.js'></script>
</head>
<body style="height: 950px;">
	<div class="detail-content">
		<div class="teaser">
	                    <h1 class="h1"><a href="../index.html">LIESE ENDLER</a></h1>
				
				<div class="menu">
					<span class="menu-option"><a href="../index.html">Works</a></span>
					<span class="menu-option"><a href="vita.html">Vita</a></span>
					<span class="menu-option"><a href="contact.html">Contact</a></span>
					<span class="menu-option"><a href="links.html">Links</a></span>
				</div>
        </div>

		<div class="detail-body">
			<div class="detail-frame">
				<div class="body-text">
					<h1 style="text-align: center">Inspiration</h1>
					<p style="text-align: center">Here I gather things that inspire my work.</p>
                    <?php
                        $request_url = "http://halfwayshorn.tumblr.com/api/read";
                        $xml = simplexml_load_file($request_url);
                        $numberPosts = $xml->posts
                        $text = $xml->posts->post->{'photo-caption'};
                        $image = $xml->posts->post->{'photo-url'};
                        echo '<p>'.$text.'</p>';
                        echo '<img src="'.$image.'" style="width:400px;">';
                        echo "…";
                    ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>