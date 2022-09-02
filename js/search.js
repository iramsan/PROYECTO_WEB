const body = document.getElementById('body');
    body.addEventListener("click",function(){
        if (document.querySelector("#datos_buscador.activeShow")) {
            document.getElementById('datos_buscador').classList.remove('activeShow');
        }
    });

    function emty(){
        const buscar_1 = document.getElementById('buscar_1').value;
        const e = document.getElementById('datos_buscador');
        if (buscar_1.length != null) {
            if (!document.querySelector("#datos_buscador.activeShow")) {
                document.getElementById('datos_buscador').classList.toggle('activeShow');
            }        
        }else{
            console.log(buscar_1);
            e.classList.remove('activeShow');
        }
    }