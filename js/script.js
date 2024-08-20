const darkMode = getCookie("darkMode");
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}
if (darkMode == "true") {
  document.querySelector(".switch__input").checked = true;
  DarkReader.setFetchMethod(window.fetch);
  DarkReader.enable();
} else {
  document.querySelector(".switch__input").checked = false;
  DarkReader.disable();
}
const checkbox = document.querySelector(".switch__input");
checkbox.addEventListener("change", function () {
  if (this.checked) {
    DarkReader.setFetchMethod(window.fetch);
    DarkReader.enable();
    document.cookie = "darkMode=true;";
  } else {
    DarkReader.disable();
    document.cookie = "darkMode=false";
  }
});

var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 50,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    720: {
      slidesPerView: 2,
    },
    1150: {
      slidesPerView: 3,
    },
    1530: {
      slidesPerView: 4,
    },
    2000: {
      slidesPerView: 5,
    },
    2500: {
      slidesPerView: 6,
    },
    3000: {
      slidesPerView: 7,
    },
  },
});
