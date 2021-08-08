@include('FrontEnd.inc.header')


<div class="add-shop sign-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 my-2">
            <div class="content mx-auto">
              <h2
                class="
                  header
                  pb-4
                  d-flex
                  flex-column flex-md-row
                  align-items-center
                  justify-content-between
                "
              >
                <span class="py-2"> جديد في سيزما ؟ </span>

                <a href="signup.html" class="py-2 px-3">سجل الآن </a>
              </h2>
              <form action="">
                <input
                  type="email"
                  placeholder=" البريد الإلكتروني "
                  class="p-2 rounded w-100 mb-2"
                />

                <input
                  type="password"
                  placeholder="كلمة المرور"
                  class="p-2 rounded w-100 mb-2"
                />

                <div class="d-flex justify-content-between align-items-center">
                  <div class="custom-control custom-checkbox my-3">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="exampleCheck1"
                    />
                    <label class="custom-control-label" for="exampleCheck1">
                      تذكرني
                    </label>
                  </div>
                  <a href="forget-password.html" class="forget-passowrd"
                    >نسيت كلمة المرور؟</a
                  >
                </div>

                <button type="submit" class="app-btn dark rounded w-100 mt-3">
                  حساب جديد
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-5 my-3">
            <div
              class="
                social-media-sites
                d-flex
                flex-column
                justify-content-center
                align-items-center
                text-center
              "
            >
              <p>
                أو يمكنك الدخول باستخدام <br />
                حسابك في مواقع التواصل الاجتماعي
              </p>

              <a href="" class="app-btn facebook px-4 py-3 my-2">
                <i class="fab fa-facebook-f px-1"></i>
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
