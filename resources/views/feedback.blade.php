@php
$users = DB::select('select * from feedback ORDER BY id DESC LIMIT 5');
@endphp
<!DOCTYPE HTML>
<html>
<head>
  <title>R.A.M.S & Associate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<style>
.header{
  background-color: #CBCACA;
  padding: 10px;
  border-radius: 10px;
  margin-bottom: 20px;   
}
.header h4{
  padding-left: 20px;
}
.header h4 small{
  font-size: 18px;
}
.header .main_content{
  padding-left: 20px;
  padding-top: 10px;
  background-color: white;
  border-radius: 10px;
  min-height: 90px;
}
/*****Enquiry****/
.float{
  position:fixed;
  width:80px;
  height:80px;
  bottom:80px;
  right:40px;
  background-color:#0C9;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  padding-top:30px;
  
}
.float:hover{
  
  color:black;
  text-decoration: none;
  
}

</style>
<body>
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
  
  <br><br><br>
        
  <!-----------------Feedback Form---->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <img height="300px" width="300px"src="https://cdn.pixabay.com/photo/2016/12/07/09/27/fax-1889009_960_720.jpg">
      </div>
      <div class="col-sm-6">
        <h2>Feedback<b style="color: blue">&nbsp;Form</b></h2>
        <form action="/feedback_form" method="post">@csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form__group field">
                <input type="text" class="form__field" placeholder="Name" name="name"  required />
                <label for="name" class="form__label">Name</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form__group field">
                <input type="email" class="form__field" placeholder="E-Mail" name="email"  required />
                <label for="name" class="form__label">E-Mail</label>
              </div>
            </div>
          </div>
          <div class="form__group field">
            <textarea  class="form__field" placeholder="Feedback"name="feedback"  required ></textarea>
            <label for="name" class="form__label">Feedback</label>
          </div> 
          <p align="right"><br>
            <button class="btn btn-success" type="Submit">Submit Your Feedback</button>
          </p>
        </form>
      </div>
      <div class="col-sm-3">
        <img height="300px" width="300px"src="https://cdn.pixabay.com/photo/2016/12/07/09/27/fax-1889009_960_720.jpg">
      </div>
    </div>
  </div><br><br>
  <!--------------------------->
  <h2 align="center">User<b style="color: blue">&nbsp;Feedback</b></h2>
  <div class="container">
    @foreach($users as $user)
    <div class="col-sm-12" style="margin-top: 20px;">
      <div class="header">
        <div class="row">
          <h4>{{ $user->name }}<small>&nbsp;&nbsp;says</small></h4>
        </div>
        <div class="main_content">
          <small>{{$user->email}}</small><br>
          <h4>{{ $user->feedback }}</h4>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!--------Enquiry Button------>
  <a href="/enquiry" class="float">
    <h6>Enquiry</h6>
  </a>
</body>

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
</html>
