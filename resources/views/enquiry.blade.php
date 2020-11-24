<!DOCTYPE HTML>
<html>
    <head>
      <title>Enquriy</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">     
    </head>
    <style type="text/css">
      #container-fluid{
        margin: 20px auto 20px;
        max-width: 700px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

      }
      .signup-page{
        background: #fff;
        color: #333;
        padding: 15px 25px;
      }
      .signup-page h1{
        text-align: center;
      }
      .signup-page .detail{
        margin-top: 15px;
        margin-bottom: 15px;
      }
      .signup-page .detail label, .comment label{
        display: block;
        margin-left: 60px;
        color: #666;
      }
      .signup-page .abc label{
        display: block;
        margin-left: 60px;
        color: #666;
      }
      .signup-page .detail input, textarea{
        width: 80%;
        padding: 10px;
        margin-left: 60px;
            border: #ddd 1px solid;
            border-radius: 5px;
        }
        .signup-page  input[type=submit]{
            width: 50%;
            padding: 10px;
            background: #0c9;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
        }
        .signup-page  input[type=submit]:hover{
            background:  rgb(69, 143, 124);
        }
    </style>
    <body>
      <div align="">
    <form action="/submit" method="post" id="container-fluid" enctype="multipart/form-data">
      @csrf
        <div class="signup-page">
             <h1>Enquiry Form</h1>
             <div class="detail">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name">
             </div>
             <div class="detail">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
             </div>
             <div class="detail">
                <label for="contact">Contact</label>
                <input type="tel" placeholder="123-4567-8901"name="contact"  minlength="10" maxlength="13">
             </div>
             <div class="abc">
                <label for="service">Select Service
                  <select id="multiple" name="services[]" class="multiple" multiple="multiple" value="">
                    <option  >GST</option>
                    <option >Income Tax Return</option>
                    <option >Audit & Assurance</option>              
                    <option >Coperates Services</option>
                    <option >Accounting Services</option>
                    <option >Project Finance</option>                                      
                    <option >NGO Services</option>
                    <option >EPF Services</option>
                    <option >ESIC</option>
                  </select>
                </label>
             </div>
             <div class="comment">
                 <label for="comment">Other Services</label>
                <textarea rows="6" cols="50" name="comment" form="usrform"></textarea>
             </div>
            <center>
                <input type="submit" value="submit">
            </center>
        </div>        
    </form></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<script type="text/javascript">
	    $(document).ready(function() {
        $('#multiple').multiselect({
          includeSelectAllOption: true,
        });
    });
      $(document).ready(function() {
        $('#multiple1').multiselect({
          includeSelectAllOption: true,
        });
    });
</script>
</html>