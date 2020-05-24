@extends('admin.layouts.index_layout',['title' =>'contact us' ])

@section('content')

@if( session('status') )
<div class="m-alert m-alert--icon m-alert--air alert alert-success alert-dismissible fade show" role="alert">
    <div class="m-alert__icon">
        <i class="la la-warning"></i>
    </div>
    <div class="m-alert__text">
        <strong>{{ session('status') }}!</strong>
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
    </div>
</div>
@endif


<!--begin::Portlet-->
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-name">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    {{ $complaint->subject }}
                </h3>
            </div>
        </div>
    </div>

    <!--begin::Form-->
    <form class="m-form" action="#" method="post" enctype="multipart/form-data">
       
        <div class="m-portlet__body">

            <div class="form-group m-form__group row">
                <label for="name" class="col-1 col-form-label">الإسم</label>
                <div class="col-9">
                    <input type="text" name="name" class="form-control m-input" 
                             value="{{ $complaint->name }}" disabled="">
                </div>
            </div>

 
            <div class="form-group m-form__group row">
                <label for="title" class="col-1 col-form-label">العنوان</label>
                <div class="col-9">
                    <input type="text" name="title" class="form-control m-input" 
                             value="{{ $complaint->title }}" disabled="">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label for="email" class="col-1 col-form-label">البريد الإلكترونى</label>
                <div class="col-9">
                    <input type="text" name="email" class="form-control m-input" 
                             value="{{ $complaint->email }}" disabled="">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label for="phone" class="col-1 col-form-label">الهاتف</label>
                <div class="col-9">
                    <input type="text" name="phone" class="form-control m-input" 
                             value="{{ $complaint->phone }}" disabled="">
                </div>
            </div>

           
            <div class="form-group m-form__group row ">
                <label for="content" class="col-1 col-form-label"> المحتوى</label>
                <div class="col-9">
                    <textarea class="form-control m-input" disabled="">{{ $complaint->body }}</textarea>
                </div>
            </div>
           
   


        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <a type="reset" href="{{url('admin/complaints')}}" class="btn btn-secondary">الرجوع</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--end::Form-->
</div>

<!--end::Portlet-->




@endsection