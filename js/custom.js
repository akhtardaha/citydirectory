/*
	this file contains all custom js
*/

function populateResult(page){
	var url = "http://www.exposecode.com/worldcities/";
	$.ajax({
      url: url+"populatecities.php",
      type: "POST",
      data: "page="+page,
      success: function(data){
         $("#resultContainer").html(data);
         history.replaceState({url: "page/" + page}, "page " + page, url+"page/"+page);
         if (page == 1) {
         	$(".prev").hide();
         }else{
         	$(".prev").show();
         }
         var prevPage = page - 1;
         var nextPage = page + 1;
         $(".prev").attr("onclick", "populateResult("+prevPage+")");
         $(".next").attr("onclick", "populateResult("+nextPage+")");
      }
   });
}