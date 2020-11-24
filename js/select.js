function onLeftClick(nid){
    var a= document.getElementById(nid);
    document.getElementById("content").src = "notes/"+nid+".html";

    var divs = document.getElementsByTagName("div");
    var len = divs.length;
    
    for(var i=0;i<len;i++){
        if(divs[i].id == nid){
                continue;
        }
        divs[i].style.backgroundColor = "transparent";
    }
    a.style.backgroundColor = "#0fe";
};