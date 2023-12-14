<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>Dropdown Form with Ajax</title>
    <!-- Include jQuery -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
  </head>
  <body>
  <h2>Dropdown Form with Ajax Example</h2>

<!-- <form id="dropdownForm" method='post'> -->
    <!-- First Dropdown Field -->
    <!-- <label for="User Type">User Type</label>
    <select id="users" name="users">
        <option value="bloodBank">Blood Bank</option>
        <option value="Donor">Blood Donor</option>
        <option value="Recipient">Blood Recipient</option>
    </select>
    <br> -->

    <!-- Second Dropdown Field -->
    <!-- <label for="city">City</label>
    <select id="city" name="city">
        <option value="Lahore">Lahore</option>
        <option value="Karachi">Karachi</option>
        <option value="ISL">ISL</option>
    </select>
    <br> -->

    <!-- Submit Button -->
    <!-- <input type="button" value="Submit" onclick="submitForm()">
</form>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">email</th>
      <th scope="col">city</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usersData as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->fname }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->city }}</td>
    </tr>
    @endforeach
  </tbody>
</table> -->


<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- 
<script>
function submitForm() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    var users = $("#users").val();
    var city = $("#city").val();

    var formData = {
        users: users,
        city: city
    };

    $.ajax({
        type: "POST",
        url: "{{ route( 'search-blood' )}}",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            console.log("Form submitted successfully");
            console.log(response);
        },
        error: function(error) {
            console.error("Error submitting form");
            console.error(error);
        }
    });
}
</script> -->

  </body>
</html>


