<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us Page</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="index_style.css">
    <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  <style>
    
    .collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

</style> 

</head>
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
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
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
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown1" href="#">Auditing & Assurance Services</a>
                <ul class="dropdown-menu">
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
              <a class="dropdown-item" href="#">Blogs</a>
              <a class="dropdown-item" href="#">News Letter</a>
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
          <li class="nav-item active pl-4 pl-md-0 ml-0 ml-md-4">
            <a class="nav-link"  href="/contact_us" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <!------------End Of Navbar------------>
      <br><br>
    <h1 align="center">Contact Us</b></h1>

      <div class="container">
        <div class="row contact-info">
            <div class="card">
                <i class="card-icon fa fa-envelope"></i>
                <p>satna.rams@gmail.com</p>
            </div>
            <div class="card">
                <i class="card-icon fa fa-phone"></i>
                <p>+917477216510</p>
            </div>
            <div class="card">
                <i class="card-icon fa fa-map-marker"></i>
                <p>Infront Of HP Gas Agency, Prem Nagar, Satna, M.P. 485001</p>
            </div>
        </div>
        </div>
        <br><br>
        <?php 
        include 'footer.php';

        ?>
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
  $('.navbar-toggler').click(function() {
   lockScroll();
});
</script>
</html>