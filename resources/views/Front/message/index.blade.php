@extends('Front.layouts.app')
@section('title') @lang('app.app-description') @endsection
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">@lang('app.contact_us')</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">@lang('app.home')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                @lang('app.contact_us')
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.92612692982!2d90.40717041536884!3d23.780146284579895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7715a40c603%3A0xec01cd75f33139f5!2sBRAC%20University!5e0!3m2!1sen!2sbd!4v1623776008027!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
            
                        
                </div>

                <div style="background-color: #337ab7; color: #fff; padding: 20px; border-radius: 5px; width: 70%; margin: 0 auto; text-align: center;">
                    <h2 style="font-size: 24px; margin-bottom: 10px;">Contact Us</h2>
                    <p style="font-size: 16px; line-height: 1.5;">
                        Please provide your name, address, phone number, and your preferred choice of Property.
                                          We'll reach out to you shortly.
                    </p>
                </div>
                
                
                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="{{ route('message.store') }}" method="post" class="php-email-form">
                                @csrf
                                @honeypot
                                @honeypot
                                @honeypot
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="@lang('app.name')" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="off" aria-describedby="nameHelp" autofocus required>
                                            @error('name')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-center align-items-center bg-color-b">+880<input type="number" placeholder="@lang('app.number')" class="form-control @error('number') is-invalid @enderror" name="phone" id="phone" autocomplete="off" min="0" max="99999999999" aria-describedby="numberHelp" required></div>
                                            @error('phone')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control @error('text') is-invalid @enderror" rows="8" placeholder="@lang('app.message')..." name="text" id="text" autocomplete="off" maxlength="500" aria-describedby="textHelp" required></textarea>
                                            @error('text')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-4 text-center">
                                        <button type="submit" class="btn btn-a">@lang('app.send')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-envelope"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">@lang('app.contact_us')</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            <span class="color-text-a">@lang('app.email') :</span> <a href="mailto:contact@example.com"> tajemon9@gmail.com</a>
                                        </p>
                                        <p class="mb-1">
                                            <span class="color-text-a">@lang('app.number') :</span> <a href="tel:+8801303429231"> +8801303429231</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-geo-alt"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">@lang('app.find_us')</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            QCJ4+3V Dhaka, Brac University,Dhaka
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="bi bi-share"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">@lang('app.social')</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-footer">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="https://www.facebook.com/sartajjj" class="link-one">
                                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
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