$(document).ready(function(){
    $("#customer-register-btn").click(function(e){
     e.preventDefault();
     if($("#new-customer-name").val() === "" || $("#new-customer-email").val() === "" || $("#new-customer-password").val() === ""){
         $("#customer-register-btn").attr("disabled","disabled");
         $("#empty-err").html("You can not submit empty form");
     }
     else{
        $("#customer-register-btn").removeAttr("disabled");
        $.ajax({
            type:"POST",
            url:"../php/register_customer.php",
            data: {
                name: btoa($("#new-customer-name").val()),
                email : btoa($("#new-customer-email").val()),
                password: btoa($("#new-customer-password").val()),
                mobile : btoa($("#new-customer-mobile").val()),
                prefer : btoa($("#preferences").val())
            },
            success : function(res){
                if(res.trim() === "registration successful"){
                    window.location = "../php/login.php"
                    $("#customer-form").reset()
                }
                else{
                    window.location = "register.php"
                }
            }
        })
     }

    })

})