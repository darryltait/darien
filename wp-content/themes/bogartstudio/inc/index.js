const open_btn = document.querySelector(".open-btn");
const close_btn = document.querySelector(".close-btn");
const nav = document.querySelectorAll(".nav");

const painting_container = document.querySelectorAll(".painting-container");

open_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.add("visible"));
});
close_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.remove("visible"));
});

window.addEventListener("load", () => {
  painting_container.forEach((pc_el) => pc_el.classList.add("visible"));
});

const mainbar = document.querySelector(".mainbar");

window.addEventListener("scroll", test);
function test() {
  console.log(window.scrollY);
  if (window.scrollY > 10) {
    // mainbar.classList.add("active");
  } else {
    // mainbar.classList.remove("active");
  }
}

// Hides mainbar at top after scrolling down 100px
(function () {
  let doc = document.documentElement;
  let w = window;

  let curScroll = (prevScroll = w.scrollY || doc.scrollTop);
  let curDirection = (prevDirection = 0);

  let headertop = document.getElementById("mainheader");

  // let threshold = 120;
  let threshold = 100;
  let toggled;

  const checkScroll = function () {
    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) {
      curDirection = 2;
    } else {
      curDirection = 1;
    }
    if (curDirection !== prevDirection) {
      toggled = toggleHeader();
    }

    if (toggled) {
      prevDirection = curDirection;
    }
    prevScroll = curScroll;
  };

  let toggleHeader = function () {
    toggled = true;
    if (curDirection === 2 && curScroll > threshold) {
      headertop.classList.add("hide");
    } else if (curDirection === 1) {
      headertop.classList.remove("hide");
    } else {
      toggled = false;
    }
    return toggled;
  };

  window.addEventListener("scroll", checkScroll);
})();

const featured = document.querySelector(".new-featured");
window.addEventListener("scroll", checkFeatured);

function checkFeatured() {
  const triggerBottom = 1000;
  featured.getBoundingClientRect().top;
  console.log(featuredTop);
  if (featured.getBoundingClientRect().top < triggerBottom) {
    featured.classList.add("show");
  }
}

const sliders1 = document.querySelectorAll(".page-id-60 .painting-container");
const sliders2 = document.querySelectorAll(".page-id-575 .painting-container");
const sliders3 = document.querySelectorAll(".page-id-577 .painting-container");
const sliders4 = document.querySelectorAll(".page-id-579 .painting-container");
const sliders5 = document.querySelectorAll(".page-id-862 .painting-container");

const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -100px 0px",
};
const appearOnScroll = new IntersectionObserver(function (
  entries,
  appearOnScroll
) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    }
  });
},
appearOptions);

sliders1.forEach((slider) => {
  appearOnScroll.observe(slider);
});
sliders2.forEach((slider) => {
  appearOnScroll.observe(slider);
});
sliders3.forEach((slider) => {
  appearOnScroll.observe(slider);
});
sliders4.forEach((slider) => {
  appearOnScroll.observe(slider);
});
sliders5.forEach((slider) => {
  appearOnScroll.observe(slider);
});
