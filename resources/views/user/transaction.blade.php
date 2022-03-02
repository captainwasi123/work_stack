@extends('user.includes.master')
@section('title', 'My Trasactions')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<div class="account-over pad-right-20">
					<div class="transaction-value">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-6">
								<div class="total-paid blue-bg">
									<i class="fa fa-credit-card"> </i>
									<h5 class="no-margin"> Total Paid <p class=" no-margin"> $345.00 </p> </h5>
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-6">
								<div class="sort-by pad-top-30">
									<span class="pad-right-10">Sort by:</span>
									<select>
										<option> Sort By </option>
										<option> Sort By </option>
										<option> Sort By </option>
										<option> Sort By </option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="transactions-table pad-top-30 pad-bot-30">
						<table>
							<thead>
								<tr>
									<th> Transaction No. </th>
									<th> Date </th>
									<th> Order/Service </th>
									<th> Price </th>
									<th> Status </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 092634 </td>
									<td> Oct 22, 2020 </td>
									<td> Home Cooked </td>
									<td> $734.00 </td>
									<td> <a class="bg-green"> Completed </a> </td>
								</tr>
								<tr>
									<td> 092634 </td>
									<td> Oct 22, 2020 </td>
									<td> Home Cooked </td>
									<td> $734.00 </td>
									<td> <a class="bg-red"> Pendings </a> </td>
								</tr>
								<tr>
									<td> 092634 </td>
									<td> Oct 22, 2020 </td>
									<td> Home Cooked </td>
									<td> $734.00 </td>
									<td> <a class="bg-green"> Completed </a> </td>
								</tr>
								<tr>
									<td> 092634 </td>
									<td> Oct 22, 2020 </td>
									<td> Home Cooked </td>
									<td> $734.00 </td>
									<td> <a class="bg-red"> Pendings </a> </td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="breadcrumb-custom">
						<h5><a href=""><i class="fa fa-angle-left"></i></a></h5>
						<ul>
							<li class="active"> <a href=""> 1 </a></li>
							<li> <a href=""> 2 </a></li>
							<li> <a href=""> 3 </a></li>
							<li> <a href=""> 4 </a></li>
						</ul>
						<h5><a href=""><i class="fa fa-angle-right"></i></a></h5>
					</div>
				</div>
<!-- Comparison Table Section Ends Here -->

@endsection