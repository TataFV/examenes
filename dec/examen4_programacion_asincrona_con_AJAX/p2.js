function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () { myFunction(this); }
    xhttp.open("GET", "guestbook.xml");
    xhttp.send();
}
function myFunction(xml) {
    const xmlDoc = xml.responseXML;
    const x = xmlDoc.getElementsByTagName("guest");
    console.log(x.length);

    //tabla con la lista de invitados
    let tableContent = "<tr><th>fname</th><th>lname</th></tr>";
    for (let i = 0; i < x.length; i++) {
        tableContent += "<tr><td>" +
            x[i].getElementsByTagName("fname")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("lname")[0].childNodes[0].nodeValue +
            "</td></tr>";
    }
    var table = document.getElementById("info");
    table.innerHTML = tableContent;

    //Nº de invitados
    var texto = document.getElementById('texto');

    texto.textContent = "El número de invitados es: " + x.length;
}