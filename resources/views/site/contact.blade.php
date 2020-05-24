@extends('site.app')

@section('content')

<div class="banner-buying">
	<div class="banner-buying">
		<div class="container">
			<h3><span>الاقتراحات </span>والشكاوى</h3>
			<!---->
		</div>
	</div>
</div>
<!--//-->
<section class="twth2">
	<div class="twth2-bg">
		<div class="container">
			<div class="row">
				<h2> راسالنا من اجل الافضل</h2>
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
				<form method="POST" action="{{ url('/dashboard/complaints') }}">
				{{ csrf_field() }}
					<input type="text"  name="name" placeholder="الاسم الاول" required="required" />
					<input type="text" name="title" placeholder="اسم الموضوع" required="required"/>
					<input type="number" name="phone" placeholder="رقم الهاتف" required="required"/>
					<input type="email" name="email" placeholder="البريد الالكترونى" required="required"/>
					<textarea name="body" placeholder="شكوتك او اقتراحك" required="required"></textarea>
					<button type="submit">ارسال</button>
				</form>
			</div>
		</div>
	</div>
</section>

@stop