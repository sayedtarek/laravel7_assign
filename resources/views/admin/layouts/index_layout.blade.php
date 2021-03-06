<!DOCTYPE html>

<html lang="ar" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />

	<title>لوحة التحكم</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->

	<!--begin::Base Styles -->  



	<link href="{{asset('public/adminpanel/assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('public/adminpanel/assets/demo/demo3/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/adminpanel/imageuploadify.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Base Styles -->

	<link rel="shortcut icon" href="{{asset('public/favicon.ico')}}" /> 
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">


		<!-- BEGIN: Header -->
			@include('admin.templates.header')
		<!-- END: Header -->
		
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>

				@include('admin.templates.side_nav')

				<!-- END: Left Aside -->							
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator"></h3>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->		        
					<div class="m-content">
						@yield('content')		        
					</div>
				</div>

				
			</div>
			<!-- end:: Body -->


		@include('admin.templates.footer')	


		</div>
		<!-- end:: Page -->

	    
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Base Scripts -->        
		<script src="{{asset('public/adminpanel/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/adminpanel/assets/demo/demo3/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->   

        

        <script src="{{asset('public/adminpanel/default/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>

		<script src="{{asset('public/adminpanel/assets/demo/default/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>


		<script type="text/javascript"> base_url = "{{url('admin')}}"; </script>

		<!--begin::Page Snippets --> 
		<script src="{{asset('public/adminpanel/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/adminpanel/SimpleAjaxUploader.min.js')}}" type="text/javascript"></script>
		<!--end::Page Snippets -->  
		<script src="{{asset('public/frontend/assets/js/plugins/imageuploadify.min.js')}}"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation_localization.js')}}"></script>
      	<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation/admin_ads.js')}}"></script>
      	<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation/admin_setting.js')}} "></script>


<script>

	  $('#ad_image').each(function(){
        if($(this).hasClass('uploadify')){
            $(this).imageuploadify();
        }
    });


    $('._remove').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
			       $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/'+ id,
                        type: 'POST',
                        data: {'_method':'delete','_token': $('meta[name="csrf-token"]').attr('content') },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                            	swal({
								  position: 'center',
								  type: 'success',
								  title: 'تم الحذف بنجاح',
								  showConfirmButton: false,
								  timer: 2000
								});
                              window.location.reload();
                             }
                    },
                    error : function(){
                        swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._ban').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/ban',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });

     


     $('._activate').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/activate',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._approve').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._reject').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/reject',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });
   

$('._statusApprove').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/transaction/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


$('._serviceDone').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/services/done',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });

$('._invoiceApprove').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/invoice/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


   $('#confirm_search').on('click', function(e){
   		e.preventDefault();
   		$('#search_form').submit();
   });	


   //function FilterSubCat(cat_id){
   $('#category_id').on('change', function(e){
	var cat_id = $("#category_id option:selected").val();
   		$.post( "{{url('admin')}}/modeltype/filter_subcategories", { 'category_id':cat_id, '_token': $('meta[name="csrf-token"]').attr('content') })
  			.done(function( data ) {
    		$("#load_subcats").html(data);
  		});
   });




</script>

<script>
	window.onload = function() {
	
		var btn = document.getElementById('uploadBtn'),
				progressBar = document.getElementById('progressBar'),
				progressOuter = document.getElementById('progressOuter'),
				msgBox = document.getElementById('msgBox');
	
		var uploader = new ss.SimpleUpload({
					button: btn,
					url: '{{asset("adminpanel/extras/file_upload.php")}}',
					name: 'uploadfile',
					multipart: true,
					hoverClass: 'hover',
					focusClass: 'focus',
					responseType: 'json',
					startXHR: function() {
							progressOuter.style.display = 'block'; // make progress bar visible
							this.setProgressBar( progressBar );
					},
					onSubmit: function() {
							msgBox.innerHTML = ''; // empty the message box
							btn.innerHTML = 'جارى الرفع...'; // change button text to "Uploading..."
						},
					onComplete: function( filename, response ) {
							btn.innerHTML = 'اختر ملف اخر';
							progressOuter.style.display = 'none'; // hide progress bar when upload is completed
	
							if ( !response ) {
									msgBox.innerHTML = ' هناك خطأ فى الرفع حاول مرة اخرى ';
									return;
							}
	
							if ( response.success === true ) {
									msgBox.innerHTML = '<strong>' + filename + '</strong>' + ' تم رفع الملف بنجاح .';
									$("#file").val('/public/assets/uploads/'+response.newFileName);
									var image_url = "{{url('/assets/uploads')}}/"+response.newFileName;
									console.log(image_url);
									$("#image_file").css("display","block");
									$("#image_file").attr("src",image_url);
	
							} else {
									if ( response.msg )  {
											msgBox.innerHTML = escapeTags( response.msg );
	
									} else {
											msgBox.innerHTML = 'هناك خطأ فى الرفع حاول مرة اخرى.';
									}
							}
						},
					onError: function() {
							progressOuter.style.display = 'none';
							msgBox.innerHTML = 'هناك مشكلة فى الرفع';
						}
		});
	};
	</script>

	<script type="text/javascript">

$(".allownumericwithoutdecimal").on("keypress keyup blur",function (e) {    
           if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
        });


</script>

	</body>
	<!-- end::Body -->
	</html>