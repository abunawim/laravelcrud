@extends('backend.master')

@section('page_title' ,'Edit contact')

@section('body_content')
<div class="outter-wp">
						
    <div class="graph-form">
                <div class="form-body">
                    
                    {!! Form::open(['route' => ['contact.update' , $singleDataEdit->id ],'files' => true , 'method' =>'put']) !!}
                    
                    
                <div class="form-group"> 
                        <label for="posttitle">Contact Name</label> 
                        <input type="text" class="form-control" id="posttitle" name="contact_name" value="{{ $singleDataEdit->contact_name}}"> 
                </div>

                <div class="form-group"> 
                    <label for="exampleInputPassword1">Contact Description</label> 
                     <textarea rows="6" class="form-control1 control2" placeholder="Description :" name="contact_description">{{ $singleDataEdit->contact_description}}</textarea>
                </div>

                <div class="col-md-12 form-group2 group-mail">
                  <label class="control-label">Gender</label>
                    <select name="gender">
                        @if($singleDataEdit->gender == '1')
                        <option value="1" selected="selected" >Male</option>
                        <option value="2" >Female</option>
                        
                        @else
                        <option value="2" selected="selected">Female</option>
                        <option value="1"  >Cricket</option>
                        @endif
                    </select>
                </div>

                <div class="col-md-12 form-group">
                  <div class="checkbox1">
                    <label class="check">
                      <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required" name="contact_emergency" 
                       @if($singleDataEdit->contact_emergency == 'on')
                       checked
                       @endif
                      >
                      Content Inactive
                    </label>
                  </div>
                </div>

                <div class="form-group"> 
                    <label for="exampleInputFile">Content Image</label> 
                    <input type="file" id="exampleInputFile" name="fileimage" value="http://localhost/samplelaravel/public/images/1557387828.jpg">
                    <img src="{{ URL::asset('public/images/'.$singleDataEdit->fileimage) }}" width="100px" height="100px" /> 
                   
                </div>
                        
                        <button type="submit" class="btn btn-default">Update</button> 
                    {!! Form::close() !!}
                </div>

    </div>
</div>

@stop