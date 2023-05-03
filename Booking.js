var slots = document.querySelectorAll(".slot");
slots.forEach((slot) => {
  slot.addEventListener("click", () => {
    console.log(slot.innerText);
  });
});
