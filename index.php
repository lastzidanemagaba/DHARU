<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>HOME</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Mohave:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich"/>
      <style>
         body {
         background-color: #000;
         }
         /* NAVBAR */
         .navbar-nav .nav-link {
         color: white;
         }
         .navbar {
         background-color: rgba(62, 39, 35, 0.2) !important;
         backdrop-filter: blur(5px);
         width:100%;
         -webkit-transform: translate(0%, 0%);
         transform: translate(0%, 0%);
         }
         .navbar a {
         color: #f6f4e6;
         font-size: 1.2em;
         text-transform: uppercase;
         display: inline-block;
         -webkit-transition: all 0.2s ease-in-out;
         transition: all 0.2s ease-in-out;
         }
         .navbar a:hover {
         color: #ff0000;
         }
         .navbar-icon{
         color: rgb(255, 255, 255);
         font-family: 'Bebas Neue';
         font-weight: 400;
         }
         .carousel {
         margin: 30px 0;
         background: #00000000;
         position: flex;
         box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
         }
         .carousel:after {
         content: "";
         position: absolute;
         z-index: -1;
         box-shadow: 0 0 20px rgba(0,0,0,0.8);
         height: 60px;
         bottom: 0px;
         left: 10px;
         right: 10px;
         border-radius: 100px / 20px;
         }
         .carousel .item {
         text-align: center;
         overflow: hidden;
         height: 475px;
         }
         
         .carousel .item img {
         max-width: 100%;
         margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
         }
         .carousel .carousel-control {
         width: 50px;
         height: 50px;
         background: #000;
         margin: auto 0;
         opacity: 0.8;
         }
         .carousel .carousel-control:hover {
         opacity: 0.9;
         }
         .carousel .carousel-control i {
         font-size: 41px;
         }
         .carousel-caption h3, .carousel-caption p {
         color: #fff;
         display: inline-block;
         font-family: 'Oswald', sans-serif;
         text-shadow: none;
         margin-bottom: 0px;
         }
         .carousel-caption h3 {
         background: rgba(0,0,0,0.9);
         padding: 12px 24px;
         font-size: 40px;	
         text-transform: uppercase;
         }
         .carousel-caption p {
         background:none;
         padding: 10px 20px;
         font-size: 20px;
         font-weight: 300;
         margin-bottom: 30px ;
         }
         .carousel-action {
         padding: 10px 0 30px;
         }
         .carousel-action .btn {
         min-height: 34px;
         border-radius: 0;
         margin: 3px;
         min-width: 150px;
         text-transform: uppercase;
         font-family: 'Oswald', sans-serif;
         }
         .carousel-action .btn-primary {
         border-color: #ff0000;
         background: none;
         color: #ff0000;
         }
         .carousel-action .btn-primary:hover {
         background: #ff0000;
         color: #fff;
         }
         .carousel-action .btn-success {
         background: #80c93c;
         border: none;
         }
         .carousel-action .btn-success:hover {
         background: #82bd35;
         }
         .carousel-indicators li, .carousel-indicators li.active {
         width: 11px;
         height: 11px;
         border-radius: 50%;
         margin: 1px 6px;
         }
         .carousel-indicators li {
         background: transparent;    
         border: 1px solid #fff;
         }
         .carousel-indicators li.active {
         background: #c93c3c;
         border-color: #c93c3c;
         }
         .carousel-indicators {
         bottom: 0;
         }
         .container.text-center {
         padding-top: 50px; 
         }
         .container.text-center h1,
         .container.text-center h3 {
         margin-bottom: 20px; 
         text-align: left; 
         }
         .carousel-vid {
         max-width: 100%;
         margin-left: auto;
         margin-right: auto;
         margin-bottom: 20px;
         }
         .card-img-top {
         height: 100%;
         }
         .bgberita {
         background: black;
         }
         @media (max-width: 768px) {
         .mb-mobile {
         margin-bottom: 150px !important; 
         }
         }
      </style>
   </head>
   <body>
      <!-- NAVIGATION BAR -->
      <nav class="navbar navbar-expand-lg navbar-transparent font-weight:500">
         <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button
               class="navbar-toggler"
               type="button"
               data-toggle="collapse"
               data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent"
               aria-expanded="false"
               aria-label="Toggle navigation"
               >
            <span class="navbar-icon" style="letter-spacing: 2px">MENU</span>
            </button>
            <div
               style="font-family: mohave; font-size: large"
               class="collapse navbar-collapse"
               id="navbarSupportedContent"
               >
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">SERVICES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">SUPPLEMENT</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">CONTACT</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">SIGN-IN</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!--KONTEN CAOUSEL-->
      <div class="container-lg">
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://raw.githubusercontent.com/zulafiio/TugasKelompok/d8c021d765bc062198b392d58f48130999a511fc/gbr%201.jpg" class="img-fluid" alt="First Slide">
                        <div class="carousel-caption">
                           <h3>CHALLENGE YOUR BODY</h3>
                           <p>Let's Build Your Muscle With FITSOUL</p>
                           <div class="carousel-action">
                              <a href="#" class="btn btn-primary">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="https://raw.githubusercontent.com/zulafiio/TugasKelompok/d8c021d765bc062198b392d58f48130999a511fc/gbr2.jpg" class="img-fluid" alt="Tablet">
                        <div class="carousel-caption">
                           <h3>Amazing Experience</h3>
                           <div class="carousel-action">
                              <a href="#" class="btn btn-primary">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="https://raw.githubusercontent.com/zulafiio/TugasKelompok/d8c021d765bc062198b392d58f48130999a511fc/gbr3.jpg" class="img-fluid" alt="Workstation">
                        <div class="carousel-caption">
                           <h3>REDEFINING THE FITNESS EXPERIENCE</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      </div>
      <!-- KONTEN UTAMA -->
      <div class="container text-center">
         <div class="row align-items-start">
            <div class="col-md-8">
               <h1 style="color: red; text-align: left;">BUILD</h1>
               <h3 style="color: white; text-align: left;">YOUR MUSCLE</h3>
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <div class="carousel-vid">
                     <div class="carousel-item active">
                        <div class="card mb-3" style="max-width: auto; max-height: auto; background-color: black;">
                           <div class="row no-gutters">
                              <div class="col-md-5 ">
                                 <div class="card-body" style="color: white;">
                                    <h5 class="card-title">Barbell Incline</h5>
                                    <ol class="card-text" style="text-align: left;">
                                       <li>Barbell Incline Rows</li>
                                       <p>Latihan menargetkan otot latissimus dorsi (lats) Anda.</p>
                                       <li>Barbell Incline Rear Delt Rows</li>
                                       <p>Gerakan ini sangat bagus untuk mengisolasi otot deltoid belakang Anda, melatih bagian belakang bahu Anda.</p>
                                       <li>Barbell Incline Shrugs</li>
                                       <p>Memfokuskan pada otot trapezius, serta gerakan mengangkat bahu dengan barbel ke dalam rutinitas Anda.</p>
                                    </ol>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <iframe width="315" height="560" src="https://www.youtube.com/embed/rRa2DxSGe3c?autoplay=1&loop=1&playlist=rRa2DxSGe3c&mute=1" title="SaveIG App 3191719469985973679" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card mb-3" style="max-width: auto; max-height: auto; background-color: black;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body" style="color: white;">
                                    <h5 class="card-title">Squat</h5>
                                    <p class="card-text" style="text-align: left;">Squat dapat menjadi bagian fundamental yang efektif dalam mengembangkan kekuatan kaki khususnya otot bokong, paha belakang, dan paha depan.</p>
                                    <p class="card-text" style="text-align: left;">Bagi pemula, bodyweight squat bisa menjadi menu latihan awal pada leg day dengan melakukan hingga 10 repetisi.</p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <iframe width="335" height="600" src="https://www.youtube.com/embed/-HFBJWmmwWc?autoplay=1&loop=1&playlist=-HFBJWmmwWc&mute=1" title="SaveIG App 3191719469985973679" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card mb-3" style="max-width: auto; max-height: auto; background-color: black;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body" style="color: white;">
                                    <h5 class="card-title">Barbell bench press</h5>
                                    <p class="card-text" style="text-align: left;">Latihan ini biasanya dilakukan di pusat kebugaran karena Anda perlu menggunakan kursi khusus, yaitu incline bench dan barbel.</p>
                                    <p class="card-text" style="text-align: left;">Posisikan tubuh Anda telentang di atas kursi sambil memegang erat barbel pada kedua tangan.</p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <iframe width="335" height="600" src="https://www.youtube.com/embed/3T-YyhJvxX8?autoplay=1&loop=1&playlist=3T-YyhJvxX8&mute=1" title="SaveIG App 3191719469985973679" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card mb-3" style="max-width: auto; max-height: auto; background-color: black;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body" style="color: white;">
                                    <h5 class="card-title">Side Raise Dumbbell</h5>
                                    <p class="card-text" style="text-align: left;">Side raise dumbbell adalah salah satu latihan beban yang bertujuan untuk menguatkan otot bahu bagian samping atau lateral deltoid.</p>
                                    <p class="card-text" style="text-align: left;">Latihan ini dilakukan dengan mengangkat dumbbell ke samping tubuh dari posisi berdiri atau duduk.</p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <iframe width="335" height="600" src="https://www.youtube.com/embed/4zU0y5QdcYQ?autoplay=1&loop=1&playlist=4zU0y5QdcYQ&mute=1" title="SaveIG App 3191719469985973679" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
            <!-- NEWS & UPDATE -->
            <div class="col-4" style="background-color: black;">
               <div class="container-fluid py-4 px-sm-3 px-md-5">
                  <h4 style="color: white; text-align: left;">NEWS</h4>
                  <h4 style="color: white; text-align: left;">& UPDATE</h4>
                  <!-- News 1 -->
                  <div class="container-fluid-3">
                     <div class="container">
                        <div class="row">
                           <div class="d-flex mb-5 mb-mobile">
                              <img src="https://akcdn.detik.net.id/community/media/visual/2020/12/11/ilustrasi-angkat-beban_169.jpeg?w=700&q=90" style="width: 140px; height: 100px; object-fit: cover; margin-left: -50px;">
                              <div class="bgberita w-100 d-flex flex-column justify-content-center px-3" style="height: 100px; ">
                                 <div class="mb-1" style="font-size: 13px;">
                                    <a href="" style="color: white;">Olahraga</a>
                                    <span class="px-1" style="color: white;">/</span>
                                    <span style="color: aliceblue;">July 27, 2023</span>
                                 </div>
                                 <a class="h6 m-0" href="https://www.detik.com/bali/berita/d-6842797/tips-angkat-beban-di-gym-agar-terhindar-dari-cedera" style="color:aliceblue;">Tips Angkat Beban di Gym Agar Terhindar dari Cedera</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- News 2 -->
                  <div class="container-fluid-3" style="background-color: black;">
                     <div class="container">
                        <div class="row">
                           <div class="d-flex mb-5 mb-mobile">
                              <img src="https://akcdn.detik.net.id/community/media/visual/2024/01/04/ilustrasi-otot-dan-gym_169.jpeg?w=700&q=90" style="width: 140px; height: 100px; object-fit: cover; margin-left: -50px;">
                              <div class="bgberita w-100 d-flex flex-column justify-content-center px-3" style="height: 100px;">
                                 <div class="mb-1" style="font-size: 13px;">
                                    <a href="" style="color: white;">Olahraga</a>
                                    <span class="px-1" style="color: white;">/</span>
                                    <span style="color: aliceblue;">January 04, 2024</span>
                                 </div>
                                 <a class="h6 m-0" href="https://health.detik.com/berita-detikhealth/d-7124248/viral-topik-otot-kuli-vs-otot-gym-di-medsos-ade-rai-bilang-gini?_ga=2.241825730.1735035285.1711116588-1935701806.1707548181" style="color:aliceblue;">Viral Topik Otot Kuli Vs Otot Gym di Medsos, Ade Rai Bilang Gini</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- News 3 -->
                  <div class="container-fluid-3">
                     <div class="container">
                        <div class="row">
                           <div class="d-flex mb-5 mb-mobile">
                              <img src="https://cdn0-production-images-kly.akamaized.net/DklMXH6bx7gvlhl73arteOeZ5qo=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3234266/original/052847500_1599730609-anastase-maragos-YVz1LxVJqoA-unsplash.jpg" style="width: 140px; height: 100px; object-fit: cover;margin-left: -50px;">
                              <div class="bgberita w-100 d-flex flex-column justify-content-center px-3" style="height: 100px;">
                                 <div class="mb-1" style="font-size: 13px;">
                                    <a href="" style="color: white;">Olahraga</a>
                                    <span class="px-1" style="color: white;">/</span>
                                    <span style="color: aliceblue;">July 22, 2023</span>
                                 </div>
                                 <a class="h6 m-0" href="https://www.liputan6.com/health/read/5350217/4-manfaat-nge-gym-usai-pulang-kantor-kurangi-stres-dan-makin-produktif" style="color:aliceblue;">4 Manfaat Nge-Gym Usai Pulang Kantor, Kurangi Stres dan Makin Produktif</a>
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
      <!-- FOOTER -->
      <div class="container-fluid py-4 px-sm-3 px-md-5 bg-dark">
         <p class="m-0 text-center" style="color: white;">
            &copy; <a class="font-weight-bold" href="#" style="color: white;">fitsoul</a>. All Rights Reserved. Designed by <a class="font-weight-bold" href="https://htmlcodex.com" style="color: white;">kelompok 2</a>
         </p>
      </div>
   </body>
</html>