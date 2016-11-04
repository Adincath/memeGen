$(document).ready(function(){

  var items = [];

  //Top Line input listener
  $("#topline").on("keyup", function(){
    console.log("key up topline");
    $("#top-text").text($("#topline").val());
  });

  //Bottom Line input listener
  $("#botline").on("keyup", function(){
    $("#bottom-text").text($("#botline").val());
  });

  //Font Size input listener
  $("#fontsize").change(function(){
    $("#top-text").css("fontSize" , $("#fontsize").val()+"px");
    $("#bottom-text").css("fontSize" , $("#fontsize").val()+"px");
  }); 

  //Color input listener
  $("#colorinput").change(function(){
    $("#top-text").css("color" , $("#colorinput").val());
    $("#bottom-text").css("color" , $("#colorinput").val());
  });

  //Meme image input listener
  $("#memePicker").change(function(){
    console.log("_imgs/" + $("#memePicker").val() + ".jpg");
    $("#meme-background").css("background-image" , 'url(_imgs/' + $("#memePicker").val() + ".jpg)");
  });      

  var memeJson;

  $.getJSON( "../_php/getJson.php", function( data ) {
    memeJson = data;
    $.each( data, function( object, val ) {

      var memeFile = String(val.img_name);
      /*Pulled from: https://gist.github.com/CrowderSoup/9095873
      split() breaks string down and puts each word into array at each underscore, and 
      gets rid of the underscore
      join() brings array into a string with space separating each item in array. 
      */
      var memeName = memeFile.split('_').join(' ');
      items.push( "<option value='" + memeFile + "'>" + memeName + "</option>" );
    });

    $.each(items, function(index, value){
      $("#memePicker").append(value);
    });
  });

});