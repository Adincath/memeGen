    $(document).ready(function(){
    	//Yates Shuffle - url:(https://bost.ocks.org/mike/shuffle/)
		function shuffle(array) {
		  var m = array.length, t, i;

		  // While there remain elements to shuffle…
		  while (m) {

		    // Pick a remaining element…
		    i = Math.floor(Math.random() * m--);

		    // And swap it with the current element.
		    t = array[m];
		    array[m] = array[i];
		    array[i] = t;
		  }

		  return array;
		}
	    $.getJSON("/broabect/memeGen/_php/getJson.php", function(data) {
	        var items = [];
	        $.each(data, function(object, val) {
	        	var thumbnailSection = "<div class=\"col-lg-3 col-sm-4 col-xs-6 thumbnail hvr-border-fade\">";
	            var memeFile = val.file_name;

	            thumbnailSection = thumbnailSection.concat("<a href=generator.php#" + memeFile + " ><img src=_imgs/thumbnails/" + memeFile + "></a>");
	            thumbnailSection = thumbnailSection.concat("</div>");
	            
	        	items.push(thumbnailSection);
	        });

	        items = shuffle(items);
	        // Only displaying 12 examples of memes
	        for(var i = 0; i < 12; i++) {
	        	//console.log('meme: ' + i + " " + items[i]);
	            $("#memeGallery").append(items[i]);
	        };
	    });
	});