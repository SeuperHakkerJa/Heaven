@extends('layouts.app')

@section('title')
    Main website
@endsection

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 img-responsive" src="https://www.uh.edu/research/_images/thrusts/header-accessible-healthcare.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Slide 1</h1>
                        <h3>Text here text here Text here text here Text here text hereT ext here text here</h3>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Go to hospitals</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 img-responsive" src="http://solutionsdesignedforhealthcare.com/sites/default/files/styles/hero_landing_image/public/training.jpg?itok=LqN4pXHE" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Slide 2</h1>
                        <h3>Text here text here Text here text here Text here text hereT ext here text here</h3>
                        <p><a class="btn btn-lg btn-warning" href="#" role="button">Go to doctors</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 img-responsive" src="http://www.connectwithcare.org/wp-content/uploads/2014/02/connected-care-illustration.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Slide 3</h1>
                        <h3>Text here text here Text here text here Text here text hereT ext here text here</h3>
                        <p ><a class="btn btn-lg btn-success" href="#" role="button">Start your experience</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container text-center my-4 mb-5">
        <h1><strong>Heaven v1.0!</strong></h1>
    </div>

    <div class="bg-light container text-center">
        <h2>A platform focuses on the long term, continuous health care for post-operative rehabilitation.</h2>
        <h3>The platform include functions:</h3>
            <h4>Tracking Personal Health & Wellness report</h4>
            <h4>Tracking your family members Wellness</h4>
            <h4>Doctors provide instruction online.</h4>
            <h4>Patient upload related pictures and files.</h4>
    </div>
@endsection