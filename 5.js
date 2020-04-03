$( document ).ready(function() {
    $("#postComment").click(function(){
        var str = $("#comment").val();
        if(str != ""){
            $("#commentList").append("<li>"+str+"</li>");
        }
        $("#comment").val("");
    });
});