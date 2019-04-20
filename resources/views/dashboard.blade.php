@extends('app')

@section('content')

<section>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/carousel/1.jpg')}}" style="height: 700px" class="d-block w-100" >
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/carousel/2.jpg')}}" style="height: 700px" class="d-block w-100" >
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/carousel/3.jpg')}}" style="height: 700px" class="d-block w-100" >
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section>
  <div class="row-fluid">
      <div class="container">
          <br>
          <h2 class="text-center mt-0">About Service</h2>
          <hr class="divider my-4 divider-color text-center">
          <h4>Has many option to choose and the best product in this page. Has many option to choose and the best product in this page. Has many option to choose and the best product in this page.</h4>
          <hr class="divider my-4 divider-color">
          <div class="row">
              <div class="col-lg-3 col-md-6 text-center">
                  <div class="mt-5">
                      <i class="fas fa-4x fa-utensils text-primary mb-4"></i>
                      <h3 class="h4 mb-2"><button class="btn btn-primary" v-on:click="utensils">Food</button>
                      </h3>
                      <transition name="bounce">
                        <p v-if="show_utensils">Pay for you food.</p>
                      </transition>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-shopping-cart text-primary mb-4"></i>
                        <h3 class="h4 mb-2"><button class="btn btn-primary" v-on:click="shopping">Buy</button>
                        </h3>
                        <transition name="slide-fade">
                          <p v-if="show_shopping">Buy your item.</p>
                        </transition>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gifts text-primary mb-4"></i>
                        <h3 class="h4 mb-2"><button class="btn btn-primary" v-on:click="gifts">Gifts</button>
                        </h3>
                        <transition name="practica"
                        enter-active-class="animated bounceInDown"
                        leave-active-class="animated bounceOutDown">
                            <p v-if="show_gifts">Browser your gifts.</p>
                        </transition>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-truck text-primary mb-4"></i>
                        <h3 class="h4 mb-2"><button class="btn btn-primary" v-on:click="truck">Send</button>
                        </h3>
                        <transition name="practica"
                        enter-active-class="animated flip"
                        leave-active-class="animated rotateOut">
                            <p v-if="show_truck">Send your products.</p>
                        </transition>
                    </div>
                </div>
          </div>
          <br>
      </div>
  </div>
</section>

<section id="portfolio">
  <div class="container-fluid p-0">
      <div class="row no-gutters">
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/1.jpg" alt="">
          <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Gift
              </div>
          </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/2.jpg" alt="">
          <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Book
              </div>
          </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/3.jpg" alt="">
          <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Camara
              </div>
          </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/4.jpg" alt="">
          <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Condiment
              </div>
          </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/5.jpg" alt="">
          <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Measurer
              </div>
          </div>
          </a>
      </div>
      <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box">
          <img class="img-fluid" src="img/portafolio/6.jpg" alt="">
          <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
              Category
              </div>
              <div class="project-name">
              Tools
              </div>
          </div>
          </a>
      </div>
      </div>
  </div>
</section>

<section class="showcase text-white" style="background-image: url(img/amazon/amazon.jpg);">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2"> 
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5pTvd5BCdTE" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 text-center my-auto showcase-text">
                <h2>Vista de Amazon </h2>
                <hr class="divider my-4 divider-color">
                <p class="lead mb-0 padding-img">Se puede ver como esta estructurado amazon,Se puede ver como esta estructurado amazon,Se puede ver como esta estructurado amazon,Se puede ver como esta estructurado amazon </p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eMeQxbMA6CM" allowfullscreen></iframe>
                </div>
            </div>
        <div class="col-lg-6 my-auto text-center showcase-text">
          <h2>Historia de Amazon</h2>
          <hr class="divider my-4 divider-color">
          <p class="lead mb-0 padding-img" >Se basa en la historia de creador de amazon</p>
        </div>
      </div>
    </div>
</section>

<section style="background-image: url(img/parallax/1.png);" class="parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-request">
                <div class="mb-5">
                    <h2 class="mb-4 text-white">Request your information</h2>
                    <p class="text-white">Send your email and all time give a notification every day the best item to buy.</p>
                </div>
            <form v-on:submit.prevent="request">
                <div class="row">
                    <div class="form-group col-6">
                        <input type="text" name="name" v-model="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="surname" v-model="surname" class="form-control" placeholder="Surname">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-5">
                        <input type="text" name="nemail" v-model="nemail" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-2">
                        <div class="input-group-text">@</div>
                    </div>
                    <div class="form-group col-5">
                        <select name="email"  v-model="email" class="custom-select form-control">
                            <option value="">gmail.com</option>
                            <option value="">hotmail.com</option>
                            <option value="">yahoo.com</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" name="cp" v-model="cp" class="form-control" placeholder="Cellphone">
                    </div>
                </div>
                    <button class="btn btn-secondary" type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="text-center mt-0">Recommended</h2>
    <hr class="divider my-4 divider-color text-center">
    <div id="carouselimg" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/1.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$600</h2>
                                    <p>iphone</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/2.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$50</h2>
                                    <p>Pant</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/3.png" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$30</h2>
                                    <p>T-shirt</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/4.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$300</h2>
                                    <p>Camara</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/5.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$150</h2>
                                    <p>Wristwatch</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/6.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$900</h2>
                                    <p>Computer</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/7.jpeg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$120</h2>
                                    <p>Shoe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/8.jpeg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$15</h2>
                                    <p>Hat</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    <img src="img/carousel_img/9.jpg" style="height: 200px" />
                                </div>
                                <div class="card-body">
                                    <h2>$60</h2>
                                    <p>Bag</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselimg" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselimg" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

@include('footer')
@endsection