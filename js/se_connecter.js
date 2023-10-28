let mailPopup = document.getElementById("mailpopup");
let mailInscription = document.getElementById("mail");
const buttonPopup = document.getElementById("buttonPopup");
const navBar = document.getElementById("navbar");
const id = document.getElementById("valid");
const pseud = document.getElementById("pseudo");

function scroll(){
    window.addEventListener("scroll",(e) => {
        if(scrollY > 200) {
            navBar.style.height = "55px";
        } else {
            navBar.style.height = "70px";
        }
    })
};

scroll();

