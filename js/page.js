$( document ).ready(function() {
//$.get("page/nav.html",function (navbar) { $("#content").prepend(navbar);});
$.get("page/footer.html",function (footer) { $("#content").append(footer);});

//$(".loadpage").load();    
 $(function() {
     $("#content .loadpage").each(function() {
       $(this).load($(this).attr("data-file"));
     });
   });

$('#pageloader').hide();

});