// alert("javascript added and works");

// show scroll up button , when page is scrolled down
var scrollBtn = document.getElementById('scrlbtn');

window.onscroll = function(){
    scrollFunc();
}

function scrollFunc(){
    if(document.body.scrollTop > 20){
        scrollBtn.style.display = "block";
    }else{
        scrollBtn.style.display = "none";
    }
}
function totop(){
    document.body.scrollTop = 0;
}
