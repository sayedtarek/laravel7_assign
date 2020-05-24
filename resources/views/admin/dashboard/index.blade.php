@extends('admin.layouts.index_layout',['title' => __('admin.dashboard')])


@section('content')

<div class="row">
	<div class="col-lg-12">

			<!--begin:: Widgets/Quick Stats-->
			<div class="row m-row--full-height">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									{{ $complaints }}
									<h3> <small>عدد الشكاوى والإقتراحات</small> <i class="flaticon-avatar"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3>  <small>  </small> <i class="fa fa-home"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3> <small></small> <i class="fa fa-money-check-alt"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3><small></small> <i class="fa fa-bullhorn"></i></h3>
								</div>

								
							</div>
						</div>
					</div>

				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3> <small></small> <i class="fa fa-money-check-alt"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3><small> </small> <i class="fa fa-bullhorn"></i></h3>
								</div>

								
							</div>
						</div>
					</div>

				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3> <small></small> <i class="fa fa-money-check-alt"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					

				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26">
								<div class="m-widget26__number">
									
									<h3> <small></small> <i class="fa fa-money-check-alt"></i></h3>
								</div>
								<div class="m-widget26__chart" style="height:90px; width: 220px;">
									<canvas id="m_chart_quick_stats_3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					

				</div>

				<br>
            <div class="input-group">
               

            </div><br>

           
        




			</div>

			
			<!--end:: Widgets/Quick Stats-->
	</div>
</div>




 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ6YIJqQieEgnZj4JcKI7nyj4ecbOIXAU&libraries=places&callback=initMap"
      async defer>
</script>



@endsection