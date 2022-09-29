@extends('layout.user_master')

@section('content')
    <div class="form-container  ">
        <h3> Personal Info</h3>

        <form class="row g-3  " action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="Title" class="form-label">name</label>
                <input type="text" class="form-control" id="Title"name="name" required value="{{ $data['name'] }}">
                <input style="display:none;" type="text" class="form-control" id="Title"name="id" required
                    value="{{ $data['id'] }}">

                @error('name')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror

            </div>

            <div class="col-md-6">
                <label for="Company" class="form-label">image</label>
                <input style="display:none;" type='text' name="prvImage" value='{{ $data['image'] }}'>
                <input type="file" class="form-control" id="logo" name="image" value="{{ $data['image'] }}">

                @error('image')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="Company" class="form-label">phone</label>
                <input type="text" class="form-control" id="Company" name="phone" required
                    value="{{ $data['phone'] }}">
                @error('phone')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="Company" class="form-label">address</label>
                <input type="text" class="form-control" id="Company" name="address" required
                    value="{{ $data['address'] }}">
                @error('address')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror

            </div>
            <div class="col-12">
                <label for="description" class="form-label">Bio</label>
                <textarea class="form-control" id="description" rows="3"name="bio">{{ $data['Bio'] }}</textarea>

            </div>
            @error('Bio')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror

            <div class="col-2">
                <button type="submit" class="btn save">Save</button>
            </div>
            <div class="col-2">
                <button type="submit" class="btn cancel"><a href="/profile">Cancel</a></button>
            </div>
        </form>
    </div>





    </div>









    </div>



    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    </body>
@endsection
