@extends('website.admin')



@section('content')









 <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="col-12 my-3">
          <a href="{{route('getNewProject')}}" class="btn btn-primary">add new project</a>
        </div>

       <h1 class="h3 mb-3 text-gray-800 ">Projects</h1>

        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name_az</th>
                      <th>Text_az</th>
                      <th>Image</th>
                      <th>URL</th>
                    
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                  
                  </tfoot>
                  <tbody>
                    @foreach($results as $r)
                    
                    <tr>
                      <td>{{$r->id}}</td>
                      <td>{{$r->name_az}}</td>
                      <td>{{$r->text}}</td>
                      <td><img height="50" src="{{'uploads/'.$r->image}}"></td>
                      <td><a href="{{$r->URL}}" class="btn btn-warning" style="width:50">Open video</a></td>
                      <td><a href="{{route('getNewProjectPost',['id' => $r->id])}}" class="btn btn-success">edit</a></td>
                      <td><a href="{{route('deleteProject',['id' => $r->id])}}" class="btn btn-danger" onclick=" return myConfirm()" value="delete" >delete</a></td>
                      
                    </tr> 

                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->






@endsection




@section('footer')

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://github.com/NatikMadatov"> made by NatikMadatov</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



@endsection
