@extends('layouts.app')

@section('title')
    <title>Contact Us</title>
@endsection

@section('content')
    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4 text-light">
                                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a class="text-white" href="tel://1234567920">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a class="text-white" href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a class="text-white" href="#">yoursite.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
