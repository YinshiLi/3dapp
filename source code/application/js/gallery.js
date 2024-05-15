// JavaScript Gallery Generator
$(document).ready(function() {
    // Create the XMLHttpRequest object for communicating with the web server
    var xmlHttp = new XMLHttpRequest();
    // stores newly generated gallery HTML code
    var htmlcode = "";
    // Temporarily stores server response while code is generated
    var response;

    // Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
    var send = "hook";

    // open the connection to the web server
    xmlHttp.open("GET", send, true);
    // Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
    xmlHttp.send(null);

    // check we get a valid server response
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            // Response handler code
            //alert(xmlHttp.responseText);
            response = xmlHttp.responseText.split("~");

            // Loop round the response array
            for (var i = 0; i < response.length; i++) {
                var groups = response[i].split("/");
                var filename = groups[groups.length - 1].split(".")[0];
                if (filename == "main") {
                    continue;
                }
                htmlcode += '<a href="javascript:swap(\'' + filename + '\');">';
                htmlcode += '<img class="card-img-top img-thumbnail" src="../' + response[i] + '"/>';
                htmlcode += '</a>';
                console.log(htmlcode);
            }

            // Return the HTML string to each of the 3D App element blocks, coke, sprite and pepper galleries
            document.getElementById('gallery_coke').innerHTML = htmlcode;
            document.getElementById('gallery_sprite').innerHTML = htmlcode;
            document.getElementById('gallery_pepper').innerHTML = htmlcode;
        }
    };
});