window.onload = function(){
    // var divs = document.getElementsByTagName("li");
    // var len = divs.length;
    
    // for(var i=0;i<len;i++){
    //     divs[i].onclick = function(){
    //         for(var j=0;j<len;j++){
    //             if(this.id=="li1"){
    //                     document.getElementById("content").innerHTML = '<ul class="a"><li>str()<p class="p1">&nbsp&nbspstr(123)  str(3.14)  str(False)</p></li><li>int()<p class="p1">&nbsp&nbspint(3.14) int(False) int("3")</p><p class="p2">&nbsp&nbspint("3.14") float-string不行</p></li><li>float()<p class="p1">&nbsp&nbspfloat(3) float(True) float("3.14")</p><p class="p2">&nbsp&nbspfloat("3.14f") 3.14f is c java not python</p></li></ul>';
    //             }else if(this.id=="li2"){
    //                     document.getElementById("content").src = "notes/data_conversion.html";
    //             }
    //             if(i == j){
    //                     continue;
    //             }
    //             divs[j].style.backgroundColor = "transparent";
    //         }
    //         this.style.backgroundColor = "#0fe";
            
    //     };
    // }
};

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