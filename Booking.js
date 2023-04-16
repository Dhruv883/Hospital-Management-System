const calendar = document.getElementById("calendar"),
  month = document.getElementById("month"),
  days = document.getElementById("days");

const nextMonth = document.getElementById("nextmonth"),
  prevMonth = document.getElementById("prevmonth"),
  prevDay = document.getElementById("prevday"),
  nextDay = document.getElementById("nextday");

const slots = document.querySelectorAll(".slot");

const swiper = new Swiper(".swiper", {
  slidesPerView: 7,
  speed: 600,
});

let today = new Date();
let currentmonth = today.getMonth();
let year = today.getFullYear();
let activeDay;

const monthlist = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

prevDay.addEventListener("click", () => {
  swiper.slidePrev(400, true);
});
nextDay.addEventListener("click", () => {
  swiper.slideNext(400, true);
});

function init() {
  month.innerText = monthlist[currentmonth] + " " + year;
}

window.onload = () => {
  init();
};
