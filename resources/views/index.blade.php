@extends('layouts.app')

@section('content')
    <!-- Home -->
    <section class="home section" id="home">
        <div class="home_container container grid">
            <div class="home_content grid">
                <div class="home_social">
                    <a href="https://www.linkedin.com/in/ifeanyichukwujohn/" class="home_social-icon" target="_blank">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>

                    <a href="https://github.com/theJohnCode/" class="home_social-icon" target="_blank">
                        <i class="uil uil-github-alt"></i>
                    </a>

                    <a href="https://twitter.com/theJohnCode/" class="home_social-icon" target="_blank">
                        <i class="uil uil-twitter-alt"></i>
                    </a>

                    <a href="https://m.me/theJohnCode/" class="home_social-icon" target="_blank">
                        <i class="uil uil-messenger"></i>
                    </a>
                </div>

                <div class="home_img">
                    <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path
                                d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                  130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                  97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                  0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                        </mask>
                        <g mask="url(#mask0)">
                            <path
                                d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                  165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                  129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                  -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            <image class="home_blob-img" x="12" y="8"
                                href="https://i.imgur.com/ZdOUQTZ.png" />
                        </g>
                    </svg>
                </div>

                <div class="home_data">
                    <h1 class="home_title">Hi, I'm Ifeanyichukwu</h1>
                    <h3 class="home_subtitle">I am <span class="type"></span> Developer</h3>

                    <p class="home_description">
                        I love technology with passion. A self taught developer, believes in the power of community.
                    </p>
                    <a href="#contact" class="button button--flex">
                        Contact Me
                        <i class="uil uil-message"></i>
                    </a>
                </div>
            </div>

            <div class="home_scroll">
                <a href="#about" class="home_scroll-button button--flex">
                    <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                    <span class="home_scroll-name">Scroll Down</span>
                    <i class="uil uil-arrow-down home_scroll-arrow"></i>
                </a>
            </div>
        </div>
        <button class="toggleBtn">
            <label class="switch">
                <input id="tb" type="checkbox">
                <span class="slider round"></span>
            </label>
        </button>
        <div class="hue_container"></div>
    </section>

    <!-- About -->
    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My introduction</span>
        <div class="about_container container grid">
            <img src="https://i.imgur.com/ZdOUQTZ.png" alt="" class="about_img" />
            <div class="about_data">
                <p class="about_description">
                    Hi! 👋 I'm Ifeanyichukwu John, a computer science student pursuing
                    B.Science. I am a passionate self-learner,
                    Open source enthusiast, exploring and building projects👱 using
                    various technologies. I am a Fullstack web developer well informed in
                    HTML, CSS, JavaScript, PHP, Python and stand at an intermediate level
                    of Frameworks like React and Vue.
                </p>
                <div class="about_button">
                    <a download="" href="{{ asset('assets/pdf/Ifeanyichukwujohn.pdf') }}" class="button button--flex">
                        Resume<i class="uil uil-file-download-alt button_icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical level</span>

        <div class="skills__container container grid">
            <div>
                <!--==================== SKILLS 1====================-->
                <div class="skills__content skills__open">
                    <div class="skills__header">
                        <i class="uil uil-brackets-curly skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Frontend Developer</h1>
                            <span class="skills__subtitle">More than 4 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">HTML</h3>
                                <!-- <span class="skills__number">90%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__html"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">CSS</h3>
                                <!-- <span class="skills__number">80%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__css"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Javascript</h3>
                                <!-- <span class="skills__number">80%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__js"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SKILLS 2====================-->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-server-network skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Backend Developer</h1>
                            <span class="skills__subtitle">More than 4 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">PHP</h3>
                                <!-- <span class="skills__number">85%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__php"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Laravel</h3>
                                <!-- <span class="skills__number">70%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__laravel"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Python</h3>
                                <!-- <span class="skills__number">60%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!--==================== SKILLS 2====================-->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-swatchbook skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Database</h1>
                            <span class="skills__subtitle">More than 4 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">MYSQL</h3>
                                <!-- <span class="skills__number">60%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__mysql"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Firebase</h3>
                                <!-- <span class="skills__number">50%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__firebase"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Postgress</h3>
                                <!-- <span class="skills__number">50%</span> -->
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualifications -->
    <section class="qualification section" id="qualification">
        <h2 class="section__title">Qualifications</h2>
        <span class="section__subtitle">My Educational Qualification & Work Experience</span>

        <div class="qualification_container container">
            <div class="qualification_tabs">
                <div class="qualification_button button-flex" id="educationheader">
                    <i class="uil uil-graduation-cap qualification_icon"></i>Education
                </div>

                <div class="qualification_button button-flex" id="workheader">
                    <i class="uil uil-briefcase-alt qualification_icon"></i>Work
                </div>
            </div>

            <div class="qualification_sections">
                <!-- Educational Qualification -->
                <div class="qualification_content qualification_active" data-content id="education">
                    <!-- BTech IT -->
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">B.SC Computer Science</h3>
                            <span class="qualification_subtitle">Nnamdi Azikiwe University, Awka</span>
                            <div class="qualification_calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2020 - present
                            </div>
                        </div>

                        <div>
                            <span class="qualification_circle"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <!-- School 11-12 -->
                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_circle"></span>
                            <span class="qualification_line"></span>
                        </div>

                        <div>
                            <h3 class="qualification_title">Senior Secondary School</h3>
                            <span class="qualification_subtitle">Staff Model Secondary School, Ikwo</span>
                            <div class="qualification_calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2015 - 2018
                            </div>
                        </div>
                    </div>

                    <!-- School 1-10 -->
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Junior Secondary School</h3>
                            <span class="qualification_subtitle">Staff School, Ikwo</span>
                            <div class="qualification_calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2012 - 2015
                            </div>
                        </div>
                        <div>
                            <span class="qualification_circle"></span>
                        </div>
                    </div>

                </div>

                <!-- Work Experience -->
                <div class="qualification_content qualification-inactive" data-content id="work">
                    <!-- SWoC -->
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Student Mentor</h3>
                            <span class="qualification_subtitle">Script Winter of Code</span>
                            <div class="qualification_calendar">
                                <i class="uil uil-calendar-alt"></i>
                                November 2021 - Present
                            </div>
                        </div>

                        <div>
                            <span class="qualification_circle"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <!-- TSF -->
                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_circle"></span>
                            <!-- <span class="qualification_line"></span> -->
                        </div>

                        <div>
                            <h3 class="qualification_title">Mobile App Development Intern</h3>
                            <span class="qualification_subtitle">The Sparks Foundation</span>
                            <div class="qualification_calendar">
                                <i class="uil uil-calendar-alt"></i>
                                May 2021 - June 2021
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- Portfolio -->
    <section class="portfolio section" id="projects">
        <h2 class="section__title">Projects</h2>
        <span class="section__subtitle">Most recent work</span>

        <div class="portfolio_container container swiper-container swiper mySwiper">
            <div class="swiper-wrapper">

                <!-- Projects Container-->

            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>


        </div>
    </section>

    <!-- Contact Me -->
    <section class="contact section" id="contact">
        <h1 class="section__title">Contact Me</h1>
        <span class="section__subtitle">
            Want to connect? My inbox is always open!
        </span>

        <div class="contact_container container grid">
            <div>
                <a href="mailto:ifeanyichukwujohn70@gmail.com" target="_blank">
                    <div class="contact_info">
                        <i class="uil uil-envelope-alt contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">ifeanyichukwujohn70@gmail.com</span>
                        </div>
                    </div>
                </a>

                <a href="https://meet.google.com/bgd-qmyo-ixs" target="_blank">
                    <div class="contact_info">
                        <i class="uil uil-calendar-alt contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Online Meet</h3>
                            <span class="contact_subtitle">Schedule an Online Meet</span>
                        </div>
                    </div>
                </a>

                <a href="https://twitter.com/theJohnCode/" target="_blank">
                    <div class="contact_info">
                        <i class="uil uil-twitter-alt contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Twitter</h3>
                            <span class="contact_subtitle">@TheJohnCode</span>
                        </div>
                    </div>
                </a>

                <a href="https://goo.gl/maps/2yHPixuJFx3Fyzvc8" target="_blank">
                    <div class="contact_info">
                        <i class="uil uil-location-point contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Anambra, Nigeria</span>
                        </div>
                    </div>
                </a>
            </div>

            <form action="https://formspree.io/f/mlezppvz" class="contact_form grid" id="contact-form" method="POST">
                <div id="alert" class="alert_style"></div>
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label class="contact_label">Name</label>
                        <input type="text" name="name" class="contact_input" id="name" required>
                    </div>
                    <div class="contact_content">
                        <label for="email" class="contact_label">Email</label>
                        <input type="email" name="email" class="contact_input" id="email" required>
                    </div>
                </div>
                <div class="contact_content">
                    <label for="subject" class="contact_label">Subject</label>
                    <input type="text" name="subject" class="contact_input" id="subject" required>
                </div>
                <div class="contact_content">
                    <label for="message" class="contact_label">Message</label>
                    <textarea name="message" id="" cols="0" rows="7" class="contact_input message" id="message"
                        required></textarea>
                </div>

                <div>
                    <button type="submit" class="button button-flex">
                        Send Message
                        <i class="uil uil-message button_icon"></i>
                    </button>
                </div>
            </form>

        </div>
    </section>
@endsection
<!-- Scroll Top -->
<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup_icon"></i>
</a>
<div class="displayDiv"></div>
