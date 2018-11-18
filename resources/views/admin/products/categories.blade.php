@extends('admin.layout.base')
@section('title','Product Categories')

@section('content')

 <div class="category">
 	<div class="row expanded">
 		<h2>Product Categories</h2>

 		
 	</div>
 	@include('includes.message')
 	<div class="row expanded">

 		<div class="small-12 medium-6 column">
 			<form action="" method="post">
 				<div class='input-group'>
 					<input type="text" class="input-group-field" placeholder="Search by name">
 					<div class="input-group-button">
 						<input type="submit" class="button" value="Search">
 					</div>
 				</div>
 			</form>
 		</div>

 		<div class="small-12 medium-5 end column">
 			<form action="/02/public/admin/product/categories" method="post">
 				<div class='input-group'>
 					<input type="text" class="input-group-field" name="name" placeholder="Category name">
 					<input type="hidden" name="token" value="{{\App\Classes\CSRFToken::_token()}}">
 					<div class="input-group-button">
 						<input type="submit" class="button" value="Create">
 					</div>
 				</div>
 			</form>
 		</div>
 	</div>
 	<div class="row expanded">
 		<div class="small-12 medium-11 column">

 			@if(count($categories))
 				<table class='hover'>
 					<tbody>
 						@foreach($categories as $category)
 							<tr>
 								<td>{{$category['name']}}</td>
 								<td>{{$category['slug']}}</td>
 								<td>{{$category['added']}}</td>
 								<td width="100" class="text-right">
	 									<a data-open="item-{{$category['id']}}"><i class="fa fa-edit"></i></a>
	 									<a href="#"><i class="fa fa-times"></i></a>
 									 <!--Edit Category Modal -->
 									<div class="reveal" id="item-{{$category['id']}}" data-reveal>
									  <h2>Edit Category</h2>
									  <form>
						 				<div class='input-group'>
						 					<input type="text" value="{{$category['name']}}" name="name">
						 					<input type="hidden" name="token" value="{{\App\Classes\CSRFToken::_token()}}">
						 					<div>
						 						<input type="submit" class="button update-category" value="Update" id="{{$category['id']}}">
						 					</div>
						 				</div>
						 			</form>
									  <button class="close-button" data-close aria-label="Close modal" type="button">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>
 								</td>
 							</tr>
 						@endforeach
 					</tbody>
 				</table>
 				{!!$links!!}
 			@else
 				<h3>You have not created any category</h3>
 			@endif

 		</div>
 	</div>
 </div>

@endsection