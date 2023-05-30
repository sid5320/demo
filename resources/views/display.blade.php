<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <title>Data Display</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">DATA DISPLAY</h3>
    
          {{-- <a href="" class="btn btn-primary mb-5   ">Back</a> --}}



         {{-- <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>

                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Image</th>   

                    <th>Img</th>   

                    <th>Edit</th>   
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($player as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['fname'] }}</td>
                        <td>{{ $row['lname'] }}</td>
                        <td>{{ $row['email'] }}</td>
                        <td>{{ $row['phone'] }}</td>
                        <td>{{ $row['path'] }}</td> 
                        <td>
                       <img src="{{ asset('app/images/fileName') }}" height="30px" width="30px" /></td>
                        <td><a href = 'edit/{{ $row->id }}'>Edit</a></td>
                       <td><a href = 'delete/{{ $row->id }}'>Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  --}}

 {{-- data table --}}

 <table id="example" class="display " style="width:100%">
    <thead>
        <tr>
            <th>id</th>

            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
         @foreach($player as $row)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $row->fname }}</td>
            <td>{{ $row->lname }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>


            
        </tr>
        @endforeach 
    </tbody>
    <tfoot>
        <tr>
            <th>id</th>

            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </tfoot>
</table>






  
    {{-- <form action="" method="get">
        <div class="row">
            <div class="col-md-10">
                <input type="text" class="form-control mb-3" placeholder="search" name="q" id="searchUser">
                <span id="userList"></span>
            </div>
            <div class="col-md-2">
                <input type="submit" class="form-control mb-3" value="Search">
            </div>
        </div>
    </form> --}}

    {{-- <h3>Search</h3> --}}
    <!-- Search input -->
  {{-- <form class="mb-5">
        <input
    type="search"
    class="form-control"
    placeholder="Find user here"
    name="search"
    value="{{ request('search') }}"
>
    </form>
    <table style="width: 100%">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th> --}}

            

            {{-- <th>Status</th>  --}}
        {{-- </thead>
        <tbody>
            @foreach($player as $row)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $row->fname }}</td>
                <td>{{ $row->lname }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>


                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <center class="mt-5">
        {{  $player->withQueryString()->links() }}
    </center> --}}
</div>
</div>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {  
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        processing: true,
        serverSide: true,
        // ajax:{
        //     type:"POST",
        //     url:"{{route('datatable')}}", 
        //     data:{"_token": "{{ csrf_token() }}"},
        //     dataType: "json",
        //      }, 
      
        // columns: [
        //     { "data": "fname"},
        //     { "data": "lname"},
        //     { "data": "email"},
        //     { "data": "phone"},
        //     { "data": "created_at"},
        //     { "data": "updated_at"},

        //     ] 
      
        
    });
} );

// $(document).ready(function() {
    	

//    $('#example').DataTable({
        // processing: true,
        // serverSide: true,
        // ajax:{
           
            // url:"{{route('datatable')}}", 
            
            // data:{"_token": "{{ csrf_token() }}"},
            // dataType: "json",
            //  }, 
        
//         columns: [
//             {data: 'fname', name: 'fname'},
//             {data: 'lname', name: 'lname'},
//             {data: 'email', name: 'email'},
//             {data: 'phone', name: 'phone'},
//             {data: 'created_at', name: 'created_at'},
//             {data: 'updated_at', name: 'updated_at'},
//         ]
//     });
    
//   });
//     });
    
</script>








</body>

</html>

