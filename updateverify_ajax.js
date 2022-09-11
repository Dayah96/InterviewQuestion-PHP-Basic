<?php
function postValue(){

    var uname = $('#uname').val();
    if(!uname)
    {   
              $('#mesej').html("Key in username and click submit");
              message.style.color = "#90EE90";
    }
    
    else
    {   
        $.post('info.php',{uname:uname},
        function(output){

            $('#mesej').html(output);


            if(output =="true"){
                $('#mesej').html("<b>Verified</b>");

                message.style.color = "green";
            }
            
            else 
            {
                $('#mesej').html("<b>Error</b>");
            
                message.style.color = "red";
            }
    
        });
        
        return true;
    }
  
}

?>
