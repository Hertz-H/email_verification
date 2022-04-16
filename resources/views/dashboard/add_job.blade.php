@extends('layout.master')

@section('content')

            <div class="form-container  ">
                <h3 > job</h3>
                <form class="row g-3 " action="{{ route('save_job')}}" method="post" enctype="multipart/form-data">
                  @csrf                   
                   <div class="col-md-6">
                      <label for="Title" class="form-label" >Title</label>
                      <input type="text" class="form-control" id="Title"name="title" required>
                      @error('title')
                      <span style="color:red;font-size:12px"> {{ $message }} </span> 
                    
                     @enderror
                    </div>
                    <div class="col-md-3">
                      <label for="Company" class="form-label">Company</label>
                      <select class="form-select" aria-label="Default select example" name="company">
                       @foreach ($data as $item)
                       <option value="{{$item["id"]}}" >{{$item["name"]}}</option>
                       @endforeach
                
                      </select>

                    </div>
                    {{-- <div class="col-md-6">
                      <label for="Company" class="form-label">Company</label>
                      <input type="text" class="form-control" id="location" name="location" required>
                      @error('location')
                      <span style="color:red;font-size:12px"> {{ $message }} </span> 
                    
                     @enderror
                    </div> --}}
                    <div class="col-md-3">
                      <label for="Skill" class="form-label">type </label>
                      <select class="form-select" aria-label="Default select example" name="interval">
                       
                        <option value="Part_time" >Part Time</option>
                        <option value="Full_time" >Full Time</option>  
                        <option value="Internship" >Internship</option>
                        

                      </select>

                    </div>
              
                    
                    {{-- <div class="col-md-6">
                      <label for="Company" class="form-label">location</label>
                      <select name="company" id="">
                        <option value=""></option>
                      </select>

                    </div> --}}
                    <div class="col-6">
                        <label for="inputFrom" class="form-label">From </label>
                        <input type="date" class="form-control" id="inputFrom" placeholder="" name="from"required>
                        @error('from')
                        <span style="color:red;font-size:12px"> {{ $message }} </span> 
                      
                       @enderror
                      </div>
                   
                    <div class="col-6">
                      <label for="inputTo" class="form-label">To</label>
                      <input type="date" class="form-control" id="inputTo" placeholder="" name="to"required>
                    </div>
                    @error('to')
                      <span style="color:red;font-size:12px"> {{ $message }} </span> 
                    
                     @enderror
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3"name="description" required></textarea>
                      </div>
                      @error('description')
                      <span style="color:red;font-size:12px"> {{ $message }} </span> 
                    
                     @enderror
                      <div class="col-12">
                        <label for="description" class="form-label">requirements</label>
                        <textarea class="form-control" id="requirements" rows="3"name="requirements" required></textarea>
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


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
</body>
@endsection