let navBar = document.getElementById("navbar");
let left = document.getElementById("imgImprovise");
let popup = document.getElementById("popup");
let closePopup = document.getElementById("closeBtn");
let mailPopup = document.getElementById("mailpopup");
const buttonPopup = document.getElementById("buttonpopup");
const alert1 = document.getElementById("alert");
const recherche = document.getElementById("barrerecherche");
const logo = document.getElementById("logosearch");
const button = document.getElementById("button");
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");

function scroll(){
window.addEventListener("scroll",(e) => {
    if(scrollY > 200) {
        navBar.style.height = "55px";
        left.classList.add = "imgImproviseo";
        left.style.opacity = "1";
        left.style.transform = "translateX(0px)";
        button1.style.height = "12px";
        button1.style.width = "20px";
        button2.style.height = "12px";
        button2.style.width = "20px";
    } else {
        navBar.style.height = "70px";
        left.classList.remove = "imgImproviseo";
        left.style.opacity = "0";
        left.style.transform = "translateX(-200px)";
        button1.style.height = "15px";
        button1.style.width = "30px";
        button2.style.height = "15px";
        button2.style.width = "30px";
    }
});

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

};

scroll();

buttonPopup.addEventListener("click", () => {
    if (mailPopup.value == "") {
       alert1.innerHTML = "<h4>Merci d'inscrire un mail valide</h4>";
       mailPopup.style.border ="3px solid red";
       alert1.style.color = "red";
    } else {
        window.location.replace("./Page inscription.html");
    }
});

logo.addEventListener("click",() => {
    if (recherche.value === "") {
        alert("");
    } else {

    }
})

function navBarColor(){
    button1.addEventListener("click", () => {
        navBar.style.backgroundColor = "#ffa034";
   
    })
    button2.addEventListener("click", () => {
        navBar.style.backgroundColor = "#34bdff";
   
    })
}

navBarColor();


 