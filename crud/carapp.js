$(document).ready(function(){
var carList;
function getall() {
  $(".carList").html(" ");
  $.ajax({
    url:"api/getCar.php",
    method:"GET",
    success:function(data) {
      carList = JSON.parse(data);
      for (var i = 0; i < carList.length; i++) {
        $(".carList").append('<li><h2>'+"Id: "+carList[i]["id"]+'</h2><h3>'+"Prix: "+carList[i]["prix"]+'DH'+'</h3><h4>'+"Model: "+carList[i]["model"]);
      }
    }
  })
}
getall();
})
