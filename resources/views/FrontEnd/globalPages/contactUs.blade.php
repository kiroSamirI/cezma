@include('FrontEnd.inc.header')

    <div class="add-shop sign-up">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 my-2 ">
                    <div class="content  mx-auto">
                        <h2 class="header pb-4 ">
                            .. اتصل بنا                        
                        </h2>
                        <form action="">
                           
                            <input type="text" placeholder="  الموضوع" class="p-2 rounded w-100 mb-2">
                          
                         <textarea name="" id="" cols="30" rows="7" class="p-2 rounded w-100 mb-2" placeholder=".. اكتب رسالتك"></textarea>
                          
                            <button type="submit" 
                            class="app-btn dark rounded w-100 mt-3">إرسال  </button>


                        </form>
                       
                    </div>

                </div>
                <div class="col-lg-5 mx-auto my-2">
                    <img src="{{asset('FrontEnd/images/contact-us.png')}}" alt="" class="img-fluid d-flex mx-auto">
                </div>
               
            </div>
        </div>

    </div>

@include('FrontEnd.inc.footer')
