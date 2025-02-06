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
                        <div class="col-sm-12">
                            <div class="form-group">
                                   <select name="album_id" class="form-control" id="album_id">
                                           <option value="">Select Album</option>
                                           @foreach($albums as $album)
                                               <option value="{{$album->id}}" @if(isset($album_search)) @if($album_search == $album->id) selected @endif @endif>{{$album->name}}</option>
                                           @endforeach
                                   </select>
                                   <span id="textarea1-error" class="text-danger">{{ $errors->first('album_id') }}</span>

                            </div>
                       </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label class="text-default-light">Featured Image</label>
                            @if(isset($gallery) && $gallery->image)
                                <input required type="file" name="image" class="dropify" id="input-file-events"
                                       data-default-file="{{ asset(str_replace('\\', '/', $gallery->image)) }}"/>

                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                            <span id="textarea1-error" class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                        <!--<div class="col-sm-6">-->
                        <!--    <label class="text-default-light">Banner Image(Optional)</label>-->
                        <!--        <input type="file" name="banner_image" class="dropify" id="input-file-events"-->
                        <!--    <input type="hidden" name="removeimage" id="removeimage" value=""/>-->
                        <!--</div>-->
                    </div>
                    <hr>
                    <div class="mt-3">
                        <div class="d-flex justify-content-center">
                            <input type="submit" name="gallerySubmit" class="btn btn-primary waves-effect waves-light me-1">
                            <a class="btn btn-secondary waves-effect" href="{{ route('gallery.index') }}">
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
<script src="{{ asset('backend/assets/js/gallerys/form-editor.init.js') }}"></script>

@endpush
