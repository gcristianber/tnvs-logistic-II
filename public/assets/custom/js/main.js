$(document).ready(()=>{
    
    function checkSession(){
        $.ajax({
            url: config.baseUrl + 'authentication/check_session',
            type: "GET",
            success: function(response){
                
            }
        })
    }

})