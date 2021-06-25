function cargar(){
    document.body.style.animationName = "hide";
    setTimeout(() => 
    {
        document.getElementsByClassName('loader')[0].style.display = "none";
        document.getElementById('link').href = "css/style-carga.css"

    })
}