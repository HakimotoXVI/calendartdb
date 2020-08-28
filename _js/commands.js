window.onscroll=function(){rolagem()};

function rolagem(){
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop){
        document.getElementsByTagName("header")[0].style.padding="20px 10px";
        document.getElementById("logus").style.fontSize="25px";  
    }else{       
    document.getElementsByTagName("header")[0].style.padding="80px 10px";
    document.getElementById("logus").fontSize="55px";
    }
}
function reload(){
    window.location.reload();
    alert("Página alterada!");
    window.location.reload();
}