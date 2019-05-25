@extends('backend.master')

@section('page_title' ,'All Post List')

@section('body_content')

<div class="graph">
		<div class="tables">
	
			<table class="table table-bordered"> 
				<thead> 
					<tr> 
						<th>#</th> 
						<th>Post Name</th> 
						<th>Post Title</th>
						<th>Image name</th>
						<th>Action</th> 
					</tr> 
				</thead> 
				<tbody>
					
				 @foreach ($allPostList as $allPostListSingle)   
					<tr> 
						<th scope="row">{{ $allPostListSingle->id }}</th> 
						<td>{{ $allPostListSingle->posttitle }}</td> 
						<td>{{ $allPostListSingle->postcontent }}
							

						</td>
						<td>
							<img src="{{ URL::asset('public/images/'.$allPostListSingle->fileimage) }}" width="100px" height="100px" />
							
						</td> 
						<td>
							<a href="{{ route('post.edit', $allPostListSingle->id ) }}">

								<button type="submit" class="btn btn-default">Edit</button>

						    </a>

							<!-- <a href="{{ route('post.destroy', $allPostListSingle->id ) }}"> -->

							 {!! Form::open(['route' => ['post.destroy' , $allPostListSingle->id ],'files' => true , 'method' =>'delete']) !!}
								<button type="submit" class="btn btn-default">Delete</button>
							 {!! Form::close() !!}
							
							<!-- </a> -->


						</td> 
					</tr>
				 @endforeach 
				</tbody> 
			</table> 
		</div>
</div>

@stop