@extends('website.admin')


@section('content')



<div class="col-md-12 col-sm-12 col-xs-12">



                    <div class="x_panel">

                        <div class="x_content">

                            <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="" method="post">

                               @csrf


                                <div class="form-group text_div">
                                    <label for="" class="textarea_az">Name az :</label>
                                    <input type="text" name="name_az" class="form-control" value="{{$results->name_az}}">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Name en :</label>
                                    <input type="text" name="name_en" class="form-control" value="{{$results->name_en}}">
                                </div>

                                <div class="form-group text_div">
                                    <label for="" class="textarea_ru">Name ru :</label>
                                    <input type="text" name="name_ru" class="form-control" value="{{$results->name_ru}}">
                                </div>
                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Price :</label>
                                    <input type="text" name="price" class="form-control" value="{{$results->price}}">
                                </div>
                                <div class="form-group text_div">
                                    <label for="" class="textarea_en">Count :</label>
                                    <input type="text" name="count" class="form-control" value="{{$results->count}}">
                                </div>

                                <div class="form-group text_div">
                                    <p>Sciences</p>
                                    <hr>
                                </div>
                                                                    <div class="form-group text_div">
                                        <label for="" class="textarea_en">English languagessa :</label>
                                        <input type="checkbox" name="sciences[]" value="1" class="form-control">
                                    </div>
                                                                    <div class="form-group text_div">
                                        <label for="" class="textarea_en">NLP :</label>
                                        <input checked="" type="checkbox" name="sciences[]" value="2" class="form-control">
                                    </div>
                                                                    <div class="form-group text_div">
                                        <label for="" class="textarea_en">Psychology :</label>
                                        <input checked="" type="checkbox" name="sciences[]" value="3" class="form-control">
                                    </div>
                                                                    <div class="form-group text_div">
                                        <label for="" class="textarea_en">Retorica :</label>
                                        <input checked="" type="checkbox" name="sciences[]" value="4" class="form-control">
                                    </div>
                                                                    <div class="form-group text_div">
                                        <label for="" class="textarea_en">python :</label>
                                        <input type="checkbox" name="sciences[]" value="6" class="form-control">
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

