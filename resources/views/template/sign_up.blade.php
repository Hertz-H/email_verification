<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/signUp.css">
</head>

<body>
    <div class=" Sign  ">
        <h3 class="text-center "> Sign Up</h3>
        <form class="row g-3 needs-validation" action="{{ route('signUser') }}" method="post">
            @csrf
            <div class="col-md-12">
                <label for="inputName" class="form-label">First Name</label>
                <input type="text" class="form-control " id="inputName" placeholder="First Name" name="name"
                    value="{{ old('password') }}">

            </div>
            @error('name')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror

            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password"
                    name="password"value="{{ old('password') }}">
            </div>
            @error('password')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror

            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password"
                    name="confirm_pass">
            </div>
            @error('confirm_pass')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror

            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="Email" class="form-control" id="inputEmail"
                    placeholder="username@gmail.com"name="email" value="{{ old('email') }}">
            </div>
            @error('email')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror
            <div class="col-12 ">
                <button type="submit" class="btn  save">sign up</button>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
