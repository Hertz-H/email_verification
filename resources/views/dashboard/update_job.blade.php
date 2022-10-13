@extends('layout.master')

@section('content')
    <div class="form-container  ">
        <h3> update job</h3>

        <form class="row g-3 " action="{{ route('updatejob', $data['id']) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-md-5">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title"name="title" required value="{{ $data['title'] }}">
                <input style="display:none;" type="text" class="form-control" id="Title"name="id" required
                    value="{{ $data['id'] }}">

                @error('title')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category">
                    @foreach ($categories as $item)
                        <option value="{{ $item['id'] }}" @php
echo $item['id']==$data->cate_id? 'selected':'' @endphp>
                            {{ $item['title'] }}</option>
                    @endforeach

                </select>

            </div>

            <div class="col-md-3">
                <label for="Skill" class="form-label">Type </label>
                <select class="form-select" aria-label="Default select example" name="interval">

                    <option value="Part_time"@php echo $data['inerval']=="Part_time"? 'selected':'' @endphp>Part Time
                    </option>
                    <option value="Full_time" @php echo $data['inerval']=="Full_time"? 'selected':'' @endphp>Full Time
                    </option>
                    <option value="Internship"@php echo $data['inerval']=="Internship"? 'selected':'' @endphp>Internship
                    </option>


                </select>

            </div>
            <div class="col-md-4">
                <label for="C" class="form-label">Company</label>
                <select class="form-select" aria-label="Default select example" name="company">
                    @foreach ($companies as $item)
                        <option value="{{ $item['id'] }}" @php
echo $item['id']==$data->cate_id ? 'selected' : '' @endphp>
                            {{ $item['name'] }}</option>
                    @endforeach

                </select>

            </div>


            <div class="col-4">
                <label for="inputFrom" class="form-label">From </label>
                <input type="date" class="form-control" id="inputFrom" placeholder="" name="from"required
                    value="{{ $data['start_date'] }}">
                @error('from')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>

            <div class="col-4">
                <label for="inputTo" class="form-label">To</label>
                <input type="date" class="form-control" id="inputTo" placeholder="" name="to"required
                    value="{{ $data['end_date'] }}">
            </div>
            @error('to')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror

            <div class="col-12">
                <label for="requirements" class="form-label">Requirements</label>
                <textarea class="form-control" id="requirements" rows="3" name="requirements" required>
                            {{ $data['requirements'] }}
                        </textarea>
            </div>
            @error('requirements')
                <span style="color:red;font-size:12px"> {{ $message }} </span>
            @enderror
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>

    <script>
        CKEDITOR.replace('requirements');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    </body>
@endsection
