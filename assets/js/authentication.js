$("#authentication").click(function(e){
    var username = $("#Username").val();
    var password = $("#Password").val();
    $.ajax({
        url : "process/ajaxhandler.php",
        method : "post",
        data : {
            action : "login",
            username : username,
            password : password,
        },
        success :function(response){                            
            console.log(response);
            location.reload();
        },
        error :function (response){  
            console.log(response);
        }
    });
});

$("#sign-out").click(function (e){  
    $.ajax({
        url : "process/ajaxhandler.php",
        method : "post",
        data : {
            action : "logout"
        },
        success :function(response){                            
            console.log(response);
            location.reload();
        },
        error :function (response){  
            console.log(response);
        }
    });
})