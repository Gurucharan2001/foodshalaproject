$(document).ready(function(){
    $("#new-email").on("change",function(){
        if($(this).val() != 0){
            $.ajax({
                type:"POST",
                url:"../php/check_owner.php",
                data:{
                    email:btoa($(this).val())
                },
                success:function(res){
                    if(res.trim() === "user found"){
                        setTimeout(function(){
                            $("#check-owner-err").html("Already registered please login")
                            $("#register-owner-btn").attr("disabled","disabled")
                            window.location = "../php/login.php"

                        },2000)
                    }
                    else{
                        $("#check-owner-err").html()
                        $("#register-owner-btn").removeAttr("disabled")
                    }
                }
            })
        }
    })
})