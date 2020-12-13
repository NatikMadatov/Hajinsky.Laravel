@extends('website.admin')



@section('content')




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="col-12 my-4">
          <a href="{{route('getNewOffers')}}" class="btn btn-primary">add new offer</a>
        </div>

          <!-- Page Heading -->
          <h1 class="h3 mb-3 text-gray-800 ">Offers</h1>
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name_az</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                     @foreach($results as $r)
                    <tr>
                      
                      <td>{{$r->id}}</td>
                      <td>{{$r->name_az}}</td>
                      <td><a href="{{route('getNewOffersPost',['id' => $r->id])}}" class="btn btn-success">edit</a></td>
                      <td><a href="{{route('deleteOffers',['id' => $r->id])}}" class="btn btn-danger">delete</a></td>
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

