@extends('layouts.template')

    @section('content')
    <!-- Breadcrumb Area Starts -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">contact page</h2>
                    <a href="#">home</a><span> / contact page</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Area Starts -->
    <section class="contact-area padding-120">
        <div class="contact-shape-1"><img src="assets/images/award-shape.png" alt="shape"></div>
        <div class="contact-shape-2"><img src="assets/images/award-shape.png" alt="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-left-content">
                        <span class="top-span">contact us</span>
                        <h2 class="title">don't hesitate to contact us if you need more help.</h2>
                        <div class="info-top">
                            <div class="info-envelope-icon">
                                <i class="fa fa-envelope-open"></i>
                            </div>
                            <div class="info-name">
                                <h4 class="title">contact us</h4>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="info-content">
                                <span>Phone : 123-456789</span>
                                <span>Email : yourmail@gmail.com</span>
                            </div>
                        </div>
                        <div class="info-top">
                            <div class="info-address-icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <div class="info-name">
                                <h4 class="title">address</h4>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="info-content">
                                <span>London : 47-463 Broadway, L 100013</span>
                                <span>Canada : 12-463 Mainroad, C 209016</span>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <span class="top-span">write to us</span>
                    <!-- Contact Form Starts -->
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <select id="#" name="contact-form">
                                <option value="volvo">Subject</option>
                                <option value="saab">Option Two</option>
                                <option value="opel">Option Three</option>
                                <option value="audi">Option Four</option>
                            </select>
                            <textarea name="message" placeholder="Your Message"></textarea>
                            <button type="submit" class="template-btn">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Area Starts -->
    <div class="map-area">
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.088413208113!2d90.3588460750723!3d23.744226389013754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa79ee653375a5aa7%3A0x360b6e741e449446!2sMH%20Digital%20Bangladesh!5e0!3m2!1sen!2sbd!4v1693049833863!5m2!1sen!2sbd"></iframe></div>
    </div>
@endsection