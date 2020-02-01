$(document).ready(function () {
  //Perform action if button clicked
  $("#submit").click(function (e) {
    e.preventDefault();
    //Getting values from the fields
    const field1 = $("#field1").val();
    const field2 = $("#field2").val();
    const operator = $("#operator").val();

    //Calling ajax function
    $.ajax({
      type : "POST",
      url : "include/Result.php",
      data : {
        "add" : 1,
        "operator" : operator,
        "field1" : field1,
        "field2" : field2
      },
      success : function (result) {
        //Getting from json
        const jsonvalue = JSON.parse(result);
        $("#screencon").css({
          "background" : jsonvalue.bg
        });
        $("#screen").removeClass("text-dark");
        $("#screen").addClass("text-white");
        $("#screen").html(jsonvalue.result);

        //Getting values from the fields
        const field1 = $("#field1").val();
        const field2 = $("#field2").val();
        const operator = $("#operator").val();
        //default for operate

        $("#topScreen").html(field1+"<span style='color:"+jsonvalue.bg+";font-weight:bold;'>"+jsonvalue.sign+"</span>"+field2);

        //console.log("Bg: "+jsonvalue.bg+" Result: "+jsonvalue.result);
      }
    });
  //  console.log(field1);
  })
});
