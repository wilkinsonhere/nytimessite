let loginButton = document.getElementById("loginPopup");
let closeButton = document.getElementById("popupClose");
let popup = document.getElementById("popupWindow");

loginButton.addEventListener("click", (e) => {
  e.preventDefault();
  popup.classList.add("active");
});

closeButton.addEventListener("click", (e) => {
  e.preventDefault();
  popup.classList.remove("active");
});

function toggleHeaderMenu() {}