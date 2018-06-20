// window.onscroll = myFunction();

window.addEventListener("scroll", myFunction);

var menu = document.getElementById("cssmenu");
var sticky = cssmenu.offsetTop;

function myFunction() {
    if(window.pageYOffset >= sticky && window.innerWidth > 800 )
    {
        cssmenu.classList.add("sticky");
        if(!!php_vars.isLoggedIn && window.innerWidth > 800) {
            cssmenu.classList.add("logged-in-large");
        }
    } else {
        cssmenu.classList.remove("sticky");
        cssmenu.classList.remove("logged-in-large");
    }
}



