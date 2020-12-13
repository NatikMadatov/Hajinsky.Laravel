@extends('website.admin')


@section('content')


   <div class="container-fluid">


              <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Project   </h3>
                </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">

                         <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="" method="post">
                           @csrf           
                                <!--  -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add  Image
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" type="file" name="image" required="" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Url (youtube)
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" type="text" name="URL" required="">
                                    </div>
                                </div>
 
                                <div class="form-group text_div">
                                    <label for="" class="textarea_az">Name az :</label>
                                    <input type="text" name="name_az" class="form-control">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Name en :</label>
                                    <input type="text" name="name_en" class="form-control">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_ru">Name ru :</label>
                                    <input type="text" name="name_ru" class="form-control">
                                </div>


                                <div class="form-group text_div">
                                    <label for="" class="textarea_az">Text az :</label>
                                    <textarea name="text_az" class="form-control"></textarea>
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Text en :</label>
                                    <textarea name="text_en" class="form-control"></textarea>
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_ru">Text ru :</label>
                                    <textarea name="text_ru" class="form-control"></textarea>
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_ru">Date :</label>
                                    <input type="date" name="date" class="form-control">
                                </div>

                               <!--  <div class="form-group text_div">
                                    <label for="" class="textarea_ru">Gallery :</label>
                                    <input type="file" name="gallery[]" class="form-control" multiple="">
                                </div> -->


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

        </div> <!-- end content -->



       

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
