@php 
$users = DB::select('SELECT * FROM blog ORDER BY id DESC');
@endphp

<!DOCTYPE html>
<html>
  <head>
    <title>Blogs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css"> 
  </head>
  <style type="text/css">
    .container-fluid .abc{
      border-radius: 10px;
      background-color: white;
    }
    .container-fluid .abc:hover{
      background-color: #F2F2F2;
      border-radius: 10px;
    }
    body{
      background-color:  #F2F2F2;
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
                <li class="dropdown-submenu dropleft">
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
            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 dropdown active">
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
    <!--------------End Of Navbar-------------><br><br>
    <h1 align="center">BLOGS____</b></h1>
    <div class="container-fluid" align="center">
      <?php
        foreach ($users as $user){
          if($user->image == null){?>
            <div class="col-sm-8 abc" align="center">
              <div class="">
                <h5 align="left" style="padding-top: 10px;padding-left: 10px;"><b>{{$user->name}}</b><br>{{$user->blog_name}}</h5>
                <br>
                <p  align="left" style="padding-left: 20px;">{{$user->content1}}</p><br>
                <p  align="left" style="padding-left: 20px;">{{$user->content2}}</p><br>
              </div>
            </div><br><?php
          }
          else{ ?>
            <div class="col-sm-8 abc" align="center">
              <div class="">
                <h5 align="left" style="padding-top: 10px;padding-left: 10px;"><b>{{$user->name}}</b><br>{{$user->blog_name}}</h5>
                <br>
                <p  align="left" style="padding-left: 20px;">{{$user->content1}}</p><br>
                <center>
                  <img style="padding-left: 20px;" src="/blogs/{{$user->image}}"class="img-fluid">
                </center><br>
                <p  align="left" style="padding-left: 20px;">{{$user->content2}}</p><br>
              </div>
            </div><br><?php
          }
        }
      ?>
    </div>

    <?php include 'footer.php';?>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
