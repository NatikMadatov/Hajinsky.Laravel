@extends('website.admin')


@section('content')


<div class="container-fluid">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Company </h3>
                </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">

                            <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="" method="post">

                                @csrf


                                <div class="form-group text_div">
                                    <label for="" class="textarea_az">Company Name  :</label>
                                    <input type="text" name="company_name" class="form-control" value="{{$results->company_name}}">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Name  :</label>
                                    <input type="text" name="name" class="form-control" value="{{$results->name}}">
                                </div>
                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Surname :</label>
                                    <input type="text" name="surname" class="form-control" value="{{$results->surname}}">
                                </div>


                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Telephone :</label>
                                    <input type="text" name="telephone" class="form-control" value="{{$results->telephone}}">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Staff count :</label>
                                    <input type="number" name="staff_count" class="form-control" value="{{$results->staff_count}}">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Email :</label>
                                    <input type="email" name="email" class="form-control" value="{{$results->email}}">
                                </div>
                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Password :</label>
                                    <input type="text" name="password" class="form-control" value="{{$results->password}}">
                                </div>



                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">

                                        <button id="send" type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                
            </div> <!-- end container-fluid -->

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
