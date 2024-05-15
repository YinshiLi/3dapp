// Javascript Gallery Generator using Flickr to source the images
$(document).ready(function() {
    // Call the loadImages method, you can comment this out if you don't want it to load immediately
    loadImages();
});

function loadImages() {
    // Grab the image type you are looking for
    var txt = document.getElementById('txt').value;
    console.log(txt);

    // Create a URI for the Flickr web service API call
    var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";

    // Use the JQuery .getJSON() method to fetch the JSON object back from the Flickr web service
    $.getJSON(urlFlickr, {tags: txt, tagmode: "all", format: "json"}, function(data) {
        // Use console.log() to inspect the returned JSON object
        console.log(data);

        // Then build a handler to grab the data you want, i.e. in this case the images related to the input value stored in txt
        $('#title').html(data.title);
        $('#link').html(data.link);
        $('#description').html(data.description);
        $('#modified').html(data.modified);
        $('#generator').html(data.generator);

        var htmlcode = "";

        // Examine the console.log(data) and you will see we have an array of items returned in the data JSON object that we have to
        $.each(data.items, function(i, item) {
            // You will remember this approach from the previous Gallery code in Lab 5
            htmlcode += '<div class="imgBox">' + '<div><h3>Title: ' + item.title + '</h3></div>';
            htmlcode += '<img src="' + item.media.m + '" />';
            htmlcode += '<div><h4>Published: ' + item.published + '</h4></div></div>';

            // Set the loop variable, i.e. how many images you want returned, say the first 4 images.
            // Or comment out if you want all images in the search returned
            if (i == 3) return false;
        });

        // Assign the htmlcode to the images ID selector
        $('#images').html(htmlcode);
    });
}