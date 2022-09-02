<div class="container-100 d-flex justify-center aling-items-center bg-blue mt-5 px-1" style="height: 20rem;">
        <div>
            <h1 class="mb-2 text-align-center">¿Que vamos aprender hoy?</h1>
            <form class="d-flex aling-items-center" action="" method="get">
                <img src="./img/iconSearch.png" alt="iconsearch" class="bg-white p-0 br-l" style="width: 2.5rem;">
                <input type="text" placeholder="" class="input px-1 br-r" onkeyup="buscar_ahora($('#buscar_1').val());" onkeypress=emty() id="buscar_1" name="buscar_1">               
            </form>
            <!--este es el div para el resultado-->
            <div class="bg-white position-sticky w-30 w-100-sm scroolIndex adjust" id="datos_buscador"></div>
        </div>
</div>