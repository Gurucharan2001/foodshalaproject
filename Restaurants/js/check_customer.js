$(document).ready(function(){
    $("#new-customer-email").on("change",function(){
        if($(this).val() != ""){
            $.ajax({
                type:"POST",
                url:"../php/check_customer.php",
                data:{
                    email: btoa($(this).val())
                },
                success: function(response){
                    if(response.trim() === "user found"){
                        setTimeout(function(){
                            $("#check-customer").html("Already register please login");
                            $("#customer-register-btn").attr("disabled","disabled");
                            window.location = "../php/login.php"
                        },2000)
                    }
                    else{
                        $("#check-customer").html();
                        $("#customer-register-btn").removeAttr("disabled");
                    }

                }

            });
        }
    });
});