@extends('backend.layouts.admin.admin')

@section('title', 'Slider')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('backend.slider.partials.form',['header' => 'Create a slider'])
            </form>
        </div>
    </section>
@stop

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
