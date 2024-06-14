<html lang="en-IN">
  <head>
    <script src="https://connect.facebook.net/signals/config/306002705503107?v=2.9.138&amp;r=stable&amp;domain=shopzonebox.shop" async=""></script>
    <script src="https://connect.facebook.net/signals/config/847945393532021?v=2.9.138&amp;r=stable&amp;domain=shopzonebox.shop" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-254758032-7');
    </script>
    <title><?php echo $web_settings['site_name']; ?></title>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="<?php echo $web_settings['keywords']; ?>">
    <meta name="Description" content="<?php echo $web_settings['description']; ?>">
    <meta property="og:title" content="We are Here To Help You">
    <meta name="theme-color" content="#2874f0" id="themeColor">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel="icon" href="<?php echo base_url(); ?><?php echo $web_settings['logo']; ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?><?php echo $web_settings['logo']; ?>">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      var WEB_API_FOLDER = '<?php echo base_url(); ?>/api_services/';
      var API_SERVICE_URL = '<?php echo base_url(); ?>/api_services/manage.php';
      var ADMIN_PANEL_URL = '<?php echo base_url(); ?>/admin_panel/';
      var MAIN_URL = '<?php echo base_url(); ?>';


jQuery(document).ready(function() {
    jQuery('a._3NH1qf.fnd_amz.maain_menu').click(function() {
       jQuery('.sidebar').css('transform', 'translateX(0%)');
       jQuery('.sidebar').css('transition', '0.7');
       jQuery('.shadow').css('display', 'block');
       jQuery('body').css('overflow', 'hidden');
    });


jQuery('.shadow').click(function() {
       jQuery('.sidebar').css('transform', 'translateX(-100%)');
       jQuery('.sidebar').css('transition', '0.7');
       jQuery('.shadow').css('display', 'none');
       jQuery('body').css('overflow', 'scroll');
    });
    
});
     
      // var PRIMARY_ID = '0';
    </script>
    <script>
      var UPI_ID = "<?php echo $web_settings['upi_id']; ?>"
    </script>
    <!-- Meta Pixel Code -->
    <?php echo $web_settings['pixel_code']; ?>
    <!-- end Meta Pixel Code -->
  </head>
  <body class="expansion-alids-init" cz-shortcut-listen="true">
    <div id="container">
      <div style="height:100%" data-reactroot="">
        <style>
          div {
            font-size: 20px;
            text-align: center;
          }
          .shadow {
                background-color: #0000003d;
                width: 100%;
                height: 100vh;
                position: fixed;
                display:none;
                z-index: 999;
                top: 0;
                left: 0;
            }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 75%;
            z-index: 9999;
            transform: translateX(-100%);
        }
.sidebar_body {
    background: #fff;
    height: 100vh;
    padding:10px 20px;
}
        .sidebar_menu {
    width: 100%;
    background: #2874f0;
    display: flex;
    padding: 15px;
}
.sidebar-list li {
    text-align: left;
    font-size: 15px;
    font-weight: 400;
    list-style: none;
    margin-bottom:10px;
}
          .ofr_text.code {
            font-size: 14px;
            display: none;
            color: #0F1111;
            font-size: 14px !important;
            line-height: 16px !important;
            text-align: center;
            font-weight: 600;
            /* text-overflow: ellipsis; */
            /* white-space: nowrap; */
            padding-top: 5px;
          }
          .swiper-image{
            height: 80px;
            width: 80px;
            border-radius:100px;
          }

          .swiper .swiper-wrapper{
            height: auto;
          }
          /*======================================================================================*/
          /*Home Main CSS START*/
          /*======================================================================================*/
          ol.carousel-indicators li {
            margin-left: 10px !IMPORTANT;
          }

          img.ctg_bg_nd {
            display: none;
          }

          .carousel-indicators li {
            background-color: #FFF !important;
            border: .1rem solid #888C8C !important;
          }

          .carousel-indicators li.active {
            background-color: #007185 !important;
            border: 0.1rem solid #007185 !important;
          }

          span.a-price-symbol {
            color: #0F1111;
            position: relative;
            font-size: 13px;
            top: -4px;
            margin-right: 1px;
          }

          .ico_ozm {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 4px 0 rgba(17, 17, 17, .3);
            position: absolute;
            bottom: 0;
            left: 0;
          }

          @media screen and (max-width: 768px) {
            img.mf_mza {
              width: 40%;
            }

            img.ctg_mf_if {
              display: none;
            }

            img.ctg_bg_nd {
              display: block;
            }

            .carousel-indicators {
              margin-bottom: -1rem;
            }
          }

          /*======================================================================================*/
          /*Home Main CSS END*/
          /*======================================================================================*/
        </style>
        
       
        
        <div>
          <div class="_2dxSCm">
            <div class="_3CzzrP" style="background:#2874f0">
              <div class="_38U37R">
                <div>
                  <div class="_1FWdmb" style="background-color:#2874f0">
                    <a class="_3NH1qf fnd_amz maain_menu">
                      <img alt="menu" src="<?php echo base_url() ?>/assets/images/ic_barss.svg" height="20px" width="20px">
                    </a>
                    <a class="Z4_K_h fnd_amz" href="<?php echo base_url() ?>" style="width:95px">
                      <img src="<?php echo base_url() ?>/<?php echo $web_settings['logo']; ?>" class="_31Y9yB" style="width:85px">
                    </a>
                    <!--<div class="_2WBW6z"></div>-->
                    <a href="#/mobile.html" class="_3NH1qf fnd_amz" style="width:75%; height:auto;text-align: right;">
                    <div class="menu-icon">
                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="evenodd"><path d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path><path d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path></g></svg>                </div>
                    <div class="menu-icon menu-icon2">
                      <svg width="16" height="16" viewBox="0 0 15 15" xmlns="external452e452e452e452e.html?link=http://www.w3.org/2000/svg">
                        <g fill="#fff" fill-rule="evenodd">
                            <path d="m5.189 13.04c0 .996-.791 1.804-1.767 1.804-.976 0-1.767-.808-1.767-1.804 0-.996.791-1.804 1.767-1.804.976 0 1.767.808 1.767 1.804"></path>
                            <path d="m14.912 2.259h-14.298l2.247 6.917c.042.129.16.216.293.216h8.06c-.064.69-.629 1.841-1.702 1.841h-6.04l1.072 1.991h5.611c1.881 0 2.938-2.278 3.657-4.719.888-3.01 1.219-6.245 1.106-6.245"></path>
                            <path d="m.615 2.259l-.592-1.828c-.08-.207.069-.431.287-.431h1.482c.126 0 .24.079.287.198l.682 2.061c0 0-.63 1.642-1.942.066"></path>
                            <path d="m2.262.756c0 0 .498 1.503 2.234 1.503l-1.736.749-1.104-.749.607-1.503"></path>
                            <path d="m13.424 13.325c0 .837-.664 1.516-1.484 1.516-.82 0-1.484-.679-1.484-1.516 0-.837.664-1.516 1.484-1.516.82 0 1.484.679 1.484 1.516"></path>
                        </g>
                      </svg>                
                    </div>
                    </a>
                  </div>
                  <div>
                    <div class="_3QNhdh" id="guidSearch">
                      <div class="ORogdv">
                        <div class="_1k9EoO">
                          <div class="_2d36Hu">
                            <a href="#/mobile.html#search" class="search-div">
                              <input type="" class="_1eMB9R" placeholder="Search for Products" value="">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <img class="ctg_mf_if" src="<?php echo base_url(); ?>/assets/images/main_slf.png" style="width:100%">
              <img class="ctg_bg_nd" src="<?php echo base_url(); ?>/assets/images/add.jpg" style="width:100%"> -->
              <!-- <div class=" row"> 
                <div classs="col">
                    <div class="text-center">
                        <img src="<?php echo base_url(); ?>/assets/images/add.jpg" alt="" class="">
                    </div>
                </div>
              </div> -->
              
              <div class="swiper top-silder bg-white">
                <div class="swiper-wrapper">
                  <?php foreach($images as $image){
                    ?>
                    <div class="swiper-slide">
                      <div class="p-3 show_product" id="<?php echo $image['id']; ?>" style="display:inline-block;text-align:center;">
                        <a href="<?php echo base_url('category-products/').$image['id']; ?>">
                          <img src="<?php echo base_url().'/'.$image['image']; ?>" alt="" class="swiper-image mb-2 object-fit-contain">
                          <p class="mb-0 fs-5"><?php echo $image['name']; ?></p>
                        </a>
                      </div> 
                  </div>
                  <?php } ?>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
              </div>
              <div class="_3lqN6b">
                <div class="WhKF32">
                  <div class="IF3BzC">
                    <div class="_1fhgRH">
                      <div class="container-fluid main-slider">
                        <div class="row">
                          <div class="col-sm-12 p-0">
                            <div id="carouselExampleIndicators" class="carousel carousel-dark slide pointer-event" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="<?php echo base_url(); ?><?php echo $web_settings['slider1']; ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url(); ?><?php echo $web_settings['slider2']; ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="<?php echo base_url(); ?><?php echo $web_settings['slider3']; ?>" alt="third slide">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="deals-div">
                          <div class="dod-div1">
                              <div class="dod-label"> Deals of the Day </div>
                              <div class="timer-div ms-2">
                                  <!--<img class="clock-img" src="https://shaniya-fashion.shop/assets/images/theme/ic_clock.svg">-->
                                  <div id="test">5:3</div>
                              </div>
                          </div>
                          <div class="sale-is-live-div">
                              <button class="btn-sale-is-live">
                                  SALE IS LIVE
                                  <svg height="20" width="20" class="blinking">
                                      <circle cx="13" cy="9" r="6" fill="red"></circle>
                                  </svg> 
                              </button>
                          </div>
                      </div>
                      <div class="_1QM2o6 _1isCBQ" >
                        <table class="-LqSIK _3xlpeR">
                          <tbody id="home_page_product">
                          <?php $index=0; foreach($product_list as $product){
                            $index++; ?>
                            <tr>
                              <td class="Cs7ycL TcKeCe">
                                <a href="<?php echo base_url('single-products/').$product[0]['id']; ?>">
                                  <div class="_2enssu">
                                    <div style="position:relative;min-height:110px;min-width:110px">
                                      <div class="_3LXIRu">
                                        <div class="_2GaeWJ" style="width:110px;height:110px">
                                          <img class="_2puWtW _3a3qyb" src="<?php echo base_url($product[0]['image']); ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="_24B_AU _3SexMn"><?php echo $product[0]['product_name']; ?></div>
                                    <span class="a-size-mini a-color-secondary"  style="line-height: 25px;" >100+ bought in past month</span>
                                    <div class="grt_jfhfj">Great Indian Festival</div>
                                    <div class="home-product-details home-product-price-div">
                                      (<?php echo $product[0]['off_per']; ?>% Off)
                                      <span class="mrp">₹<?php echo $product[0]['price']; ?></span>
                                    </div>
                                    <div class="_24B_AU _1AQnZC">
                                      <b class="selling-price">₹<?php echo $product[0]['cancle_price']; ?> </b>
                                      <img src="<?php echo base_url(); ?>upload/logo/assured.png" width="60px">
                                    </div>
                                    <div class="_24B_AU _1AQnZC as_gdf">
                                      
                                    </div>
                                    <?php if($index==1||$index==2){
                                        ?><div class="ofr_text code">Only <?php echo(rand(2,7));?> Left in stock</div><?php
                                    }else{
                                        
                                        ?><div class="ofr_text code">In stock</div><?php } ?>
                                        <div class="ratingss"><p class="rand_rating"><?php echo $rating = number_format((float)rand(35, 50) / 10, 1); ?> ★</p><span class="_2_R_DZ">(<?php echo(rand(2000,7000));?>)</span></div>
                                        <!--<div class="_3Nxu4r delivery-txt">Limited time deal</div>-->
                                <!--<a href="<?php echo base_url('single-products/').$product[0]['id']; ?>" class="btn btn-primary" style="-->
                                <!--                background: #fb641b;-->
                                <!--                border: navajowhite;-->
                                <!--                margin-top: 10px;-->
                                <!--                width: 125px;-->
                                <!--                padding: 7px;-->
                                <!--                font-size: 13px;-->
                                <!--            ">Buy Now</a>-->
                                    <div class="_3Nxu4r delivery-txt">Free Delivery in Two Days</div>
                                  </div>
                                </a>
                              </td>
                              <?php if($product[1] != ""){ ?>
                              <td class="Cs7ycL TcKeCe">
                                <a href="<?php echo base_url('single-products/').$product[1]['id']; ?>">
                                  <div class="_2enssu">
                                    <div style="position:relative;min-height:110px;min-width:110px">
                                      <div class="_3LXIRu">
                                        <div class="_2GaeWJ" style="width:110px;height:110px">
                                          <img class="_2puWtW _3a3qyb" src="<?php echo base_url($product[1]['image']); ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="_24B_AU _3SexMn"><?php echo $product[1]['product_name']; ?></div>
                                    <span class="a-size-mini a-color-secondary"  style="line-height: 25px;" >100+ bought in past month</span>
                                    <div class="grt_jfhfj">Great Indian Festival</div>


                                    <div class="home-product-details home-product-price-div">
                                      (<?php echo $product[1]['off_per']; ?>% Off)
                                      <span class="mrp">₹<?php echo $product[1]['price']; ?></span>
                                    </div>
                                    <div class="_24B_AU _1AQnZC">
                                      <b class="selling-price">₹<?php echo $product[1]['cancle_price']; ?> </b>
                                      <img src="<?php echo base_url(); ?>upload/logo/assured.png" width="60px">
                                    </div>


                                    <?php if($index==1||$index==2){
                                        ?><div class="ofr_text code">Only <?php echo(rand(2,7));?> Left in stock</div><?php
                                    }else{
                                        
                                        ?><div class="ofr_text code">In stock</div><?php
                                    }
                                    ?>
                                    <div class="ratingss"><p class="rand_rating"><?php echo $rating = number_format((float)rand(35, 50) / 10, 1); ?> ★</p> <span class="_2_R_DZ">(<?php echo(rand(2000,7000));?>)</span></div>
                                    <!--<div class="_3Nxu4r delivery-txt">Limited time deal</div>-->
                                            <!--<a href="<?php echo base_url('single-products/').$product[1]['id']; ?> " class="btn btn-primary" style="-->
                                            <!--    background: #fb641b;-->
                                            <!--    border: navajowhite;-->
                                            <!--    margin-top: 10px;-->
                                            <!--    width: 125px;-->
                                            <!--    padding: 7px;-->
                                            <!--    font-size: 13px;-->
                                            <!--">Buy Now</a>-->
                                    <!--<div class="ofr_text code">BUY 1 GET 1 FREE</div>-->
                                    <div class="_3Nxu4r delivery-txt">Free Delivery in Two Days</div>
                                  </div>
                                </a>
                              </td>
                              <?php } ?>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        <?php include('footer.php'); ?>
                        <div class="shadow"></div>
                         <div class="sidebar">
                            <div class="sidebar_fix_width">
                                <div class="sidebar_menu">
                                    <img src="<?php echo base_url(); ?><?php echo $web_settings['logo']; ?>" width="75px">
                                </div>
                                <div class="sidebar_body">
                                    <div class="sidebar-list">
                                        <li><a href="<?php echo base_url() ?>"><img src="<?php echo base_url(); ?>upload/logo/order.png" width="18px" style="margin-right:10px"> My Orders</a></li>
                                        <hr>
                                        <li><a href="<?php echo base_url('about/') ?>"> About Us</a></li>
                                        <li><a href="<?php echo base_url('terms/') ?>"> Terms & Conditions</a></li>
                                        <li><a href="<?php echo base_url('policy/') ?>"> Privacy Policy</a></li>
                                        <li><a href="<?php echo base_url('refund/') ?>"> Refund Policy</a></li>
                                        <li><a href="<?php echo base_url('contact/') ?>"> Contact Us</a></li>
                                    </div>
                                </div>
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><script type="text/javascript">
        </script>
        <script type="text/javascript">
    var random_add_price = localStorage.getItem("add_price");
    if(random_add_price == null || random_add_price == "")
    {
        random_add_price = '29';
        localStorage.setItem("add_price", random_add_price);
    }
    setInterval(function() {
        var d = new Date();
        var seconds = d.getMinutes() * 60 + d.getSeconds(); //convet 00:00 to seconds for easier caculation
        var fiveMin = 60 * 20; //five minutes is 300 seconds!
        var timeleft = fiveMin - seconds % fiveMin; // let's say 01:30, then current seconds is 90, 90%300 = 90, then 300-90 = 210. That's the time left!
        var result = parseInt(timeleft / 60) + ':' + timeleft % 60; //formart seconds into 00:00 
        document.getElementById('test').innerHTML = result;

    }, 500) //calling it every 0.5 second to do a count down
</script>
      </div>
     
      <footer class="seofooter" id="seofooter">
       
      </footer>

      
    </div>
    <script defer="" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script defer="" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer="" src="<?php echo base_url(); ?>/assets/js/relativeTime.js"></script>
    <script defer="" src="<?php echo base_url(); ?>/assets/js/days.min.js"></script>
    <script defer="" src="<?php echo base_url(); ?>/assets/js/manage_index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    var swiper = new Swiper(".top-silder", {
      slidesPerView: 2,
      spaceBetween: 20,
      
      breakpoints: {
        345: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 8,
          spaceBetween: 20,
        },
      },
    });
    // $(document).ready(function(){
    // $('.show_product').click(function(){
    //   var productId = $(this).attr('id');
    //   console.log(productId);
    //     $.ajax({
    //         url: '<?php echo base_url('home/get-data'); ?>', 
    //         type: 'GET', 
    //         data: { id: productId },
    //         dataType: 'json',
    //         success: function(response){
    //           console.log(response);
    //             var html = ''; // Initialize an empty string
    //             for (var i = 0; i < response.length; i += 2) {
    //                 // Generate HTML for two products at a time
    //                 html += '<tr>';
    //                 for (var j = i; j < Math.min(i + 2, response.length); j++) {
    //                     var product = response[j];
    //                     html += '<td class="Cs7ycL TcKeCe">' +
    //                                 '<a href="<?php echo base_url('single-products/'); ?>' + product['id'] + '">' +
    //                                     '<div class="_2enssu">' +
    //                                         '<div style="position:relative;min-height:110px;min-width:110px">' +
    //                                             '<div class="_3LXIRu">' +
    //                                                 '<div class="_2GaeWJ" style="width:110px;height:110px">' +
    //                                                     '<img class="_2puWtW _3a3qyb" src="<?php echo base_url(); ?>/' + product['image'] + '">' +
    //                                                 '</div>' +
    //                                             '</div>' +
    //                                         '</div>' +
    //                                         '<div class="_24B_AU _3SexMn">' + product['product_name'] + '</div>' +
    //                                         '<span class="a-size-mini a-color-secondary" style="line-height: 25px;">100+ bought in past month</span>' +
    //                                         '<div class="grt_jfhfj">Great Indian Festival</div>' +
    //                                         '<div class="home-product-details home-product-price-div">' +
    //                                             '(' + product['off_per'] + '% Off)' +
    //                                             '<span class="mrp">₹' + product['cancle_price'] + '</span>' +
    //                                         '</div>' +
    //                                         '<div class="_24B_AU _1AQnZC">' +
    //                                             '<b class="selling-price">₹' + product['price'] + '</b>' +
    //                                             '<img src="<?php echo base_url(); ?>/img/fassure.png" width="60px">' +
    //                                         '</div>' +
    //                                         '<div class="_24B_AU _1AQnZC as_gdf"></div>' +
    //                                         '<div class="ofr_text code">In stock</div>' +
    //                                         '<div class="_3Nxu4r delivery-txt">Free Delivery in Two Days</div>' +
    //                                     '</div>' +
    //                                 '</a>' +
    //                             '</td>';
    //                 }
    //                 html += '</tr>';
    //             }


    //             $('#home_page_product').empty();
    //             $('#home_page_product').html(html);
    //         },
    //         error: function(xhr, status, error){
    //             console.error(error); 
    //         }
    //     });
    // });
    // });
  </script>
  </body>
</html>