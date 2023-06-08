let clima = document.getElementById("clima");
let time = document.getElementById("time");
let temp = document.getElementById("temp");

function loadWeather() {
    let url = "https://api.openweathermap.org/data/2.5/weather?zip=36204,ES&units=metric&appid=f195d95d994b431e94c4bacffa59f199";

    fetch(url)
        .then(response => {
            return response.json()
        })
        .then(data => {
            clima.innerHTML = "El tiempo: " + data.weather[0].description;
            let date = new Date(data.dt * 1000);
            time.innerHTML = "Fecha: " + date.getDate() +
                "/" + (date.getMonth() + 1) +
                "/" + date.getFullYear() +
                " " + date.getHours() +
                ":" + date.getMinutes() +
                ":" + date.getSeconds();
            temp.innerHTML = "Temperatura: " + data.main.temp + "º C";
            console.log(data);

        })
        .catch(err => console.log(err));
}

setInterval(loadWeather, 20000);
