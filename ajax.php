$(document).ready(function() {
   
 $("#search").click(function() {
   var keywords = $('#keyword').val();
   if(keywords != "") {
       
     $.ajax({
       url: "cust_view.php",
      data: {keywords : keywords},
       type:"POST",
       success: function(resp) {
           $(".resultDiv").html(resp);          
       }
     });
   }
 });
 });