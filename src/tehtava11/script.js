fetch("api.php")
    .then(response => response.json())
    .then(products => {

        let teksti = "";

        products.forEach(product => {

            teksti += `
                <p>
                    ${auto.make} ${auto.model}
                </p>
            `;
        });

        document.getElementById("autot").innerHTML = teksti;
    });