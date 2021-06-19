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

// accept cookies button
var cookie_btn = document.getElementById("cookie_msg_banner");

function cookie_accepted(){
    // alert('test_clicked');
    cookie_btn.style.display = "none";
}
