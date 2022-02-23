<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <title>Infoseek Angular Academy</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Infoseek Angular Academy</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">What You'll Learn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructors" class="nav-link">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-danger">
                            Fullstack Developer
                        </span></h1>
                    <p class="lead my-4">
                        We focus on teaching our students the fundamentals of the latest and greatest technologies to prepare them for their first dev role
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                        Start The Enrollment
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt="">
            </div>
        </div>
    </section>

    <!-- NewsLetter -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items center">
                <h3 class="mb-3 mb-md-0">Sign Up For Angular Academy</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <button class="btn btn-dark btn-lg" type="button">Sumbit</button>
                </div>

            </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container ">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Virtual
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consectetur corporis commodi debitis, earum eius!
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Hybrid
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consectetur corporis commodi debitis, earum eius!
                            </p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                In Person
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consectetur corporis commodi debitis, earum eius!
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learn Section -->
    <section class="p-5" id="learn">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/fundamentals.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ullam blanditiis pariatur laudantium nihil sit!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, sed minima, aperiam magni veniam, maxime dolorem ipsam veritatis alias quod debitis! Suscipit, iste est. Deserunt libero laboriosam impedit aperiam voluptas.
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>
                        Read More
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Learn2 -->
    <section class="p-5 bg-dark text-light" id="learn">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-md p-5">
                    <h2>Learn Angular</h2>
                    <p class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ullam blanditiis pariatur laudantium nihil sit!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, sed minima, aperiam magni veniam, maxime dolorem ipsam veritatis alias quod debitis! Suscipit, iste est. Deserunt libero laboriosam impedit aperiam voluptas.
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>
                        Read More
                    </a>
                </div>
                <div class="col-md">
                    <img src="img/angular-icon.svg" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Question Accordian -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Frequently Asked Questions About Angular
            </h2>

            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-one">
                            What is angular?
                        </button>
                    </h2>
                    <div id="questions-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Angular is a TypeScript-based open-source web application framework, developed and maintained by Google. It offers an easy and powerful way of building front end web-based applications.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-two">
                            Why was Angular introduced as a client-side framework?
                        </button>
                    </h2>
                    <div id="questions-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Traditionally, VanillaJS and jQuery were used by developers to develop dynamic websites. As the websites became more complex with added features and functionality, it was hard for the developers to maintain the code. Moreover, there was no provision of data handling facilities across the views by jQuery. So, Angular was built to address these issues, thus, making it easier for the developers by dividing code into smaller bits of information that are known as Components in Angular.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-three">
                            How does an Angular application work?
                        </button>
                    </h2>
                    <div id="questions-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Every Angular app consists of a file named angular.json. This file will contain all the configurations of the app. While building the app, the builder looks at this file to find the entry point of the application. Following is an image of the angular.json file
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-four">
                            What are directives in Angular?
                        </button>
                    </h2>
                    <div id="questions-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            A directive is a class in Angular that is declared with a @Directive decorator.
                            Every directive has its own behaviour and can be imported into various components of an application.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-five">
                            What is the main purpose of Angular?
                        </button>
                    </h2>
                    <div id="questions-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            The main purpose of using Angular is to create fast, dynamic and scalable web applications. We can create these applications very easily with Angular using components and directives.

                            Angular was started as a SPA (Single-Page-Application) framework, and now it supports dynamic content based on different users through dependency injection. It provides a platform for easy development of web-based applications and empowers the front end developers in curating cross-platform applications. YouTubeTV is the most popular example that uses Angular.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">
                Our Instructors
            </h2>
            <p class="lead text-center text-white mb-5">
                Our instructors all have 5+ years working as a web developer in the industry
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">
                                Suranja Liyanage
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab omnis error aut atque doloremque natus.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/18.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">
                                Akila Delapalage
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab omnis error aut atque doloremque natus.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/13.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">
                                Rasika Lakshan
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab omnis error aut atque doloremque natus.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/14.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">
                                Sadeep Mihiranga
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab omnis error aut atque doloremque natus.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="p-5" id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">
                        Contact Info
                    </h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Location :</span>
                            48 Chitra Ln, Colombo
                        </li>

                        <li class="list-group-item">
                            <span class="fw-bold">Phone :</span>
                            0114 260 020
                        </li>

                        <li class="list-group-item">
                            <span class="fw-bold">Email :</span>
                            minthrm@gmail.com
                        </li>

                        <li class="list-group-item">
                            <span class="fw-bold">Open :</span>
                            8.30Am-5.00PM
                        </li>


                    </ul>
                </div>

                <div class="col-md">
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Prabath Udayanga</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>



    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        Fill out this form and we will get back to you
                    </p>
                    <form>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="first-name">
                        </div>

                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicHJhYmF0aHVkIiwiYSI6ImNrenRrOG93OTc0Z3gyeXByYXNhd2g0NnUifQ.HG8kO5n8h0bDSF5R8eTkrw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [79.861244, 6.927079],
            zoom: 18
        });
    </script>
</body>

</html>