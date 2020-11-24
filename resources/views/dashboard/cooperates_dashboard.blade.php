@php 
$users = DB::table('client')->where('services','Cooperates Services')->get();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>R.A.M.S & Associates Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/dashboard_css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Clients
      </div>
      <li class="nav-item ">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-table"></i>
          <span>All Clients</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span>Services</span>
        </a>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/accounting_dashboard">Accounting Services</a>
            <a class="collapse-item" href="/audit_dashboard">Audit & Assurance</a>
            <a class="collapse-item" href="/cooperates_dashboard">Cooperates Services</a>
            <a class="collapse-item" href="/epf_dashboard">EPF/REF</a>
            <a class="collapse-item" href="/esic_dashboard">ESIC</a>
            <a class="collapse-item" href="/gst_dashboard">GST</a>
            <a class="collapse-item" href="/income_tax_dashboard">Income Tax Return</a>
            <a class="collapse-item" href="/ngo_dashboard">NGO/Society</a>
            <a class="collapse-item" href="/project_dashboard">Project Finance</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Addons
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <span>Blogs</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/newsletter_dashboard">News Letter</a>
            <a class="collapse-item" href="/blogs_dashboard">Blogs</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/latest_news">
          <span>Latest News</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/feedback">
          <span>Feedback</span></a>
      </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h6 style="color: black">R.A.M.S & Associates</h6>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cooperates Services Clients</h1>
          </div>
        </div>
        <br><br>
        <table>
          <tr>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Contact</th>
            <th>Services</th>
            <th>Other Services</th>

          </tr>
          @foreach ($users as $user)
          <tr>
            <td hidden>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->contact}}</td>
            <td>{{ $user->services}}</td>
            <td>{{ $user->other_services}}</td>
            </tr>
          @endforeach
        </table>
      </div>
  </div>
</div>
</body>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/dashboard_js/sb-admin-2.min.js"></script>
</html>
