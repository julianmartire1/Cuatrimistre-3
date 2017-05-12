function comprobar()
 {
   var url = "server.php"
   $.ajax({
             type: "POST",
             url: url,
             data: $("#formulario").serialize(),
             success: function(data)
             {
               $('#resp').html(data);
             }
           });

}
