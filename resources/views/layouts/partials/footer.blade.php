
<div class="cookiePolicy">
    <div class="cookiePolicy__content">
        <div id='cookie-bar'><div id='contentcookie'><p>We use cookies and similar technologies to recognize your repeat visits and preferences, to measure the effectiveness of campaigns, and improve our websites. For settings and more information about cookies, view our <a href="{{route('terms')}}">Term of Use Policy</a>. By clicking “I accept” on this banner or using our site, you consent to the use of cookies.</p><button    id='Cookie' tabindex=1 onclick='AcceptCookies();'>I accept </button><div class='clear'></div></div></div>
    </div>
    <div class="cookiePolicy__close">
        <svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <line x1="1" y1="11"
                  x2="11" y2="1"
                  stroke="#208798"
                  stroke-width="2"/>
            <line x1="1" y1="1"
                  x2="11" y2="11"
                  stroke="#208798"
                  stroke-width="2"/>
        </svg>
    </div>
</div>


<section class="section bg-dark-4 py-5 text-center">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-2">

                <h2 class="text-color-light text-4">NEWSLETTER</h2>

            </div>

            <div class="col-md-4">

                <p>Part of the fun in planning this big step in life is to choose your rings.</p>

            </div>

            <div class="col-md-6">



                <form class="newsletter-form" action="#" method="POST">

                    <div class="newsletter-form-success alert alert-success d-none">

                        <strong>Success!</strong> You've been added to our email list.

                    </div>

                    <div class="newsletter-form-error alert alert-danger d-none">

                        <strong>Error!</strong> There was an error to add your email.

                    </div>



                    <div class="input-group bg-light rounded">

                        <input type="email" class="newsletter-email form-control border-0 rounded" placeholder="Enter Email address" aria-label="Enter Email address" required>

                        <span class="input-group-btn p-1">

									    	<button class="btn btn-sqr font-weight-semibold btn-h-2 rounded h-100" type="submit">SUBSCRIBE</button>

									  	</span>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

<footer id="footer" class="footer-hover-links-light bg-dark-3 mt-0 ">

    <div class="container ">



        <div class="row">

            <div class="col-lg-3 mb-6 mb-lg-0">

                <a href="/">

                    <img style="margin-bottom: 10px; width: 250px;"  class="img-fluid" src="/frontend/assets/img/logo/perlantz-footer-logo.png">

                </a>
                <ul style="margin-top: 8px;"  class="list list-icons list-unstyled">

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i><span><img src="/frontend/assets/img/jfkendy.jpg"></span> <span><img src="/frontend/assets/img/eu.png"></span> <span><img src="/frontend/assets/img/germany-flag.jpg"></span> </li>


                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <span class="text-color-light">Email:</span> <a href="mailto:mail@example.com" class="link-underline-light">info@perlantz.com</a></li>
                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <span class="text-color-light">Email:</span> <a href="mailto:mail@example.com" class="link-underline-light">service@perlantz.com</a></li>

                </ul>





            </div>


            <div class="col-lg-3 mb-4 mb-lg-0">

                <h2 class="text-3 mb-3 text-center link-underline-light ">ABOUT PERLANTZ</h2>

                <ul class="list list-icon list-unstyled">

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('aboutus')}}">Who We Are</a></li>



                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('faq')}}">F.A.Q</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('contact-us')}}">Contact Us</a></li>


                </ul>

            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">

                <h2 class="text-3 mb-3 text-center link-underline-light">GUIDES & EDUCATION</h2>

                <ul class="list list-icon list-unstyled">

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('aboutdiamonds')}}">Diamond Education</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('engraving')}}">Free Engraving</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('aboutgemstones')}}">Gemstone Education</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('aboutpearls')}}">Pearl Education</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('engagementrings')}}">Engagement Ring Guide</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('ringguide')}}">Wedding Ring Guidey</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('braceletsize')}}">Bracelet Size Guide</a></li>


                </ul>

            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">

                <h2 class="text-3 mb-3 text-center link-underline-light">OUR POLICIES & LEGAL</h2>

                <ul class="list list-icon list-unstyled">

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('terms')}}">Terms & Conditions</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="#">Shipping Policy</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('return')}}">Return Policy</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('privacy')}}">Privacy Policy</a></li>

                    <li class="mb-2"><i class=" mr-2 ml-1 text-left"></i> <a href="{{route('cookie')}}">Cookie Policy</a></li>


                </ul>

            </div>








        </div>





    </div>

    <div class="footer-copyright">

        <div class="container">

            <div class="row text-center text-md-left align-items-center">

                <div class="col-md-12 col-lg-8">

                    <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">

                        <li class="social-icons-facebook">

                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>

                        </li>

                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                        <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                    </ul>

                </div>

                <div class="col-md-5 col-lg-4">

                    <p class="text-md-right text-color-light-2 pb-0 mb-0">Copyrights © {{date('Y')}}. All Rights Reserved by Perlantz</p>

                </div>

            </div>



        </div>

    </div>

</footer>

