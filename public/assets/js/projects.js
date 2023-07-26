const container = document.querySelector(
  ".portfolio_container>.swiper-wrapper"
);

let projects = [
  {
    image: "https://i.imgur.com/Q36kn4J.png",
    title: "CREDIT89",
    description: 'A Loan Application System',
    url: "https://www.credit89.com.sg/",
  },
  {
    image: "https://i.imgur.com/nGKRUJb.png",
    title: "BLESSING",
    description: 'A Food Ordering and Restaurant website',
    url: "javascript:void(0)",
  },
  {
    image: "https://i.imgur.com/DOt0SXb.png",
    title: "ECOFIX",
    description: 'A Waste Management System',
    url: "javascript:void(0)",
  },
  {
    image: "https://i.imgur.com/1Yc2ihz.png",
    title: "HOME TRADERS",
    description: 'A Real Estate / Investment website',
    url: "https://www.homtraders.com/",
  },
  {
    image: "https://i.imgur.com/WvyWhez.png",
    title: "M-PESIFY",
    description: 'An Investment website',
    url: "https://www.m-pesify.com/",
  },
  {
    image: "https://i.imgur.com/1IqlYNO.png",
    title: "DIVINE FAVOUR INTERNATIONAL SCHOOL",
    description: 'A School Management Statement',
    url: "https://www.dfisportal.com/",
  },
  {
    image: "https://i.imgur.com/TizzStj.png",
    title: "HAVIT-NG",
    description: 'An Ecommerce Website',
    url: "https://www.havit-ng.com/",
  },
  {
    image: "https://i.imgur.com/Gj2LKxj.png",
    title: "POS Management System",
    description: 'POS Management System built with Laravel',
    url: "https://pacific-headland-04908.herokuapp.com/",
  },
  {
    image: "https://i.imgur.com/Z4xLZkj.png",
    title: "VideoTube",
    description: 'Youtube Clone project with Laravel',
    url: "https://github.com/theJohnCode/videotube",
  },
  {
    image: "https://i.imgur.com/6Zb96Bb.png",
    title: "Drawing App",
    description: 'A simple Canva Drawing App with JavaScript',
    url: "https://github.com/theJohnCode/Javascript_Drawing_App",
  },
  {
    image: "https://i.imgur.com/nEOT0oI.png",
    title: "Fashion E-Commerce",
    description: 'An Ecommerce website for fashion and accessories',
    url: "javascript:void(0);",
  },
  {
    image: "https://i.imgur.com/guRvKxX.png",
    title: "Flutter Facebook UI Clone",
    description: 'Facebook Home Page User Interface Clone',
    url: "https://github.com/theJohnCode/facebook_ui_clone",
  },
  {
    image: "https://i.imgur.com/S2J2KMU.png",
    title: "Flutter World Time App",
    description: 'This simple app showcases the different time for different selected located across the world',
    url: "https://https://github.com/theJohnCode/flutter_word_timeApp/",
  },
  {
    image: "https://i.imgur.com/wxMmI4j.png",
    title: "Travel App",
    description: 'A simple Flutter Travel UI. It shows different places in the world',
    url: "https://github.com/theJohnCode/travel_ui_app",
  },
  {
    image: "https://i.imgur.com/PHSEgXX.png",
    title: "10 Javascript Projects",
    description:
      "A curated lists of my first 10 Javascript projects built with just HTML, CSS and Javascript",
    url: "https://myjavascriptproject.netlify.app/",
  },
  {
    image: "https://i.imgur.com/FIszPk8.png",
    title: "Base to Base Number Converter",
    description:
      "A very minimalistic app with Javascript that converts number from one base to another easily",
    url: "https://base2base.netlify.app/",
  },
  {
    image: "https://i.imgur.com/KRmOX0v.png",
    title: "Audio Player",
    description: "A basic audio player with visualizers ",
    url: "https://johnaudioplayer.netlify.app/",
  },
  {
    image: "https://i.imgur.com/o7WzhBw.png",
    title: "Neuphormic Calculator",
    description: "Built with Neuphormism design in mind",
    url: "https://johncalc.netlify.app/",
  },
  {
    image: "https://i.imgur.com/2TF91Cy.png",
    title: "Luno Website Clone",
    description: 'Cloning the beautiful crypto investment of <a href="https://www.luno.com/">Luno<a/>',
    url: "https://veloxclone.netlify.app/",
  },
  {
    image: "https://i.imgur.com/gRKKbZ1.png",
    title: "Number Guessing Game",
    description: 'Just a fun game in which you guess a system generated number.',
    url: "https://guessmegame.netlify.app/",
  },
  {
    image: "https://i.imgur.com/cuVE7mS.png",
    title: "JAMB Status Generator",
    description: 'You can use it to generate the UI of the JAMB admission status. Try it out😆',
    url: "https://jambstatus.netlify.app/",
  },
  {
    image: "https://i.imgur.com/O2j3VsJ.png",
    title: "MX PLayer",
    description: 'A music player that has a very unique UI. Awesome musics already loaded on it 🎼',
    url: "https://mxplayer.netlify.app/",
  },
  {
    image: "https://i.imgur.com/43WddoC.png",
    title: "Pomodoro Timer",
    description: 'Built with Python during my 100DaysOfCode. You can see many other Python projects on the github repo',
    url: "https://github.com/theJohnCode/100DaysofCodeInPython/tree/master/Day%2028/pomodoro",
  },
  {
    image: "https://i.imgur.com/WHrXXzZ.png",
    title: "3 in One Recorder",
    description: 'For recording your screen, audio or vidoe. it has a very simpe interface',
    url: "https://wowscreen.netlify.app/",
  },
  {
    image: "https://i.imgur.com/p6x9X85.png",
    title: "Text to Speech Converter",
    description: 'Just copy your long lines of passage and paste on the app and sit down and listen. 🤐. Very good when you are tired of reading',
    url: "https://text2speechapi.netlify.app/",
  },
  
];

projects.forEach((project, n) => {
  let html = `<div class="portfolio_content grid swiper-slide">
                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(${project.image})">
                        <img loading="lazy" class="portfolio_img" src="${project.image}" alt="${project.title}" />
                    </figure>
                    
                    <div class="portfolio_data">
                    <h3 class="portfolio_title">
                        ${project.title}
                    </h3>
                    <p class="portfolio_description">
                        ${project.description}
                    </p>
                    <a href="${project.url}" class="button button-flex button-small portfolio_button" target="_blank">
                        Check out
                        <i class="uil uil-arrow-right button_icon"></i>
                    </a>
                    </div>
                </div>`;
  container.insertAdjacentHTML("beforeend", html);
});

function zoom(e) {
  var zoomer = e.currentTarget;
  e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
  e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);
  x = (offsetX / zoomer.offsetWidth) * 100;
  y = (offsetY / zoomer.offsetHeight) * 100;
  zoomer.style.backgroundPosition = x + "% " + y + "%";
}
