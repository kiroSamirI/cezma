@include('FrontEnd.inc.header')
    

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
                           
                            <a href="/login" class="py-2 px-3">تسجيل دخول </a>
                        </h2>
                        <form action="/register" method="POST">
                           
                            <input type="text" placeholder=" اسم المستخدم" name="name" class="p-2 rounded w-100 mb-2">
                            <input type="email" placeholder=" البريد الإلكتروني " name="email" class="p-2 rounded w-100 mb-2">
                            <select name="" id="" class="form-control rounded mb-2">
                                <option value="1" disabled>الدولة </option>
                                <option value="1">الدولة </option>
                                <option value="1">الدولة </option>
                                <option value="1">الدولة </option>
                                <option value="1">الدولة </option>
                            </select>
                           
                            <div class="input-content">
                                <label for="phone">+20</label>
                                <input type="text" id="phone" placeholder="رقم التليفون" name="phone" class="py-2  rounded w-100 mb-2">

                            </div>
                            <input type="text" placeholder="العنوان" class="p-2 rounded w-100 mb-2">
                            <div class="input-container">
                                <span><i class="far fa-eye"></i></span>
                                <input type="password" id="password" placeholder="كلمة المرور " name="password"  class="py-2  rounded w-100 mb-2">
                            </div>
                            <div class="input-container">
                                <span><i class="fas fa-eye-slash"></i></span>
                                <input type="password" id="password" placeholder="كلمة المرور " name="password_confirmation" class="py-2  rounded w-100 mb-2">
                            </div>
                            <div class="custom-control custom-checkbox  my-3">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck1" >
                                <label class="custom-control-label" for="exampleCheck1">
                                    
                                    أوافق على                                
                                    <a href="/terms" class="px-1 terms">الشروط والأحكام</a>
                                    والتزم بها
                                
                                </label>
                              </div>
                          @csrf
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
