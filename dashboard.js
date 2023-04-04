const sidebar = document.getElementById("sidebar");
const hamburger = document.getElementById("hamburger");

hamburger.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});
