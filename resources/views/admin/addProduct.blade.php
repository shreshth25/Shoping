@extends('admin.layouts.master')
@section('content')
    <div class="row">
       <!-- Form controls -->
       <div class="col-sm-12">
          <div class="panel panel-bd lobidrag">
             <div class="panel-heading">
                <div class="btn-group" id="buttonlist"> 
                   <a class="btn btn-add " href="clist.html"> 
                   <i class="fa fa-list"></i>  Customer List </a>  
                </div>
             </div>
             <div class="panel-body">
                <form class="col-md-12">
                   <div class="form-group">
                      <label>Product name</label>
                      <input type="text" class="form-control" name="product_name" placeholder="Enter product name" required>
                   </div>

                   <div class="form-group">
                    <label>Product code</label>
                    <input type="text" class="form-control" name="product_code" placeholder="Enter product name" required>
                    </div>

                    <div class="form-group">
                        <label>Product color</label>
                        <input type="text" class="form-control" name="product_color" placeholder="Enter product name" required>
                    </div>

                    <div class="form-group">
                        <label>Product description</label>
                        <textarea type="text" class="form-control" name="product_description" placeholder="Enter product name" required></textarea>
                    </div>
                   <div class="form-group">
                      <label>Picture upload</label>
                      <input type="file" name="picture" class="form-control">
                      <input type="hidden" name="old_picture">
                   </div>
                      <a href="#" class="btn btn-warning">Reset</a>
                      <a href="#" class="btn btn-success">Save</a>
                </form>
             </div>
          </div>
       </div>
    </div>
@endsection
@section('script')
    
@endsection