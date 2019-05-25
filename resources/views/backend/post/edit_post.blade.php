@extends('backend.master')

@section('page_title' ,'Edit Post')

@section('body_content')
<div class="outter-wp">
							
    <div class="graph-form">
                <div class="form-body">
                    
                    {!! Form::open(['route' => ['post.update' , $singleDataEdit->id ],'files' => true , 'method' =>'put']) !!}
                    
                    
                        <div class="form-group"> 
                            <label for="posttitle">Post Title</label> 
                            <input type="text" class="form-control" id="posttitle" name="posttitle" value="{{ $singleDataEdit->posttitle }}"> 
                        </div>

                        <div class="form-group"> <label for="exampleInputPassword1">Post Content</label> 
                            <input type="text" class="form-control" id="exampleInputPassword1" name="postcontent" value="{{ $singleDataEdit->postcontent }}"> 
                        </div> 
                       <!--  <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile">  
                       </div>  -->
                        
                        <button type="submit" class="btn btn-default">Update</button> 
                    {!! Form::close() !!}
                </div>

    </div>
</div>

@stop