var default_height = 800;
function onLeftClick(self,path) {
    if(self.className == "div_index"){
        var frame = document.getElementById("content");
        frame.src = "notes/" + path + ".html";
        var divs = document.getElementsByClassName("div_index");
        var len = divs.length;
        for (var i = 0; i < len; i++) {
            divs[i].style.backgroundColor = "transparent";
        }
        self.style.background = "#0fe";
    }else if(self.className == "div_main"){
        path.style.display=(path.style.display =='none')?'':'none';
    }
}