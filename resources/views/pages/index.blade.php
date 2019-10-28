@extends('layouts.home')


@section('featured-rooms')
  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Featured Rooms</h2>
          <p data-aos="fade-up" data-aos-delay="100">Best offer in Zell am See</p>
        </div>
      </div>
      <div class="row">

        <div class="grid">
               <figure class="effect-ravi">
                   <img src="/storage/rooms/room-1.jpg" alt="img12" />
                   <figcaption>
                       <div>
                           <h2 class="text-primary"><span>Single</span> Room</h2>
                           <p class="text-uppercase letter-spacing-1">90€ / per night</p>
                       </div>
                       <a href="#">View more</a>
                   </figcaption>
               </figure>
               <figure class="effect-ravi">
                   <img src="/storage/rooms/room-2.jpg" alt="img12" />
                   <figcaption>
                       <div>
                           <h2 class="text-primary"><span>Double</span> Room</h2>
                           <p class="text-uppercase letter-spacing-1">90€ / per night</p>
                       </div>
                       <a href="#">View more</a>
                   </figcaption>
               </figure>
           </div>

           <div class="grid">

               <figure class="effect-ravi">
                   <img src="/storage/rooms/room-4.jpg" alt="img1" />
                   <figcaption>
                       <div>
                           <h2 class="text-primary"><span>Triple</span> Room</h2>
                           <p class="text-uppercase letter-spacing-1">120€ / per night</p>
                       </div>
                       <a href="#">View more</a>
                   </figcaption>
               </figure>

               <figure class="effect-ravi">
                   <img src="/storage/rooms/room-5.jpg" alt="img1" />
                   <figcaption>
                       <div>
                           <h2 class="text-primary"><span>Studio</span> Room</h2>
                           <p>with own shower and bathroom</p>
                           <p class="text-uppercase letter-spacing-1">120€ / per night</p>
                       </div>
                       <a href="#">View more</a>
                   </figcaption>
               </figure>

           </div>

      </div>
    </div>
  </section>


@endsection

@section('caffe')
  <section id="caffe" class="section bg-image overlay" style="background-image: url('/storage/images/caffe-2.jpg')">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2  class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
        </div>
      </div>
      <div class="food-menu-tabs" data-aos="fade">
        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Mains</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
          </li>
        </ul>
        <div class="tab-content py-5" id="myTabContent">

          <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
            <div class="row">

              <div class="col-md-6">

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3>
                  <span class="d-block text-primary h4 mb-3">€10.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3>
                  <span class="d-block text-primary h4 mb-3">€15.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                  <span class="d-block text-primary h4 mb-3">€12.00</span>
                </div>

              </div>

              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                  <span class="d-block text-primary h4 mb-3">€5.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                  <span class="d-block text-primary h4 mb-3">€6.50</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                  <span class="d-block text-primary h4 mb-3">€6.00</span>
                </div>
              </div>

            </div>


          </div>

          <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                  <span class="d-block text-primary h4 mb-3">€6.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                  <span class="d-block text-primary h4 mb-3">€6.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Bacon and Eggs</a></h3>
                    <span class="d-block text-primary h4 mb-3">€7.00</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                    <span class="d-block text-primary h4 mb-3">€4.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                  <span class="d-block text-primary h4 mb-3">€5.35</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                  <span class="d-block text-primary h4 mb-3">€9.00</span>
                </div>
              </div>

            </div>
          </div>
          <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
            <div class="row">
              <div class="col-md-6">

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                  <span class="d-block text-primary h4 mb-3">€3.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                  <span class="d-block text-primary h4 mb-3">€4.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                  <span class="d-block text-primary h4 mb-3">€4.00</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                  <span class="d-block text-primary h4 mb-3">€5.00</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                  <span class="d-block text-primary h4 mb-3">€3.50</span>
                </div>

                <div class="food-menu mb-5">
                  <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                  <span class="d-block text-primary h4 mb-3">€4.50</span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
