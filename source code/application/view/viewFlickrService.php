<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test view - Flickr Web Service</title>
    <!-- Flickr service css -->
    <link rel="stylesheet" href="../application/css/flickrservice.css">
</head>
<body>
<h1>Flickr Web Service</h1>
<h2>Search on Flickr Feed</h2>
<!-- Text input box -->
<div class="textInput">
    <input type="text" value="sprite" id="txt" />
</div>
<div class="btn">
    <button onclick="loadImages()">Search</button>
</div>
<div class="box">
    <h1 id="title"></h1>
    <h2 id="link"></h2>
    <p id="description"></p>
    <p id="modified"></p>
    <p id="generator"></p>
    <div id="images"></div>
</div>
<!-- jQuery library -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Flickr service JavaScript -->
<script src="../application/js/flickrService.js"></script>
</body>
</html>