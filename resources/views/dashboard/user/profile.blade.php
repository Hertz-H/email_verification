@extends('layout.user_master')

@section('content')

<div class="form-container  ">
    <div class="personal_info ">
      <h3> Personal information</h3>
      <form class="row g-3 " action="/update_profile " method="get">
         <div class="col">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Name</h6>
                </div>
              
                  <div class="col-sm-9 text-secondary">
                    {{$data['name']}}
                  </div>
                 
                </div>
               
               
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$data['phone']}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$data['address']}}
                  </div>
                </div>
               
               
                @if (isset($data['Bio']))
                    
                <hr>
               <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Bio</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{$data['Bio']}}
                </div>
              </div>
              @endif
               
               
              </div>
              
            </div>
            <div class="row">
              <div class="col-2">
                <button type="submit" class="btn save"value="add">Edit</button>
              </div>
            </div>
         
             
     
        </form>
    </div>
</div>


@endsection