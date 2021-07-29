@include('FrontEnd.inc.header')

 
<header>
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center h-100">
            <div class="col-2">
              <a href="">
                <img
                  src="/FrontEnd/images/logo-light.png"
                  alt="CEZMA logo"
                  class="img-fluid"
                />
              </a>
            </div>
            <div class="col-8">
              <div class="header-content">
                <div
                  class="
                    top
                    d-flex
                    align-items-center
                    justify-content-between
                    pb-1
                  "
                >
                  <ul
                    class="
                      list-unstyled
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <li>
                      <a href="index.html" class="line-hover active"
                        >الرئيسية</a
                      >
                    </li>
                    <li><a href="shops.html" class="line-hover">المتاجر</a></li>
                    <li><a href="favorite-page.html" class="line-hover">المفضلة</a></li>
                    <li>
                      <a href="messages.html" class="line-hover">
                        <span
                          class="
                            notification
                            d-flex
                            justify-content-center
                            align-items-center
                          "
                          >5</span
                        >
                        الرسائل</a
                      >
                    </li>
                    <li>
                      <a href="contact-us.html" class="line-hover">اتصل بنا</a>
                    </li>
                  </ul>
                  <div
                    class="
                      dropdowns-container
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <form id="my-select2" action="">
                      <select name="options[212]" class="select2">
                        <option
                          value="egypt"
                          selected
                          data-src="./images/eg.png"
                        >
                          egypt
                        </option>
                        <option value="algeria" data-src="./images/al.png">
                          algeria
                        </option>
                        <option value="morocco" data-src="./images/mo.png">
                          morocco
                        </option>
                        <option value="tunisia" data-src="./images/tu.png">
                          tunisia
                        </option>
                      </select>
                    </form>
                    <select class="form-control mx-2">
                      <option>العربية </option>
                      <option>Default select</option>
                      <option>Default select</option>
                      <option>Default select</option>
                    </select>

                    <a href="shopping-cart.html" class="shopping-basket">
                      <i class="fas fa-shopping-basket px-1"></i>
                      عربة التسوق
                      <span
                        class="
                          notification
                          d-flex
                          justify-content-center
                          align-items-center
                        "
                        >3</span
                      >
                    </a>

                  </div>
                </div>
                <div class="bottom">
                  <form class="search d-flex">
                    <input
                      type="text"
                      class="py-2"
                      placeholder="عن ماذا تبحث ؟"
                    />
                    <button type="submit" class="app-btn">
                      <i class="fas fa-search"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div
              class="
                col-2
                text-center
                d-flex
                flex-column
                align-items-center
                justify-content-between
                h-100
              "
            >
              <div class="btn-group user-profile py-3">
                <button
                  type="button"
                  class="app-btn dropdown-toggle d-flex align-items-center"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-user-circle fa-lg mt-2 px-2"></i>
                  اسم المستخدم
                  <i class="fas fa-chevron-down px-1"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>

              <a href="" class="add-store bg-white py-2 w-100 rounded">
                <i class="fas fa-plus-circle px-1"></i>
                إضافة متجر
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom py-3">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <ul
                class="
                  list-unstyled
                  m-0
                  d-flex
                  align-items-center
                  justify-content-between
                  px-lg-2 px-0
                "
              >
                <li><a href="">الموبايلات والأجهزة اللوحية</a></li>
                <li><a href="">أجهزة كمبيوتر</a></li>
                <li><a href="">التلفزيونات وأجهزة الترفيه</a></li>
                <li><a href="">ألعاب الفيديو</a></li>
                <li><a href="">مستلزمات المنزل</a></li>
                <li><a href="">سيارات وقطع غيار</a></li>
                <li><a href="">الموضة والجمال</a></li>
                <li><a href="">وظائف</a></li>
                <li><a href="">مستلزمات أطفال</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="landing-page">
      <div class="home">
        <!-- Swiper -->
        <div class="swiper-container swiper-home">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/FrontEnd/images/slide-home.png" alt="" class="img-fluid" />
            </div>
            <div class="swiper-slide">
              <img src="/FrontEnd/images/slide-home.png" alt="" class="img-fluid" />
            </div>
            <div class="swiper-slide">
              <img src="/FrontEnd/images/slide-home.png" alt="" class="img-fluid" />
            </div>
            <div class="swiper-slide">
              <img src="/FrontEnd/images/slide-home.png" alt="" class="img-fluid" />
            </div>
            <div class="swiper-slide">
              <img src="/FrontEnd/images/slide-home.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <!------------------------ start banner (ads) section  --------------------------------------->
      <div class="adds-container my-3">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <a href="">
                <img src="/FrontEnd/images/ad 1.png" alt="banner" class="img-fluid" />
              </a>
            </div>
            <div class="col-6">
              <a href="">
                <img src="/FrontEnd/images/ad 2.png" alt="banner" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <!------------------------ end of banner (ads) section  --------------------------------------->

      <!------------------------ start most shops section  --------------------------------------->
      <div class="shops">
        <!-- main shops -->
        <div class="container my-5">
          <h3>أبرز المتاجر</h3>
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-1.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-2.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-3.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-1.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-2.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 my-3">
              <a href="" class="shop-card-main text-center d-block py-4">
                <img
                  src="/FrontEnd/images/shop-3.png"
                  alt=""
                  class="img-fluid pb-2 rounded-circle d-flex m-auto"
                />
                <h5>الشامي ستورز</h5>
                <h6>إلكترونيات / موبايلات</h6>
              </a>
            </div>
          </div>
        </div>

        <!-- shops cards -->
        <div class="container my-5">
          <h3>اخترنا لك</h3>
          <div class="row">
           
            
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="/FrontEnd/images/product-4.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <!-- <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i> -->
                    <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i>
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="/FrontEnd/images/product-2.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i>
                    <!-- <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i> -->
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-1.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <!-- <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i> -->
                    <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i>
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-3.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i>
                    <!-- <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i> -->
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-4.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <!-- <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i> -->
                    <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i>
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-2.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i>
                    <!-- <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i> -->
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-1.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <!-- <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i> -->
                    <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i>
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-6 my-3">
              <div class="shops-card d-block">
                <div class="img-container">
                  <img src="./images/product-3.png" alt="" class="w-100" />
                  <span class="add-to-fav">
                    <input type="checkbox" />
                    <i class="fas fa-heart d-flex justify-content-center align-items-center rounded-circle empty"></i>
                    <!-- <i
                      class="
                        fas
                        fa-heart
                        d-flex
                        justify-content-center
                        align-items-center
                        rounded-circle
                        fill
                      "
                    ></i> -->
                  </span>
                </div>

                <div class="content py-3 px-2">
                  <a href="" class="title">ال جي تلفزيون 55 بوصة ذكي</a>
                  <h5 class="my-3">6000 <span>جنيه مصري</span></h5>
                  <div class="discount d-flex align-items-center" >
                    <p class="discount-num px-2 text-center rounded">30% خصم</p>
                    <p class="discount-result">جنيه مصري<span>7500</span></p>
                  </div>
                  <div
                    class="
                      m-auto
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <a href="" class="app-btn dark my-2">أضف للعربة</a>
                  </div>
                </div>
              </div>
              
            </div>
           
          </div>
        </div>
      </div>

      <!------------------------ end of most shops section  --------------------------------------->
    </section>


@include('FrontEnd.inc.footer')
