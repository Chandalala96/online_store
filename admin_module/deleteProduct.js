$(document).ready(function(){
   
    //Filters
    $("#filter_button").on("click", function(){
        $('.post').fadeIn("slow");
    })
    $("#filter_button0").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.post').hide().filter('.' + filtertag).fadeIn("slow");
    })
      $("#filter_button1").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.post').hide().filter('.' + filtertag).fadeIn("slow");  
    })
        $("#filter_button2").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.post').hide().filter('.' + filtertag).fadeIn("slow");

    })
 
        $("#search_btn").on("click", function(){
     
           $.ajax({
        type:'POST',
        url:'deleteProduct_backend.php',
        data:{
          name:"search_product",
          item:$("#search").val()

        },
        success:function(data){
          $(".grid").html(data).fadeIn("slow");
        }
      });
    })


    //Searcher
        $.ajax({
        type:'POST',
        url:'deleteProduct_backend.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $(".grid").html(data).fadeIn("slow");
        }
      });
    $("#search").keyup(function(){
      let data = $("#search").val();
      if(data.length == 0) {
           $.ajax({
        type:'POST',
        url:'deleteProduct_backend.php',
        success:function(data){
          $(".grid").html(data);
        }
      });
      } else if(data.length > 0) {
          // console.log(data);
      $.ajax({
        type:'POST',
        url:'deleteProduct_backend.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $(".grid").html(data).fadeIn("slow");
        }
      });
   
      }
     
   
    });


   
});