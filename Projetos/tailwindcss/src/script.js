btn = document.querySelector("button.mobile-menu-button");
menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});