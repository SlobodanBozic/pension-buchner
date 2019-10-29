@extends('layouts.reservation')

@section('contact-form')

  <section class="bg-video contact-section" id="next">
    <div class="overlay-wcs"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>

    <div class="container">
       <div class="row">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <h2 class="heading aos-init aos-animate text-center">Book a Room</h2>
        <div class="wizard-container">
            <div class="card wizard-card" data-color="red" id="wizard">
                <form action="" method="">
                  <div class="wizard-header">
          <h5>This information will let us know more about you.</h5>
                  </div>
        <div class="wizard-navigation">
          <ul>
          <li><a href="#details" data-toggle="tab">Account</a></li>
          <li><a href="#captain" data-toggle="tab">Room Type</a></li>
          <li><a href="#description" data-toggle="tab">Extra Details</a></li>
          </ul>
        </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="details">
                          <div class="row">
                            <div class="col-sm-12">
                                <h4 class="info-text"> Let's start with the basic details.</h4>
                            </div>
                              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">email</i>
                  </span>
                  <div class="form-group label-floating">
                                          <label class="control-label">Your Email</label>
                                          <input name="name" type="text" class="form-control">
                                      </div>
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  <div class="form-group label-floating">
                                          <label class="control-label">Your Password</label>
                                          <input name="name2" type="password" class="form-control">
                                      </div>
                </div>

                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Country</label>
                                      <select class="form-control">
                    <option disabled="" selected=""></option>
                                            <option value="Afghanistan"> Afghanistan </option>
                                            <option value="Albania"> Albania </option>
                                            <option value="Algeria"> Algeria </option>
                                            <option value="American Samoa"> American Samoa </option>
                                            <option value="Andorra"> Andorra </option>
                                            <option value="Angola"> Angola </option>
                                            <option value="Anguilla"> Anguilla </option>
                                            <option value="Antarctica"> Antarctica </option>
                                            <option value="...">...</option>
                                      </select>
                                  </div>
                <div class="form-group label-floating">
                                      <label class="control-label">Daily Budget</label>
                                      <select class="form-control">
                    <option disabled="" selected=""></option>
                                            <option value="Afghanistan"> < $100 </option>
                                            <option value="Albania"> $100 - $499 </option>
                                            <option value="Algeria"> $499 - $999 </option>
                                            <option value="American Samoa"> $999+ </option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="captain">
                            <h4 class="info-text">What type of room would you want? </h4>
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
                                            <input type="radio" name="job" value="Design">
                                            <div class="icon">
                                                <i class="material-icons">weekend</i>
                                            </div>
                                            <h6>Single</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                            <input type="radio" name="job" value="Code">
                                            <div class="icon">
                                                <i class="material-icons">home</i>
                                            </div>
                                            <h6>Family</h6>
                                        </div>
                                    </div>
                <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
                                            <input type="radio" name="job" value="Code">
                                            <div class="icon">
                                                <i class="material-icons">business</i>
                                            </div>
                                            <h6>Business</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="description">
                            <div class="row">
                                <h4 class="info-text"> Drop us a small description.</h4>
                                <div class="col-sm-6 col-sm-offset-1">
                                  <div class="form-group">
                                        <label>Room description</label>
                                        <textarea class="form-control" placeholder="" rows="6"></textarea>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                              <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                              <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                          </div>
                          <div class="pull-left">
                              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

            <div class="footer-checkbox">
              <div class="col-sm-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="optionsCheckboxes">
                  </label>
                  Subscribe to our newsletter
                </div>
              </div>
            </div>
                          </div>
                          <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <h2 class="heading aos-init aos-animate text-center">Our Location</h2>

          <div class="wizard-card" style="width: 100%">
            <iframe width="100%" height="550" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Seegasee%2012+(Pension%20Buchner)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">find my location</a></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
