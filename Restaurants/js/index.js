//  alert()

$(document).ready(function(){
    //for login
    $(".show-icon").click(function(){
        if($("#customer-password").attr("type") === "password" || $("#owner-password").attr("type") === "password"){
            $("#customer-password").attr("type","text")
            $("#owner-password").attr("type","text")
            $(".show-icon").removeClass("fa-eye")
            $(".show-icon").addClass("fa-eye-slash")
        }
        else{
            $("#customer-password").attr("type","password")
            $("#owner-password").attr("type","password")
            $(".show-icon").removeClass("fa-eye-slash")
            $(".show-icon").addClass("fa-eye")

        }
    })
})

//for registration
$(document).ready(function(){
    $(".register-show-icon").click(function(){
        if($("#new-customer-password").attr("type") === "password" || $("#new-owner-password").attr("type") === "password"){
            $("#new-customer-password").attr("type","text")
            $("#new-owner-password").attr("type","text")
            $(".register-show-icon").removeClass("fa-eye")
            $(".register-show-icon").addClass("fa-eye-slash")
        }
        else{
            $("#new-customer-password").attr("type","password")
            $("#new-owner-password").attr("type","password")
            $(".register-show-icon").removeClass("fa-eye-slash")
            $(".register-show-icon").addClass("fa-eye")

        }
    })
    
})

