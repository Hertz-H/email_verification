@extends('layout.user_master')

@section('content')

            <div class="form-container  ">
                <h3 > Skill</h3>
                <form class="row g-3  " action="{{ route('updateContact')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="col-md-6">
                      <label for="Title" class="form-label" >name</label>
                      <select class="form-select" aria-label="Default select example" name="name">   
                        <option value="fab fa-facebook-f" >facebook</option>
                        <option value="fab fa-twitter" >twitter</option>  
                        <option value="fab fa-instagram" >instagram</option>
                        <option value="fab fa-linkedin-in" >linkedin</option>
                      </select>
                      <input  style="display:none;" type="text" class="form-control" id="Title"name="id" required  value="{{$data['id']}}">
                      @error('name')
                       <span style="color:red;font-size:12px"> {{ $message }} </span> 
                     
                      @enderror
                     
                    </div>
                
                   
                    <div class="col-md-6">
                      <label for="Company" class="form-label">link</label>
                      <input type="text" class="form-control" id="Company" name="link" required value="{{$data['link']}}">
                      @error('link')
                      <span style="color:red;font-size:12px"> {{ $message }} </span> 
                  
                     @enderror

                    </div>
                    
                
                    <div class="col-2">
                      <button type="submit" class="btn save">Save</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn cancel"> <a href="/list_skills">Cancel</a> </button>
                      </div>
                  </form>
        </div>
    

  
     
 
</div>


  


  



</div>



</div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
</body>
@endsection