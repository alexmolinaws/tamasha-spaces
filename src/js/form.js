// src/form.js

// Gets form fields and message to show
const formData = document.getElementById("form");
const formModal = document.querySelector(".modal");

formData.addEventListener("submit", validateForm);

function validateForm(e) {
  // Prevents submit and clears fields
  // Replace logic when integrating API
  e.preventDefault();
  this.reset();

  toggleComponent(formModal);
}
