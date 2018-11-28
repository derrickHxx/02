@extends('admin.layout.base')
@section('title','Dashboard')
@section('data-page-id','adminDashboard')

@section('content')

 <div class="dashboard admin_shared">
 	<div class="row expanded collapse" data-equalizer data-equalizer-on="medium">
 		<!-- Order Summary -->
 		<div class="small-12 medium-3 column summary" data-equalizer-watch>
 			<div class="card">
 				<div class="card-section">
 					<div class="row">

 						<div class="small-3 column">
 							<i class="fa fa-shopping-cart" aria-hidden="true"> </i>
 						</div>
 						<div class="small-9 column text-left">
 							<p>Total Orders</p>
 							<h4>5000</h4>
 						</div>
 					</div>
 				</div>

 				<div class="card-divider">
 					<div class="row column">
 						<a href="#">Order Details</a>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Stock Summary -->
 		<div class="small-12 medium-3 column summary" data-equalizer-watch>
 			<div class="card">
 				<div class="card-section">
 					<div class="row">

 						<div class="small-3 column">
 							<i class="fa fa-thermometer-empty" aria-hidden="true"> </i>
 						</div>
 						<div class="small-9 column text-left">
 							<p>Stock</p>
 							<h4>5000</h4>
 						</div>
 					</div>
 				</div>

 				<div class="card-divider">
 					<div class="row column">
 						<a href="/02/public/admin/product/inventory">View Products</a>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Revenue Summary -->
 		<div class="small-12 medium-3 column summary" data-equalizer-watch>
 			<div class="card">
 				<div class="card-section">
 					<div class="row">

 						<div class="small-3 column">
 							<i class="fa fa-money" aria-hidden="true"> </i>
 						</div>
 						<div class="small-9 column text-left">
 							<p>Revenue</p>
 							<h4>5000</h4>
 						</div>
 					</div>
 				</div>

 				<div class="card-divider">
 					<div class="row column">
 						<a href="#">Payment details</a>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Signup Summary -->
 		<div class="small-12 medium-3 column summary" data-equalizer-watch>
 			<div class="card">
 				<div class="card-section">
 					<div class="row">

 						<div class="small-3 column">
 							<i class="fa fa-user" aria-hidden="true"> </i>
 						</div>
 						<div class="small-9 column text-left">
 							<p>Signup</p>
 							<h4>5000</h4>
 						</div>
 					</div>
 				</div>

 				<div class="card-divider">
 					<div class="row column">
 						<a href="#">Registered Users</a>
 					</div>
 				</div>
 			</div>
 		</div>

 		
 	</div>
 </div>

@endsection