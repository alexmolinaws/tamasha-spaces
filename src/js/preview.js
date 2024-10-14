// src/preview.js

// Returns a boolean, crucial for cart data
let phoneViewport = window.innerWidth < 768;

const updateViewport = () => {
  phoneViewport = window.innerWidth < 768;
};

// Space view variables
const viewingSpace = document.querySelector("#space-summary");
const featuredSpaces = document.querySelector("#featured");

const spaceImg = document.querySelector("#space-summary div img");
const spaceGallery = document.querySelectorAll(
  "#space-summary div div.flex img",
);

loadEventListeners();

// Groups all events in a single function
function loadEventListeners() {
  window.addEventListener("resize", updateViewport);

  spaceGallery.forEach((item) => {
    item.addEventListener("click", switchImage);
  });

  viewingSpace.addEventListener("click", currentToCart);
  featuredSpaces.addEventListener("click", featuredToCart);
}

// Sets the big img in preview.php
function switchImage() {
  spaceImg.src = this.src;
}

// Since the HTML structure is different for both:
// This adds to cart the space users are reading about
function currentToCart(e) {
  e.preventDefault();

  if (e.target.classList.contains("add-viewing")) {
    const orderData = e.target.closest(".order-data");

    let image, price, title;

    image = orderData.previousElementSibling.querySelector("img").src;

    price = parseInt(orderData.querySelector(".current-price").textContent);

    if (phoneViewport) {
      // On phones H1 is in the previous div
      title = orderData.previousElementSibling.querySelector("h1").textContent;
    } else {
      title = orderData.querySelector("h1").textContent;
    }

    addToCart({ image, title, price, amount: 1 });
  }
}

// This adds to cart any of the featured spaces
function featuredToCart(e) {
  if (
    e.target.classList.contains("add-featured") ||
    e.target.classList.contains("bx")
  ) {
    cartItem = e.target.closest(".card");
  }

  const image = cartItem.querySelector("img").src;
  const title = cartItem.querySelector("h3").textContent;
  const price = parseInt(cartItem.querySelector("div p").textContent);

  addToCart({ image, title, price, amount: 1 });
}

function addToCart(data) {
  // Checks if the product is already added
  const existingItem = cartContent.findIndex(
    (item) => item.title === data.title,
  );

  if (existingItem > -1) {
    cartContent[existingItem].amount++;
  } else {
    cartContent.push(data);
  }

  renderInCart();
  updateSubtotal();
}
