  function getMemes(){
    $.getJSON("_php/getJson.php", function(data) {
      makeSelect(data);
    });
  };
  function makeSelect(data){
    $.each(data, function(object, val) {
      var memeName = String(val.name);
      var memeFile = String(val.file_name);
      var memeWidth = String(val.width);
      var memeHeight = String(val.height);

      $("#memePicker").append("<option value="+ memeFile + ">" + memeName + "</option>");

    });
  };  