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

const swiperWrapper = document.getElementById("swiper-wrapper");

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

prevMonth.addEventListener("click", () => {
  changePrevMonth();
});

nextMonth.addEventListener("click", () => {
  changeNextMonth();
});

function calendarInit(mon, yr) {
  month.innerText = monthlist[mon] + " " + yr;
  swiperWrapper.innerHTML = "";

  for (let i = 1; i <= new Date(yr, mon + 1, 0).getDate(); i++) {
    let span = document.createElement("span");
    span.innerText = i + " " + monthlist[currentmonth].slice(0, 3);
    span.classList.add("swiper-slide");
    swiperWrapper.append(span);
  }

  for (let i = 0; i < 6; i++) {
    let span = document.createElement("span");
    span.classList.add("swiper-slide");
    span.setAttribute("style", "visibility:hidden");
    swiperWrapper.append(span);
  }
}

function changePrevMonth(params) {
  currentmonth--;
  if (currentmonth < today.getMonth()) {
    currentmonth = today.getMonth();
  }
  calendarInit(currentmonth, year);
}

function changeNextMonth(params) {
  currentmonth++;
  if (currentmonth > 11) {
    currentmonth = 11;
  }
  calendarInit(currentmonth, year);
}

window.onload = () => {
  calendarInit(currentmonth, year);
};
