$(document).ready(function() {

  /*sourced canvas code from: http://codepen.io/johano/pen/emNRmb */

  /****** Meme Object ******/
  var memeArray = [];

  /****** Drawing ******/
  var memeSize;
  var memeWidth = 500;
  var memeHeight = 500;
  var canvas = document.getElementById('memecanvas');
  ctx = canvas.getContext('2d');
  canvas.width = memeWidth;
  canvas.height = memeHeight;
  var img = document.getElementById('ghostImage');
  var topText = document.getElementById('top-text');
  var bottomText = document.getElementById('bottom-text');
  var text1 = document.getElementById('botline').value;
  var text2 = document.getElementById('botline').value;
  var currentMeme;

  var selectOptions = [];

  /****** Select Loader ******/
  // Object that will hold a copy of json info in meme json file
  var memeJson;
  // Json file that holds all meta information about memes
  var jsonFile = "_php/getJson.php";

  /****** Listeners ******/
  $("#topline").on("keyup", function() {
    text1 = $("#topline").val();
    drawMeme();
  });
  $("#botline").on("keyup", function() {
    text2 = $("#botline").val();
    drawMeme();
  });
  $("#memePicker").change(function() {
    img.src = "_imgs/thumbnails/" + $("#memePicker").val();
    canvas.width = memeWidth;
    canvas.height = memeHeight;
    updateURL($("#memePicker").val());
    drawMeme();
  });

  // Driver
  getMemes();
  getHash();
  img.onload = function() {
    drawMeme();
  }

  function drawMeme() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(img, 0, 0, memeWidth, memeHeight);
    ctx.lineWidth = 4;
    ctx.font = '28pt sans serif';
    ctx.strokeStyle = 'black';
    ctx.fillStyle = 'white';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'top';
    text1 = text1.toUpperCase();
    x = memeWidth / 2;
    y = 0;
    wrapText(ctx, text1, x, y, 300, 40, false);
    ctx.textBaseline = 'bottom';
    text2 = text2.toUpperCase();
    y = memeWidth;
    wrapText(ctx, text2, x, y, 300, 40, true);

    // Updating Download button to download canvas as image
    var dataURL = canvas.toDataURL('image/png');
    $("#memecanvas").src = dataURL;
    $("#memeDownload").attr("href", dataURL);
    $("#memeDownload").attr("download", "memeGen");
  };

  function getHash() {
      var hash = window.location.hash;

      //Variable will have hash vairable pushed into it
      var imgSource = "";
      var imgDir = "_imgs/thumbnails/";

      if(hash == ""){
        var defaultMeme = "sipping-my-tea.jpg";
        imgSource += defaultMeme;
        updateURL(defaultMeme);
      } 
      else{
        //Removing the hash symbol
        hash = hash.slice(1,hash.length);
        imgSource += hash;
      }

      imgSource = imgDir + imgSource;
      img.src = imgSource;
  }

  function updateURL(newHash){
    console.log("Here: " + newHash.indexOf('.'));
    newHash = newHash.slice(0, newHash.indexOf('.'));
    window.location.hash = newHash;
    //getHash();
  }

  function getMemes(){
    $.getJSON(jsonFile, function(data) {
      memeJson = data;
      $.each(data, function(object, val) {
        var memeName = String(val.name);
        var memeFile = String(val.file_name);
        var memeWidth = String(val.width);
        var memeHeight = String(val.height);
        var temp = new meme(memeName, memeFile, memeWidth, memeHeight);
        memeArray.push(temp);

        selectOptions.push("<option value="+ memeFile + ">" + memeName + "</option>");
      });
      $.each(selectOptions, function(index, value) {
        $("#memePicker").append(value);
      });
    });
  };

  function meme(tName, tFile_name, tWidth, tHeight){
    this.name = tName;
    this.file_name = tFile_name;
    this.width = tWidth;
    this.height = tHeight;
  };

  function wrapText(context, text, x, y, maxWidth, lineHeight, fromBottom) {
    var pushMethod = (fromBottom) ? 'unshift' : 'push';
    lineHeight = (fromBottom) ? -lineHeight : lineHeight;
    var lines = [];
    var y = y;
    var line = '';
    var words = text.split(' ');
    for (var n = 0; n < words.length; n++) {
      var testLine = line + ' ' + words[n];
      var metrics = context.measureText(testLine);
      var testWidth = metrics.width;
      if (testWidth > maxWidth) {
        lines[pushMethod](line);
        line = words[n] + ' ';
      } else {
        line = testLine;
      }
    }
    lines[pushMethod](line);
    for (var k in lines) {
      context.strokeText(lines[k], x, y + lineHeight * k);
      context.fillText(lines[k], x, y + lineHeight * k);
    }
  }
});