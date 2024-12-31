import { createUser } from "./js/api/api.js";

const form = document.getElementById("main-form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const formObject = {};
  formData.forEach((value, key) => {
    formObject[key] = value;
  });

  createUser(formObject);
});
