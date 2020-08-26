@extends('layouts/adminHeader')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Product</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Please enter details</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="admin/storeProduct">
                        @csrf
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Product Name</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="name" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Product Discription <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea name="desc" class="form-control" rows="3"
                                    placeholder="Product Discription"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Select Catagoires</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="category[]" class="select2_multiple form-control" multiple="multiple"
                                    tabindex="-1">
                                    <option value="1">Clothing</option>
                                    <option value="2">Electronics</option>
                                    <option value="3">Home&Kichen</option>
                                    <option value="4">Beauty</option>
                                    <option value="5">Toys</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Product Price</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" name="price" min="0" class="form-control"
                                    placeholder="Product Price">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Product Image</label>
                            <div class="ol-md-9 col-sm-9 ">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)"
                                    id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                <input type="file" name="image" data-role="magic-overlay" data-target="#pictureBtn"
                                    data-edit="insertImage" accept="image/*">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection