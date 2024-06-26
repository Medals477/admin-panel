@extends('layouts.frontend')
@section('content')
    <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
                Schedule a demo with us
              </h2>

              <!-- Text -->
              <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                We can help you solve company communication.
              </p>

              <!-- Form -->
              <form>
                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- First name -->
                    <div class="form-label-group">
                      <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                      <label for="registrationFirstNameModal">First name</label>
                    </div>

                  </div>
                  <div class="col-12 col-md-6">

                    <!-- Last name -->
                    <div class="form-label-group">
                      <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                      <label for="registrationLastNameModal">Last name</label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6">

                    <!-- Email -->
                    <div class="form-label-group">
                      <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                      <label for="registrationEmailModal">Email</label>
                    </div>

                  </div>
                  <div class="col-12 col-md-6">

                    <!-- Password -->
                    <div class="form-label-group">
                      <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                      <label for="registrationPasswordModal">Password</label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-12">

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary mt-3 lift">
                      Request a demo
                    </button>

                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <div class="modal modal-sidebar left fade-left fade" id="accountModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Signin -->
                  <div class="collapse show" id="collapseSignin" data-bs-parent="#accountModal">
                      <div class="modal-header">
                          <h5 class="modal-title">Log In to Your Skola Account!</h5>
                          <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                              <!-- Icon -->
                              <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                  <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                              </svg>

                          </button>
                      </div>

                      <div class="modal-body">
                          <!-- Form Signin -->
                          <form class="mb-5">

                              <!-- Email -->
                              <div class="form-group mb-5">
                                  <label for="modalSigninEmail">
                                      Username or Email
                                  </label>
                                  <input type="email" class="form-control" id="modalSigninEmail" placeholder="creativelayers">
                              </div>

                              <!-- Password -->
                              <div class="form-group mb-5">
                                  <label for="modalSigninPassword">
                                      Password
                                  </label>
                                  <input type="password" class="form-control" id="modalSigninPassword" placeholder="**********">
                              </div>

                              <div class="d-flex align-items-center mb-5 font-size-sm">
                                  <div class="form-check">
                                      <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck">
                                      <label class="form-check-label text-gray-800" for="autoSizingCheck">
                                          Remember me
                                      </label>
                                  </div>

                                  <div class="ms-auto">
                                      <a class="text-gray-800" data-bs-toggle="collapse" href="#collapseForgotPassword" role="button" aria-expanded="false" aria-controls="collapseForgotPassword">Forgot Password</a>
                                  </div>
                              </div>

                              <!-- Submit -->
                              <button class="btn btn-block btn-primary" type="submit">
                                  LOGIN
                              </button>
                          </form>

                          <!-- Text -->
                          <p class="mb-0 font-size-sm text-center">
                              Don't have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignup" role="button" aria-expanded="false" aria-controls="collapseSignup">Sign up</a>
                          </p>
                      </div>
                  </div>

                  <!-- Signup -->
                  <div class="collapse" id="collapseSignup" data-bs-parent="#accountModal">
                      <div class="modal-header">
                          <h5 class="modal-title">Sign Up and Start Learning!</h5>
                          <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                              <!-- Icon -->
                              <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                  <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                              </svg>

                          </button>
                      </div>

                      <div class="modal-body">
                          <!-- Form Signup -->
                          <form class="mb-5">

                              <!-- Username -->
                              <div class="form-group mb-5">
                                  <label for="modalSignupUsername">
                                      Username
                                  </label>
                                  <input type="text" class="form-control" id="modalSignupUsername" placeholder="John">
                              </div>

                              <!-- Email -->
                              <div class="form-group mb-5">
                                  <label for="modalSignupEmail">
                                      Username or Email
                                  </label>
                                  <input type="email" class="form-control" id="modalSignupEmail" placeholder="johndoe@creativelayers.com">
                              </div>

                              <!-- Password -->
                              <div class="form-group mb-5">
                                  <label for="modalSignupPassword">
                                      Password
                                  </label>
                                  <input type="password" class="form-control" id="modalSignupPassword" placeholder="**********">
                              </div>

                              <!-- Submit -->
                              <button class="btn btn-block btn-primary" type="submit">
                                  SIGN UP
                              </button>

                          </form>

                          <!-- Text -->
                          <p class="mb-0 font-size-sm text-center">
                              Already have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="true" aria-controls="collapseSignin">Log In</a>
                          </p>
                      </div>
                  </div>

                  <!-- Forgot Password -->
                  <div class="collapse" id="collapseForgotPassword" data-bs-parent="#accountModal">
                      <div class="modal-header">
                          <h5 class="modal-title">Recover password!</h5>
                          <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                              <!-- Icon -->
                              <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                  <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                              </svg>

                          </button>
                      </div>

                      <div class="modal-body">
                          <!-- Form Recover Password -->
                          <form class="mb-5">
                              <!-- Email -->
                              <div class="form-group">
                                  <label for="modalForgotpasswordEmail">
                                      Email
                                  </label>
                                  <input type="email" class="form-control" id="modalForgotpasswordEmail" placeholder="johndoe@creativelayers.com">
                              </div>

                              <!-- Submit -->
                              <button class="btn btn-block btn-primary" type="submit">
                                  RECOVER PASSWORD
                              </button>
                          </form>

                          <!-- Text -->
                          <p class="mb-0 font-size-sm text-center">
                              Remember your password? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="false" aria-controls="collapseSignin">Log In</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Modal Sidebar cart -->
      <div class="modal modal-sidebar left fade-left fade" id="cartModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header mb-4">
                      <h5 class="modal-title">Your Shopping Cart</h5>
                      <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                          <!-- Icon -->
                          <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                              <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                          </svg>

                      </button>
                  </div>

                  <div class="modal-body">
                      <ul class="list-group list-group-flush mb-5">
                          <li class="list-group-item border-bottom py-0">
                              <div class="d-flex py-5">
                                  <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                  <div class="flex-grow-1 mt-1 ms-4">
                                      <h6 class="fw-normal mb-0">Basic of Nature</h6>
                                      <div class="font-size-sm">1 × $18.00</div>
                                  </div>

                                  <a href="#" class="d-inline-flex text-secondary">
                                      <!-- Icon -->
                                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                          <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                          <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                          <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                          <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                      </svg>

                                  </a>
                              </div>
                          </li>

                          <li class="list-group-item border-bottom py-0">
                              <div class="d-flex py-5">
                                  <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                  <div class="flex-grow-1 mt-1 ms-4">
                                      <h6 class="fw-normal mb-0">Color Harriet Tubman</h6>
                                      <div class="font-size-sm">1 × $18.00</div>
                                  </div>

                                  <a href="#" class="d-inline-flex text-secondary">
                                      <!-- Icon -->
                                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                          <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                          <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                          <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                          <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                      </svg>

                                  </a>
                              </div>
                          </li>

                          <li class="list-group-item border-bottom py-0">
                              <div class="d-flex py-5">
                                  <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                  <div class="flex-grow-1 mt-1 ms-4">
                                      <h6 class="fw-normal mb-0">Digital Photography</h6>
                                      <div class="font-size-sm">1 × $18.00</div>
                                  </div>

                                  <a href="#" class="d-inline-flex text-secondary">
                                      <!-- Icon -->
                                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                          <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                          <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                          <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                          <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                      </svg>

                                  </a>
                              </div>
                          </li>
                      </ul>

                      <div class="d-flex mb-5">
                          <h5 class="mb-0 me-auto">Order Subtotal</h5>
                          <h5 class="mb-0">$121.87</h5>
                      </div>

                      <div class="d-md-flex justify-content-between">
                          <a href="#" class="d-block d-md-inline-block mb-4 mb-md-0 btn btn-primary btn-sm-wide">VIEW CART</a>
                          <a href="#" class="d-block d-md-inline-block btn btn-teal btn-sm-wide text-white">CHECKOUT</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!-- NAVBAR
      ================================================== -->

      <!-- HERO
      ================================================== -->
      <section class="pb-11 pt-13 pt-xl-14 mt-n12 position-relative">
          <div class="position-absolute top-0 right-0">
              <img src="{{ asset('assets/front/img/illustrations/illustration-7.svg')}}" class="img-fluid" alt="...">
          </div>
          <div class="container container-wd">
              <div class="row align-items-center">
                  <div class="col-12 col-md-5 col-lg-6 order-md-2" data-aos="fade-in">

                      <!-- Image -->
                      <img src="{{ asset('assets/front/img/illustrations/illustration-5.png')}}" class="img-fluid mb-6 mb-md-0" alt="...">

                  </div>
                  <div class="col-12 col-md-7 col-lg-6 order-md-1">
                      <!-- Heading -->
                      <h1 class="display-2" data-aos="fade-left" data-aos-duration="150">Find The Best <span class="fw-bold">Courses</span></h1>

                      <!-- Text -->
                      <p class="text-capitalize me-xl-11 me-wd-14 pe-wd-4" data-aos="fade-up" data-aos-duration="200">Technology is bringing a massive wave of evolution on learning things in different ways.</p>

                      <!-- Buttons -->
                      <a href="course-list-v4.html" class="btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1" data-aos="fade-up" data-aos-duration="200">VIEW COURSES</a>
                  </div>
              </div> <!-- / .row -->
          </div> <!-- / .container -->
      </section>

      <!-- FEATURED PRODUCT
      ================================================== -->
      <section class="pt-5 pb-9 py-md-11 bg-white">
          <div class="container container-wd">
              <div class="row align-items-end mb-7">
                  <div class="col-xl mb-5 mb-xl-0">
                      <h1 class="mb-1">Our Knowledgebase</h1>
                      <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
                  </div>
              </div>

              <div class="tab-content flickity-tab" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                      <!-- Items -->
                      <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                        @foreach ($blogs as $key => $item)
                         
                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="{{ url('blog/'.$item->slug) }}" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="{{ url('blog/'.$item->slug) }}" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="{{ url('blog/'.$item->slug) }}" class="card-img sk-thumbnail img-ratio-9 d-block">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}"class="rounded shadow-light-lg">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}" class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="{{ url('blog/'.$item->slug) }}"><span class="mb-1 d-inline-block text-gray-800">{{ $item->category->name }}</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="{{ url('blog/'.$item->slug) }}" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">{{ $item->title }}</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                             
                        @endforeach
                      </div>
                  </div>

                  <div class="tab-pane fade" id="pills-art" role="tabpanel" aria-labelledby="pills-art-tab">
                      <!-- Items -->
                      <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-8.jpg')}} }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-10.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="pills-exercise" role="tabpanel" aria-labelledby="pills-exercise-tab">
                      <!-- Items -->
                      <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-8.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-10.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-music-tab">
                      <!-- Items -->
                      <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-8.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-10.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="pills-software-dev" role="tabpanel" aria-labelledby="pills-software-dev-tab">
                      <!-- Items -->
                      <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-8.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-10.jpg') }}" alt="...">
                                      </a>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                                  <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                          <a href="#" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                              <!-- Icon -->
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                              </svg>

                                          </a>
                                      </div>

                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-7.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="course-single-v5.html" class="d-block">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                              <!-- Card -->
                              <div class="card border shadow p-2 rounded-lg sk-fade">
                                  <!-- Image -->
                                  <div class="card-zoom position-relative">
                                      <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-9 d-block">
                                          <img class="rounded shadow-light-lg" src="{{ asset('assets/front/img/products/product-9.jpg') }}" alt="...">
                                      </a>

                                      <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                          <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                      </span>
                                  </div>

                                  <!-- Footer -->
                                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                      <a href="#" class="">
                                          <div class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                              <img src="{{ asset('assets/front/img/avatars/avatar-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                          </div>
                                      </a>

                                      <!-- Preheading -->
                                      <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                      <!-- Heading -->
                                      <div class="position-relative">
                                          <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                          <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                              <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                  <div class="rating" style="width:50%;"></div>
                                              </div>

                                              <div class="font-size-sm">
                                                  <span>5.45 (5.8k+ reviews)</span>
                                              </div>
                                          </div>

                                          <div class="row mx-n2 align-items-end">
                                              <div class="col px-2">
                                                  <ul class="nav mx-n3">
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">5 lessons</div>
                                                          </div>
                                                      </li>
                                                      <li class="nav-item px-3">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-2 d-flex icon-uxs text-secondary">
                                                                  <!-- Icon -->
                                                                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                      <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                      <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                                  </svg>

                                                              </div>
                                                              <div class="font-size-sm">8h 12m</div>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>

                                              <div class="col-auto px-2 text-right">
                                                  <del class="font-size-sm">$959</del>
                                                  <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                              </div>
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

      <!-- CATEGORIES
      ================================================== -->
      <section class="py-5 py-md-8 bg-white">
          <div class="container container-wd">
              <div class="row align-items-end mb-md-7 mb-4">
                  <div class="col-md mb-4 mb-md-0">
                      <h1 class="mb-1">Trending Categories</h1>
                      <p class="font-size-lg mb-0 text-capitalize">Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                  </div>
                  <div class="col-md-auto">
                      <a href="course-list-v6.html" class="d-flex align-items-center fw-medium">
                          Browse All
                          <div class="ms-2 d-flex">
                              <!-- Icon -->
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                              </svg>

                          </div>
                      </a>
                  </div>
              </div>

              <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 row-cols-wd-6">
                  <div class="col mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="fas fa-bezier-curve"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Design</h5>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="fas fa-briefcase"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Business</h5>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="fas fa-laptop-code"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Software Development</h5>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="far fa-file-alt"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Personal Development</h5>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="fas fa-camera"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Photography</h5>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col d-xl-none d-wd-block mb-md-6 mb-4 px-2 px-md-4">
                      <!-- Card -->
                      <a href="course-list-v6.html" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
                          <!-- Image -->
                          <div class="mt-7 text-gigas display-4">
                              <i class="fas fa-music"></i>

                              <!-- Footer -->
                              <div class="card-footer px-0 pb-0 pt-4">
                                  <h5 class="mb-0 line-clamp-2 text-gigas">Audio + Music</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </section>

      <!-- EVENTS
      ================================================== -->
      <section class="bg-white py-5 py-md-8">
          <div class="container container-wd">
              <div class="row align-items-end mb-4 mb-md-7">
                  <div class="col-md mb-4 mb-md-0">
                      <h1 class="mb-1">Upcoming Events</h1>
                      <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                  </div>
                  <div class="col-md-auto">
                      <a href="event-list.html" class="d-flex align-items-center fw-medium">
                          Browse All
                          <div class="ms-2 d-flex">
                              <!-- Icon -->
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                              </svg>

                          </div>
                      </a>
                  </div>
              </div>

              <div class="row row-cols-xl-2">
                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-1.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">Elegant Light Box Paper Cut Dioramas New Design Conference</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-2.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">Lambeth Safeguarding: Understanding Contextual Harm</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-3.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">Discover Law - Get into the best UK law schools</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-4.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">Undergraduate Open Day – Holloway Campus - 3 July 2020</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-5.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">"Introduction to Law" Open Day with Bristows</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl mb-5 mb-md-6">
                      <!-- Card -->
                      <div class="card border shadow p-2 lift">
                          <div class="row gx-0 align-items-center">
                              <!-- Image -->
                              <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                  <img class="img-fluid rounded shadow-light-lg h-100 h-md-auto o-f-c" src="{{ asset('assets/front/img/events/event-6.jpg') }}" alt="...">
                              </a>

                              <!-- Body -->
                              <div class="col">
                                  <div class="card-body py-0 px-md-5 px-3">
                                      <a href="event-single.html" class="d-block mb-2"><h5 class="line-clamp-2 h-xl-52">Kingston College undergraduate Open Events 2019-20</h5></a>

                                      <ul class="nav mx-n3 d-block d-md-flex">
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                          <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                              </div>
                                          </li>
                                          <li class="nav-item px-3 mb-3 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 d-flex text-secondary icon-uxs">
                                                      <!-- Icon -->
                                                      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"/>
                                                          <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"/>
                                                      </svg>

                                                  </div>
                                                  <div class="font-size-sm">London, UK</div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                              <a href="event-single.html" class="col-auto rounded-lg d-none d-md-flex w-100p h-100p place-center bg-dark me-5">
                                  <div class="w-100 text-center">
                                      <h3 class="text-white mb-0 fw-semi-bold font-size-xxl">06</h3>
                                      <span class="h4 mb-0 text-white fw-normal">April</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- BLOG
      ================================================== -->
      <section class="py-5 py-md-8 bg-white">
          <div class="container container-wd">
              <div class="row align-items-end mb-4 mb-md-7">
                  <div class="col-md mb-4 mb-md-0">
                      <h1 class="mb-1">Latest News</h1>
                      <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                  </div>
                  <div class="col-md-auto">
                      <a href="blog-grid-v2.html" class="d-flex align-items-center fw-medium">
                          Browse All
                          <div class="ms-2 d-flex">
                              <!-- Icon -->
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                              </svg>

                          </div>
                      </a>
                  </div>
              </div>

              <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                  <div class="col-md mb-5 mb-lg-0">
                      <!-- Card -->
                      <div class="card border shadow p-2 rounded-lg lift sk-fade">
                          <!-- Image -->
                          <div class="card-zoom position-relative">
                              <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/post/post-1.jpg') }}" alt="..."></a>

                              <a href="#" class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                  <span class="text-white fw-normal font-size-sm">Figma</span>
                              </a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-2 pb-0 pt-4">
                              <ul class="nav mx-n3 mb-3">
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-3 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">Jack Wilson</div>
                                      </a>
                                  </li>
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-2 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">06 April, 2020</div>
                                      </a>
                                  </li>
                              </ul>

                              <!-- Heading -->
                              <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">The Best Destinations to Begin Your Round the World Trip</h5></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-md mb-5 mb-lg-0">
                      <!-- Card -->
                      <div class="card border shadow p-2 rounded-lg lift sk-fade">
                          <!-- Image -->
                          <div class="card-zoom position-relative">
                              <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/post/post-2.jpg') }}" alt="..."></a>

                              <a href="#" class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                  <span class="text-white fw-normal font-size-sm">Adobe XD</span>
                              </a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-2 pb-0 pt-4">
                              <ul class="nav mx-n3 mb-3">
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-3 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">Jack Wilson</div>
                                      </a>
                                  </li>
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-2 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">06 April, 2020</div>
                                      </a>
                                  </li>
                              </ul>

                              <!-- Heading -->
                              <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">An Indigenous Anatolian Syllabic Script From 3500 Years Ago</h5></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-md mb-5 mb-lg-0">
                      <!-- Card -->
                      <div class="card border shadow p-2 rounded-lg lift sk-fade">
                          <!-- Image -->
                          <div class="card-zoom position-relative">
                              <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/post/post-9.jpg') }}" alt="..."></a>

                              <a href="blog-single.html" class="badge badge-lg sk-fade-bottom badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                  <span class="text-white fw-normal font-size-sm">Photoshop</span>
                              </a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-2 pb-0 pt-4">
                              <ul class="nav mx-n3 mb-3">
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-3 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">Jack Wilson</div>
                                      </a>
                                  </li>
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-2 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">06 April, 2020</div>
                                      </a>
                                  </li>
                              </ul>

                              <!-- Heading -->
                              <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best Countries to Visit for Beginner Travelers</h5></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-md mb-5 mb-lg-0">
                      <!-- Card -->
                      <div class="card border shadow p-2 rounded-lg lift sk-fade">
                          <!-- Image -->
                          <div class="card-zoom position-relative">
                              <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/post/post-3.jpg') }}" alt="..."></a>

                              <a href="blog-single.html" class="badge badge-lg sk-fade-bottom badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                  <span class="text-white fw-normal font-size-sm">Photoshop</span>
                              </a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-2 pb-0 pt-4">
                              <ul class="nav mx-n3 mb-3">
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-3 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">Jack Wilson</div>
                                      </a>
                                  </li>
                                  <li class="nav-item px-3">
                                      <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                          <div class="me-2 d-flex">
                                              <!-- Icon -->
                                              <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                              </svg>

                                          </div>
                                          <div class="font-size-sm">06 April, 2020</div>
                                      </a>
                                  </li>
                              </ul>

                              <!-- Heading -->
                              <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best Countries to Visit for Beginner Travelers</h5></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- INSTRUCTORS
      ================================================== -->
      <section class="py-5 py-md-8 bg-white">
          <div class="container container-wd">
              <div class="row align-items-end mb-3 mb-md-5">
                  <div class="col-md mb-4 mb-md-0">
                      <h1 class="mb-1">Top Rating Instructors</h1>
                      <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                  </div>
                  <div class="col-md-auto">
                      <a href="instructors-list-v2.html" class="d-flex align-items-center fw-medium">
                          Browse All
                          <div class="ms-2 d-flex">
                              <!-- Icon -->
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                              </svg>

                          </div>
                      </a>
                  </div>
              </div>

              <div class="mx-n3 mx-md-n4 flickity-button-outset" data-flickity='{"pageDots": false,"cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-1.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Jack Wilson</h5></a>
                              <span class="font-size-d-sm">Developer</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-2.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Anna Richard</h5></a>
                              <span class="font-size-d-sm">Travel Bloger</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-3.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Kathelen Monero</h5></a>
                              <span class="font-size-d-sm">Designer</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-4.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Kristen Pala</h5></a>
                              <span class="font-size-d-sm">User Experience Design</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-2.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Anna Richard</h5></a>
                              <span class="font-size-d-sm">Travel Bloger</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
                      <div class="card border shadow p-2 lift">
                          <!-- Image -->
                          <div class="card-zoom position-relative" style="max-width: 250px;">
                              <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                  <ul class="nav mx-n4 justify-content-center font-size-sm">
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-facebook-f"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="nav-item px-4">
                                          <a href="#" class="d-block text-white">
                                              <i class="fab fa-linkedin-in"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                              <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block"><img class="rounded shadow-light-lg img-fluid" src="{{ asset('assets/front/img/instructors/instructor-11.jpg') }}" alt="..."></a>
                          </div>

                          <!-- Footer -->
                          <div class="card-footer px-3 pt-4 pb-1">
                              <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Kathelen Monero</h5></a>
                              <span class="font-size-d-sm">Designer</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- FEATURES GENERAL
      ================================================== -->
      <section class="py-5 py-md-8 bg-white">
          <div class="container container-wd">
              <div class="row align-items-center mb-6">
                  <div class="col-md-6 order-2" data-aos="fade-left">
                      <h2>Learn at your own pace</h2>
                      <p class="line-clamp-3 line-height-md">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.Join millions of people from around the world learning together. Online learning is as easy and natural as chatting.</p>
                  </div>

                  <div class="col-md-6 order-1 mb-8 mb-md-0" data-aos="zoom-in">
                      <img class="img-fluid" src="{{ asset('assets/front/img/post/post-10.png') }}" alt="...">
                  </div>
              </div>

              <div class="row align-items-center">
                  <div class="col-md-6 order-2 order-md-1" data-aos="fade-right">
                      <h2>Community of opportunities</h2>
                      <p class="line-clamp-3 line-height-md">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.Join millions of people from around the world learning together. Online learning is as easy and natural as chatting.</p>
                  </div>

                  <div class="col-md-6 order-1 mb-8 mb-md-0 order-md-2 text-right" data-aos="zoom-in">
                      <img class="img-fluid" src="{{ asset('assets/front/img/post/post-11.png') }}" alt="...">
                  </div>
              </div>
          </div>
      </section>

      <!-- CALL ACTION
      ================================================== -->
      <section class="py-6 py-md-10 bg-white">
          <div class="container container-wd">
              <div class="bg-gradient-1 rounded-lg py-md-9 py-8 px-md-8 px-5">
                  <div class="row align-items-center">
                      <div class="col-xl-7 mb-4 mb-xl-0 text-capitalize">
                          <h1 class="text-white mb-3">Subscribe our newsletter</h1>
                          <p class="font-size-lg text-white mb-3">Your download should start automatically, if not  Click here. Should I give up, huh?.</p>
                      </div>

                      <div class="col-xl-5">
                          <form>
                              <div class="input-group d-block d-md-flex bg-white p-1 rounded-lg">
                                  <input type="text" class="form-control w-100 w-md-auto form-control-sm rounded-lg border-0 placeholder-1" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                                  <div class="input-group-append ms-0">
                                      <button class="btn btn-sm btn-dark w-100 w-md-auto btn-wide rounded-lg border-0" type="button" id="button-addon2">Subscribe</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
@endsection
