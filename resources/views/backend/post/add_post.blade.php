@extends('backend.master')

@section('page_title' ,'This is Home page')

@section('body_content')
<div class="outter-wp">
							
    <div class="graph-form">
                <div class="form-body">
                    {!! Form::open(['route' => 'post.store' , 'files' => true]) !!}
                        <div class="form-group"> 
                            <label for="posttitle">Post Title</label> 
                            <input type="text" class="form-control" id="posttitle" name="posttitle"> 
                        </div>

                        <div class="form-group"> <label for="exampleInputPassword1">Post Content</label> 
                            <input type="text" class="form-control" id="exampleInputPassword1" name="postcontent"> 
                        </div> 
                       <div class="form-group"> 
                        <label for="exampleInputFile">File input</label> 
                        <input type="file" id="exampleInputFile" name="fileimage">  
                        </div>
                                             
                        <button type="submit" class="btn btn-default">Submit</button> 
                    {!! Form::close() !!}
                </div>

    </div>
</div>

@stop