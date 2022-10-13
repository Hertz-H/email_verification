@extends('layout.master')

@section('content')
    <div class="form-container  ">
        <h3> update category</h3>
        <form class="row g-3 " action="{{ route('edit_category', $data['id']) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-md-6">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title"name="title" required value="{{ $data['title'] }}">
                <input style="display:none;" type="text" class="form-control" id="Title"name="id" required
                    value="{{ $data['id'] }}">

            </div>
            @error('title')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror
            <div class="col-12">
                {{-- <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" rows="3"name="description" required value="{{old('description')}}">
                        {{$data['description']}}
                    </textarea> --}}
            </div>
            {{-- @error('description')
                    <span style="color:red;font-size:12px"> {{ $message }} </span> 
                  
                   @enderror --}}

            <div class="col-2">
                <button type="submit" class="btn save">Save</button>
            </div>
            <div class="col-2">
                <button type="submit" class="btn cancel">Cancel</button>
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
