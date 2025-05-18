<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIDHARTA Apartment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

  <link href="./css/style.css" rel="stylesheet">
</head>
<body>



  <div class="progress-line bg-warning py-1 w-100 position-fixed top-0"></div>

  <header class="sticky-top bg-light" id="header">
    <div class="header border-bottom border-secondary-subtle py-2">
      <div class="container">
      
		
		 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <div class="logo">
              <a href="" class="text-dark fw-bold text-decoration-none fs-3">
<!--                 <img src="" alt=""> -->
                SIDHARTA<span class="text-warning">Apartment</span>
              </a>
            </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
     
	   <li class="nav-item"><a href="#about" class="nav-link text-warning">Society Programs</a></li>
                <li class="nav-item"><a href="#project" class="nav-link text-warning">Society Committe</a></li>
                <li class="nav-item"><a href="maintenance.php" class="nav-link text-warning">Society Maintenance</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link text-warning">Contact</a></li>
    <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      
    </ul>
   
  </div>
</nav>
		
		
      </div>
    </div>
  </header>
  
 
  <!-- main content -->
  <main class="main">
  <!--  hero section  -->
    <div id="hero" class="hero-banner section-padding" style="background-image: url(https://tinyurl.com/66cvyacs)">
      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-md-6">
            <div class="hero-banner-content">
              <h1 class="text-uppercase fw-bold text-warning">Lorem ipsum dolor sit amet.</h1>
              <p class="my-4 text-light fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, recusandae voluptates.</p>
              <button class="btn btn-warning fw-semibold text-light py-2 px-4 text-uppercase">Click Here</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="hero-banner-img">
              <img class='poligon' src="./images/banner.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- hero section end -->
    
  <!--  About Section  -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row gx-5">
          <div class="col-md-6">
            <div class="about-content">
              <h2 class="fw-bold mb-4 display-6">About Us</h2>
              <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus quibusdam qui ipsum nesciunt incidunt aliquid dolores neque sunt. Delectus alias ratione corporis iusto quae sit voluptatem ipsam esse? Ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eum quos eos pariatur qui exercitationem consectetur consequuntur ea. Possimus, distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore adipisci hic illum delectus enim doloremque accusantium expedita nobis voluptate accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque doloremque maxime aspernatur harum ab id sed eaque sequi beatae tempore, fuga in quaerat, provident ea debitis aliquam a magnam nemo. At qui vero natus. Dolore aliquid minima laboriosam quas placeat sit repellat neque, enim facere voluptates odit omnis deserunt veniam soluta incidunt animi ipsam, perferendis explicabo delectus dignissimos totam illo officiis distinctio. Dolorem possimus sint quia eum itaque quam harum? Autem obcaecati at molestiae ducimus pariatur ipsa, officiis veniam fugit suscipit accusantium quasi itaque sint deserunt, consequuntur commodi. Adipisci qui illum perferendis ut at eligendi repellat illo tempore nam!</p>
            </div>
          </div>
          <div class="col-md-6">
            <img class="shape-left text-right" src="./images/banner.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
  <!--  About Section end -->
    
  <!--  Our Project  -->
    <section id="project" class="project section-padding bg-opacity-10">
      <div class="container">
        <div class="row">
          <h2 class="fw-bold mb-5 display-6 text-center">Our Projects</h2>
          <div class="col-md-12">
            <ul class="nav justify-content-center gap-3" id="projectTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link text-light rounded fw-semibold bg-warning active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-light rounded fw-semibold bg-warning" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Website</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-light rounded fw-semibold bg-warning" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Template</button>
              </li>
            </ul>
            <div class="tab-content p-3 mt-5" id="projectTabContent">

              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row gy-4">
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 1</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 2</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 3</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 4</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 5</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 6</p>
                    </a>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade gid" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row gy-4">
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 1</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 2</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 3</p>
                    </a>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade grid" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row gy-4">
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 4</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 5</p>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="" class="text-decoration-none text-dark">
                      <img class="rounded-3" src="https://tinyurl.com/yk6ftaf2" alt="">
                      <p>Project 6</p>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  <!--  Our Project ends  -->
    
 
    
  <!--  Our contac  -->
    <section id="contact" class="contact section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 bg-dark text-light p-5 rounded-3">       
            <h2 class="fw-bold mb-4 display-6">Contact</h2>
   
            <form class="contact-form">
              <div class="row">
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                    <label for="fname" class="text-secondary">First Name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                    <label for="lname" class="text-secondary">Last Name</label>
                  </div>
                </div>
              </div>
              
              <div class="form-floating mb-3">
                <input type="Subject" class="form-control" id="subject" placeholder="Subject">
                <label for="subject" class="text-secondary">Subject</label>
              </div>
              
              <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Message" id="message"></textarea>
                <label for="message" class="text-secondary">Message</label>
              </div>
  
              <button type="submit" class="btn btn-warning text-light fw-bold text-uppercase py-2 px-4">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  <!--  Our contac ends  -->
  </main>
  <!-- main content end -->
  
  
  <!-- footer -->
  <footer class="footer py-3 bg-black">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-light d-flex justify-content-between align-items-center flex-wrap">
          <p class="m-0">©2025 All rights reserved</p>
          <p class="m-0">Develelop by <span class="fw-bold text-warning">TectonixIndia</span>  </p>
        </div>
      </div>
      <!-- back to top -->
      <a href="#" class="position-fixed bottom-0 end-0 mb-5 me-5 p-2 bg-warning shadow rounded-1 cursor-pointer">
        <span class="fa-solid fa-angle-up text-light fs-4 fw-bold d-bock"></span>
      </a>
    </div>
  </footer>
  <!-- footer end -->
 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'> </script>

<script src='https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js'> </script>
</body>
</html>
 


 
  
  
  
  
  