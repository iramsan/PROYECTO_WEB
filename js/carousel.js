const articlesResources = document.getElementById("articlesResources");
const imgArticle = document.querySelectorAll(".imgArticle");

const bttL = document.getElementById("bttL");
const bttR = document.getElementById("bttR");
bttL.addEventListener("click",activeBttL);
bttR.addEventListener("click",activeBttR);

let index = 0;
let interval = setInterval(startInterval,2000);

function startInterval(){
    index++;
    move();
}
function move(){
    if (index > imgArticle.length-4) {
        index = 0;
    }else if (index < 0) {
        index = imgArticle.length-4;
    }
    articlesResources.style.transform = `translateX(-${index*200}px)`;
}

function resetCount(){
    clearInterval(interval);
    interval = setInterval(startInterval,2000);
}

function activeBttL(){
    index--;
    resetCount();
    move();
}
function activeBttR(){
    index++;
    resetCount();
    move();
}