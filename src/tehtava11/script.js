class Product {
    constructor(name, price) {
        this.name = name;
        this.price = price;
    }

    printDetails(){
        return `<tr><td>${this.name}</td><td>${this.price}</td></tr>`;
    }
}

updateProductList();

function updateProductList() {
    const productList =[];

    fetch("api.php", {
        method: "GET",
    })
    .then(response => response.json())
    .then(data => {
        data.forEach(product => {
            productList.push(new Product(product.name, product.price));

            let products ="";
            for(let i = 0; i<productList.length; i++){
                products += productList[i].printDetails();
            }

            document.getElementById("productList").innerHTML = products;
        });
    });
}

function addProduct() {
    const name = document.getElementById("name").value;
    const price = document.getElementById("price").value;

    const product = new Product(name, price);
    
    fetch('api.php', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(product)
    })

    .then(response => response.json())

    .then(data => {
        if (data.success) {
            document.getElementById("msg").textContent = "OK";
        }
        else {
            document.getElementById("msg").textContent = "Error";
        }
        updateProductList();
    });
}