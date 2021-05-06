$(document).ready(function(){

    

    $("#create-btn").click(function(){
        if($("#dish-name").val === "" || $("#dish-rate").val() === ""){
            $("#form-err").html("You can not submit empty form")
            $(".dish-name").focus()
        }
        else{
            $("#form-err").html()
            var name = $("#dish-name").val()
            var rate = $("#dish-rate").val()
            var para = $("<h5></h5>")
            para.addClass("header-font")
            para.addClass("float-left")
            para.html("Dish name:"+name+"<br />Dish rate:"+rate)
            $("#dish-details").append(para)        
            }
    })
})