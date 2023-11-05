let mailPopup = document.getElementById("mailpopup");
let mailInscription = document.getElementById("mail");
const buttonPopup = document.getElementById("buttonPopup");
const navBar = document.getElementById("navbar");
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");

// Action sur le scroll (sur la navBar et sur le popup bas)
function scroll(){
    window.addEventListener("scroll",(e) => {
        if(scrollY > 200) {
            navBar.style.height = "55px"; 
            button1.style.height = "12px";
            button1.style.width = "20px";
            button2.style.height = "12px";
            button2.style.width = "20px";
        } else {
            navBar.style.height = "70px";
            button1.style.height = "15px";
            button1.style.width = "30px";
            button2.style.height = "15px";
            button2.style.width = "30px";
            
        }
    })
};

scroll();

// Bouton en haut à droite pour changer de thème
function navBarColor(){
    button1.addEventListener("click", () => {
        navBar.style.backgroundColor = "#ffa034";
   
    })
    button2.addEventListener("click", () => {
        navBar.style.backgroundColor = "#34bdff";
   
    })
}

navBarColor();

