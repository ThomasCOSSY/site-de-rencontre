// Je créé un tableau d'objets dans catalog


// Je parcours mon array catalog, et à chaque passage de ligne du tableau, je stock la valeur dans product
catalog.forEach(function (product) {
    createProducts(product);
});

function createProducts(product) {
    // on créé notre const pour manipuler notre div products
    const products = document.getElementById('products');
    let div = document.createElement('div');
    // Je suis en mode faineant : j'utilise les magic quote pour écrire mon code html
    div.innerHTML =
        `<div class="card col" style="width: 18rem;">
            <img src="assets/img/${product.picture}" class="card-img-top" alt="${product.name}">
            <div class="card-body">
                <p class="card-title h5">${product.name} ${product.firstname}</p>
                <p class="card-text">${product.age}</p>
                <p class="card-text">${product.zipcode}</p>
                <p class="card-text">${product.description}</p>
                <button>
            </div>
        </div>`
    products.appendChild(div);
}