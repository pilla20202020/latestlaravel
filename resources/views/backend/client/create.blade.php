@extends('backend.layouts.admin.admin')

@section('title', 'Client')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('backend.client.partials.form',['header' => 'Create client'])
            </form>
        </div>
    </section>
@stop

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
