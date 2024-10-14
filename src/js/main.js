// src/main.js

// Header variables
const menuToggle = document.getElementById("header-toggle");
const toggleIcon = menuToggle.querySelector("i");
const mobileNav = document.querySelector("#mobile-nav");

// Cart variables
const cart = document.getElementById("cart");
const cartBtn = document.querySelector("#cart-btn");
const cartClose = document.querySelector("#cart-close");
const cartClear = document.querySelector("#cart-clear");
const cartSubtotal = document.querySelector("#cart-subtotal");
const cartContainer = document.querySelector("#cart-container");

let cartItem = "";
let cartContent = [];

menuToggle.addEventListener("click", toggleMenu);

cartClear.addEventListener("click", clearCart);

loadFromLocalStorage();

function toggleMenu() {
  if (toggleIcon.classList.contains("bx-menu")) {
    // Changes button icon
    toggleIcon.classList.remove("bx-menu");
    toggleIcon.classList.add("bx-x");

    // Makes menu visible & adds opacity
    mobileNav.classList.remove("hidden");
    setTimeout(() => {
      mobileNav.classList.remove("opacity-0");
      mobileNav.classList.add("opacity-90");
    }, 10);
  } else {
    toggleIcon.classList.remove("bx-x");
    toggleIcon.classList.add("bx-menu");

    mobileNav.classList.remove("opacity-90");
    mobileNav.classList.add("opacity-0");

    // Must be equal to "duration" class
    setTimeout(() => {
      mobileNav.classList.add("hidden");
    }, 500);
  }
}

function toggleComponent(component) {
  if (component.classList.contains("hidden")) {
    component.classList.remove("hidden");
    component.classList.add("fixed");
    setTimeout(() => {
      component.classList.remove("opacity-0");
      component.classList.add("opacity-100");
    }, 10);
  } else {
    component.classList.remove("fixed");
    component.classList.add("hidden");
    component.classList.remove("opacity-100");
    component.classList.add("opacity-0");
  }
}

function clearCart() {
  cartContainer.innerHTML = "";
  cartContent = [];
  updateSubtotal();
}

function renderInCart() {
  // Clears current visual cart content
  cartContainer.innerHTML = "";

  // Computes again what to render when cart updates
  cartContent.forEach((item, index) => {
    const newCartItem = document.createElement("div");
    newCartItem.setAttribute("class", "cart__item");

    const subtotal = item.price * item.amount; // Calcular subtotal para este item

    // Structure of the item to render
    // Customizable, no selectors pointing at structure
    newCartItem.innerHTML = `
      <img src="${item.image}" width="70" class="border border-gray-dark mr-[18px]"/>
      <div class="w-10/12">
        <div class="flex justify-between items-center mb-5">
          <h4 class="w-11/12 text-base md:text-lg font-subs">${item.title}</h4>
          <button class="block w-1/12" data-index="${index}"><i class="bx bx-trash-alt text-xl text-gray-dark"></i></button>
        </div>
        <div class="flex justify-between items-center w-full">
          <p class="w-[55%] uppercase text-sm md:text-base font-body font-light text-gray-dark">
            ${item.amount} x ${item.price} KZT</p>
          <p class="w-[40%] text-end uppercase text-sm md:text-base font-body font-light">
            ${subtotal} KZT</p>
        </div>
      </div>
    `;

    const deleteButton = newCartItem.querySelector("button");
    deleteButton.addEventListener("click", () => {
      removeFromCart(index);
    });

    // Displays final component in cart
    cartContainer.appendChild(newCartItem);
  });
}

function removeFromCart(index) {
  // Deletes item from cart
  // Independently of item amount
  cartContent.splice(index, 1);
  renderInCart();
  updateSubtotal();
}

// Updates checkout.php in real time
function updateCheckoutTotal(subtotal) {
  // 10% for taxes, adapt this
  const taxes = subtotal * 0.1;
  const total = subtotal + taxes;

  // Checks for elements existence prior to updating
  const checkoutTotalElement = document.getElementById("checkout-total");
  const checkoutSubtotalElement = document.getElementById("checkout-subtotal");

  if (checkoutTotalElement) {
    checkoutTotalElement.textContent = total;
  }
  if (checkoutSubtotalElement) {
    checkoutSubtotalElement.textContent = subtotal;
  }
}

function updateSubtotal() {
  const subtotal = cartContent.reduce(
    (acc, item) => acc + item.price * item.amount,
    0,
  );

  // Updates subtotal in cart
  cartSubtotal.textContent = subtotal;
  saveToLocalStorage();

  // Updates checkout only if open
  updateCheckoutTotal(subtotal);
}

function saveToLocalStorage() {
  localStorage.setItem("cartContent", JSON.stringify(cartContent));
}

function loadFromLocalStorage() {
  const storedCart = localStorage.getItem("cartContent");
  if (storedCart) {
    cartContent = JSON.parse(storedCart);
    renderInCart();
    updateSubtotal();
  }
}
