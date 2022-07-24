const jsBoxSearch = document.getElementById("jsBoxSearch"); //Box
const jsBttnsearch = document.getElementById("jsBttnsearch"); //active
jsBttnsearch.addEventListener("click",() => jsBoxSearch.classList.toggle("showSearch"));

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
function bucar_index(buscar) {
    var parametros = {"buscar":buscar};
    $.ajax({
        data:parametros,
        type: 'POST',
        url: './Conf/ConfSearch.php',
        success: function(data) {
        document.getElementById("getdata").innerHTML = data;
    }
    });
}
function datos() {
    let visible = false;
    let boton = document.getElementById("Bttn_login");
    boton.addEventListener("click", mostrar);
    
    function mostrar() {
        let formulario = document.getElementById("formulario");
        if (!visible) {
            formulario.style.display = "block";
            boton.innerHTML = "Cerrar"
            visible = true;
        } else {
            formulario.style.display = "none";
            boton.innerHTML = "Iniciar sesión";
            visible = false;
        }
    }
}
onload = datos();
// Preguntas
const BPopen = document.querySelector(".BPopen");
BPopen.addEventListener("click",fBPopen);
const GPopen = document.querySelector(".GPopen");
const BPclose = document.querySelector(".BPclose");
BPclose.addEventListener("click",fBPclose);
// Diagramas
const BDopen = document.querySelector(".BDopen");
BDopen.addEventListener("click",fBDopen);
const GDopen = document.querySelector(".GDopen");
const BDclose = document.querySelector(".BDclose");
BDclose.addEventListener("click",fBDclose);
// Mapas
const BMaopen = document.querySelector(".BMaopen");
BMaopen.addEventListener("click",fBMaopen);
const GMaopen = document.querySelector(".GMaopen");
const BMclose = document.querySelector(".BMclose");
BMclose.addEventListener("click",fBMclose);
// Otras
const BOopen = document.querySelector(".BOopen");
BOopen.addEventListener("click",fBOopen);
const GOopen = document.querySelector(".GOopen");
const BOclose = document.querySelector(".BOclose");
BOclose.addEventListener("click",fBOclose);


// Pre
function fBPopen(){
    GPopen.classList.toggle("active");
    GMopen.classList.remove("active");
}
function fBPclose(){
    GPopen.classList.remove("active");
    GMopen.classList.toggle("active");
}
// Dia
function fBDopen(){
    GDopen.classList.toggle("active");
    GMopen.classList.remove("active");
}
function fBDclose(){
    GDopen.classList.remove("active");
    GMopen.classList.toggle("active");
}
// Map
function fBMaopen(){
    GMaopen.classList.toggle("active");
    GMopen.classList.remove("active");
}
function fBMclose(){
    GMaopen.classList.remove("active");
    GMopen.classList.toggle("active");
}
// Otr
function fBOopen(){
    GOopen.classList.toggle("active");
    GMopen.classList.remove("active");
}
function fBOclose(){
    GOopen.classList.remove("active");
    GMopen.classList.toggle("active");
}

// Menu 
const BMopen = document.querySelector(".BMopen");
BMopen.addEventListener("click",fBMopen);
const GMopen = document.querySelector(".GMopen");



const Bsearch = document.querySelector(".Bsearch");
Bsearch.addEventListener("click",fBsearch);

const searchBox = document.querySelector(".searchBox");
const BsearchM = document.querySelector(".BsearchM");
BsearchM.addEventListener("click",fBsearch);

const add = document.querySelector('.add');
function fBsearch() {
    searchBox.classList.toggle("showSearch");
    // GMopen.classList.remove("active");
    // add.classList.toggle("addmore");
}

function fBMopen(){
    GPopen.classList.remove("active");
    GDopen.classList.remove("active");
    GMopen.classList.toggle("active");
    searchBox.classList.remove("showSearch");
    add.classList.remove("addmore");
}


// function buscador() {
//     let visible = false;
//     let boton = document.getElementById("Bsearch");
//     boton.addEventListener("click", mostrar);

//     function mostrar() {
//         let caja_buscador = document.getElementById("caja_buscador");
//         if (!visible) {
//             caja_buscador.style.display = "block";
//             visible = true;
//         } else {
//             caja_buscador.style.display = "none";
//             visible = false;
//         }
//     }
// }
// onload = buscador();