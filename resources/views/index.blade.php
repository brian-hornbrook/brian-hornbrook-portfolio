<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brian Hornbrook Portfolio</title>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Lekton&display=swap" rel="stylesheet">

    <!-- semantic ui -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#about">About</a></li>
                <li id="contact-me"><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>
        <div id="header-info">
            <h1>Hi there, I'm Brian Hornbrook</h1>
            <h2>I'm a DevOps and Full Stack Engineer who polishes all code</h2>
        </div>
    </header>

    <main>
        <div id="projects">
            <h2>Projects</h2>
            <div id="projecs-info">

                <div id="projects-container">
                    <div class="area">
                        <div class="image-area">
                            <a href="/repos" target="_blank">
                                <img src="{{ URL::asset('images/github-repo.png') }}" alt="project image">
                            </a>
                        </div>
                        <h4>GitHub Repo Gallery</h4>
                        <div class="project-description-area">
                            <p>Listing for all my GitHub repos.</p>
                        </div>
                        <div class="tools">
                            <p><strong>Skills:</strong> Manipulate the DOM, Version control</p>
                            <p><strong>Tools:</strong> GitHub, API, UI</p>
                        </div>
                        <div class="live-page-button">
                            <a href="repos" target="_blank">
                                <button>Live Page</button>
                            </a>
                        </div>
                    </div>

                    <div class="area">
                        <div class="image-area">
                            <a href="https://marianascleaningservicellc.com" target="_blank">
                                <img src="{{ URL::asset('images/marianas-logo.png') }}" alt="project image">
                            </a>
                        </div>
                        <h4>Marianas Cleaning Service LLS</h4>
                        <div class="project-description-area">
                            <p>Listing all cleaning services.</p>
                        </div>
                        <div class="tools">
                            <p><strong>Skills:</strong> Databases, Accounts, Contact Form</p>
                            <p><strong>Tools:</strong> Django, Superuser, Authentication, Responsive Site</p>
                        </div>
                        <div class="live-page-button">
                            <a href="https://marianascleaningservicellc.com" target="_blank">
                                <button>Live Page</button>
                            </a>
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="area">
                        <div class="image-area">
                            <a href="https://sthwom.org" target="_blank">
                                <img src="{{ URL::asset('images/brand.png') }}" alt="project image">
                            </a>
                        </div>
                        <h4>Seed Time and Harvest</h4>
                        <div class="project-description-area">
                            <p>Demonstration of ministry focus.</p>
                        </div>
                        <div class="tools">
                            <p><strong>Skills:</strong> Responsive Site, Contact Form</p>
                            <p><strong>Tools:</strong> Symfony, Recapta</p>
                        </div>
                        <div class="live-page-button">
                            <a href="https://sthwom.org" target="_blank">
                                <button>Live Page</button>
                            </a>
                            <div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="skills">
                    <h2>Skills</h2>

                    <div class="skill-section">
                        <h3>Developer Skills</h3>
                        <div id="my-skills">
                            <div class="item">
                                <p>CI / CD</p>
                            </div>
                            <div class="item">
                                <p>Automation</p>
                            </div>
                            <div class="item">
                                <p>Containerization</p>
                            </div>
                            <div class="item">
                                <p>Version Control</p>
                            </div>
                            <div class="item">
                                <p>APIs</p>
                            </div>
                            <div class="item">
                                <p>Responsive Typography</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-section">
                        <h3>Tools</h3>
                        <div id="my-tools">
                            <div class="item">
                                <p>Linux</p>
                            </div>
                            <div class="item">
                                <p>Debian</p>
                            </div>
                            <div class="item">
                                <p>GitHub</p>
                            </div>
                            <div class="item">
                                <p>AWS</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-section">
                        <h3>Frameworks</h3>
                        <div id="my-frameworks">
                            <div class="item">
                                <p>Chef</p>
                            </div>
                            <div class="item">
                                <p>Symfony</p>
                            </div>
                            <div class="item">
                                <p>Laravel</p>
                            </div>
                            <div class="item">
                                <p>Django</p>
                            </div>
                            <div class="item">
                                <p>React</p>
                            </div>
                            <div class="item">
                                <p>Vue</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-section">
                        <h3>Languages</h3>
                        <div id="my-languages">
                            <div class="item">
                                <p>Bash</p>
                            </div>
                            <div class="item">
                                <p>Python</p>
                            </div>
                            <div class="item">
                                <p>Ruby</p>
                            </div>
                            <div class="item">
                                <p>PHP</p>
                            </div>
                            <div class="item">
                                <p>JavaScript</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="about">
                    <div id="image-area">
                        <img src="{{ URL::asset('images/resume_pic.jpg') }}" alt="resume">
                    </div>
                    <h2>My name is Brian Hornbrook and I'm passionate about what programming can do!</h2>
                    <h3>One day I tried out programming and built a simple pong game using a web
                        program that was very similar to Python. I immediately fell in love with
                        building using logic.</h3>
                    <p>
                        When I go on vacation I like to plan out where we are going and where to
                        stay. For example, we can stay in the nicest hotel for the price instead
                        of staying at the first hotel we find.
                    </p>
                    <p id="message">
                        <strong>Can't wait to see what we build together!</strong>
                    </p>


                </div>
            </div>
        </div>
        <footer id="contact">
            <h2>Let's Connect</h2>
            <div id="footer-info-area">
                <div class="footer-info">
                    <h3>Hire Me</h3>
                    <a id="call" href="tel:8172534571"><p>817-253-4571</p></a>
                    <p id="phone">817-253-4571</p>
                    <a href="mailto:brian_hornbrook@outlook.com">
                        <p>brian_hornbrook@outlook.com</p>
                    </a>
                </div>
                <div class="footer-info">
                    <h3>Follow Me</h3>
                    <div id="follow-me">
                        <a href="https://www.linkedin.com/in/brian-hornbrook-8a0b0047/" target="_BLANK">
                            <i id="linkedIn" class="linkedin icon"></i>
                        </a>
                        <a href="https://www.facebook.com/brainybdh" target="_blank">
                            <i class="facebook icon"></i>
                        </a>
                        <a href="https://github.com/brian-hornbrook" target="_blank">
                            <i class="github icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <p>Copyright 2022<span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>Brian Hornbrook</p>

        </footer>
    </main>
    <!-- <script src="{{ URL::asset('js/script.js') }}"></script> -->
</body>

</html>