@php 
$users = DB::select('SELECT * FROM blog ORDER BY id DESC');
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
  <link href="css/form.css" rel="stylesheet">

</head>
<style type="text/css">
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
      <li class="nav-item">
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
      <li class="nav-item active">
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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
        </div>
        <div align="center" class="container-fluid">
              <h2>Blog<b style="color: blue">&nbsp;Post</b></h2>
              <form action="/blog_post" method="post" enctype="multipart/form-data">@csrf
                <div class="form__group field col-sm-6">
                <label>Select Name
                  <select  name="name" value="">
                    <option  >CA Ravi Mahtele</option>
                    <option >CA Abhisekh Shrivastava</option>
                  </select>
                </label>
                </div>
                <div class="form__group field col-sm-6">
                  <input type="text" class="form__field" placeholder="Blog Name" name="blog_name" id='name' required />
                  <label for="name" class="form__label">Blog Name</label>
                </div>
                <div class="form__group field col-sm-6">
                  <textarea  class="form__field" name="content1" placholder="Content"  > </textarea>
                  <label for="name" class="form__label">Content</label>
                </div>
                <div class="form__group field col-sm-6">
                  <label for="name" class="form__label">Select Photo:- &nbsp;<input name="image"  type="file" placholder="Photo"></label>
                </div>
                <div class="form__group field col-sm-6">
                  <textarea  class="form__field" name="content2" placholder="Content" > </textarea>
                  <label for="name" class="form__label">Content</label>
                </div>
                <div class="form__group field col-sm-6">
                  <label for="name" class="form__label">Modified Date:-&nbsp;<input type="date" placeholder="Last Dtae" name="date" id='name'  /></label>
                </div><br><br>
                <button class="btn btn-primary" style="width: 100px;background-color:#4e73df;" type="Submit">POST</button>
              </form>
            </div><br><br><br>
            <table>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Blog Name</th>
                <th style="width: 240px">Content1</th>
                <th style="width: 240px">Content2</th>
                <th>Date</th>
                <th>Edit / Delete</th>
                </tr>
          @foreach ($users as $user)
          <tr>
            <td hidden>{{ $user->id }}</td>
            <td><img src="blogs/{{ $user->image }}" class="zoom" height="80px" width="80px"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->blog_name }}</td>
            <td>{{ $user->content1}}</td>
            <td>{{ $user->content2}}</td>
            <td>{{ $user->date}}</td>
            <td><a href="/edit"  data-toggle="modal" data-target="#exampleModalCenter">Edit </a><a style="padding-left: 20px;" href="/delete_blog/{{ $user->id }}">Delete</a>
            </tr>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/edit_blog/{{ $user->id }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                      <div class="form__group field ">
                        <label>Select Name
                          <select  name="name" value="">
                            <option  >CA Ravi Mahtele</option>
                            <option >CA Abhisekh Shrivastava</option>
                          </select>
                        </label>
                      </div>
                      <div class="form__group field ">
                        <input type="text" class="form__field" placeholder="Blog Name" name="blog_name" id='name' required />
                        <label for="name" class="form__label">Blog Name</label>
                      </div>
                      <div class="form__group field ">
                        <textarea  class="form__field" name="content" placholder="Content" > </textarea>
                        <label for="name" class="form__label">Content</label>
                      </div>
                      <div class="form__group field ">
                        <label for="name" class="form__label">Select Photo:- &nbsp;<input name="image"  type="file" placholder="Photo"></label>
                      </div>
                      <br><br>
                    </div>
                    <div class="modal-footer">
                     <button type="Submit" class="btn btn-primary">Post</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
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