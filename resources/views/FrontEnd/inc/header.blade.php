<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <title>Cezma تسجيل حساب  </title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="{{asset('FrontEnd/css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('FrontEnd/css/swiper-bundle.min.css')}} " />
    <link rel="stylesheet" href="{{asset('FrontEnd/css/select2.min.css')}} " />
    <link rel="stylesheet" href="{{asset('FrontEnd/css/main.css')}} " />
  </head>

  <body>
    <div class="menu-container">
    </div>
    <div class="menu-content">
      <a href="" class="logo-mobile">
        <img
          src="FrontEnd/images/logo-light.png"
          alt="CEZMA logo"
        />
      </a>

      <form class="search m-auto d-flex w-100 px-2">
        <input
          type="text"
          class="py-2"
          placeholder="عن ماذا تبحث ؟"
        />
        <button type="submit" class="app-btn px-2 py-1">
          <i class="fas fa-search"></i>
        </button>
      </form>

    </div>
    <div class="add-store-mob rounded-circle d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="إضافة متجر">
      <a href="login.html"><i class="fas fa-sign-in-alt fa-lg"></i></a>
    </div>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>
    <nav class="menu">
      <ul class="menu-nav">
        <li class="nav-item current">
          <a href="index.html" class="nav-link"> الموبايلات والأجهزة اللوحية </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link">  أجهزة كمبيوتر </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> التلفزيونات وأجهزة الترفيه </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> ألعاب الفيديو </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> مستلزمات المنزل </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> سيارات وقطع غيار </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> الموضة والجمال </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> وظائف </a>
        </li>
        <li class="nav-item">
          <a href=".html" class="nav-link"> مستلزمات أطفال </a>
        </li>
        
      </ul>
    </nav>
    <header class="before-register">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center h-100">
            <div class="col-2">
              <a href="">
                <img
                  src="FrontEnd/images/logo-light.png"
                  alt="CEZMA logo"
                  class="img-fluid"
                />
              </a>
            </div>
            <div class="col-10">
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
                      <a href="index.html" class="line-hover "
                        >الرئيسية</a
                      >
                    </li>
                    <li><a href="shops.html" class="line-hover">المتاجر</a></li>
                    <li><a href=".html" class="line-hover active">المفضلة</a></li>
                    <li>
                      <a href=".html" class="line-hover ">
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
                      <a href="/contactUs" class="line-hover">اتصل بنا</a>
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
                  </div>
                  <div
                  class="
                    text-center
                    d-flex
                    justify-content-between
                    h-100
                    auth
                  "
                >
                <a href="/login" class="login  py-2 px-4 rounded">
                  تسجيل دخول              </a>
    
                <a href="/register" class="signup bg-white py-2 px-4 rounded">
                  حساب جديد               </a>
                 
    
                </div>
                </div>
                <div class="bottom">
                  <form class="search d-flex ">
                    <input
                      type="text"
                      class="py-2"
                      placeholder="عن ماذا تبحث ؟"
                    />
                    <button type="submit" class="app-btn">
                      <i class="fas fa-search pt-2"></i>
                    </button>
                  </form>
                </div>
              </div>
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
