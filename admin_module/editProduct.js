$(document).ready(function(){
    //Filters 
    $("#filter_button").on("click", function(){
        $('.item').fadeIn("slow");
    })
    $("#filter_button0").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.item').hide().filter('.' + filtertag).fadeIn("slow");
    })
      $("#filter_button1").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.item').hide().filter('.' + filtertag).fadeIn("slow");  
    })
        $("#filter_button2").on("click", function(){
        var filtertag = $(this).attr('class');
        $('.item').hide().filter('.' + filtertag).fadeIn("slow");

    })

         $("#search_btn").on("click", function(){
           $.ajax({
        type:'POST',
        url:'editProduct_backend.php',
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
        url:'editProduct_backend.php',
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
        url:'editProduct_backend.php',
        success:function(data){
          $(".grid").html(data);
        }
      });
      } else if(data.length > 0) {
          // console.log(data);
      $.ajax({
        type:'POST',
        url:'editProduct_backend.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $(".grid").html(data).fadeIn("slow");
        }
      });
   
      }
     
   
    });

    
    // top sale owl carousel
    $("#top-sale1 .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    
   


   
});