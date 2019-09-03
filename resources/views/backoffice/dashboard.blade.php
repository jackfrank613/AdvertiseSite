@extends('backoffice.master')
@section('content')
 
      <div class="page-container-wrap">
			<div class="container-fluid">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row">
					
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info">
										<span class="number">{{$usercount}}</span>
										<span class="a-meta-title">New User</span>
									</div>
									<span class="nmbr-statistic-icon fa fa-user"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block visitors-statistic">
									<div class="nmbr-statistic-info">
										<span class="number">{{$totalcount}}</span>
										<span class="a-meta-title">Total advertise</span>
									</div>
									<span class="nmbr-statistic-icon fa fa-heart"></span>
								</div>
							</div><!-- widget-module -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block sales-statistic">
									<div class="nmbr-statistic-info">
										<span class="number">{{$boostcount}}</span>
										<span class="a-meta-title">Boost</span>
									</div>
									<span class="nmbr-statistic-icon fa fa-money"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number">{{$urgentcount}}</span>
										<span class="a-meta-title">Urgent</span>
									</div>
									<span class="nmbr-statistic-icon fa fa-star"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
						
					</div>
				</div><!-- nmbr-statistic-area -->
			</div>
		
		</div>
	  </div>
@endsection