// For open the help dialog modal

const helpIcon = document.getElementById("help");
const dialog = document.getElementById("boxHelp");
const closeIcon = document.getElementById("closeIcon");

helpIcon.addEventListener("click", function () {
  if (dialog.style.display != "block") {
    dialog.style.display = "block";
  }
});

closeIcon.addEventListener("click", function () {
  if ((dialog.style.display = "block")) {
    dialog.style.display = "none";
  }
});

const body = document.body;

body.addEventListener;
