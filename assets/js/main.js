const apikey = 'pk.eyJ1IjoicmFqaGFnYSIsImEiOiJjbG51ZGFqYmIwY29qMmxzYWhjYTBpOXFiIn0.RiB90Q57HmcmESGwxTZEpg';
const map = L.map('map').setView([-6.602372, 106.804015], 9);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 19,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: apikey,
}).addTo(map);

let userLocationMarker;
let routingControl;

$.ajax({
    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/getAllMarker', // Ganti URL sesuai dengan endpoint API Anda
    type: 'GET',
    success: function (res) {
        res.forEach(markerData => {
            createMarkerAndPopup(markerData);
        });
    },
    error: function (err) {
        console.log(err);
    }
});

function createMarkerAndPopup(markerData) {
    const marker = L.marker([markerData.Lat, markerData.Long]).addTo(map);
    const imageSrc = `data:image/png;base64,${markerData.image}`;
    const popupContent = `
        <div>
            <img src="${imageSrc}" alt="Gambar Tempat" style="max-width: 100%; height: auto;">
            <h3>${markerData.nama}</h3>
            <button class="navigateButton" data-url="${markerData.url}">Buka Web</button>
        </div>
    `;
    marker.bindPopup(popupContent, {
        maxWidth: 300
    });
}


if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        const userLatitude = position.coords.latitude;
        const userLongitude = position.coords.longitude;

        userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);

        userLocationMarker.bindPopup("Lokasi Saya").openPopup();

        map.setView([userLatitude, userLongitude], 13);
    });
}

document.querySelectorAll('.navigateButton').forEach(button => {
    button.addEventListener('click', function () {
        const destinationLat = parseFloat(button.getAttribute('data-lat'));
        const destinationLng = parseFloat(button.getAttribute('data-lng'));

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const userLatitude = position.coords.latitude;
                const userLongitude = position.coords.longitude;


                userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);

                const waypoints = [
                    L.latLng(userLatitude, userLongitude),
                    L.latLng(destinationLat, destinationLng)
                ];

                routingControl = L.Routing.control({
                    waypoints: waypoints,
                    routeWhileDragging: true, 
                    lineOptions: {
                        styles: [{ color: 'blue', weight: 6 }]
                    }
                }).addTo(map);
            });
        }
    });
});

function updateMapWithUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const userLatitude = position.coords.latitude;
            const userLongitude = position.coords.longitude;

            if (userLocationMarker) {
                map.removeLayer(userLocationMarker);
            }

            userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);

            userLocationMarker.bindPopup("Lokasi Saya").openPopup();

            map.setView([userLatitude, userLongitude], 13);
        });
    }
}

setInterval(updateMapWithUserLocation, 30000);
