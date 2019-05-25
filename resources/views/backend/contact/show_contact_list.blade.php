@extends('backend.master')

@section('page_title' ,'All Contact List')

@section('body_content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

<div class="graph">
	<div class="tables">
		<table class="table table-bordered"> 
			<thead> 
				<tr> 
					<th>#</th> 
					<th>Content Name</th> 
					<th>Content Description</th>
					<th>Image name</th>
					<th>Action</th> 
				</tr> 
			</thead> 
			<tbody>				
				@foreach ($allContactList as $allContentListSingle)   
					<tr> 
						<th scope="row">{{ $allContentListSingle->id }}</th> 
						<td>{{ $allContentListSingle->contact_name }}</td> 
						<td>{{ $allContentListSingle->contact_description }}</td>
						<td>
							<img src="{{ URL::asset('public/images/'.$allContentListSingle->fileimage) }}" width="100px" height="100px" />
						</td> 
						<td>
							<a href="{{ route('contact.edit', $allContentListSingle->id ) }}">
								<button type="submit" class="btn btn-default">Edit</button>
						    </a>

							 {!! Form::open(['route' => ['contact.destroy' , $allContentListSingle->id ],'files' => true , 'method' =>'delete']) !!}
								<button type="submit" class="btn btn-default">Delete</button>
							 {!! Form::close() !!}

						</td> 
					</tr>
				@endforeach 
			</tbody> 
		</table> 
	</div>
</div>

@stop