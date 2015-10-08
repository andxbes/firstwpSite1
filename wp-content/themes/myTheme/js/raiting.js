 console.info("Подключили raiting");
 window.onload=function (){
    //console.info(admin_ajax);
    $("#send_raiting").on('click',function (){
         var raiting = $('#raiting').val();
         //console.info(raiting);
         $.ajax({
             url:admin_ajax,
             type:'POST',
             data: {
                 action: '(add_to_raiting)',
                 raiting:raiting,
                 filmId:filmId
             },
             success: function (data, textStatus, jqXHR) {
                   console.info(data);
             }
             
         });
    });
   
     
 };

  