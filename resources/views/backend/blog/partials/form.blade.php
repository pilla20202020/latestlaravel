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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" name="title" class="form-control" required
                                       value="{{ old('title', isset($blog->title) ? $blog->title : '') }}"/>

                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="type">Blog Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="recent-stories" {{ old('type', isset($blog->type) ? $blog->type : '') == 'recent-stories' ? 'selected' : '' }}>Recent Stories</option>
                                    <option value="recent-cause" {{ old('type', isset($blog->type) ? $blog->type : '') == 'recent-cause' ? 'selected' : '' }}>Recent Cause</option>
                                    <option value="blog" {{ old('type', isset($blog->type) ? $blog->type : '') == 'blog' ? 'selected' : '' }}>Blog</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="specialization">Short Description</label>
                                <textarea type="text" name="short_description" class="form-control">{{old('short_description',isset($blog->short_description)?$blog->short_description : '')}}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea id="elm1" name="content">{{old('content',isset($blog->content)?$blog->content : '')}}</textarea>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label class="text-default-light">Image</label>
                            @if(isset($blog) && $blog->image)
                                <input type="file" name="image" class="dropify" id="input-file-blogs" 
                                       data-default-file="{{ asset(str_replace('\\', '/', $blog->image)) }}"/>

                            @else
                                <input type="file" name="image" class="dropify" required/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                        <!--<div class="col-sm-6">-->
                        <!--    <label class="text-default-light">Banner Image(Optional)</label>-->
                        <!--    @if(isset($blog) && $blog->banner_image)-->
                        <!--        <input type="file" name="banner_image" class="dropify" id="input-file-blogs"-->
                        <!--               data-default-file="{{ asset($blog->banner_path)}}"/>-->

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
                            <a class="btn btn-secondary waves-effect" href="{{ route('blog.index') }}">
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
