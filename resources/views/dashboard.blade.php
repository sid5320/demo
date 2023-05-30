<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('display') }}">Data Display</a>
                    </li> --}}
                    @else
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                 
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
   <div class="container">
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label  class="form-label">First Name</label>
       <input type="text" class="form-control" id="fname" name="fname" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Last Name</label>
       <input type="text" class="form-control" id="lname" name="lname" >
    </div>
        <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Email address</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
       name="email"> 
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone Number</label>
         <input type="number" class="form-control" id="number" name="number">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Select Image </label>

            <input class="form-control" type="file" id="formFile"  name="path">
          </div>
         
        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button type="submit" class="btn btn-primary" href =" {{ route('store') }}">display</button> --}}
      </form>
   </div>
    @yield('content')
</body>
</html>