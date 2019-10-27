@extends('layouts.rooms')

@section('rooms')
  <section id="rooms" class="section">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-1.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Single Room</h2>
              <span class="text-uppercase letter-spacing-1">70€ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-2.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Double Room</h2>
              <span class="text-uppercase letter-spacing-1">100€ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-3.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Triple Room</h2>
              <span class="text-uppercase letter-spacing-1">120€ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-4.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Single Room</h2>
              <span class="text-uppercase letter-spacing-1">90€ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-5.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Double Room</h2>
              <span class="text-uppercase letter-spacing-1">120€ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="/storage/rooms/room-6.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Triple Room</h2>
              <span class="text-uppercase letter-spacing-1">250€ / per night</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection


@section('great-offer')
  <section class="section bg-light">

    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade">Great Offers</h2>
          <p data-aos="fade">We provide the most comfortable rooms at the best price</p>
        </div>
      </div>

      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="#" class="image d-block bg-image-2" style="background-image: url('/storage/rooms/room-1.jpg');"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary">€65</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Single Room</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
        <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('/storage/rooms/room-2.jpg');"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary">€90</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Double Room</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>

    </div>
  </section>
@endsection
