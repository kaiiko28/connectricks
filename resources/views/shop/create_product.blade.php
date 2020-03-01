@extends('layouts.admin')

@section('styles')
 <style>

    .form-control[disabled], .form-control[readonly] {
        color: #000000;
    }
    .form-control {
        margin: 10px;
        padding: 9px 10px;
        font-size: 18px;
        line-height: 18px;
    }
    .bg-default {
        color: #fff!important;
        background: #ccccccba;
    }
    .form-control {
        margin: 10px;
        padding: 9px 10px;
        font-size: 12px;
        line-height: 18px;
    }
    .panel-title{
        padding: 10px;
    }
    .btn-group.bootstrap-select.form-control.select {
        margin-top: 0;
    }
    .note-editable {
        color: #000;
    }


 </style>
@endsection

@section('content')


        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3><span class="fa fa-mail-forward"></span> Add new product</h3>
                        <form action="{{ route('shop.product_store') }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" style="margin:0" id="officer" name="p_name" required="">
                                    <label class="float-label" for="officer">Product Name</label>

                                           
                                        <label class="float-label mt-3" for="officer">Product preview image (optional)</label>
                                        <input type="text" class="form-control text-right" style="margin:0;width:100%; float:right;" id="officer" placeholder="paste link of cover images here" name="p_image">
                                    
                                    
                                </div>
                                
                                    
                                         

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label mt-2">Categories</label> <br>
                                                

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                      </div> --}}

                                                        <select class="btn btn-outline-secondary m-0 form-control p-1" name="p_category">
                                                            <option value="" disabled selected>Select here</option>
                                                            <option value="Perfume">Perfume</option>
                                                            <option value="Food">Food</option>
                                                            <option value="Beverage">Beverage</option>
                                                            <option value="Watch">Watch</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control m-0" aria-label="Text input with dropdown button" name="p_categorytext" placeholder="or type here">
                                                  </div>
                                                  
                                            </div>
                                            <div class="col-sm-6">
    
                                                    <label class="mt-5 mr-4">view to homepage?</label>
                                                    {{-- <label class="check">
                                                        <input type="radio" class="iradio" name="p_feature" checked="checked"/> NO
                                                    </label>
                                                    <label class="check">
                                                        <input type="radio" class="iradio" name="p_feature" /> YES
                                                    </label> --}}
    
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input"  value="No" id="p_feature_no" checked name="p_feature">
                                                        <label class="custom-control-label" for="p_feature_no" >No</label>
                                                      </div>
                                                      
                                                      <!-- Default inline 2-->
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" value="Yes" id="p_feature_yes" name="p_feature">
                                                        <label class="custom-control-label" for="p_feature_yes">Yes</label>
                                                      </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <div class="form-group col-sm-6">
                                            <label class="float-label" for="officer">Product Price</label> <br>
                                                <span class="h1" style="color:#fff;">₱</span> <input type="number" class="form-control text-right" style="margin:0;width:90%; float:right;" id="officer" name="p_price" placeholder="Original Price" required>
                                           
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="float-label" for="officer">Product Discount (optional)</label> <br>
                                            <span class="h1" style="color:#fff;">₱</span> <input type="number" class="form-control text-right" style="margin:0;width:90%; float:right;" id="officer" placeholder="Discounted Price Optional" name="p_discount">
                                            
                                        </div>
                                        <div class="form-group col-sm-12 ml-0">
                                            
                                            <div class="field_wrapper">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="text-center">Other image to preview</h3>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                        <input class="form-control mx-0" type="text" name="preview_image[]" placeholder="other images here"/>
                                                    </div>
                                                    {{-- <div class="col-sm-2">
                                                        <a href="javascript:void(0);" class="add_button btn btn-info form-control mx-0" title="Add field"><span class="fas fa-plus"></span></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            {{-- <a href="javascript:void(0);" class="add_button btn btn-info form-control mx-0" title="Add field"><span class="fas fa-plus"></span></a> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="block">
                                        <h4>Product Description</h4>
                                        <textarea class="summernote form-control mx-0" name="p_disc" style="color:#000!important;" files='true'>

                                        </textarea>
                                    </div>

                                    <div class="block">
                                        <h4>Link to Product</h4>
                                        <input class="form-control mx-0" name="p_link" style="color:#000!important;">

                                        </textarea>
                                    </div>


                                </div>

                            </div>

                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>


        </div>
@stop


@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper

        var x = 1; //Initial field counter is 1

        var fieldHTML = '<section><div class="row">' +
            '<div class="col-sm-10">' +
                '<input class="form-control" type="text" name="preview_image[]" placeholder="other images here"/>' +
            '</div>' +
            '<div class="col-sm-2">' +
                '<a href="javascript:void(0);" class="remove_button btn btn-danger form-control"><span class="fas fa-times"></span</a>' +
            '</div>' +
        '</div></section>'; //New input field html 
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest('section').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
@stop




