document.addEventListener("DOMContentLoaded", () => {
  const maintenanceMode = false;
  if (maintenanceMode) {
    window.location.replace("C:\\portfolio\\maintenance.html");
    // window.location.replace("https://ifeanyichukwujohn.me/maintenace.html");
  }
  if (!localStorage.getItem("hue-color")) {
    document.documentElement.style.setProperty("--hue-color", 150);
  }

  // Formspree code
  const form = document.getElementById("contact-form");

  async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("alert");
    var data = new FormData(event.target);
    fetch(event.target.action, {
      method: form.method,
      body: data,
      headers: {
        Accept: "application/json",
      },
    })
      .then((response) => {
        status.innerHTML = "Your message has been sent.";
        document.querySelector(".alert_style").style.display = "block";

        // hide alert after 3 seconds
        setTimeout(function () {
          document.querySelector(".alert_style").style.display = "none";
        }, 4000);
        form.reset();
      })
      .catch((error) => {
        status.innerHTML =
          "Oops! There was a problem delivering your message, please contact via other means.";
        document.querySelector(".alert_style").style.display = "block";

        // hide alert after 3 seconds
        setTimeout(function () {
          document.querySelector(".alert_style").style.display = "none";
        }, 4000);
      });
  }
  form.addEventListener("submit", handleSubmit);

  // NAVIGATION PANEL
  let navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close");

  // MENU SHOW
  if (navToggle) {
    navToggle.addEventListener("click", () => {
      navMenu.classList.add("show-menu");
    });
  }

  // MENU HIDDEN
  if (navClose) {
    navClose.addEventListener("click", () => {
      navMenu.classList.remove("show-menu");
    });
  }

  // REMOVE MENU MOBILE
  const navLink = document.querySelectorAll(".nav_link");

  function linkAction() {
    navMenu = document.getElementById("nav-menu");
    navMenu.classList.remove("show-menu");
  }
  navLink.forEach((n) => n.addEventListener("click", linkAction));

  // SKILLS

  const skillContent = document.querySelectorAll(".skills__content");
  const skillsHeader = document.querySelectorAll(".skills__header");

  function toggleSkills() {
    let itemClass = this.parentNode.className;
    for (let i = 0; i < skillContent.length; i++) {
      skillContent[i].className = "skills__content skills__close";
    }
    if (itemClass === "skills__content skills__close") {
      this.parentNode.className = "skills__content skills__open";
    }
  }

  skillsHeader.forEach((el) => {
    el.addEventListener("click", toggleSkills);
  });

  // QUALIFICATION TABS
  let education = document.getElementById("education");
  let work = document.getElementById("work");
  let educationheader = document.getElementById("educationheader");
  let workheader = document.getElementById("workheader");
  workheader.style.color = "var(--first-color)";
  educationheader.style.color = "var(--text-color)";

  educationheader.addEventListener("click", () => {
    let condition1 = work.classList.contains("qualification-inactive");
    if (!condition1) {
      education.classList.remove("qualification-inactive");
      work.classList.add("qualification-inactive");
      workheader.style.color = "var(--text-color)";
      educationheader.style.color = "var(--first-color)";
    }
  });
  workheader.addEventListener("click", () => {
    let condition2 = education.classList.contains("qualification-inactive");
    if (!condition2) {
      work.classList.remove("qualification-inactive");
      education.classList.add("qualification-inactive");
      educationheader.style.color = "var(--text-color)";
      workheader.style.color = "var(--first-color)";
    }
  });

  // PORTFOLIO SWIPER
  let swiper = new Swiper(".mySwiper", {
    cssMode: true,
    loop: false,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    mousewheel: true,
    keyboard: true,
  });

  // SCROLL SECTIONS ACTIVE LINK
  const sections = document.querySelectorAll("section[id]");

  function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach((current) => {
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 50;
      let sectionId = current.getAttribute("id");

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        document
          .querySelector(".nav_menu a[href*=" + sectionId + "]")
          .classList.add("active-link");
      } else {
        document
          .querySelector(".nav_menu a[href*=" + sectionId + "]")
          .classList.remove("active-link");
      }
    });
  }
  window.addEventListener("scroll", scrollActive);

  // HEADER SHADOW
  function scrollHeader() {
    const nav = document.getElementById("header");
    if (this.scrollY >= 80) nav.classList.add("scroll-header");
    else nav.classList.remove("scroll-header");
  }
  window.addEventListener("scroll", scrollHeader);

  // SHOW SCROLL UP BUTTON
  function scrollUpfunc() {
    const scrollUp = document.getElementById("scroll-up");
    if (this.scrollY >= 560) scrollUp.classList.add("show-scroll");
    else scrollUp.classList.remove("show-scroll");
  }
  window.addEventListener("scroll", scrollUpfunc);

  // DARK/LIGHT THEME
  const themeButton = document.getElementById("theme-button");
  const darkTheme = "dark-theme";
  const iconTheme = "uil-sun";

  // Previously selected topic (if user selected)
  const selectedTheme = localStorage.getItem("selected-theme");
  const selectedHue = localStorage.getItem("hue-color");
  const selectedIcon = localStorage.getItem("selected-icon");

  // obtain the current theme
  const getCurrentTheme = () =>
    document.body.classList.contains(darkTheme) ? "dark" : "light";
  const getCurrentIcon = () =>
    themeButton.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

  if (selectedTheme) {
    document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
      darkTheme
    );
    themeButton.classList[selectedIcon === "uil-moon" ? "add" : "remove"](
      iconTheme
    );
  }

  if (selectedHue) {
    document.documentElement.style.setProperty("--hue-color", selectedHue);
  }

  // Activate/Deactivate the theme manually with the button
  themeButton.addEventListener("click", () => {
    // Add or remove the dark icon/theme
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);
    // We save the theme and the current icon that the user chose
    localStorage.setItem("selected-theme", getCurrentTheme());
    localStorage.setItem("selected-icon", getCurrentIcon());
  });

  // Typing Animation using Typed JS
  var typed = new Typed(".type", {
    strings: ["a Frontend", "a Backend", "a Flutter"],
    smartBackspace: true,
    startDelay: 1000,
    typeSpeed: 130,
    backDelay: 1000,
    backSpeed: 60,
    loop: true,
  });

  const toggleBtn = document.querySelector("#tb");
  const hue_container = document.querySelector(".hue_container");

  toggleBtn.addEventListener("change", (e) => {
    console.log(e.target);
    if (e.target.target) {
      hue_container.classList.toggle("out");
    } else {
      generateHue();
      hue_container.classList.toggle("out");
    }
  });

  const colorLists = [];
  function generateHue() {
    while (colorLists.length < 5) {
      let r = Math.floor(Math.random() * 360) + 1;
      if (colorLists.indexOf(r) === -1) colorLists.push({ hue: r });
    }
  }

  generateHue();

  colorLists.forEach((color) => {
    const btn = document.createElement("button");
    btn.classList.add("btn");
    btn.dataset.hue = color.hue;
    btn.style.backgroundColor = `hsl(${color.hue},69%, 61%`;
    hue_container.appendChild(btn);
    btn.addEventListener("click", (e) => {
      document.documentElement.style.setProperty(
        "--hue-color",
        e.target.dataset.hue
      );
      hue_container.classList.toggle("out");
      toggleBtn.checked = false;
      localStorage.setItem("hue-color", e.target.dataset.hue);
    });
    // animate slider button color
  });
});
