@csrf
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-underline">
                <div class="card-head p-4">
                    <header>{!! $header !!}</header>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" name="title" class="form-control" required
                                       value="{{ old('title', isset($testimonial->title) ? $testimonial->title : '') }}"/>

                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="office">Office</label>
                                <input type="text" name="office" class="form-control"
                                       value="{{ old('office', isset($testimonial->office) ? $testimonial->office : '') }}"/>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="position">Designation</label>
                                    <input type="text" name="position" class="form-control"
                                           value="{{ old('position', isset($testimonial->position) ? $testimonial->position : '') }}"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea id="elm1" name="content">{{old('content',isset($testimonial->content)?$testimonial->content : '')}}</textarea>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label class="text-default-light">Image</label>
                            @if(isset($testimonial) && $testimonial->image)
                                <input type="file" name="image" class="dropify" id="input-file-testimonials"
                                       data-default-file="{{ asset(str_replace('\\', '/', $testimonial->image)) }}"/>

                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                        </div>
                        <!--<div class="col-sm-6">-->
                        <!--    <label class="text-default-light">Banner Image(Optional)</label>-->
                        <!--    @if(isset($testimonial) && $testimonial->banner_image)-->
                        <!--        <input type="file" name="banner_image" class="dropify" id="input-file-testimonials"-->
                        <!--               data-default-file="{{ asset($testimonial->banner_path)}}"/>-->

                        <!--    @else-->
                        <!--        <input type="file" name="banner_image" class="dropify"/>-->
                        <!--    @endif-->
                        <!--    <input type="hidden" name="removeimage" id="removeimage" value=""/>-->
                        <!--</div>-->
                    </div>
                    <hr>
                    <div class="mt-3">
                        <div class="d-flex justify-content-center">
                            <input type="submit" name="pageSubmit" class="btn btn-primary waves-effect waves-light me-1">
                            <a class="btn btn-secondary waves-effect" href="{{ route('testimonial.index') }}">
                                Back
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <!-- tinymce js -->
<script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>

@endpush
