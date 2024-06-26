@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Under construction</h1>
                    <section class="edica-coming-soon py-5 mb-5">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="comimg-soon-subtitle" data-aos="fade-up">Our website is under construction</h6>
                                <h2 class="coming-soon-title" data-aos="fade-up" data-aos-delay="100">We are doing our best to coming soon</h2>
                                <div class="counter" data-aos="fade-up" data-aos-delay="200">
                                        <span class="days" id="days">7</span> :
                                        <span class="hours" id="hours">8</span> :
                                        <span class="minutes" id="minutes">51</span> :
                                        <span class="seconds" id="seconds">31</span>

                                </div>

                                <h6 class="subscription-title" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="center-bottom">Notify me on launch:</h6>
                                <form class="form-inline subscription-form" data-aos="fade-up" data-aos-delay="400" data-aos-anchor-placement="center-bottom">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email">
                                    </div>
                                    <button type="submit" class="btn btn-warning">Subscribe</button>
                                </form>
                            </div>
                            <div class="col-md-4" data-aos="fade-left">
                                <img src="{{asset('assets/images/Under construction.png')}}" alt="coming soon" class="img-fluid">
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>
@endsection
