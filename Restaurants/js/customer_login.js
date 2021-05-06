$(document).ready(function(){
    $("#customer-login-btn").click(function(e){
        e.preventDefault()
        if($("#customer-email").val() === "" || $("#customer-password").val() === ""){
            $("#customer-err").html("You can not submit empty form")
            $("#customer-login-btn").attr("disabled","disabled")
        }
        else{
            $("#customer-login-btn").removeAttr("disabled")
            $.ajax({
                type:"POST",
                url:"../php/customer_login.php",
                data:{
                    email:btoa($("#customer-email").val()),
                    pass:btoa($("#customer-password").val())
                },
                success : function(res){
                    if(res.trim() === "login success"){
                        window.location = "../customer_profile/profile.php"
                    }
                    else if(res.trim() === "wrong password"){
                        $("#alert-err").html("Wrong Password")
                        setTimeout(function(){
                            $("alert-err").html()
                        },2000)
                    }
                    else {
                        $("#alert-err").html("User Not Found please register")
                        setTimeout(function(){
                            $("alert-err").html()
                        },2000)


                    }
                }
            })
        }
    })
})