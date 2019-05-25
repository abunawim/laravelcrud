@extends('backend.master')

@section('page_title' ,'Create Post')

@section('body_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="outter-wp">
							
    <div class="graph-form">
        <div class="form-body">
            {!! Form::open(['route' => 'contact.store' , 'files' => true]) !!}
                <div class="form-group"> 
                        <label for="posttitle">Contact Name</label> 
                        <input type="text" class="form-control" id="posttitle" name="contact_name"> 
                </div>

                <div class="form-group"> 
                    <label for="exampleInputPassword1">Contact Description</label> 
                     <textarea rows="6" class="form-control1 control2" placeholder="Description :" name="contact_description"></textarea>
                </div>

                <div class="col-md-12 form-group2 group-mail">
                  <label class="control-label">Gerder</label>
                    <select name="gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>

                <div class="col-md-12 form-group">
                  <div class="checkbox1">
                    <label class="check">
                      <input type="checkbox" ng-model="model.winner"  class="ng-invalid ng-invalid-required" name="contact_emergency">
                      Contact Emargency
                    </label>
                  </div>
                </div>

                <div class="form-group"> 
                    <label for="exampleInputFile">Send Image</label> 
                    <input type="file" id="exampleInputFile" name="fileimage">  
                </div>
                                         
                    <button type="submit" class="btn btn-default">Submit</button> 
            {!! Form::close() !!}
        </div>

    </div>
</div>

@stop