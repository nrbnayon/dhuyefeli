@extends('front.layouts.master')
@section('content')
    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif

    <div class="row text-center" style="margin-top: 20px;">
    </div>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-map-marker text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">Uttar Badda, Dhaka, Bangladesh</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-envelope-open text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">dhuyefeli@gmail.com</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-phone text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">+880 1515577844</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
