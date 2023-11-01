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

function translateOpen() {
    left.classList.add ("imgImproviseo");
}

function translateClose() {
    left.classList.remove ("imgImproviseo");
}

function scroll(){
window.addEventListener("scroll",() => {
    if (scrollY > 200 && scrollY < 999) {
        navBar.style.height = "55px";
        // left2.classList.remove("imgImproviseo2");
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


// const observer = new IntersectionObserver((e) => {
//     for(const ei of e) {
//         console.log(
//             ei.target,
//             ei.isIntersecting
//         );
//     };
// });

// observer.observe(document.getElementById('improvise'));


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

function navBarColor(){
    button1.addEventListener("click", () => {
        navBar.style.backgroundColor = "#ffa034";
   
    })
    button2.addEventListener("click", () => {
        navBar.style.backgroundColor = "#34bdff";
   
    })
}

navBarColor();

