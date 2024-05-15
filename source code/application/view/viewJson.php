<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>
<div id="placeholder"></div>

<!-- jQuery library -->
<script src="http://code.jquery.com/jquery-latest.js"></script>

<script>
    // Use a relative path so that it works on the ITs Web Server
    $.getJSON('../application/model/createJson.php', function(data) {
        // Check the JSON object using the Chrome Inspect Element console, to make sure you have received the right data
        console.log(data);

        // Then build the handler to strip out the data from the JSON object and wrap it in appropriate HTML
        var htmlcode = "<ul>";

        // Loop through the JSON array
        for (var i in data.users) {
            htmlcode += "<li>" + data.users[i].firstName
                + " " + data.users[i].lastName
                + " " + data.users[i].joined.month
                + " " + data.users[i].joined.year + "</li>";
        }

        htmlcode += "</ul>";
        console.log(htmlcode);

        // Assign HTML to the placeholder tag using jQuery .html() id selector method
        $('#placeholder').html(htmlcode);

        // Alternatively, you can use the JavaScript document.getElementById() method
        //document.getElementById("placeholder").innerHTML = htmlcode;
    });
</script>
</body>
</html>