<?php
/** Template Name: Web Socket Template
 * 
 */

$blogusers = get_users( array( 'role__in' => array( 'author', 'subscriber' ) ) );

get_header();

?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/jquery.ui.slider.css" rel="stylesheet">
<!-- style sheet -->
<link rel="stylesheet" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/css/main.css">
<title>Santuary</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Santuary &raquo; Feed" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/feed/" />
<link rel="alternate" type="application/rss+xml" title="Santuary &raquo; Comments Feed" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/comments/feed/" />
<script>
  window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wfh1121.upupload.com\/blog71877\/x397dwe9lo71877\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}};
  !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style>
  img.wp-smiley,
  img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
  }
</style>
<link rel='stylesheet' id='wp-block-library-css'  href='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' media='all' />
<link rel='stylesheet' id='santuary-style-css'  href='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/style.css?ver=1.0.0' media='all' />
<link rel='stylesheet' id='wppb_stylesheet-css'  href='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/plugins/profile-builder/assets/css/style-front-end.css?ver=3.6.1' media='all' />
<link rel="https://api.w.org/" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-json/" /><link rel="alternate" type="application/json" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-json/wp/v2/pages/14" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8.2" />
<link rel="canonical" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/" />
<link rel='shortlink' href='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/' />
<link rel="alternate" type="application/json+oembed" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwfh1121.upupload.com%2Fblog71877%2Fx397dwe9lo71877%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwfh1121.upupload.com%2Fblog71877%2Fx397dwe9lo71877%2F&#038;format=xml" />
<style type="text/css">
  .site-title,
  .site-description {
    position: absolute;
    clip: rect(1px, 1px, 1px, 1px);
  }
</style>
<link rel="icon" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/favicon.ico" sizes="32x32" />
<link rel="icon" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/favicon.ico" sizes="192x192" />
<link rel="apple-touch-icon" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/favicon.ico" />
<meta name="msapplication-TileImage" content="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/favicon.ico" />
<style id="wp-custom-css">
  .page-template-templatesregistration-template-php .log_in{display:none;}
  .registration .gform_wrapper.gravity-theme .gfield_label{font-size: 42px;color: #16172a;font-family: 'Alternate Gothic No3 D',sans-serif;margin-bottom: 24px; font-weight:normal;}
  .registration input.large{border: 2px solid #16172c;border-radius: 10px !important;}
  .registration .gform_wrapper.gravity-theme input[type=text]{margin-bottom: 28px;padding: 15px;}    


  .sock-header-top{
    margin-top: -294px !important;
  }

  a.name:after {
    content: '';
    position: absolute;
    height: 10px;
    width: 10px;
    border-radius: 100px;
    right: 0px;
  }

  .online-status{
    font-size: 15px;
    padding-left: 10px;
    color: #ccc;
  }
  a.name {
    position: relative;
  }

  .status-green {
   color: green !important;
 }

 .status-black {
   color: gray !important;
 }
 .status-yellow {
   color: yellow !important;
 }

 .navbar .logo {
  max-width: 13% !important;
}

/*-- 27-12-2021 --*/
#find_reader .row .wrap .left img {
  width: auto;
}
#find_reader .row .wrap .right p {
  font-size: 18px;
  font-weight: 600;
}
#find_reader .row .wrap .center ul li a.name {
  font-size: 38px;
  font-weight: 600;
}
#find_reader .row .wrap .center ul li a.available {
  font-size: 24px;
  font-weight: 600;
}

@media screen and (max-width: 1700px) {
  #find_reader .row .wrap .right a {
    font-size: 26px !important;
    padding: 6px 25px !important;
    font-weight: 600;
    }}


  </style>


  <body class="home page-template page-template-templates page-template-homepage-template page-template-templateshomepage-template-php page page-id-14 no-sidebar">
    <!-- header section start here -->
    <header>
      <div class="top-navbar sock-header-top">
        <div class="container">
          <div class="inner_wrap">
            <p>get your first 5-minute reading for $4.99</p>
          </div>
        </div>
      </div>
      <div class="container navbar desk">
        <div class="logo">
          <a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877">
            <img class="img-fluid" src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/logo.png" alt="GOLDWATER" />
          </a>
        </div>
        <div class="nav_menu">
          <ul id="navbar-menu-1" class=" "><li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/readers/">Readers</a></li>
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/about-us/">About Us</a>
              <ul class="sub-menu">
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25"><a href="#">abc</a></li>
                <li id="menu-item-141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="#">abc</a></li>
                <li id="menu-item-142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="#">abc</a></li>
              </ul>
            </li>
            <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/shop/">Shop</a></li>
          </ul>            </div>
          <div class="log_in">
           <a class="login" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/log-in/" target="_self">Log in</a>


           <a class="signup" href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/registration/" target="_self">Sign up</a>

         </div>
       </div>
       <div class="container navbar mobile">
        <div class="wrap">
          <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
          <div class="logo">

            <img class="img-fluid" src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/logo.png" alt="GOLDWATER" />

          </div>
          <div class="nav_menu menu">
            <ul id="navbar-menu-1" class=" "><li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/shop/">Shop</a></li>
              <li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-136"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/about-us/">About Us</a>
                <ul class="sub-menu">
                  <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138"><a href="#">abc</a></li>
                  <li id="menu-item-139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139"><a href="#">abc</a></li>
                  <li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a href="#">abc</a></li>
                </ul>
              </li>
              <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a href="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/readers/">Readers</a></li>
            </ul>              </div>
            <div class="log_in">
              <a class="login" href="#" target="_self">get the app</a>

            </div>
          </div>
        </div>
      </header>
      <!-- header section ends here -->
      <!-- section hero content start from here -->
      <section id="hero_content">
        <div class="container">
          <div class="inner_wrap">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</h4>
          </div>
        </div>
      </section>
      <!-- section hero content ends  here -->
      <!-- section find your reader start from here -->
      <section id="find_reader">
        <div class="container-fluid">
          <div class="filters" id="options">
            <div class="inner_wrap title">
              <h2>find your reader</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
              <div class="filter-by">
                <div class="row g-5">
                  <div class="col-lg-6">
                    <!--                            <h3>Filter by</h3>-->
                    <form>
                      <fieldset value-group="reading">
                        <div class="field-group-check">
                          <div class="input-check-col">
                            <div class="input-check-col-in">
                              <input type="checkbox" name="reading" value=".astrology" id="field_id7"/>
                              <label for="field_id7">Astrology</label>
                            </div>
                          </div>
                          <div class="input-check-col">
                            <div class="input-check-col-in">
                              <input type="checkbox" name="reading" value=".psychic" id="field_id6"/>
                              <label for="field_id6">Psychic</label>
                            </div>
                          </div>
                          <div class="input-check-col">
                            <div class="input-check-col-in">
                              <input type="checkbox" name="reading" value=".tarot" id="field_id8"/>
                              <label for="field_id8">Tarot</label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>

                    <div class="row">
                      <div class="col">
                        <div id="time-range">
                         <span class="slider-time slide_value">$1</span> 
                         <span class="slider-time2 slide_value">$10</span>
                         <div class="sliders_step1">
                          <div class="flat-slider" id="slider-range"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <h3>Sort by</h3>
                  <div class="row">
                    <div class="col">
                      <div class="dropdown">
                        <select class="form-select" value-group="availability">
                          <option value="*">Available Now</option>
                          <option value=".available">Available</option>
                          <option value=".in-a-reading">In a Reading</option>
                          <option value=".offline">Offline</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="dropdown">
                        <select class="form-select" aria-label="Default select example">
                          <option value="*">Price Per Minute</option>
                          <option value=".1-99">1.99</option>
                          <option value=".2-99">2.99</option>
                          <option value=".3-99">3.99</option>
                          <option value=".4-99">4.99</option>
                          <option value=".5-99">5.99</option>
                          <option value=".6-99">6.99</option>
                          <option value=".7-99">7.99</option>
                          <option value=".8-99">8.99</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-5 grid">


            <?php
            foreach ( $blogusers as $user ) {

              ?>
              <div id="<?php echo esc_attr( get_the_author_meta( 'render_id', $user->ID ) ); ?>" data-start-time="1.99 " class="cust_chat_types col-lg-6 box tarot  1-99  in-a-reading ">
                <div class="wrap-bg">
                  <div class="wrap">
                    <div class="left">
                      <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/client.png" class="img-fluid" alt="client">
                      <button class="heart-icon"><i class="fas fa-heart"></i></button>
                    </div>
                    <div class="center">
                      <ul>
                        <li><a href="" class="color-section name"><?php echo esc_html( $user->first_name ); ?><i class="online-status fas fa-circle"></i></a></li>
                        <li><a href="" class="profesion">Tarot </a></li>
                        <li><a href="" class="user-status-section available"> </a></li>
                      </ul>
                    </div>
                    <div class="right">
                      <a class="btn_primary" href="#" target="_self">Chat Now</a>
                      <p>get yourfirst 5 minutes <span>$12.99</span> 1.99 </p>
                    </div>
                  </div>
                  <div class="user_bottom">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum... </p>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </section>
    <!-- section find your reader ends  here -->

    <!-- section benefits start from here -->
    <section id="benefits">
      <div class="container">
        <div class="inner_wrap title">
          <h2>main features/benefits</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="row_wrap">
              <div class="icon">
                <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/icon_2.png" alt="" />
              </div>
              <div class="text">
                <a href=""><h6>feature one</h6></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>                    </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row_wrap">
                <div class="icon">
                  <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/icon_1.png" alt="" />
                </div>
                <div class="text">
                  <a href=""><h6>feature one</h6></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>                    </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="row_wrap">
                  <div class="icon">
                    <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/uploads/2021/11/icon_1.png" alt="" />
                  </div>
                  <div class="text">
                    <a href=""><h6>feature one</h6></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- section benefits ends  here -->

          <!-- testimonial start from here -->
          <section id="testimonial">
            <div class="container-fluid">
              <div class="inner_wrap title">
                <h2>Testimonials</h2>
              </div>
              <div class="slider testimonial">
                <div><!-- slide 1 start from here -->
                  <div class="testimonial_wrap">
                    <div class="rating-star">
                      <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                      <div class="rating-in" style="width: 50%;"></div>
                    </div>
                    <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                    <a href=""><h6>- jane f.</h6></a>              </div>
                  </div>
                  <div><!-- slide 1 start from here -->
                    <div class="testimonial_wrap">
                      <div class="rating-star">
                        <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                        <div class="rating-in" style="width: 50%;"></div>
                      </div>
                      <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                      <a href=""><h6>- jane f.</h6></a>              </div>
                    </div>
                    <div><!-- slide 1 start from here -->
                      <div class="testimonial_wrap">
                        <div class="rating-star">
                          <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                          <div class="rating-in" style="width: 50%;"></div>
                        </div>
                        <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                        <a href=""><h6>- jane f.</h6></a>              </div>
                      </div>
                      <div><!-- slide 1 start from here -->
                        <div class="testimonial_wrap">
                          <div class="rating-star">
                            <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                            <div class="rating-in" style="width: 50%;"></div>
                          </div>
                          <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                          <a href=""><h6>- jane f.</h6></a>              </div>
                        </div>
                        <div><!-- slide 1 start from here -->
                          <div class="testimonial_wrap">
                            <div class="rating-star">
                              <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                              <div class="rating-in" style="width: 50%;"></div>
                            </div>
                            <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                            <a href=""><h6>- jane f.</h6></a>              </div>
                          </div>
                          <div><!-- slide 1 start from here -->
                            <div class="testimonial_wrap">
                              <div class="rating-star">
                                <img src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/images/rating-star-hover.svg" alt="">
                                <div class="rating-in" style="width: 50%;"></div>
                              </div>
                              <p>“Sanctuary answered my questions about love, gave me guidance and now I’m married to the love of my life! <br />All thanks to Sanctuary!”</p>
                              <a href=""><h6>- jane f.</h6></a>              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- testimonial ends shere -->

                      <!-- section story start from here -->
                      <section id="story">
                        <div class="container">
                          <div class="inner_wrap title">
                            <h2>Let’s write a little story about why we <br />want our users to download our app</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <div class="search_box">
                              <a class="btn_primary" href="#" target="_self">Download the app</a>
                            </div>
                          </div>
                        </div>
                      </section>


                      <script src='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/js/navigation.js?ver=1.0.0' id='santuary-navigation-js'></script>
                      <script src='https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
                      <script src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/js/jquery-3.6.0.min.js"></script>
                      <script src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/js/slick.js"></script>
                      <script src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/js/bootstrap.bundle.min.js"></script>
                      <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
                      <script src="https://wfh1121.upupload.com/blog71877/x397dwe9lo71877/wp-content/themes/santuary/assets/js/custome.js"></script>

                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--
<script>
  // external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.cust_chat_types'
});

// store filter for each group
var filters = {};

$('.filters').on( 'change', function( event ) {
  var $select = $( event.target );
  // get group key
  var filterGroup = $select.attr('value-group');
  // set filter for group
  filters[ filterGroup ] = event.target.value;
  // combine filters
  var filterValue = concatValues( filters );
  // set filter for Isotope
  $grid.isotope({ filter: filterValue });
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

</script>
-->






<script>
  $ = jQuery;
  jQuery(document).ready(function(){

    jQuery('.grid').isotope({
          // options
          itemSelector: '.cust_chat_types',
        });

    updateCount();
  });
  var filters = {};
    // do stuff when checkbox change
    $('#options').on( 'change', function( jQEvent ) {
      var $checkbox = $( jQEvent.target );
      manageCheckbox( $checkbox );

      var comboFilter = getComboFilter( filters );

      $('.grid').isotope({ filter: comboFilter });

      $('.grid').isotope( 'on', 'layoutComplete', function( isoInstance, laidOutItems ) {
        updateCount();
      } );

    });

    $.expr[':'].hasClassStartingWith = function(el, i, selector) {
      var re = new RegExp("\\b" + selector[3]);
      return re.test(el.className);
    }

    function updateCount() {
      var numItems = 0;
      $('.count').each(function( index ) {
        if ( $(this).prev('input').hasClass('all') ) {
          numItems = $('.item').length;
          $(this).html(numItems);
        } else {
          itemClass = $(this).prev('input').val().substring(1);
          var itemSelector = ".grid div:hasClassStartingWith('" + itemClass + "')";
          numItems = $(itemSelector).not(":hidden").length;
          $(this).html(numItems);
        }
      });

    }

    function getComboFilter( filters ) {
      var i = 0;
      var comboFilters = [];
      var message = [];

      for ( var prop in filters ) {
        message.push( filters[ prop ].join(' ') );
        var filterGroup = filters[ prop ];
            // skip to next filter group if it doesn't have any values
            if ( !filterGroup.length ) {
              continue;
            }
            if ( i === 0 ) {
                // copy to new array
                comboFilters = filterGroup.slice(0);
              } else {
                var filterSelectors = [];
                // copy to fresh array
                var groupCombo = comboFilters.slice(0); // [ A, B ]
                // merge filter Groups
                for (var k=0, len3 = filterGroup.length; k < len3; k++) {
                  for (var j=0, len2 = groupCombo.length; j < len2; j++) {
                        filterSelectors.push( groupCombo[j] + filterGroup[k] ); // [ 1, 2 ]
                      }

                    }
                // apply filter selectors to combo filters for next group
                comboFilters = filterSelectors;
              }
              i++;
            }

            var comboFilter = comboFilters.join(', ');
            return comboFilter;
          }

          function manageCheckbox( $checkbox ) {
            var checkbox = $checkbox[0];

            var group = $checkbox.parents('fieldset').attr('data-group');
      // create array for filter group, if not there yet
      var filterGroup = filters[ group ];
      if ( !filterGroup ) {
        filterGroup = filters[ group ] = [];
      }

      var isAll = $checkbox.hasClass('all');
      // reset filter group if the all box was checked
      if ( isAll ) {
        delete filters[ group ];
        if ( !checkbox.checked ) {
          checkbox.checked = 'checked';
        }
      }
      // index of
      var index = $.inArray( checkbox.value, filterGroup );

      if ( checkbox.checked ) {
        var selector = isAll ? 'input' : 'input.all';
        $checkbox.siblings( selector ).removeAttr('checked');

        if ( !isAll && index === -1 ) {
          // add filter to group
          filters[ group ].push( checkbox.value );
        }

      } else if ( !isAll ) {
        // remove filter from group
        filters[ group ].splice( index, 1 );
        // if unchecked the last box, check the all
        if ( !$checkbox.siblings('[checked]').length ) {
          $checkbox.siblings('input.all').attr('checked', 'checked');
        }
      }

    }
  </script>

  <script>
    $("#slider-range").slider({
      range: true,
      min: 1,
      max: 10,
      step: 1,
      values: [1, 10],
      slide: function(e, ui) {
        var min = Math.floor(ui.values[0]);
        $('.slider-time').html('$' + min );

        var max = Math.floor(ui.values[1]);
        
        $('.slider-time2').html('$' + max );

        $('.cust_chat_types').each(function() {
          var startTime = (min);
          var endTime = (max);
            //console.log('.box[data-start-time="' + startTime + '"]');

            var value = $(this).data('start-time');
            //console.log('Selecting all events between ' + startTime + ' and ' + endTime);
            // skeleton key
            //console.log(value + '<=' + endTime);
            if ((parseInt(endTime) >= parseInt(value) && (parseInt(startTime) <= parseInt(value))) ){
              $(this).show();
            } else {
              $(this).hide();
            }
            //
          });

      }
    });
  </script>


  <?php
  get_footer();
  ?>
