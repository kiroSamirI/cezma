@include('FrontEnd.inc.header')
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
                <a href="login.html" class="login  py-2 px-4 rounded">
                  تسجيل دخول              </a>
    
                <a href="signup.html" class="signup bg-white py-2 px-4 rounded">
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


    <!-- start login main sec -->
    <div class="add-shop sign-up">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 my-2 ">
                    <div class="content  mx-auto">
                        <h2 class="header pb-4 d-flex flex-column flex-md-row align-items-center  justify-content-between">
                           <span class="py-2">
                            هل أنت عضو بالفعل ؟
                           </span>
                           
                            <a href="login.html" class="py-2 px-3">تسجيل دخول </a>
                        </h2>
                        <form action="">
                           
                            <input type="text" placeholder=" اسم المستخدم" class="p-2 rounded w-100 mb-2">
                            <input type="email" placeholder=" البريد الإلكتروني " class="p-2 rounded w-100 mb-2">
                            <select name="" id="" class="form-control rounded mb-2">
                                <option value="" disabled>الدولة </option>
                                <option value="">الدولة </option>
                                <option value="">الدولة </option>
                                <option value="">الدولة </option>
                                <option value="">الدولة </option>
                            </select>
                           
                            <div class="input-content">
                                <label for="phone">+20</label>
                                <input type="text" id="phone" placeholder="رقم التليفون"  class="py-2  rounded w-100 mb-2">

                            </div>
                            <input type="text" placeholder="العنوان" class="p-2 rounded w-100 mb-2">
                            <div class="input-container">
                                <span><i class="far fa-eye"></i></span>
                                <input type="password" id="password" placeholder="كلمة المرور "  class="py-2  rounded w-100 mb-2">
                            </div>
                            <div class="input-container">
                                <span><i class="fas fa-eye-slash"></i></span>
                                <input type="password" id="password" placeholder="كلمة المرور "  class="py-2  rounded w-100 mb-2">
                            </div>
                            <div class="custom-control custom-checkbox  my-3">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck1" >
                                <label class="custom-control-label" for="exampleCheck1">
                                    
                                    أوافق على                                
                                    <a href="terms.html" class="px-1 terms">الشروط والأحكام</a>
                                    والتزم بها
                                
                                </label>
                              </div>
                          
                            <button type="submit" 
                            class="app-btn dark rounded w-100 mt-3">تسجيل دخول </button>


                        </form>
                    </div>

                </div>
                <div class="col-lg-5 my-3">
                    <div class="social-media-sites d-flex flex-column justify-content-center align-items-center text-center">
                        <p>أو يمكنك الدخول باستخدام <br>
                            حسابك في مواقع التواصل الاجتماعي</p>
                        
                        
                        <a href="" class="app-btn facebook px-4 py-3  my-2">
                              <i class="fab fa-facebook-f px-1 "></i>
                              دخول باستخدام فيسبوك
                          </a>
                          <a href="" class="app-btn google px-4 py-3 my-2">
                            <i class="fab fa-google px-1"></i>
                            دخول باستخدام جوجل                  
                              </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

 
@include('FrontEnd.inc.footer')
