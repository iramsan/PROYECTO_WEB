const moveContBox = document.getElementById("moveContBox");
const formBox = document.querySelectorAll("formBox");

const noAcount = document.getElementById("noAcount");
noAcount.addEventListener("click", () => moveContBox.style.transform = `translateX(-370px)`);

const bttLogBack = document.getElementById("bttLogBack");
bttLogBack.addEventListener("click",() => moveContBox.style.transform = `translateX(0)`);

