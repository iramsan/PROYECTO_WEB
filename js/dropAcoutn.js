const deleteAcount = document.getElementById("deleteAcount");
deleteAcount.addEventListener("click",() => {
    if (confirm("¿Seguro que quieres eliminar tu cuenta?")) {
        console.log("Sopas");
        window.location.replace("./Conf/Conf_deleteAcount.php");
    }
});
