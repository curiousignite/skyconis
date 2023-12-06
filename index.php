<?php
include 'send.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--<link rel="icon" href="images/SkyConisLogo.png" type="image/x-icon" />-->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Loading Header&Footer -->
    <script src="//code.jquery.com/jquery-3.6.3.js"></script>
    <script> 
     
      
      </script> 
    <title>Skycon</title>
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="icons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    

    <!--revolution slider setting css-->
    <link href="rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="80">
      

      
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top before-color">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navbar"
            aria-controls="navbar"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img
            class="logo"
            src="images/SkyConisLogo.png"
            style="max-width: 50px; margin-top: 5px"
            alt="skycon_logo"
          />
          <a class="navbar-brand alo" href="index.php#home">Skycon</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right scroll-to">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="references.html">References</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>

    <div class="fullwidthbanner" id="home">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE 1 -->
          <li
            data-transition="fade"
            data-slotamount="7"
            data-masterspeed="1500"
          >
            <!-- MAIN IMAGE -->
            <img
              src="images/bg-1.jpg"
              alt="desk"
              data-bgfit="cover"
              data-bgposition="left top"
              data-bgrepeat="no-repeat"
            />
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div
              class="tp-caption slider-title"
              data-x="center"
              data-y="center"
              data-voffset="-30"
              data-speed="500"
              data-start="1200"
              data-easing="Power4.easeInOut"
            >
              Welcome to <span>Skycon</span>
            </div>
            <!-- /tp-caption -->
            <!-- LAYER NR. 2 -->
            <div
              class="tp-caption slider-caption"
              data-x="center"
              data-y="center"
              data-voffset="40"
              data-speed="500"
              data-start="1800"
              data-easing="Power4.easeInOut"
              data-captionhidden="on"
            >
              We will give you the best business solutions and optimize your
              system or your SAP projects.
            </div>
            <!-- /tp-caption -->

            <!-- LAYER NR. 3 -->
            <div
              class="tp-caption slider-button scroll-to"
              data-x="center"
              data-y="center"
              data-voffset="120"
              data-speed="500"
              data-start="2400"
              data-easing="Power4.easeInOut"
              data-captionhidden="on"
            >
              <a class="btn btn-white" href="#about">See more</a>
            </div>
            <!-- /tp-caption -->
          </li>
          <!-- SLIDE 2 -->
          <li
            data-transition="fade"
            data-slotamount="7"
            data-masterspeed="1500"
          >
            <!-- MAIN IMAGE -->
            <img
              src="images/bg-3.jpg"
              alt="desk"
              data-bgfit="cover"
              data-bgposition="left top"
              data-bgrepeat="no-repeat"
            />

            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div
              class="tp-caption slider-title"
              data-x="center"
              data-y="center"
              data-voffset="-30"
              data-speed="500"
              data-start="1200"
              data-easing="Power4.easeInOut"
            >
              Welcome to <span>Skycon</span>
            </div>
            <!-- /tp-caption -->

            <!-- LAYER NR. 2 -->
            <div
              class="tp-caption slider-caption"
              data-x="center"
              data-y="center"
              data-voffset="40"
              data-speed="500"
              data-start="1800"
              data-easing="Power4.easeInOut"
              data-captionhidden="on"
            >
              We will give you the best business solutions and optimize your
              system or your SAP projects.
            </div>
            <!-- /tp-caption -->

            <!-- LAYER NR. 3 -->
            <div
              class="tp-caption slider-button scroll-to"
              data-x="center"
              data-y="center"
              data-voffset="120"
              data-speed="500"
              data-start="2400"
              data-easing="Power4.easeInOut"
              data-captionhidden="on"
            >
              <a class="btn btn-white" href="#about">See more</a>
            </div>
            <!-- /tp-caption -->
          </li>
          <!-- SLIDE 3 -->
        </ul>
      </div>
    </div>
    <!--full width banner-->

    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <div class="section-title">
              
                
                <h1>About <span class="colored-text">Us</span></h1>
              
            </div>
          </div>
        </div>
        <!-- title row end-->

        <div class="row">
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap clearfix">
              <div class="left-side-icon">
                <i class="ion-ios-lightbulb-outline front-icon"></i>
                <i class="ion-ios-lightbulb-outline back-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Process Consulting</h3>
                <p>
                  At Skycon, we are not just IT experts, we are also business
                  experts. Although SAP ERP solutions are seems as IT
                  implementations, they are so much more than that.
                </p>
              </div>
            </div>
            <!--features icon wrap-->
          </div>
          <!--features col-->
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap clearfix">
              <div class="left-side-icon">
                <i class="ion-ios-gear-outline front-icon"></i>
                <i class="ion-ios-gear-outline back-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>End to End SAP implementation</h3>
                <p>
                  According to Gartner, 75% of all ERP projects fail. Whether
                  your organization is new to Enterprise Resource Management
                  (ERP) or you're a seasoned user of SAP Technologies, our team
                  is ready to be your full service partner.
                </p>
              </div>
            </div>
            <!--features icon wrap-->
          </div>
          <!--features col-->
        </div>
        <!--row-->
        <div class="row">
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap clearfix">
              <div class="left-side-icon">
                <i class="ion-iphone front-icon"></i>
                <i class="ion-iphone back-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Project Management</h3>
                <p>
                  Project Methodologies are implementation and development
                  guidelines for ERP and non-ERP Projects. SAP have its own
                  methodologies including ASAP, SAP Activate, Scrum and Agile
                  development.
                </p>
              </div>
            </div>
            <!--features icon wrap-->
          </div>
          <!--features col-->
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap clearfix">
              <div class="left-side-icon">
                <i class="ion-link front-icon"></i>
                <i class="ion-link back-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Supply Chain Management</h3>
                <p>
                  Supply Chain Management is the process of managing and
                  streamlining the entire flow of materials and activities for
                  an organization, from the supplier side to the customer side.
                </p>
              </div>
            </div>
            <!--features icon wrap-->
          </div>
          <!--features col-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </section>
    <!--about section end-->

    <div class="funfacts parallax-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 margin-bottom30 text-center">
            <div class="fact-box">
              <h2>90</h2>
              <h5>Happy Clients</h5>
              <span class="border-line"></span>
            </div>
          </div>
          <!--fact cols-->
          <div class="col-sm-3 margin-bottom30 text-center">
            <div class="fact-box">
              <h2>116</h2>
              <h5>Projects finish</h5>
              <span class="border-line"></span>
            </div>
          </div>
          <!--fact cols-->
          <div class="col-sm-3 margin-bottom30 text-center">
            <div class="fact-box">
              <h2>25</h2>
              <h5>Countries</h5>
              <span class="border-line"></span>
            </div>
          </div>
          <!--fact cols-->
          <div class="col-sm-3 margin-bottom30 text-center">
            <div class="fact-box">
              <h2>20+</h2>
              <h5>Consultants</h5>
              <span class="border-line"></span>
            </div>
          </div>
          <!--fact cols-->
        </div>
      </div>
    </div>
    <!-- SLIDER-START -->
    <section id="team" class="section-padding">

      <div class="team">
        <div class="row2">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="section-title text-center">
              <h1>Skycon <span class="colored-text">Team</span></h1>
              <span class="border-line"></span>
              <p class="lead subtitle-caption">
               
              </p>
            </div>
          </div>
        </div>

        <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="images/team/deniz.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/deniz-g%C3%BCne%C5%9F-87416b36/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Deniz GÜNEŞ</h2>

                <p class="description">
                  Founder
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/emre.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/emre-bereketli/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="card-content">
                <h2 class="name">Emre BEREKETLİ</h2>
                <p class="description">
                  SAP MM/SRM Consultant
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                
                <div class="card-image">
                  <img src="images/team/egemen.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/egemen-kayalar-a5a66511a/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Egemen KAYALAR</h2>
                <p class="description">
                  SAP MM/SRM/MDG Consultant
                </p>
              </div>
            </div>
            

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/ege.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/ege-g%C3%BCne%C5%9F-755b67164/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Ege GÜNEŞ</h2>
                <p class="description">
                  SAP ABAP/Fiori Lead Developer
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/dilsah.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/dil%C5%9Fah-razbonyal%C4%B1-b94752201/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Dilşah RAZBONYALI</h2>
                <p class="description">
                  Finance & Accounting Manager
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/emrecan.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/emrecan-koc/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Emrecan KOÇ</h2>
                <p class="description">
                  SAP MM/WM Consultant
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/yanki.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/yank%C4%B1-o%C4%9Fuz-6a54831a4/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
                
              <div class="card-content">
                <h2 class="name">Yankı OĞUZ</h2>
                <p class="description">
                  SAP ABAP/Fiori Developer
                </p>
              </div>
            </div>
            <!--<div class="card swiper-slide">-->
            <!--  <div class="image-content">-->
            <!--    <span class="overlay"></span>-->

            <!--    <div class="card-image">-->
            <!--      <img src="images/team/bengisu.jpg" alt="" class="card-img" />-->
            <!--      <ul class="linkedin list-inline">-->
            <!--        <li>-->
            <!--          <a target="_blank" href="https://www.linkedin.com/in/ege-bengisu-efe/"-->
            <!--            ><i class="icon icon-social-linkedin"></i-->
            <!--          ></a>-->
            <!--        </li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="card-content">-->
            <!--    <h2 class="name">Ege Bengisu EFE</h2>-->
            <!--    <p class="description">-->
            <!--      SAP MM/SRM Consultant-->
            <!--    </p>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                
                <div class="card-image">
                  <img src="images/team/kaan.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/kaan-%C3%A7eliko%C4%9Flu-741749122/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Kaan ÇELİKOĞLU</h2>
                <p class="description">
                  SAP MM/SRM Consultant
                </p>
              </div>
            </div>





            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/yigitcan.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/yi%C4%9Fitcan-g%C3%BCne%C5%9F-5a3935222/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Yiğitcan GÜNEŞ</h2>
                <p class="description">
                  SAP MM Consultant
                </p>
              </div>
            </div>



            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/emel.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/emelyazici/"
                        ><i class="icon icon-social-linkedin"></i
                          ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Emel YAZICI</h2>
                <p class="description">
                  SAP MM/WM Consultant
                </p>
              </div>
            </div>


            <!--<div class="card swiper-slide">-->
            <!--  <div class="image-content">-->
            <!--    <span class="overlay"></span>-->

            <!--    <div class="card-image">-->
            <!--      <img src="images/team/erim.jpg" alt="" class="card-img" />-->
            <!--      <ul class="linkedin list-inline">-->
            <!--        <li>-->
            <!--          <a target="_blank" href="https://www.linkedin.com/in/erimdabak/"-->
            <!--            ><i class="icon icon-social-linkedin"></i-->
            <!--          ></a>-->
            <!--        </li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="card-content">-->
            <!--    <h2 class="name">Erim DABAK</h2>-->
            <!--    <p class="description">-->
            <!--      SAP MM/WM Consultant-->
            <!--    </p>-->
            <!--  </div>-->
            <!--</div>-->


            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/elif.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/elif-g%C3%B6z%C3%BCdeli-08665a197/"
                      ><i class="icon icon-social-linkedin"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
              </div>

              <div class="card-content">
                <h2 class="name">Elif GÖZÜDELİ</h2>
                <p class="description">
                  SAP MM/SD Consultant
                </p>
              </div>
            </div>

          

            
            
            
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                
                <div class="card-image">
                  <img src="images/team/berke.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/berke-erbagci/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Berke ERBAĞCI</h2>
                <p class="description">
                 SAP ABAP/Fiori Developer
                </p>
              </div>
            </div>
            
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="images/team/gorkem.jpg" alt="" class="card-img" style="height: 330px;" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://tr.linkedin.com/in/sefagorkemkececi"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Görkem KEÇECİ</h2>
                <p class="description">
                 SAP ABAP/Fiori Developer
                </p>
              </div>
            </div>
            
            
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/serhan.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/serhan-karpuz-8112601b2/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Serhan KARPUZ</h2>
                <p class="description">
                  SAP MM Consultant
                </p>
              </div>
            </div>
            <!------------->
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="images/team/isil.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/isilsaygin/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Işıl SAYGIN</h2>
                <p class="description">
                  SAP MM Consultant
                </p>
              </div>
            </div>
            <!------------>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="images/team/sadik.jpg" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/in/sad%C4%B1k-sa%C4%9Flam-b43149161/"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Sadık SAĞLAM</h2>
                <p class="description">
                  SAP MM/SRM Consultant
                </p>
              </div>
            </div>
              <!------------>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="images/team/arif.jpg" alt="" class="card-img" />
                    <ul class="linkedin list-inline">
                      <li>
                        <a target="_blank" href="https://www.linkedin.com/in/arif-%C3%A7akmak-a814a31b1/"
                          ><i class="icon icon-social-linkedin"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Arif ÇAKMAK</h2>
                  <p class="description">
                    SAP WM Consultant
                  </p>
                </div>
              </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/team/nina.png" alt="" class="card-img" />
                  <ul class="linkedin list-inline">
                    <li>
                      <a href="https://www.linkedin.com/company/skyconis"
                        ><i class="icon icon-social-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Nina</h2>
                <p class="description">
                  Cat Food Expert
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
    <!-- SLIDER-END -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <div class="section-title">
              <h1>Our <span class="colored-text">Services</span></h1>
              <span class="border-line"></span>
              <p class="lead subtitle-caption">
                Why you choose <span class="colored-text">Skycon</span>
              </p>
            </div>
          </div>
        </div>
        <!-- title row end-->
        <div class="row">
                <div class="col-sm-6 margin-bottom30">
                  <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                      <i class="ion-ios-people-outline front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Supplier Relationship Management</h3>
                <p>
             SAP Supplier Relationship Management (SRM) is the discipline of strategically planning for, and managing, all interactions with third party organizations that supply goods and/or services to an organization to maximize the value of those interactions.  
              </p>
              </div>
            </div>
          </div>
          <!--services col-->
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-ios-browsers-outline front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Materials Management</h3>
                <p>
              SAP Materials Management (MM) is a module of the SAP ERP software that is used for Procurement Handling and Inventory Management. SAP Materials management covers all tasks within the supply chain, including consumption-based planning, planning, vendor evaluation and invoice verification.  
              </p>
              </div>
            </div>
          </div>
          <!--services col-->
        </div>
        <!--services row-->
        <div class="row">
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-document front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Contract Life-Cycle Management</h3>
                <p>
              SAP Sourcing CLM is a platform that authorizes and standardizes the source-to-contract processes. It simplifies sourcing and procurement processes, facilitates compliance with negotiated terms, streamlines processes for greater efficiency, and increases the competitive advantage of its users.  
              </p>
              </div>
            </div>
          </div>
          <!--services col-->
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-ios-paperplane-outline front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Logistic Execution</h3>
                <p>
                The Logistics Execution System (LES), a major component of the supply chain management (SCM) application from SAP, allows an administrator to manage the information and processes involved in all stages of the supply chain, from procuring raw materials to distributing finished products.
              </p>
              </div>
            </div>
          </div>
          <!--services col-->
        </div>
        <!--services row-->
        <div class="row">
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-ios-crop front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Warehouse Management</h3>
                <p>
              The SAP Warehouse Management system (WMS) provides flexible, automated support in processing all goods movements and in managing stocks in your warehouse complex. The system supports scheduled and efficient processing of all logistics processes within your warehouse.  
              </p>
              </div>
            </div>
          </div>
          <!--services col-->
          <div class="col-sm-6 margin-bottom30">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-earth front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>Supplier Portal</h3>
                <p>
                  Supplier Portal is a solution that reduces the costs of
                  procurement cycles by improving the exchange of business
                  documents and shortening the time it takes to process the
                  content of these documents. While purchasers use familiar
                  methods to order goods and services, Supplier Portal
                  integrates suppliers into the procurement process to a much
                  larger extent.
                </p>
              </div>
            </div>
          </div>
          <!--services col-->
        </div>
        <div class="row">
          <div class="col-sm-6 margin-bottom30" style="width:100% !important">
            <div class="feature-icon-wrap services-icons clearfix">
              <div class="left-side-icon">
                <i class="ion-earth front-icon"></i>
              </div>
              <div class="features-text-right">
                <h3>E-SOURCING</h3>
                <p>
              E-Sourcing is a software from SKYCON that reduces the costs of procurement cycles by improving the exchange of business documents and shortening the time it takes to process the content of these documents. While purchasers use familiar methods to order goods and services, E-Sourcing integrates suppliers into the procurement process to a much larger extent. Supplier Collaboration is a strategic approach used by companies to increase efficiency, reduce costs, and improve services. 
          <br><br>E-Sourcing software have modules for Supplier Relationship Management, Supplier Lifecycle Management, Contract Lifecycle Management.
  
              </p>
              </div>
            </div>
          </div>
        </div>
        <!--services row-->
      </div>
    </section>
    <!--services section end-->
    <!-- <div class="testimonials parallax-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <div class="flexslider testislider">
              <ul class="slides">
                <li>
                  <div class="slide-items">
                    <img src="images/team-1.jpg" alt="" />
                    <p>
                      Vivamus congue diam vitae tortor imperdiet congue. Nullam
                      sagittis, tristique diam, ut ullamcorper tellus.
                    </p>
                    <h5>Maria Navratilova - Codeflicks inc.</h5>
                  </div>
                </li>
                <li>
                  <div class="slide-items">
                    <img src="images/team-2.jpg" alt="" />
                    <p>
                      Vivamus congue diam vitae tortor imperdiet congue. Nullam
                      sagittis, tristique diam, ut ullamcorper tellus.
                    </p>
                    <h5>Maria Navratilova - Codeflicks inc.</h5>
                  </div>
                </li>
                <li>
                  <div class="slide-items">
                    <img src="images/team-3.jpg" alt="" />
                    <p>
                      Vivamus congue diam vitae tortor imperdiet congue. Nullam
                      sagittis, tristique diam, ut ullamcorper tellus.
                    </p>
                    <h5>Maria Navratilova - Codeflicks inc.</h5>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta cta-bg">
      <div class="container text-center scroll-to">
        <h1>WE'VE GOT PLENTY MORE TO SAY</h1>
        <a href="#contact" class="btn btn-white btn-radius btn-lg"
          >Let's talk</a
        >
      </div>
    </div> -->
    <!--call to action-->

    <!--work section end-->

    <section id="news" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="section-title text-center">
              <h1><span class="alo">Skycon</span> <span class="colored-text">News</span></h1>
              <span class="border-line"></span>
              <p class="lead subtitle-caption">
                
              </p>
            </div>
          </div>
        </div>
        <!--heading row-->
      </div>
      <!--container-->

      <div class="news-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 text-center no-padding">
            <a
              class="news-inner"
              href="#"
              style="
                background: url(images/bg-1.jpg) no-repeat;
                background-size: cover;
              "
            >
              <div class="post-overlay"></div>
              <div class="post-preview-content">
                <h4 class="date">1 January, 2023</h4>
                <h2 class="title">Sendeo A.Ş. Standard Procurement Project</h2>
                <span class="border-line"></span>
                <p class="author">Skycon</p>
              </div>
            </a>
          </div>
          <!--news col-->
          <div class="col-sm-6 text-center no-padding">
            <a
              class="news-inner"
              href="#"
              style="
                background: url(images/bg-2.jpg) no-repeat;
                background-size: cover;
              "
            >
              <div class="post-overlay"></div>
              <div class="post-preview-content">
                <h4 class="date">1 January, 2023</h4>
                <h2 class="title">Umur Kırtasiye San. ve Tic. A.Ş Merging Project</h2>
                <span class="border-line"></span>
                <p class="author">Skycon</p>
              </div>
            </a>
          </div>
          <!--news col-->
          <div class="col-sm-6 text-center no-padding">
            <a
              class="news-inner"
              href="#"
              style="
                background: url(images/bg-3.jpg) no-repeat;
                background-size: cover;
              "
            >
              <div class="post-overlay"></div>
              <div class="post-preview-content">
                <h4 class="date">1 September, 2023</h4>
                <h2 class="title">Tofaş Türk Otomobil Fabrikası A.Ş. S/4 HANA Transition </h2>
                <span class="border-line"></span>
                <p class="author">Skycon</p>
              </div>
            </a>
          </div>
          <!--news col-->
          <div class="col-sm-6 text-center no-padding">
            <a
              class="news-inner"
              href="#"
              style="
                background: url(images/bg-1.jpg) no-repeat;
                background-size: cover;
              "
            >
              <div class="post-overlay"></div>
              <div class="post-preview-content">
                <h4 class="date">1 January, 2023</h4>
                <h2 class="title">Aygaz A.Ş. Material Warehouse Hand Terminal Project</h2>
                <span class="border-line"></span>
                <p class="author">Skycon</p>
              </div>
            </a>
          </div>
          <!--news col-->
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
    <!--news section end-->

    <!--call to action-->

    <section id="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="row contact-details">
              <div class="col-sm-4 margin-bottom30 text-center">
                <a
                  class="ion-ios-location-outline"
                  href="https://goo.gl/maps/XsCrUXvULjVzRPPj8"
                  style="font-size: 50px; color: #fff"
                  target="_blank"
                ></a>
                <h4>
                  <a
                    href="https://goo.gl/maps/XsCrUXvULjVzRPPj8"
                    style="color: aliceblue"
                    target="_blank"
                    >Kadıköy, İstanbul</a
                  >
                </h4>
              </div>
              <div class="col-sm-4 margin-bottom30 text-center">
                <a
                  class="ion-ios-email-outline"
                  href="mailto: info@skyconis.com"
                  style="font-size: 50px; color: #fff"
                  target="_blank"
                ></a>
                <h4>
                  <a
                    href="mailto: info@skyconis.com"
                    style="color: aliceblue"
                    target="_blank"
                    >info@skyconis.com</a
                  >
                </h4>
              </div>
              <div class="col-sm-4 margin-bottom30 text-center">
                <a
                  class="ion-ios-telephone-outline"
                  href="tel:+90-533-240-91-49"
                  style="font-size: 50px; color: #fff"
                  target="_blank"
                ></a>
                <h4>
                  <a
                    href="tel:+90533-240-91-49"
                    style="color: aliceblue"
                    target="_blank"
                    >+90-533-240-91-49</a
                  >
                </h4>
              </div>
            </div>
            <!--contact details-->
          </div>
        </div>
        <div class="row" style="margin-left: -15px; margin-right: -15px">
          <div class="col-sm-6 col-sm-offset-3">
            
            
            
                
            
            
            
          </div>
        </div>
      </div>
    </section>
    <!--contact section end-->
    <div id="footer"></div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/moderniz.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <!-- bootstrap js-->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <!--revolution slider scripts-->
    <script
      src="rs-plugin/js/jquery.themepunch.tools.min.js"
      type="text/javascript"
    ></script>
    <script
      src="rs-plugin/js/jquery.themepunch.revolution.min.js"
      type="text/javascript"
    ></script>
    <script src="js/template.js" type="text/javascript"></script>
  </body>
</html>
