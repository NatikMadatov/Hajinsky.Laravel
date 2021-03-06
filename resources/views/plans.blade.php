@extends('website.admin')


@section('content')

 <!-- Begin Page Content -->
        <div class="container-fluid">

           <div class="col-12 my-3">
          <a href="{{route('getNewPlans')}}" class="btn btn-primary">add new Plans</a>
        </div>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Plans</h1>
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>name_az</th>
                      <th>edit</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($results as $r)
                    
                    <tr>
                      <td>{{$r->id}}</td>
                      <td>{{$r->name_az}}</td>
                  
                      <td><a href="{{route('getNewPlansPost',['id' => $r->id])}}" class="btn btn-success">edit</a></td>
                      <td><a href="{{route('deletePlans',['id' => $r->id])}}" class="btn btn-danger" onclick=" return myConfirm()" value="delete" >delete</a></td>
                      
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



 