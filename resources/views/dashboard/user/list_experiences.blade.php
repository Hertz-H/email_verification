@extends('layout.user_master')

@section('content')


            <div class="form-container">
                <div class="exper_info ">
                  @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                  </div>
                  @elseif (session('error'))
                      <div class="alert alert-danger" role="alert">
                          {{ session('error') }}
                      </div>
                  @endif
                    <h3 class="d-inline">  Experiences </h3> <a  class="add add_exp " href="/add_experience"> add</a>
                         
                                </div><table class="table table-image">
                                  <thead>
                                    <tr>                                      
                                      <th scope="col">Title</th>
                                      <th scope="col">Company</th>
                                      <th scope="col">Start</th>
                                      <th scope="col">End</th>
                                      <th scope="col">status</th>
                                      <th scope="col">actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($data as $item)
                               
                                    <tr>
            
                                     
                                      <td>{{$item["name"]}}</td>
                                      <td>{{$item["company"]}}</td>
                                      <td>{{$item["start_date"]}}</td>
                                      <td>{{$item["end_date"]}}</td>

                                   
                                      <td>
                                       @if ($item["is_active"]==1)
                                       <span style ="background-color: #e8fadf ;
                                       color: #71dd37;padding: 5px 8px; border-radius: 4px;
                                       padding-bottom: 9px;"class=" ">active</span>
                                       @else
                                       <span class=" " style="color: #ea2b33;
                                       background-color: #ffeced;padding: 5px 8px; border-radius: 4px;
                                       padding-bottom: 9px;">un active</span>
                                       @endif
                                        </td>
                                      <td> 
                                        <a href="update_experience/{{$item["id"]}}" class=" edit btn "><i class="fas fa-edit"></i></a><a href="activate_experience/{{$item["id"]}}/{{$item["is_active"]}}" class="btn  text-danger" ><i class="fas fa-trash-alt"></i></a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                    </div>
           </div>




</div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>

@endsection