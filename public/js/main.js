// Switch Main nav
const menuSwitch    = document.getElementById("menu-switch");
const mainNav       = document.getElementById("main_navigation");
const conditionMenu = menuSwitch.getAttribute("data-condition-menu");


menuSwitch.addEventListener("click", () => {
    mainNav.classList.toggle("hidden");
    menuSwitch.classList.toggle("rout-90");
});