let mailPopup = document.getElementById("mailpopup");
let mailInscription = document.getElementById("mail");
const buttonPopup = document.getElementById("buttonPopup");
const navBar = document.getElementById("navbar");
const id = document.getElementById("valid");
const pseud = document.getElementById("pseudo");
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");


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

function navBarColor(){
    button1.addEventListener("click", () => {
        navBar.style.backgroundColor = "#ffa034";
   
    })
    button2.addEventListener("click", () => {
        navBar.style.backgroundColor = "#34bdff";
   
    })
}

navBarColor();

