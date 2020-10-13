// Step 1: Get user coordinates 
function getCoordintes() {

    let options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };

    async function success(pos) {
        let crd = pos.coords;
        let lat = crd.latitude.toString();
        let lng = crd.longitude.toString();
        let coordinates = [lat, lng];
        console.log(`Latitude: ${lat}, Longitude: ${lng}`);
        let cityName = await getCity(coordinates);
        
        switch (cityName.toLowerCase()) {
            case 'rabat':
                window.location.replace("/rabat");
                break;
            case 'casablanca':
                window.location.replace("/casablanca");
                break;
            case 'fes':
                window.location.replace("/fes");
                break;
            default:
                document.getElementById("cityName").innerHTML = " " + cityName ;
                let elementLoading = document.getElementById("loading") ;
                let elementLoaded = document.getElementById("loaded") ;
                elementLoading.style.display = 'none' ;
                elementLoaded.style.display = 'flex' ;
                

        }

        return;

    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.getCurrentPosition(success, error, options);
}

// Step 2: Get city name using locationiq API
function getCity(coordinates) {
    let xhr = new XMLHttpRequest();
    let lat = coordinates[0];
    let lng = coordinates[1];


    return fetch("https://us1.locationiq.com/v1/reverse.php?key=pk.d52007d67c36ca7d1473cae7eb717a9e&lat=" + lat + "&lon=" + lng + "&format=json", {
        method: 'GET'
    }).then(response =>
        response.json().then(json => {
            if (!response.ok) {
                return Promise.reject(json);
            }
            return json.address.city;
        })
    );

}


//Call the function to redirect to the correct page

getCoordintes();