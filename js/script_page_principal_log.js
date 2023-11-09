let navBar = document.getElementById("navbar");
let left = document.querySelector(".imgImprovise");
let left2 = document.querySelector(".imgImprovise2");
let left3 = document.querySelector(".imgImprovise3");
let left4 = document.querySelector(".imgImprovise4");
let popup = document.getElementById("popup");
let closePopup = document.getElementById("closeBtn");
let mailPopup = document.getElementById("mailpopup");
const buttonPopup = document.getElementById("buttonpopup");
const alert1 = document.getElementById("alert");
const recherche = document.getElementById("barrerecherche");
const logo = document.getElementById("logosearch");
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
let themeColor = 1;
const publication = document.getElementById("adapt");
let body = document.querySelector('body');

// Ouverture et fermeture popup bas
function translateOpen() {
    left.classList.add ("imgImproviseo");
}

function translateClose() {
    left.classList.remove ("imgImproviseo");
}

// Action sur le scroll (sur la navBar et sur le popup bas)
function scroll(){
window.addEventListener("scroll",() => {
    if (scrollY > 200 && scrollY < 999) {
        navBar.style.height = "55px";
        translateOpen();
    } else if(scrollY > 1000 && scrollY < 1499) {
        navBar.style.height = "55px";
        translateOpen();
    } else if(scrollY > 1500) {
        navBar.style.height = "55px";
        translateOpen();
    } else if(scrollY > 3200) {
        navBar.style.height = "55px";
        translateOpen();
    } else {
        navBar.style.height = "70px";
        translateClose();
    }
    
})
};

scroll();

// Action sur les boutons changement de thémes en cas de scroll vers le bas
function scroll2(){
    window.addEventListener("scroll",(e) => {
        if(scrollY > 200) {
            button1.style.height = "12px";
            button1.style.width = "20px";
            button2.style.height = "12px";
            button2.style.width = "20px";
        } else {
            button1.style.height = "15px";
            button1.style.width = "30px";
            button2.style.height = "15px";
            button2.style.width = "30px";
            
        }
    })
};
scroll2();

// Action sur le scroll (le popup bas disparait en cas de remonté)
window.addEventListener("scroll",(e) => {
    if(scrollY > 500) {
        popup.style. opacity = "1";
        popup.style. transform = "translateX(0)";
    } else {
        popup.style. transform = "translateX(400px)";
        popup.style. opacity = "0";
    }
});

closePopup.addEventListener("click",(e) => {
    if(e.isTrusted === true){
        popup.style.display = "none";
    };
})

scroll();

// Bouton en haut à droite pour changer de thème 
function navBarColor(){
    button1.addEventListener("click", () => {
        navBar.style.backgroundColor = "#ffa034";
        body.style.backgroundColor = 'white';
        body.style.transition = '2s';
        body.style.color = 'black';
        themeColor = 1;
        storage();
    })
    button2.addEventListener("click", () => {
        navBar.style.backgroundColor = "#34bdff";
        body.style.backgroundColor = 'grey';
        body.style.color = 'white';
        body.style.transition = '2s';
        themeColor = 2;
        storage();
    })
}
navBarColor();

function storage(){
    window.localStorage.setItem("themeColor", themeColor);
}

function restoretheme(){
    if(localStorage.getItem('themeColor') == 1 || localStorage.getItem('themeColor') == 2) {
        if (localStorage.getItem('themeColor') == 1) {
            navBar.style.backgroundColor = "#ffa034";
            body.style.backgroundColor = 'white';
            body.style.color = 'black';
            body.style.transition = '2s';
            themeColor = 1;
        } else {
            navBar.style.backgroundColor = "#34bdff";
            body.style.backgroundColor = 'grey';
            body.style.color = 'white';
            body.style.transition = '2s';
            themeColor = 2;  
        }
    } 
}

restoretheme();

document.addEventListener