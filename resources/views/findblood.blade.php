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
        <div class="container d-flex mt-5 pl-0">
            <div class="input-group mb-3 col-2 pl-0">
                <div class="input-group-prepend" style="height: 38px;">
                    <label class="input-group-text" for="inputGroupSelect01">Identity</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="identity">
                    <option selected>Choose...</option>
                    <option value="BloodBank">Blood Bank</option>
                    <option value="Donor">Blood Donor</option>
                </select>
            </div>
            <div class="input-group mb-3 col-2">
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
            <div class="input-group mb-3 col-2">
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
            <div class="input-group mb-3 col-2 pr-0" style="width:120px;">

                    <button type="submit" class="btn btn-primary" style="height: 38px;" data-mdb-ripple-init>
                        <i class="fas fa-search"></i> Search
                    </button>
            </div>
        </form>
        <div class="input-group mb-3 col-4">
            <a href="/findblood" class="btn btn-primary">
                                View All
            </a>
        </div>

    </div>


    <!-- Your Blade content goes here -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;padding: 10px; border: 1px solid lightgrey; border-radius: 5px;">
    <table id="example" class="table" style="width: 100%; border-radius:5px;">
    	<thead>

        </thead>
        <tbody>
            @foreach ($myusers as $muser)
            @if($muser->verification=="Verified")
            <tr class="card mb-1" style="background-color: #e6e6e6;border-radius: 5px;">
                @else
                <tr class="card mb-1" style="background-color: #fee6e4;border-radius: 5px">
                    @endif

                    <td class="d-flex">
                        <div class="col-10">

                            <b>{{$muser->fname}} {{$muser->lname}}</b><br/><small>Identity: {{$muser->status}}</small><br /><small>City: {{$muser->city}}</small><br />
                            <small>Blood Group: {{$muser->blood}}</small><br/>
                            @if($muser->verification=="Verified")
                            <small style="font-style: italic; color:teal;"><b>{{$muser->verification}}<i class="bi bi-check2-circle"></i></b></small>
                            @else
                                <small style="font-style: italic; color:red;"><b>{{$muser->verification}}<i class="bi bi-x"></i></b></small>

                            @endif
                        </div>
                        <div class="col-2">
                            <a href="/userprofiledisplay/{{$muser->id}}" class="btn btn-primary" style="color: white;"><i class="bi bi-person" style="color: white;"></i>View Profile</a>
                            <a href="#" class="btn btn-primary mt-2" style="color: white;">Request Blood</a>
                        </div>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('layouts.websitefooter')

</body>
</html>
