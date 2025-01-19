@extends('backend.layouts.admin.admin')

@section('title', 'Blog')

@section('content')
    {{-- For New backend menu bar --}}

    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Blogs</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route(substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.')) . '.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover display">
                        <thead>
                        <tr>
                            <th width="5%">SN</th>
                            <th width="30%">Image</th>
                            <th width="20%">Title</th>
                            <th width="20%">Content</th>
                            <th width="20%" class="text-center">Featured</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.blog.partials.table', $blogs, 'blog')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
