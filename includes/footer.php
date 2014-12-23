 <!-- footer Start-->
                                <script>
                                    navTopTop = (3 + $$('nav.top-bar')[0].offsetTop) || 100
                                    if ($$('.touch').length == 0) {
                                        window.classOnScroll($$('header.big-one')[0], 'header-attached', navTopTop, 'header');
                                        window.classOnScroll($$('html')[0], 'space-header-attached', navTopTop, 'header-global');
                                    }
                                </script>


                                <div class="registration-popup registration-popup-both-forms">

                                    <section class="reg-pop-login">
                                        <div class="reg-pop-login-wrapper">
                                            <span class="sign"></span>
                                            <form action="https://markavip.com/jo/customer/account/loginPost/" method="post" id="login_form" class="login-form">
                                                <input type="hidden" name="login[redirect_link]" class="popup-redirect-links" />
                                                <h3>Member Login</h3>
                                                <label class="reg-pop-login-label placeholder-fb" for="login[username]">Email Address</label>
                                                <input tabindex="1" name="login[username]" value="" id="login_email" type="email" class="input-text black required-entry validate-email" title="Email Address" placeholder="Email Address" />
                                                <label class="reg-pop-login-label placeholder-fb" for="login[password]">Password</label>
                                                <input tabindex="2" name="login[password]" autocomplete="off" type="password" class="input-text black required-entry validate-password" id="pass" title="Password" placeholder="Password" />
                                                <a class="forget-password" href="https://markavip.com/jo/customer/account/forgotpassword/">Forgot Your Password?</a>
                                                <button tabindex="3" type="submit" class="button" name="send" id="login-send">Login</button>
                                                <a class="pp-link" target="_blank" href="http://markavip.com/jo/privacy">Privacy Policy</a>
                                            </form>
                                        </div>
                                    </section>
                                    <section class="reg-pop-signup">
                                        <div class="base-form reg-pop-registration">
                                            <h3>Get access to&nbsp;exclusive sales at&nbsp;members only prices</h3>
                                            <form action="https://markavip.com/jo/customer/account/quickRegistrationPost/" method="post" id="register-form">
                                                <input type="hidden" name="register[redirect_link]" class="popup-redirect-links" />
                                                <ul class="form-list">
                                                    <li class="reg-pop-gender">
                                                        <span class="line-radio"><input name="register[gender]" value="1" type="radio" checked="checked" id="register_gender_male" class="standard-radio" /><label for="register_gender_male">Male</label></span>
                                                        <span class="line-radio"><input name="register[gender]" value="2" type="radio" id="register_gender_female" class="standard-radio validate-one-required-by-name"/><label for="register_gender_female">Female</label></span>
                                                    </li>
                                                    <li class="reg-pop-reg-email">
                                                        <input name="register[email]" placeholder="Email Address" value="" id="register_email" type="text" class="input-text txt-big plh required-entry validate-email" title="Email Address" />
                                                        <button type="submit" class="button" name="send" id="reg-send">Enter</button>
                                                    </li>
                                                    <li>
                                                        <input type="hidden" name="invite_code" value="" />
                                                        <input type="hidden" name="geoip_country_code" id="geoip_country_code" value="" />
                                                    </li>
                                                    <li class="submit-box">

                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="or-separator">or</div>
                                        <div class="fb-login-section reg-pop-facebook">
                                            <h3>Login with Facebook<br />and receive nothing</h3>
                                            <div class="reg-pop-gender-dummy"></div>
                                            <button class="clearfix fb-login-button" href="javascript:;" onclick="Revolution.FBLoginFromLightbox();">
                                                <span class="icon"></span>
                                                <strong>Login</strong> using Facebook                    </button>
                                        </div>
                                    </section>
                                </div>
                                <div class="screen-fader"></div>

                                <script type="text/javascript" charset="utf-8">

                                    registrationPopup = new RegistrationPopup(false, 'login')

                                    Revolution.FBLoginFromLightbox = function() {
                                        if (!Revolution.FBLogin) {
                                            return;
                                        }
                                        var next = null;
                                        redirectEl = $$('#login-form input[name="login[redirect_link]"]').first();
                                        if (redirectEl) {
                                            next = redirectEl.value;
                                        }
                                        Revolution.FBLogin(next);
                                    }

                                </script>



                                <footer class="clearfix big-one">
                                    <section class="footer-links">
                                        <div class="footer-primary-links">
                                            <a href="http://markavip.com/jo/about" target="_blank">About Us</a>
                                            <a href="http://markavip.com/jo/contact-us" target="_blank">Contact Us</a>
                                            <a href="http://markavip.com/jo/faq-company-information" target="_blank">FAQs</a>
                                            <a href="http://markavip.com/jo/sizing" target="_blank">Sizing Guide</a>
                                        </div>
                                        <div class="footer-secondary-links">
                                            <a href="http://markavip.com/jo/return" target="_blank">Return Policy</a>
                                            <a href="http://markavip.com/jo/privacy" target="_blank">Privacy Policy</a>
                                            <a href="http://markavip.com/jo/terms" target="_blank">Terms of Use &amp; Service</a>
                                            <a href="skype:markavip.com?add" target="_blank">Add MarkaVIP on Skype</a>
                                        </div>    </section>
                                    <section class="social-mobile">
                                        <div class="icon-links-container icon-links-container-2i">
                                            <div><a href="http://markavip.com/jo/mobile-apps/">Mobile Apps</a></div>
                                            <div class="icon-links">
                                                <a href="https://itunes.apple.com/app/id715290345?mt=8" target="_blank" class="round-icon mobile-app-link-apple"></a>
                                                <a href="https://play.google.com/store/apps/details?id=com.markavip.app" target="_blank" class="round-icon mobile-app-link-android"></a>
                                            </div>
                                        </div>
                                        <div class="icon-links-container">
                                            <div>Follow us</div>
                                            <div class="icon-links">
                                                <a href="http://instagram.com/MarkaVIP" target="_blank" class="round-icon social-link-instagram"></a>
                                                <a href="http://www.facebook.com/MarkaVIP" target="_blank" class="round-icon social-link-facebook"></a>
                                                <a href="http://www.twitter.com/MarkaVIP" target="_blank" class="round-icon social-link-twitter"></a>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="footer-payment-overall">
                                        <div class="footer-secured">
                                            <div class="footer-bag-icon"></div>
                                            <p>100% secured website</p>
                                        </div>
                                        <div class="footer-cards"></div>
                                    </section>
                                    <section class="security-seals">
                                        <div class="security-seal">
                                            <script>
                                                (function() {
                                                    splash_url = "https://trustsealinfo.verisign.com";
                                                    u1 = splash_url + "/splash?form_file=fdf/splash.fdf&dn=markavip.com&lang=en";
                                                    var sopener;
                                                    window.vrsn_splash = function() {
                                                        if (sopener && !sopener.closed) {
                                                            sopener.focus();
                                                        } else {
                                                            tbar = "location=yes,status=yes,resizable=yes,scrollbars=yes,width=560,height=500";
                                                            var sw = window.open(u1, 'VRSN_Splash', tbar);
                                                            if (sw) {
                                                                sw.focus();
                                                                sopener = sw;
                                                            }
                                                        }
                                                    }
                                                })()
                                            </script>
                                            <a href="javascript:vrsn_splash();" class="ns-seal"></a>
                                        </div>
                                        <div class="security-seal">
                                            <!--TRUSTe-->
                                            <div id="dfcce221-4e5d-496c-8482-cae63bc91906"> <script type="text/javascript" src="//privacy-policy.truste.com/privacy-seal/MarkaVIP/asc?rid=dfcce221-4e5d-496c-8482-cae63bc91906"></script><a href="//privacy.truste.com/privacy-seal/MarkaVIP/validation?rid=13ab6988-3394-449a-a73a-2213e4cb3945" title="TRUSTe online privacy certification" target="_blank"><img style="border: none" src="//privacy-policy.truste.com/privacy-seal/MarkaVIP/seal?rid=13ab6988-3394-449a-a73a-2213e4cb3945" alt="TRUSTe online privacy certification"/></a></div>
                                        </div>
                                    </section>
                                </footer>

                                <script type="text/javascript">
                                                new GoToTop({
                                                    text: "Go to top"
                                                });
                                                Revolution.pull();
                                </script>

                                <div id="fb-root"></div>
                                <script>
                                    window.fbAsyncInit = function() {
                                        FB.init({
                                            appId: '246052772130187',
                                            status: true,
                                            cookie: true,
                                            xfbml: true
                                        });
                                    };
                                    (function(d) {
                                        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                                        if (d.getElementById(id)) {
                                            return;
                                        }
                                        js = d.createElement('script');
                                        js.id = id;
                                        js.async = true;
                                        js.src = "//connect.facebook.net/en_US/all.js";
                                        ref.parentNode.insertBefore(js, ref);
                                    }(document));

                                    Revolution.FBLogin = function(next) {
                                        FB.login(
                                                function(res) {
                                                    if (res.authResponse) {
                                                        var href = 'https://markavip.com/jo/customer/account/fbLogin/?access_token=' + res.authResponse.accessToken;
                                                        if (next) {
                                                            href = href + '&next=' + next;
                                                        }
                                                        window.location.href = href;
                                                    }
                                                }, {scope: 'email'}
                                        )
                                    }
                                </script>

                                <div class="ajaxcartpro_progress" style="display: none;">
                                    <div class="triangle"></div>
                                    <div class="loader loading-ajax"></div>
                                    <p>Please wait...</p>
                                </div>
                                <div class="ajaxcartpro_confirm" style="display: none;">
                                    <div class="triangle"></div>
                                    <p class="description"><span id="acp_product_name">Item(s)</span> added to shopping bag</p>

                                    <div id="acp_none_free_shipping">
                                        <div class="happy-shipping-truck black-truck"></div>
                                        <div class="confirm-spend">
                                            Spend <span id='acp_confirm_digits'><span class="price"><span class="sign">JD</span><span class="digits">49</span></span></span> more for free shipping on this order            </div>
                                        <button id="aw_acp_continue_shopping" class="button btn-checkout">
                                            Continue Shopping            </button>
                                        <div class="alt-view-cart">
                                            <a href='https://markavip.com/jo/onestepcheckout/'> Checkout </a>
                                        </div>
                                        <script type="text/javascript">
                                            $('aw_acp_continue_shopping').observe('click', function(e) {
                                                window.location = 'http://markavip.com/jo/';
                                            });
                                        </script>
                                    </div>

                                    <div id="acp_free_shipping">
                                        <div class="view-cart">
                                            <a href='/checkout/cart'> View Shopping Bag </a>
                                        </div>
                                        <button id="aw_acp_checkout" class="button btn-checkout">
                                            Checkout            </button>
                                    </div>
                                    <script type="text/javascript">
                                        $('aw_acp_checkout').observe('click', function(e) {
                                            window.location = 'https://markavip.com/jo/onestepcheckout/';
                                        });
                                    </script>
                                    <p class="cart-add-popup-text">Your items will be in <a href='http://markavip.com/jo/checkout/cart/'>your shopping bag</a><br />for only 30 minutes</a></p>
                                </div>

                                </div>
                                <script type="text/javascript">window.NREUM || (NREUM = {});
                                    NREUM.info = {"beacon": "beacon-1.newrelic.com", "licenseKey": "d6a85f6e02", "applicationID": "3037871", "transactionName": "ZFVTYkUFXxJYUkYNXF0fcFVDDV4PFlJfFxxaXlVTT0tYD11USg==", "queueTime": 0, "applicationTime": 171, "ttGuid": "", "agentToken": "", "userAttributes": "", "errorBeacon": "bam.nr-data.net", "agent": "js-agent.newrelic.com\/nr-476.min.js"}
                                </script>
                                </body>
                                </html>
