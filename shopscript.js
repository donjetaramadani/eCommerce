const products = [
    { id: 1, name: 'Vepra poetike', price: 25, imageUrl:'C:\Users\blinn\OneDrive\Desktop\Vepra1.jpg' },
    { id: 2, name: 'Artwork 2', price: 150,  imageUrl:'Vepra1.jpg'},
    { id: 3, name: 'Artwork 3', price: 200, imageUrl:'Vepra1.jpg' },
    { id: 4, name: 'Artwork 4', price: 120, imageUrl:'Vepra1.jpg' },
    { id: 5, name: 'Artwork 5', price: 180, imageUrl:'Vepra1.jpg'},
    { id: 6, name: 'Artwork 6', price: 90, imageUrl:'Vepra1.jpg'},
    { id: 7, name: 'Artwork 7', price: 130, imageUrl:'Vepra1.jpg' },
    { id: 8, name: 'Artwork 8', price: 160, imageUrl:'Vepra1.jpg'},
    { id: 9, name: 'Artwork 9', price: 140, imageUrl:'Vepra1.jpg' },
    { id: 10, name: 'Artwork 10', price: 110, imageUrl:'Vepra1.jpg'},
];

const shoppingCart = [];

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    shoppingCart.push(product);
    updateCart();
    alert(`Added "${product.name}" to the cart!`);
}

function updateCart() {
    const cartSection = document.querySelector('.cart-items');
    cartSection.innerHTML = '';

    let total = 0;

    shoppingCart.forEach(product => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <img src="https://via.placeholder.com/150" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>Price: $${product.price}</p>
        `;
        total += product.price;
        cartSection.appendChild(cartItem);
    });

    // Display total
    const totalElement = document.createElement('div');
    totalElement.classList.add('total');
    totalElement.textContent = `Total: $${total}`;
    cartSection.appendChild(totalElement);
}

// JavaScript loop to display products
document.addEventListener('DOMContentLoaded', function() {
    const section = document.querySelector('section');
    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');
        productElement.innerHTML = `
            <img src="https://via.placeholder.com/150" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>Price: $${product.price}</p>
            <button onclick="addToCart(${product.id})">Add to Cart</button>
        `;
        section.appendChild(productElement);
    });
});

// Function to navigate to the information page
function goToInformationPage() {
    // Use forward slashes (/) in the file path
    window.location.href = 'C:/Users/blinn/OneDrive/Desktop/PROJEKTI/information.html';
}