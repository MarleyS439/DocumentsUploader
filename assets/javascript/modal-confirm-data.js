// Open and Close Modal to View the Terms of Consentiment to Use the Data

// To Open
const btnActivation = document.getElementById("terms");
const modal = document.getElementById("modalConfirmation");

btnActivation.addEventListener("click", function () {
  if ((modal.style.display = "none")) {
    modal.style.display = "block";
  }
});

// To Close
const btnClose = document.getElementById("closeModalConfirmation");

btnClose.addEventListener("click", function () {
  if ((modal.style.display = "block")) {
    modal.style.display = "none";
  }
});

// Checkbox Verification
const checkbox = document.getElementById("confirm");
const link = document.getElementById("goToForm");

checkbox.addEventListener("change", function () {
  if (checkbox.checked) {
    link.classList.remove("disabled-link");
    link.title = "Abrir o formulário";
  } else {
    link.classList.add("disabled-link");
    link.title = "Por favor, marque a caixa de seleção acima";
  }
});
