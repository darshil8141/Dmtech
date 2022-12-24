<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="border shadow p-5 rounded" action="{{url('/')}}/register" method="POST">
        @csrf
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
    <h1 class="text-center">Registraion</h1>
    <div class="container">
        <x-input type="text" name="Name" label="Name"/>
        <x-input type="email" name="Email" label="Email"/>
        <x-input type="text" name="password" label="Password"/>
        <x-input type="text" name="password_confimation" label="Confirm Password"/>
    </div class="mb-3 ">
   <center> <button class="btn btn-primary " style="width:150px;border-radius:50px;"><b>Submit</b></button>
   </center>
    </div>
    {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" name="Name" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{old('Name')}}">
        <span class="text-danger">
            @error('Name')
                {{$message}}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="Email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{old('Email')}}">
        <span class="text-danger">
            @error('Email')
            {{$message}}
            @enderror
        </span>

    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="Password" class="form-control" id="exampleFormControlInput1" placeholder="">
        <span class="text-danger">
            @error('Password')
            {{$message}}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
        <input type="password" name="password_confimation" class="form-control" id="exampleFormControlInput1" placeholder="">
        <span class="text-danger">
            @error('password_confimation ')
            {{$message}}
            @enderror
        </span>
    </div class="mb-3 ">
   <center> <button class="btn btn-primary " style="width:150px;border-radius:50px;"><b>Submit</b></button>
   </center>
</div> --}}
</form>
</body>
</html>
