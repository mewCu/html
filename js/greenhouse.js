window.onload = function(){
    var box_username = document.getElementById("box_username");
    box_username.value=docCookies.getItem("username");

    var check_username = document.getElementById("check_username");
    if(docCookies.getItem("check_username")){
        check_username.style.color="#f00"
        check_username.style.fontSize = "12px"
        check_username.innerHTML = docCookies.getItem("check_username");
    }
    
    var check_password = document.getElementById("check_password");
    if(docCookies.getItem("check_password")){
        check_password.style.color="#f00"
        check_password.style.fontSize = "12px"
        check_password.innerHTML = docCookies.getItem("check_password");
    }
};

function dis_tips(){
    var check_username = document.getElementById("check_username");
    check_username.innerHTML= "";
    var check_password = document.getElementById("check_password");
    check_password.innerHTML= "";
}

