<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Udaan - CSSE, Lendi Institute of Engineering and Technology, Vizianagaram</title>

    <meta name="description" content="Udaan is the premier technical fest organized by the CSSE department at Lendi Institute of Engineering and Technology, Vizianagaram. Join us for an exciting event featuring tech innovations, workshops, and competitions.">

    <meta name="keywords" content="Udaancsse, Udaan, Udaan Lendi, Udaan in Lendi Institute of Engineering and Technology, CSSE Lendi, CSSE in Lendi Institute of Engineering and Technology, Computer Science and System Engineering, Computer Science and System Engineering in Lendi, Lendi CSSE, Lendi Udaan, Lendi Institute of Engineering and Technology Events, Lendi Technical Fest, Udaan Technical Fest, Udaan in Vizianagaram, Lendi in Vizianagaram, CSSE in Vizianagaram, Computer Science and System Engineering in Vizianagaram, Engineering Fest in Vizianagaram">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_1.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        #aa {
            color: #a158cd;
        }

        #aa:hover {
            color: white;
        }

        #reg {
            display: none;
        }

        button {
            width: 150px;
            height: 40px;
            outline: none;
            border: 2px solid white;
            border-radius: 20px;
            background-color: transparent;
            color: white;
            position: relative;
            overflow: hidden;
            transition: color 0.4s ease-in-out;
        }

        button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: #a158cd;
            transition: left 0.4s ease-in-out;
            z-index: -1;
            color: white;
        }

        button:hover::before {
            left: 0;
        }

        button:hover {
            color: white;
            font: 1.1rem;
        }

        button:hover #aa {
            color: white;
            font: 1.1rem;
        }

        #foot {
            padding: 0px;
            width: 100%;
            height: 180px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }

        .main-logo {
            width: 50rem;
            height: auto;
            padding: 0px;
            margin: 0px;
        }

        .box {
            background-image: url('images/back.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 100%;
            min-height: 100vh;
        }

        h3 {
            color: white;
        }

        .logo {
            width: 150px;
        }

        ul {
            list-style-type: none;
        }

        @media (max-width:1000px) {
            .re-button {
                display: none;
            }

            .icon {
                color: #a158cd;
            }
        }

        @media (min-width:500px) {
            #foot {
                justify-content: space-between;
            }

        }

        .ull {
            width: 10rem;


        }

        @media (max-width:500px) {
            #foot {

                justify-content: center;

            }

            .ull {
                width: 350px;
                padding: 0px;
                margin-left: 0px;

            }

            #f-p {
                margin-top: 20px;
            }

            .main-logo {
                width: 26rem;
            }

            .logo {
                width: 120px;
            }

            .re-button {
                display: none;

            }

            button {
                display: none;
            }

            #about-section {
                margin-left: 10px;
                margin-right: 10px;

            }


            #foot {
                padding: 0px;
                width: 100%;
                height: 400px;
                display: flex;
                align-items: center;
                flex-direction: column;

            }

            .child2 {
                margin-top: 40px;
            }

            #reg {
                display: block;
            }
        }
    </style>
</head>
<div class="box">

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="cont" style="height: 100vh; margin:0px; padding:0px;">

        <div class="box">

            <div id="overlayer"></div>
            <div class="loader">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>


            <div class="site-wrap">

                <div class="site-mobile-menu site-navbar-target">
                    <div class="site-mobile-menu-header">
                        <div class="site-mobile-menu-close mt-3">
                            <span class="icon-close2 js-menu-toggle"></span>
                        </div>
                    </div>
                    <div class="site-mobile-menu-body"></div>
                </div>

                <?php include 'components/dep-navbar.php' ?>


               

                </div>

                <?php
                            $check = $_GET['id'];
                            if ($check == 1) {
                                echo '<div class="site-section" id="about-section" style="padding-top:25vh;" >
        <div class="container" style="background-color: white; border-radius:20px; padding:20px; color:black;">
            <div class="row">
                <div class="col-12 mb-4 position-relative" style="display: flex; justify-content: space-between;">
                    <img src="images/departments-img.gif" width="150px" alt="">
                    <img src="images/cse.gif" width="150px" alt="">
                </div>

                <div class="col-lg-4">
                    <img src="images/cse.webp" alt="Image" class="img-fluid">
                </div>

                <div class="col-lg-8">
                    <p>The CSE department ensures students gain strong academics, programming skills, and real-time exposure through symposiums, workshops, and technical events while fostering leadership qualities. Online courses, seminars, and webinars by top MNC experts are conducted to enhance students’ knowledge, along with various technical assessments and mock interviews that prepare them for campus placements.</p>
                    <p>Over the past seven years, around 500 graduates have been placed in top MNCs with high salary packages. With Lendi’s CSE Department, students are assured a strong foundation in technical knowledge, ensuring a promising career in the ever-growing tech industry.</p>
                </div>
            </div>
        </div>
    </div>';
                            }
                            if ($check == 2) {
                                echo '<div class="site-section" id="about-section" style="padding-top:25vh;" >
        <div class="container" style="background-color: white; border-radius:20px; padding:20px; color:black;">
            <div class="row">
                <div class="col-12 mb-4 position-relative" style="display: flex; justify-content: space-between;">
                    <img src="images/departments-img.gif" width="150px" alt="">
                    <img src="images/csse.gif" width="150px" alt="">
                </div>

                <div class="col-lg-4">
                    <img src="images/csse.webp" alt="Image" class="img-fluid">
                </div>

                <div class="col-lg-8">
                    <p>
The Computer Science & Systems Engineering is a multi-facet arena that involves computer hardware manufacturing, information ,communication systems and healthcare systems development and management. Computer Industry is slowly moving from application development Software to System development software. Now a days Artificial Intelligence and Robotics is playing vital role. In keeping view of trends in computer industry, Hardware related topics are introduced in Computer Science and Systems Engineering curriculum .Computer Science and Engineering is all about the sciences related to computer Software’s , all sorts of languages .Whereas , Computer Science and System Engineering is quite same but with emphasis on integrated hardware of the machine. models of computation , Automata theory, developing the system software’s such compilers ,assemblers,linkers and loaders etc. This is the basic difference between them out in the real world.</p>
                </div>
            </div>
        </div>
    </div>';
                            }
                            if ($check == 3) {
                                echo '<div class="site-section" id="about-section" style="padding-top:25vh;"  >
        <div class="container" style="background-color: white; border-radius:20px; padding:20px; color:black;">
            <div class="row">
                <div class="col-12 mb-4 position-relative" style="display: flex; justify-content: space-between;">
                    <img src="images/departments-img.gif" width="150px" alt="">
                    <img src="images/csit.gif" width="150px" alt="">
                </div>

                <div class="col-lg-4">
                    <img src="images/csit.webp" alt="Image" class="img-fluid">
                </div>

                <div class="col-lg-8">
                <p><strong>About CSIT Department</strong>

At the rapid pace of Global Development, Science and Technology occupied a significant place in this digital era. Computers have become ubiquitous part of modern life, and new applications are introduced every day. The use of computer technologies is also commonplace in all types of organizations, in academia, research, industry, government, private and business organizations. CSIT is broadly a combination of Computers and Technology. As computers become even more pervasive, the potential for computer-related careers will continue to grow and the career paths in computer-related fields will become more diverse. Problem solving through technology is one of prime aspects of CSIT. The CSIT course includes the emerging areas recommended by the AICTE committee such as Artificial Intelligence, Data Sciences, Machine Learning, IoT, Blockchain Technologies, Virtual Reality and Cyber Security. Students study the design, development & analysis of software and hardware used to solve problems in a variety of business, scientific and social contexts.

Since 2000, global information and communication technologies (ICTs) have become more powerful, more accessible, and more widespread. They are now pivotal in enhancing competitiveness, enabling development, and bringing progress to all levels of society.</p>
            </div>
        </div>
    </div>
</div>';
                            }
                            if ($check == 4) {
                                echo '<div class="site-section" id="about-section" style="padding-top:25vh;" >
        <div class="container" style="background-color: white; border-radius:20px; padding:20px; color:black;">
            <div class="row">
                <div class="col-12 mb-4 position-relative" style="display: flex; justify-content: space-between;">
                    <img src="images/departments-img.gif" width="150px" alt="">
                    <img src="images/csm.gif" width="150px" alt="">
                </div>

                <div class="col-lg-4">
                    <img src="images/csm.webp" alt="Image" class="img-fluid">
                </div>

                <div class="col-lg-8">
                <p><strong>About AIMLDepartment</strong>

CSE- AI & Machine Learning (CSM) is the program established in the academic year 2023-24 with an intake of 60 students. The department acts as the knowledge-hub by providing the students with enabled academics, strong programming, and industry exposure. The department always supports the student activities with the support of student chapters and organizes different symposiums, workshops and academic events. The department is supported with a Training & Placement Cell which includes and gives constant support for the development of technical aptitude and build leadership qualities among the young buddies. MOOCS, Swayam courses, seminars, workshops and webinars are organized for the students well-being. Students are always engaged with technical and needed assessments which help them during campus interviews. Lendi’s CSE(AIML) Department always look forward for the holistic and technical development of the student.</p></div>
        </div>
    </div>
</div>';
                            }

                            ?>
                            </div>

                <?php

                include 'components/footer.php';
                ?>






            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>


        <script src="js/main.js"></script>

    </body>

</html>