@php
$users = DB::select('select * from news ORDER BY id DESC LIMIT 5');
@endphp
<!DOCTYPE HTML>
<html>
<head>
  <title>R.A.M.S & Associates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/index_style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<body >
  <nav class="navbar navbar-expand-sm sticky-top navbar-light">
    <div class="container">
      <!-- Brand -->
      <img src="img/logo.png" height="80px" width="80px">
      <a class="navbar-brand" href="/" alt="" style="padding-left: 10px">R.A.M.S & Associates<br><SMALL>Chartered Accoutant</SMALL></a>  
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" style="outline: none;border: none;" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon color-black"></span>
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto py-4 py-md-0">
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 dropdown">
            <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">GST</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Advisory on Taxability of Goods/Services</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Filing of Returns</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>GST Audit</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>GST Assessment</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Filing of Returns</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Income Tax related Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Planning and Advisory</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Income Tax Return Filing</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Tax Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Income Tax Scrutiny Assessments</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Search and Seizure Assessment</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu " >
                <a class="dropdown-item dropdown1 " href="#">Auditing & Assurance Services</a>
                <ul class="dropdown-menu dropleft">
                  <li><a class="dropdown-item" href="#"><small>Statutory Audit under Companies Act 2013</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Tax Audit under Income Tax</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>GST Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Internal Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Stock Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Trust Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Compliance Audits</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>CONCURRENT AUDIT</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Corporates Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Incorporation of Company/LLP/Trusts</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>ROC Compliances</small></a></li>  
                </ul>
              </li>           
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Accounting</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Indian Accounting</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Foreign Accounting</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Project Finance</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Project Reports</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Advise</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">NGO Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>Registration</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Annual Compliances</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>Finance related Advise</small></a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Other Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><small>EPF</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>ESIC</small></a></li>
                  <li><a class="dropdown-item" href="#"><small>UAE VAT</small></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 dropdown">
            <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">Blogs</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/blog">Blogs</a>
              <a class="dropdown-item" href="/newsletter">News Letter</a>
            </div>
          </li>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 dropdown">
            <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">Knowledge Bank</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/acts">Acts</a>
              <a class="dropdown-item" href="#">Forms</a>
              <a class="dropdown-item" href="#">Rules</a>
            </div>
          </li>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
            <a class="nav-link"  href="/contact_us" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <!------------End Of Navbar------------>
      <div>
        <img src="img/main.png"   class="d-block w-100"  alt="...">
      </div>
      <!---------------------- TOP SERVICES--------------------->
      <div id="service">
        <section class="team-section pt-5 pb-5">
          <h1 align="center">Top<b style="color: blue">&nbsp;Services</b></h1><br><br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6" >
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                        <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/GST.JPG" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>GST Services</h5>
                              <small>Advisory on Taxability of Goods/Services<br>
                              Filing of Returns<br>
                              GST Audit<br>
                              GST Assessment<br>
                              Filing of Returns</small><br>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="desc-content">
                      <h3>GST Services</h3>  
                    </div>
                    <div class="hover-content">
                        <h3>GST Services</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/IT_3.png" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Income Tax Return</h5>
                              <small>Planning and Advisory<br>
                                Income Tax Return Filing<br>
                                Tax Audits<br>
                                Income Tax Scrutiny Assessments<br>
                              Search and Seizure Assessment</small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Income Tax Return</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Income Tax Return</h3>  
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Finance.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Project Finance</h5>
                              <small>Project Reports<br>
                              Advise</small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Project Finance</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Project Finance</h3>    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Company Law.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Corporates Services</h5>
                              <small>Incorporation of Company/LLP/Trusts<br>
                              ROC Compliances</small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Corporates Services</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Corporates Services</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Accounting Service.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Accounting Services</h5>
                              <small>Indian Accounting<br>
                              Foreign Accounting</small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Accounting Services</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Accounting Services</h3>   
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding-top: 10px">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/NGO.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>NGO Services</h5>
                              <small>Registration<br>
                                Annual Compliances<br>
                              Finance related Advise</small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                        <h3>NGO Sevices</h3>
                    </div>
                    <div class="hover-content">
                      <h3>NGO Services</h3>      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/Auditing.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Auditing & Assurance</h5>
                              <small>
                                 Statutory Audit under Companies Act 2013<br>
                                 Tax Audit under Income Tax<br>
                                 GST Audits<br>
                                 Internal Audits<br>
                                 Stock Audits And
                                 Trust Audits<br>
                                 Compliance Audits  And
                                 CONCURRENT AUDIT<br>
                              </small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Auditing & Assurance</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Auditing & Assurance</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3" style="padding: 10px;">
                  <div class="inner-box">
                    <div class="image-box">
                      <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <img src="img/other Services.jpg" alt="Avatar">
                            </div>
                            <div class="flip-card-back">
                              <h5>Other Services</h5>
                              <small>
                                EPF<br>
                                ESIC<br>
                                UAE VAT<br>
                              </small>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="desc-content">
                      <h3>Other Services</h3>
                    </div>
                    <div class="hover-content">
                      <h3>Other Services</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--------About Us---->
        <div class="container-fluid">
        	<div class="parallax">
        		<h1  align="center"  style=""><br>About R.A.M.S & Associates</h1>
            <h6 align="center">R A M S & Assocites is a chartered accountant partnership firm. It came into existance since 2017. Firm is having two partners CA Ravi Mahtele and CA Abhishek Shrivastava.<br>Firm is located in Satna, MP, also having a branch in District Panna, MP.
            </h6>
            <center><button class="btn btn-success" href="">Read More</button></center><br><br><br>
        	</div>
        </div>
      <!------------------------------Latest News-------------------->
      @foreach($users as $loop)
      @endforeach
      <div class="container-fluid" style="margin-top: 20px; margin-bottom: 25px;"><br>
        <h1 align="center">Latest<b style="color: blue">&nbsp;News</b></h1>
      </div>
      <div class="container-fluid text-center my-3">
        <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
              @foreach($users as $user)
                <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">  
                  <div class="col-md-4">
                    <div class="courses-container">
                      <div class="course">
                        <div class="course-preview">
                          <h4>{{ $user->news_title }}</h4>
                        </div>
                        <div class="course-info">
                          <h4>{{ $user->news_description }}</h4><br><br><br>
                          <p class="button">{{ $user->date }}</p>
                        </div>
                      </div>
                    </div>                      
                  </div>
                </div>
              @endforeach               
              </div>
            </div>
          </div>
        </div>
        <!------------------>
        <div class="main-section categories-view1-full">
          <span class="light-transparent"></span>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="fancy-title-view1">
                  <h2>Knowledge Zone</h2>
                </div>
                  <ul class="row">
                    <div class="col-md-4" style="margin-top: 20px;">
                      <div class="card">
                        <img src="img/act_logo.jpg" class="card-img"  width="335" height="335">
                        <div class="card-title" align="center">
                          <a href="/acts" class="card-text"><h4>Acts</h4></a>
                          <center><small style="font-size: 13px;">(Knowledge Zone)</small></center>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 20px;">
                      <div class="card">
                        <img src="img/Forms.JPG" class="card-img" width="335" height="335">
                        <div class="card-title" align="center">
                          <a href="#" class="card-text"><h4>Forms</h4></a>
                          <center><small style="font-size: 13px;">(Knowledge Zone)</small></center>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 20px;">
                      <div class="card">
                        <img  src="img/Rules.jpg" class="card-img"  width="335" height="335">
                        <div class="card-title">
                          <a href="#" class="card-text"><h4 align="center">Rules</h4></a>
                          <center><small style="font-size: 13px;">(Knowledge Zone)</small></center>
                        </div>
                      </div>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-------------------------counter--------->
        
        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!--------Enquiry Button------>
        <a href="/enquiry" class="float">
          <h6>Enquiry</h6>
        </a>
        <!----------Feedback------------>
        <a href="/feedback_form" id ="float1">
          <h6>Feedback From</h6>
        </a>

      </body><script type="text/javascript">
      $(window).scroll(function(){ 
      //more then or equals to 
      $( "#float1" ).css( "display", "none" ); 
      if($(window).scrollTop() >= 600 ){ 
      $( "#float1" ).css( "display", "block" ); 
      //less then 100px from top 
  } 
}); 
</script>
      <script type="text/javascript">
  $('.dropdown-menu a.dropdown1').on('click' ,function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });


  return false;
});
 
</script>
      <script type="text/javascript">
      //Latest News
      $('#recipeCarousel').carousel({
        interval: 5000})
      $('.carousel .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        }
      });
    </script>     
</html>
