@include('layouts.websiteheader')
<body>

<div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Find Blood</h1>
                
            </div>
        </div>
    </div>
    <form action="/findblood" method="post">
        @csrf
        <div class="container-fluid d-flex gap-2 mt-5">
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">Identity</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="identity">
                    <option selected>Choose...</option>
                    <option value="BloodBank">Blood Bank</option>
                    <option value="Donor">Blood Donor</option>
                    <option value="Recipient">Blood Recipient</option>
                </select>
            </div>
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">City</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="city">
                    <option>Choose...</option>
                    <option>Lahore</option>
                    <option>Islamabad</option>
                    <option>Karachi</option>
                </select>
            </div>
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">Blood Type</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="bloodgroup">
                    <option selected>Choose...</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>A-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                </select>
            </div>
            <div class="input-group mb-3 w-25">
                        
                    <button type="submit" class="btn btn-primary" style="height: 38px;" data-mdb-ripple-init>
                        <i class="fas fa-search"></i> Search
                    </button>
            </div>
        </form>
        <div class="input-group mb-3 w-25">
            <a href="/findblood" class="btn btn-primary">
                
                                View All 
                
            </a>
        </div>
        
    </div>
        

    <!-- Your Blade content goes here -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;padding: 10px; border: 1px solid lightgrey; border-radius: 5px;">  
    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
    	<thead>
            
        </thead>
        <tbody>
        	@foreach ($myusers as $muser)
        	<tr>
                <td><b>{{$muser->fname}} {{$muser->lname}}</b><br/><small>Identity: {{$muser->status}}</small><br /><small>City: {{$muser->city}}</small><br />
                    <small>Blood Group: {{$muser->blood}}</small><br/><small style="font-style: italic; color:teal;"><b>verified<i class="bi bi-check2-circle"></i></b></small>    
                </td>
                <td>
                    <button><a href="/userprofiledisplay/{{$muser->id}}" class="btn btn-primary" style="color: white;"><i class="bi bi-person" style="color: white;"></i>View Profile</a></button>
                </td>       
            </tr>
            @endforeach
        </tbody>
    </table>  
</div>
@include('layouts.websitefooter')

    <!-- <script type="text/javascript">
    	new DataTable("#example");
    </script> -->
</body>
</html>