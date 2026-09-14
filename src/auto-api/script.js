fetch("api.php")
    .then(response => response.json())
    .then(autot => {

        let teksti = "";

        autot.forEach(auto => {

            teksti += `
                <p>
                    🚗 ${auto.merkki} ${auto.malli}
                    (${auto.vuosi})
                </p>
            `;
        });

        document.getElementById("autot").innerHTML = teksti;
    });