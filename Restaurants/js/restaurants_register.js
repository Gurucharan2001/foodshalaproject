$(document).ready(function(){
    $("#register-owner-btn").click(function(e){
        e.preventDefault()
        if($("#new-restaurant-name").val === "" || $("#new-email").val === "" || $("#new-owner-password").val() === ""){
            $("#owner-err").html("You can not submit empty form")
            $("#new-restaurant-name").focus()
            $("#register-owner-btn").attr("disabled","disabled")
        }
        else{
            $("#register-owner-btn").removeAttr("disabled")
            $.ajax({
                type:"POST",
                url:"../php/restaurants_register.php",
                data:{
                    restaurant_name:btoa($("#new-restaurant-name").val()),
                    email:btoa($("#new-email").val()),
                    password:btoa($("#new-owner-password").val()),
                    mobile_no:btoa($("#new-mobile").val())
                },
                success:function(res){
                    if(res.trim() === "success"){
                        window.location = "../php/login.php"
                        $("#owner-form").reset()
                    }
                    else{
                        window.location = "register.php"
                    }
                }
            })

        }
    })
})