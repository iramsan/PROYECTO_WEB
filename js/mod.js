const jsMenuPCard = document.getElementById("jsMenuPCard");
const jsMenuDCard = document.getElementById("jsMenuDCard");
const jsMenuMCard = document.getElementById("jsMenuMCard");
const jsMenuOCard = document.getElementById("jsMenuOCard");

const menu = document.getElementById("menu"); //MenuCard
const jsBoxSearch = document.getElementById("jsBoxSearch"); //searchCard

// Img Change
const imgChangeSearch = document.getElementById("imgChangeSearch");
const imgChangeMenu = document.getElementById("imgChangeMenu");

// BTTN back Desk cards menu
const jsBBackDesk = document.getElementById("jsBBackDesk");
jsBBackDesk.addEventListener("click",closeMenuCard);

// B Search
const jsBttnsearch = document.getElementById("jsBttnsearch");
jsBttnsearch.addEventListener("click",function () {
    const value = jsBoxSearch.classList.toggle("showSearch");
    const checkMenu = menu.classList.remove("showMenu");
    check(value);
    checkM(checkMenu);
    closeMenuCard();
});

// B Home
const jsBttnHome = document.getElementById("jsBttnHome");
jsBttnHome.addEventListener("click",function (){
    const value = jsBoxSearch.classList.remove("showSearch");
    const checkMenu = menu.classList.remove("showMenu");
    check(value);
    checkM(checkMenu);
    closeMenuCard();
});

// B Shop
const jsBttnShop = document.getElementById("jsBttnShop");
jsBttnShop.addEventListener("click",function (){
    const value = jsBoxSearch.classList.remove("showSearch");
    const checkMenu = menu.classList.remove("showMenu");
    check(value);
    checkM(checkMenu);
    closeMenuCard();
});

// B Menu
const jsBttnMenu = document.getElementById("jsBttnMenu");
jsBttnMenu.addEventListener("click",function (){
    const checkMenu = menu.classList.toggle("showMenu");
    jsBoxSearch.classList.remove("showSearch");
    const value = jsBoxSearch.classList.remove("showSearch");
    closeMenuCard();
    check(value);
    checkM(checkMenu);
});



// Menu's Card Open
const jsBPreguntas = document.getElementById("jsBPreguntas");
jsBPreguntas.addEventListener("click",function (){
    cards(jsMenuPCard);
});
const jsBDiagrama = document.getElementById("jsBDiagrama");
jsBDiagrama.addEventListener("click",function (){
    cards(jsMenuDCard)
});
const jsBMapas = document.getElementById("jsBMapas");
jsBMapas.addEventListener("click",function (){
    cards(jsMenuMCard);
});
const jsBOtras = document.getElementById("jsBOtras");
jsBOtras.addEventListener("click",function (){
    cards(jsMenuOCard);
});

// ***************************************************
const imgChangeSearchDesk = document.getElementById("imgChangeSearchDesk");

const jsBttnsearchDesk = document.getElementById("jsBttnsearchDesk");
jsBttnsearchDesk.addEventListener("click",function (){
    console.log("XD");
    const x = jsBoxSearch.classList.toggle("showSearch");
    if (x) {
        imgChangeSearchDesk.src="./img/iconClose.png";
    }else{
        imgChangeSearchDesk.src="./img/iconSearch.png"
    }
});



// ***************************************

function cards(control){
    menu.classList.remove("showMenu");
    control.classList.toggle("showMenu");
    imgChangeMenu.src="./img/iconArrow.png";
    showHiddBBack();
}

function showHiddBBack(){
    const pag = jsMenuPCard.classList.contains("showMenu");
    const dia = jsMenuDCard.classList.contains("showMenu");
    const map = jsMenuMCard.classList.contains("showMenu");
    const otr = jsMenuOCard.classList.contains("showMenu");
    if (dia || map || otr || pag) {
        jsBBackDesk.classList.toggle("iconBackShow");
    }else{
        jsBBackDesk.classList.remove("iconBackShow");
    }
}

function checkM(checkMenu){
    if (checkMenu) {
        imgChangeMenu.src="./img/iconClose.png";
    }else{
        imgChangeMenu.src="./img/iconMenu.png";
    }
}
function check(value){
    if (value) {
        imgChangeSearch.src="./img/iconClose.png";
    }else{
        imgChangeSearch.src="./img/iconSearch.png";
    }
}
function closeMenuCard(){
    jsMenuPCard.classList.remove("showMenu");
    jsMenuDCard.classList.remove("showMenu");
    jsMenuMCard.classList.remove("showMenu");
    jsMenuOCard.classList.remove("showMenu");
    showHiddBBack();
}


function buscar_ahora(buscar) {
    var parametros = {"buscar":buscar};
    $.ajax({
        data:parametros,
        type: 'POST',
        url: './Conf/ConfSearch.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
    }
    });
}