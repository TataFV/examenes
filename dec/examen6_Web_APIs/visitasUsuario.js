function visitasUsuario() {

    //Lectura del objeto Navigator 
    console.log(window.navigator);

    //UserAgent
    let agenteUsuario = document.getElementById("uas");
    agenteUsuario.innerHTML = "El UAS es : " + window.navigator.userAgent;

    //Sistema Operativo

    let sistemaOperativo = document.getElementById("os");
    sistemaOperativo.innerHTML = "El sistema operativo del usuario es: " + window.navigator.userAgentData.platform;

    //Navegador
    let browser = document.getElementById("browser");
    const brands = window.navigator.userAgentData.brands;
    for (let index = 0; index < brands.length; index++) {
        console.log(brands[index]);
        let nav = brands[index].brand + " " + brands[index].version;
        browser.innerHTML += nav + "<br>";
    }

    //Tamaño de memoria
    let tamañoMemoria = document.getElementById("deviceMemory");
    tamañoMemoria.innerHTML = "Este dispositivo tiene al menos: " + window.navigator.deviceMemory + "GB de RAM";

    //Lenguaje predeterminado
    let lenguaje = document.getElementById("language");
    lenguaje.innerHTML = "El lenguaje predeterminado del usuario es : " + window.navigator.language;


    //En línea
    let conexion = document.getElementById("conexion");
    let linea = window.navigator.onLine;

    if (linea) {
        conexion.innerHTML = "La conxexión es on-line";
    } else {
        conexion.innerHTML = "No tienes conexión";
    }

    //PDF
    let pdf = document.getElementById("pdf");
    let visorPdf = window.navigator.pdfViewerEnabled;

    if (visorPdf) {
        pdf.innerHTML = "Sí, se pueden mostrar documentos PDF";
    } else {
        pdf.innerHTML = "No se mostrar documentos PDF";
    }

    //Batería
    let bateriaNivel = document.getElementById("batteryLevel");
    let bateriaCarga = document.getElementById("batteryChargingInfo");
    let bateriaNivel25 = document.getElementById("bateryLevel25");

    navigator.getBattery().then((battery) => {
        battery.onlevelchange = () => {
            bateriaNivel.textContent = battery.level;
        }
        if (battery.charging) {
            bateriaCarga.textContent = "La batería se está cargando";
        } else {
            bateriaCarga.textContent = "La batería no se está cargando";
        }

        if (battery.level < 25) {
            document.querySelector("body").innerHTML = '';
        }
    });
}

visitasUsuario();




