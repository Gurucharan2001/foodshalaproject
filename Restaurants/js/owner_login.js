$(document).ready(function(){
    $("#login-owner-btn").click(function(e){
        e.preventDefault()
        if($("#owner-email").val() === "" || $("#owner-password").val() === ""){
            $("#login-error").html("You can not submit empty form")
            $("#login-owner-btn").attr("disabled","disabled")
        }
        else{
            $("#login-error").html()
            $.ajax({
                type:"POST",
                url:"../php/owner_login.php",
                data:{
                    email:btoa($("#owner-email").val()),
                    password:btoa($("#owner-password").val())
                },
                success:function(res){
                    if(res.trim() === "login success"){
                        window.location = "../owner_profile/profile.php"
                    }
                    else if(res.trim() === "wrong password"){
                        $("#login-error").html("Password not match")
                        $("#owner-password").focus()
                    }
                    else{
                        $("#login-error").html("User not found")
                        $("#owner-email").focus()
                    }
                }
            })


        }
    })
})