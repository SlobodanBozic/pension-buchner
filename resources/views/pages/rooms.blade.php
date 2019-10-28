@extends('layouts.rooms')

@section('rooms')

  <section id="rooms" class="section">
    <div class="container">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade">Rooms</h2>
          <p data-aos="fade">We provide the most comfortable rooms at the best price</p>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-6 mb-6" data-aos="fade-up">
          <a href="#" class="card">
      	<div class="card__head">
      		<div class="card__image" style="background-image: url('/storage/rooms/room-6.jpg')"></div>
      	</div>


      	<div class="card__body">
      		<h2 class="card__headline">Single Bad Room</h2>
      		<p class="card__text">Standard single room is for a single person or a couple looking for comfort and simplicity with own shower and shared toilet.</p>
          <span class="display-4 text-primary">€60</span> <span class="text-uppercase letter-spacing-2">/ per night</span>
      	</div>

      	<div class="card__foot">
      		<span class="card__link">Book Now</span>
      	</div>
      	<div class="card__border"></div>
      </a>
      </div>

<div class="col-md-6 col-lg-6 mb-6" data-aos="fade-up">
  <a href="#" class="card">
<div class="card__head">
  <div class="card__image" style="background-image: url('/storage/rooms/room-2.jpg')"></div>
</div>
<div class="card__body">
  <h2 class="card__headline">Single Bad Room</h2>
  <p class="card__text">The standard single room is ideal for a single person or a couple looking for comfort and simplicity with own shower and toilet.</p>
  <span class="display-4 text-primary">€70</span> <span class="text-uppercase letter-spacing-2">/ per night</span>
</div>
<div class="card__foot">
  <span class="card__link">Book Now</span>
</div>
<div class="card__border"></div>
</a>
</div>

</div>

<div class="row mt-2">

  <div class="col-md-6 col-lg-6 mb-6" data-aos="fade-up">
    <a href="#" class="card">
  <div class="card__head">
    <div class="card__image" style="background-image: url('/storage/rooms/room-3.jpg')"></div>
  </div>
  <div class="card__body">
    <h2 class="card__headline">Double Bad Room</h2>

    <p class="card__text">Standard double room is for a couple looking for comfort and simplicity with own shower and shared toilet.</p>
    <span class="display-4 text-primary">€90</span> <span class="text-uppercase letter-spacing-2">/ per night</span>

  </div>
  <div class="card__foot">
    <span class="card__link">Book Now</span>
  </div>
  <div class="card__border"></div>
</a>
</div>

<div class="col-md-6 col-lg-6 mb-6" data-aos="fade-up">
<a href="#" class="card">
<div class="card__head">
<div class="card__image" style="background-image: url('/storage/rooms/room-4.jpg')"></div>
</div>
<div class="card__body">
<h2 class="card__headline">Double Bad Room</h2>
<p class="card__text">The standard double room is ideal for a couple looking for comfort and simplicity with own shower and toilet.</p>
<span class="display-4 text-primary">€110</span> <span class="text-uppercase letter-spacing-2">/ per night</span>
</div>
<div class="card__foot">
<span class="card__link">Book Now</span>
</div>
<div class="card__border"></div>
</a>
</div>

</div>


<div class="row mt-2">

  <div class="col-md-6 col-lg-6 mb-6" data-aos="fade-up">
    <a href="#" class="card">
  <div class="card__head">
    <div class="card__image" style="background-image: url('/storage/rooms/room-7.jpg')"></div>
  </div>
  <div class="card__body">
    <h2 class="card__headline">Triple Bed Room</h2>
    <p class="card__text">The standard triple bad room is ideal for a couple with baby or one more person.Who are looking for comfort and simplicity with own shower and toilet.</p>
    <span class="display-4 text-primary">€130</span> <span class="text-uppercase letter-spacing-2">/ per night</span>

  </div>
  <div class="card__foot">
    <span class="card__link">Book now</span>
  </div>
  <div class="card__border"></div>
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
          <p data-aos="fade">Special offer this month</p>
        </div>
      </div>

      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="#" class="image d-block bg-image-2" style="background-image: url('/storage/rooms/room-1.jpg');"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary">€50</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Single Bad Room</h2>
          <p>The standard single room is ideal for a couple or a single person looking for comfort and simplicity.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>

      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
        <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('/storage/rooms/room-2.jpg');"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary">€90</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Double Bad Room</h2>
          <p>The standard double room is ideal for a couple or a single person looking for comfort and simplicity.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>

    </div>
  </section>
@endsection
