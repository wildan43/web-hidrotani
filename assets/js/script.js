let weather = {
  apiKey: "b0c367b893148d3e7792c9aaabc4f7b1",
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q=" +
        city +
        "&units=metric&appid=" +
        this.apiKey
    )
      .then((response) => {
        if (!response.ok) {
          alert("No weather found.");
          throw new Error("No weather found.");
        }
        return response.json();
      })
      .then((data) => this.displayWeather(data))
      .catch((error) => console.error("Error:", error));
  },

  displayWeather: function (data) {
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;
    const rain = data.rain ? data.rain["1d"] : undefined; // Mengambil data hujan jika ada

    document.querySelector(".city").innerText = "Weather in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = temp + "°C";
    document.querySelector(".humidity").innerText =
      "Humidity: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Wind speed: " + speed + " km/h";

    let rainText = "Tidak ada data curah hujan"; // Pesan default jika data hujan tidak ada

    if (rain !== undefined) {
      rainText = "Curah Hujan: " + rain + " mm"; // Mengambil data curah hujan jika ada
    }

    document.querySelector(".rain").innerText = rainText;

    document.querySelector(".weather").classList.remove("loading");
    document.body.style.backgroundImage =
      "url('https://source.unsplash.com/1600x900/?" + name + "')";

    // Tambahkan logika rekomendasi tanaman berdasarkan suhu, kelembapan, dan hujan
    let recommendation = document.querySelector(".recommendation");
    if (temp < 10 && humidity > 80) {
      recommendation.innerText = "Rekomendasi Tanaman: Anggrek";
    } else if (temp > 20 && humidity <= 60 ) {
      recommendation.innerText = "Rekomendasi Tanaman: Bunga Matahari";
    } else {
      recommendation.innerText = "Rekomendasi Tanaman: Cabe";
    }
  },
  search: function () {
    this.fetchWeather(document.querySelector(".search-bar").value);
  },
};

document.querySelector(".search button").addEventListener("click", function () {
  weather.search();
});

document
  .querySelector(".search-bar")
  .addEventListener("keyup", function (event) {
    if (event.key == "Enter") {
      weather.search();
    }
  });

weather.fetchWeather("Denver");

function initMap() {
  const map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}


