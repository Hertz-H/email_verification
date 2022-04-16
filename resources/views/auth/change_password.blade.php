<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    :root{
    --main-color:#28b661;
    --secondary-color:#f3f5f0;
}
.Sign{
    /* background-color: wheat; */
    box-shadow: 0 8px 16px rgba(0, 0, 0, .15);
    padding:20px;
    width:400px;
        margin: auto;
        margin-top:30px;
        border-radius: 5px;

       
}

    .Sign h3{
        margin: 5px 0 15px 0;
        padding-bottom:20px;
        color:var(--main-color);
        /* padding-top:px; */
        border-bottom: 1px var(--main-color) solid;
       
    }
    .Sign .btn{
        background-color:var(--main-color);
        color:white;
        display: block;
        margin-top:20px;
        margin-bottom:15px;
        width: 100%;
        
    }
    
    .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #28b661 ;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(76 175 80 / 27%) ;
     
    }
    @media(max-width:768px){
        .Sign{
                width:80%;
        }
    }
</style>
<body>
    <div class=" Sign  ">
        <h3 class="text-center " >Change Password</h3>
        <form class="row g-3 needs-validation"   action="{{ route('update_password') }}" method="post">
            @csrf
           
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="old_password"value="{{old('old_password')}}">
              </div>
              @error('old_password')
              <span style="color:red;font-size:12px"> {{ $message }} </span> 
            
             @enderror
            
              <div class="col-md-12">
                  <label for="inputPassword4" class="form-label"> New Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="New Password" name="new_password" >
                </div>
                @error('new_password')
                <span style="color:red;font-size:12px"> {{ $message }} </span> 
              
               @enderror
               <div class="col-md-12">
                <label for="inputPassword4" class="form-label"> Confirm Password </label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="new_password_confirmation" >
              </div>
              @error('new_password')
              <span style="color:red;font-size:12px"> {{ $message }} </span> 
            
             @enderror
              <div class="col-12 ">
                <button type="submit"  class="btn  save">Confirm</button>
              </div>
              
            </form>
         
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>