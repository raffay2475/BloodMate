@include('layouts.websiteheader')
<body>

<div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Find Blood</h1>
                
            </div>
        </div>
    </div>
    
        

    <!-- Your Blade content goes here -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">  
    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
    	<thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>City</th>
                <th>PhoneNo</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
        	@foreach ($myusers as $muser)
        	<tr>
        		<td>{{$muser->id}}</td>
                <td>{{$muser->fname}}</td>
                <td>{{$muser->lname}}</td>
                <td>{{$muser->email}}</td>
                <td>{{$muser->city}}</td>
                <td>{{$muser->phoneno}}</td>
                <td>{{$muser->status}}</td>       
            </tr>
            @endforeach
        </tbody>
    </table>  
</div>
@include('layouts.websitefooter')

    <script type="text/javascript">
    	new DataTable("#example");
    </script>
</body>
</html>


<!-- Your Blade view file -->



<!-- @section('content')
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th> -->
                <!-- Add more columns as needed -->
            <!-- </tr>
        </thead> -->
        <!-- <tbody> -->
            <!-- Your data loop goes here -->
        <!-- </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "", // Replace with your route name
                columns: [
                    { data: 'fname', name: 'fname' },
                    { data: 'email', name: 'email' },
                    // Add more columns as needed
                ]
            });
        });
    </script>
@endsection -->
