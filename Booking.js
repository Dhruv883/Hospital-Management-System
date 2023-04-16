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

const daysCount = new Date(year, currentmonth, 0).getDate();

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

function calendarInit() {
  month.innerText = monthlist[currentmonth] + " " + year;

  for (let i = 1; i <= daysCount; i++) {
    let span = document.createElement("span");
    span.innerText = i + " " + monthlist[currentmonth].slice(0, 3);
    span.classList.add("swiper-slide");
    swiperWrapper.append(span);
  }
}

window.onload = () => {
  calendarInit();
};
