
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <script>
    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".bg-n1").css("background" , "black");
        }

        else{
          $(".bg-n1").css("background" , "#0000");   
        }
      })
    })
  </script>
</head>
<body>
  

 <div class="pos-f-t fixed-top">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-n1">
    
    <a class="navbar-brand head2" href="index.html" style="color: white">SINDHURIA ELECTRICAL INDUSTRIES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end bg-n3" id="navbarSupportedContent">

      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link head1" href="products_domestic.html" style="color: white">Domestic Products</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link head1" href="products.html" style="color: white">Industrial Products</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link head1" href="trade.html" style="color: white">Trade Enquiry</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link head1" href="contact.php" style="color: white">Contact Us</a>
        </li>
      </ul>
    </nav></div>
  <div class="d4">
    <p class="tagline" align="center">CONTACT US</p>
  </div>
  <div class="container">
    <p><h1 class="c1">GIVE YOUR CONTACT DETAILS</h1></p>
    <div class="hr-blue"></div>
    <form action="action.php" method="get">
      <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" placeholder="Enter Your Name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="name@example.com" required>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput3">Phone Number</label>
    <input type="text" class="form-control" id="exampleFormControlInput3" name="pno" placeholder="Enter Your Phone Number" required>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput4">Choose From following Products</label>
    <select class="form-control" id="exampleFormControlinput4" name="pname" value="<?php echo $_GET['pname'] ?>">
      <option>Water Level Controller</option>
      <option>Dual Tank Water Level Controller</option>
      <option>Water Level Alarm</option>
      <option>Water Level Indicator</option>
      <option>Semi-Automatic Water Level Indicator</option>
      <option>VFD Panel</option>
      <option>Inline Pumps</option>
      <option>PLC Control Panel</option>
      <option>Pressure Pumps</option>
    </select>
  </div>
  <p align="center"><button type="submit" class="btn btn1">Submit</button></p>
    </form>
    <br>
    <hr class="style-two">
    <br>
    <p><h1 class="c1">SINDHURIA ELECTRICAL INDUSTRIES</h1></p>
    <div class="hr-blue"></div>
        
                            <p class="fd1" align="left"><b>Mr. Navneet Bhardwaj (Director)</b></p>
                          <p class="fd1" align="left"><b>Head Office:-</b> 264/5, Durgapuri Extn., Delhi - 110093, India</p>
                          <p class="fd1" align="left"><b>Branch Office :-</b> Shop No. 34, Super Market, "A"Block, Ramprastha, Ghaziabad, U.P. 201011</p>
                          <p class="fd1" align="left"><b>Phone :</b> 91-11-22802892</p>
                          <p class="fd1" align="left"><b>Fax :</b> 91-11-22802892</p>
                          <p class="fd1" align="left"><b>Mobile :</b> +919810083638, +919717516634</p>
                          <p class="fd1" align="left"><b> TIN Number</b></p>
                          <p class="fd1" align="left"><b>DELHI TIN NO. -</b> 07830164382</p>
                          <p class="fd1" align="left"><b>U.P. TIN NO. -</b> 09488828390</p>
  </div>
  
<div class="container-fluid footer">
                      <div class="container">
                      <div class="row ">
                        <div class="col-lg-3 container r1">
                          <p align="left" class="fh1"><b>LINKS</b></p>
                          <hr>
                          <p align="left" class="fd1 "><a href="index.html" class="f1">HOME</a></p>
                          <p align="left" class="fd1"><a href="products_domestic.html" class="f1">DOMESTIC PRODUCTS</a></p>
                          <p align="left" class="fd1"><a href="products.html" class="f1">INDUSTRIAL PRODUCTS</a></p>
                          <p align="left" class="fd1"><a href="trade.html" class="f1">TRADE ENQUIRY</a></p>
                          <p align="left" class="fd1"><a href="about.html" class="f1">ABOUT US</a></p>
                          <p align="left" class="fd1"><a href="contact.php" class="f1">CONTACT US</a></p>
                        </div>
                        <div class="col-lg-6 container r1">
                          
                          <p align="left" class="fh1"><b>SINDHURIA ELECTRICAL INDUSTRIES</b></p>
                          <hr>
                          
                          <p class="fd1">Head Office:- 264/5, Durgapuri Extn., Delhi - 110093, India</p>
                          <p class="fd1">Branch Office :- Shop No. 34, Super Market, "A" Block, Ramprastha, Ghaziabad, U.P. 201011</p>
                          
                          <p class="fd1"> TIN Number</p>
                          <p class="fd1">DELHI TIN NO. - 07830164382</p>
                          <p class="fd1">U.P. TIN NO. - 09488828390</p>
                        </div>
                        <div class="col-lg-3 container r1">
                          <p align="left" class="fh1"><b>CONTACT US</b></p>
                          <hr>
                          <p class="fd1">Phone : 91-11-22802892</p>
                          <p class="fd1">Fax : 91-11-22802892</p>
                          <p class="fd1">Mr. Navneet Bhardwaj (Director)</p>
                          <p class="fd1">Mobile : +919810083638, +919717516634</p>
                        </div></div>
                        
                      </div>
</body>
</body>
</html>