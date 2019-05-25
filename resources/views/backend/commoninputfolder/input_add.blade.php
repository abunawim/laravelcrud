@extends('backend.master')

@section('page_title' ,'Create Common Input')

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
            {!! Form::open(['route' => 'commoninput.store' , 'files' => true]) !!}
                <div class="form-group"> 
                        <label for="posttitle">Common Name</label> 
                        <input type="text" class="form-control" id="posttitle" name="content_name"> 
                </div>

                <div class="form-group"> 
                    <label for="exampleInputPassword1">Common Description</label> 
                     <textarea rows="6" class="form-control1 control2" placeholder="Description :" name="content_description"></textarea>
                </div>

                <div class="col-md-12 form-group2 group-mail">
                  <label class="control-label">Sports</label>
                    <select name="sports">
                        <option value="1">Cricket</option>
                        <option value="2">Football</option>
                    </select>
                </div>

                <div class="col-md-12 form-group">
                  <div class="checkbox1">
                    <label class="check">
                      <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required" name="content_active">
                      Common Inactive
                    </label>
                  </div>
                </div>

                <div class="form-group"> 
                    <label for="exampleInputFile">Common Image</label> 
                    <input type="file" id="exampleInputFile" name="fileimage">  
                </div>

                <div class="form-group"> 
                    <label for="exampleInputFile">Common Images</label> 
                    <input type="file" id="exampleInputFile" name="fileimage" multiple>  
                </div>
                                         
                    <button type="submit" class="btn btn-default">Submit</button> 
            {!! Form::close() !!}
        </div>

    </div>
</div>

@stop