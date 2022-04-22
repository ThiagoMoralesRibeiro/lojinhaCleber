

$("#btn-confirma").onclick(function () {
   $.post("usuarios.php", function(response){
       $("#result").html(response);
   }
     
   );
    
});


