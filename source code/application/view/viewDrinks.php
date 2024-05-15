<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drinks Image View</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<h1 style='margin:5px; padding:10px;'>Choose a drink brand to see more details</h1>
<b style='margin:5px; padding:10px;'>Select a drinks brand name: </b>
<form style='margin:5px; padding: 10px;'>
    <select id="select">
        <?php
        // Debug
        // $data = array("A", "B", "C", "D", "E");
        for ($i = 0; $i < count($data); $i++)
            echo '<option value="' . $data[$i] . '">' . $data[$i] . '</option>';
        ?>
    </select>
</form>
<!-- Inject the HTML into this div tag placeholder -->
<div id="placeholder" style='margin:5px; padding:19px;'>Insert data here</div>

<script>
    $(document).ready(function () {
        $("#select").change(function () {
            // Debug
            var model = $(this).val();
            console.log('Drinks Model:', model, 'has been selected');
            // Variable to hold the HTML as we build it for inserting into the placeholder
            // Process the selection to select the desired drinks brand
            $("select option:selected").each(function () {
                // Start to build the HTML starting with a title
                var str = "<div><b>Drinks Brand: </b>" + $(this).text() + "</div>" + "<br>";
                // Debug
                console.log('HTML Title is:', $(this).text());
                // Debug
                var selection = $(this).text();
                console.log('Selected brand model:', selection);
                // Build a URL path to the PHP model used to read the drinks brand data
                var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                // Debug
                console.log('URL to PHP Model is:', brandUrl);
                var debugUrl = "../application/model/phpDebug.php";
                // Fire the AJAX call with the $.getJson function to get the service response from the URL (to the web server)
// Fire the $getJSON call to retrieve the drink brand data
                $.getJSON(brandUrl)
                    .done(function (json) {
                        // Debug
                        console.log('Web service response for drink brand data: ', json);
                        // Write the handler to display the results in an HTML view
                        // Start the container div tag
                        var str = '<div style="width:90%; float:left; margin:5px; border:1px solid; border-color: blue; padding:10px;">';
                        // Build the HTML view - we need to loop because we may have more than one of a particular brand
                        for (var i = 0; i < json.length; i++) {
                            // Grab the drink brand details
                            str +=
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].brand + '</div>' +
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].x3dModelTitle + '</div>' +
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].x3dcreationMethod + '</div>' +
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].modelTitle + '</div>' +
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].modelSubtitle + '</div>' +
                                '<div style="width:15%; float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;">' + json[i].modelDescription + '</div>';
                            // And, the drink brand image
                            str +=
                                '<div style="width:30%; float:left; margin:5px; border:1px solid; border-color: green; border-radius: 10px; padding:10px;">' +
                                '<img width="30%" src="../assets/images/gallery_images/' + json[i].brand + '.jpg" alt="' + json[i].brand + ' image" />' +
                                '</div>';
                        }
                        // Close off the container div tag
                        str += '</div>';
                        // And return the constructed HTML to the '<div id="placeholder">' element
                        document.getElementById("placeholder").innerHTML = str;
                        // Alternatively, you could use the jQuery .html() method to return the HTML string to the placeholder div tag
                        // $('#placeholder').html(str);
                    })
                    .fail(function () {
                        console.log('viewDrinks Js Handler: Server returned an Error, trap this in your PHP Server code');
                    });
            });
        });
    });
</script>

</body>
</html>