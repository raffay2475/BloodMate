<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank Registration</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <section class="login-block" style="position: relative; height: 100%;">
    <div class="container">
      <div class="row d-flex justify-content-between">
     
       <!--  <div class="col-md-7 banner-sec ml-0 px-0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('assets/images/akram-huseyn-fKC9eWRnlGY-unsplash.jpg')}}" alt="First slide" style="width: 100%; max-height: 625px;">
            </div>
          </div>       
        </div> -->
        <div class="col-md-5 login-sec ml-0">
          <h2 class="text-center">Blood Bank Registration</h2>
          @if ($errors->any())
          @foreach ($errors->all() as $error)
            <p class="">{{$error}}</p>
          @endforeach
          @endif
          <form action="/doregister" method="post" class="login-form" style="margin-left: 17px;">
            @csrf
            <div class="form-container d-flex">
                <div class="form-items">
                  <div class="form-group">
                  <label for="fname" class="text-uppercase">BloodBank Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                  <label for="lname" class="text-uppercase">Email</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
              
              </div>

              <div class="form-items ml-2">
                <div class="form-group">
                  <label for="username" class="text-uppercase">Person's Fullname</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                
                <div class="form-group">
                  <label for="phno" class="text-uppercase">Phone No.</label>
                  <input type="text" class="form-control" id="phno" name="phno" required>
                </div>  
              </div>
            </div>
              <hr />

            <div class="form-items">
                <div class="form-group">
                  <label for="fname" class="text-uppercase">Street Address</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-items-division d-flex">
                  <div class="form-group">
                  <label for="lname" class="text-uppercase">City</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="form-group ml-2">
                  <label for="lname" class="text-uppercase">State/Province</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>  
                </div>

                <div class="form-items d-flex"> <div class="form-group col-6
                pl-0 pr-0" style="width: 270px;"> <label for="lname"
                class="text-uppercase">ZipCode</label> 
                <input type="text" class="form-control"
                id="lname" name="lname" required> </div> 
                <div class="form-group ml-2">
                  <label class="text-uppercase">Country</label>
                <select style="width: 205px; height: 35px;" class="form-control"> 
                  <object></object> 
                </select>
                </div> 
              </div>

              </div>    
              <hr />

            
        <div class="form-container d-flex">
          <div class="form-items">
                <div class="form-group">
                  <label for="username" class="text-uppercase">Operating Time</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Opening Time" required style="width: 200px;">
                </div>
                <div class="form-group">
                  <label for="username" class="text-uppercase">Days Open in Week</label>
                  <ul class="options d-flex pl-0" style="list-style: none;">
                    <li><label><input type="radio" name="status" value="Donor">Mon</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">Tue</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">Wed</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style="margin-top: 4px;">Thu</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">Fri</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">Sat</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">Sun</label></li>

                </ul>
                </div>
              </div>
              <div class="form-items ml-2" style="margin-top: 32px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Closing Time" required> 
                </div>
              </div>
        </div>
        <hr />

        <div class="form-container d-flex">
          <div class="form-items">
                <div class="form-group">
                  <label for="username" class="text-uppercase d-flex ">Types of Blooded Collected</label>
                  <ul class="options d-flex pl-0" style="list-style: none;">
                    <li><label><input type="radio" name="status" value="Donor">A</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">B</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style=" margin-top: 4px;">AB</label></li>
                    <li><label><input type="radio" name="status" value="Recipient" style="margin-top: 4px;">O</label></li>
                </ul>
                </div>
                <div class="form-group">
                  <label class="text-uppercase">Current Blood Inventory(if any):</label>
                  <input type="file" name="" class="form-control" style="border: none;">
                </div>
          </div>
        </div>
        <hr />

        <div class="form-container d-flex">
          <div class="form-items">
                      <div class="form-group">
                  <label class="text-uppercase">Certification Details(if any): </label>
                  <input type="file" name="" class="form-control" style="border: none;">
                </div>
          </div>
        </div>  
        <hr />

        <div class="form-container d-flex">
          <div class="form-items">
                      <div class="form-group">
                  <label class="text-uppercase">Emergency Contact Person' Fullname: </label>
                  <input type="text" name="" class="form-control">
                </div>
          </div>
        </div>
<hr />

        <div class="form-container d-flex">
          <div class="form-items">
                      <div class="form-group">
                  <label class="text-uppercase">Emergency Contact No: </label>
                  <input type="text" name="" class="form-control">
                </div>
          </div>
        </div>

              
            <div class="form-check mr-2">
            <button type="submit" class="btn btn-login">Register</button>
            </div>

            <p>Already have an account?
                <a href="/" style="color: #DE6262;">Login</a>
            </p>
  
          </form>
          <div class="copy-text"><i class="fa fa-plus"></i> BloodeMate
          </div>
        </div>
</section>
  
  <!-- Bootstrap JS and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>