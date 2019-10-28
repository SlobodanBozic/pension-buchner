@extends('layouts.reservation')

@section('contact-form')
  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control ">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
              </div>
            </div>
          </form>

        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> SeeGasse 12, <br> Zell Am See</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+387) 66 123 456</span></p>
              <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> pensionbuchner@gmail.com</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
