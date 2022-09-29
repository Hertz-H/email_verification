@extends('layout.user_master')

@section('content')
    <div class="form-container  ">
        <h3> Education</h3>
        <form class="row g-3 " action="{{ route('updateEducation') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="Title" class="form-label">Name</label>
                <input type="text" class="form-control" id="Title"name="name"
                    value="{{ $data['education'][0]['name'] }}" required>
                <input style="display:none;" type="text" class="form-control" id="Title"name="id" required
                    value="{{ $data['education'][0]['id'] }}">

                @error('title')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="Company" class="form-label">degree</label>
                <input type="text" class="form-control"
                    id="Title"name="degree"value="{{ $data['education'][0]['degree'] }}" required>




            </div>

            <div class="col-6">
                <label for="inputFrom" class="form-label">From </label>
                <input type="date" class="form-control" id="inputFrom" placeholder="" name="from"required
                    value="{{ $data['education'][0]['start_date'] }}">
                @error('from')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>

            <div class="col-6">
                <label for="inputTo" class="form-label">To</label>
                <input type="date" class="form-control" id="inputTo" placeholder="" name="to"required
                    value="{{ $data['education'][0]['end_date'] }}">
            </div>
            @error('to')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror


            <div class="col-2">
                <button type="submit" class="btn save">Save</button>
            </div>
            <div class="col-2">
                <button type="submit" class="btn cancel"><a href="/list_education">Cancel</a></button>
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
