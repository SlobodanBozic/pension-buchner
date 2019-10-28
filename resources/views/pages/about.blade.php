@extends('layouts.about')

@section('owner')
  <div class="container section">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7 mb-5">
        <h2 class="heading" data-aos="fade-up">Owner</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="block-2">
          <div class="flipper">
            <div class="front" style="background-image: url(/storage/images/andreas-fischer.jpg);">
              <div class="box">
                <h2>Andreas Fisher</h2>
                <p>Host</p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;Andreas Fisher is host and owner of Pension Buchner.&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="/storage/images/andreas-fischer.jpg" alt="">
                </div>
                <div class="name align-self-center">Andreas Fisher <span class="position">Host</span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>


    </div>
  </div>
@endsection
