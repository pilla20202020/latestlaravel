@csrf
<div class="row">

    <div class="col-sm-9">
        <div class="card">
            <div class="card-head">

                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body tab-content">
                <div class="tab-pane active" id="first2">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="title" class="form-control" required
                                       value="{{ old('title', isset($blog->title) ? $blog->title : '') }}"/>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                                
                            </div>
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <input type="text" name="short_description" class="form-control" 
                                       value="{{ old('short_description', isset($blog->short_description) ? $blog->short_description : '') }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="content" id=""
                                    class="ckeditor">{{old('content',isset($blog->content)?$blog->content : '')}}</textarea>
                                <label for="content">Content</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image(Optional) (Dimension: 233*223)</label>
                        @if(isset($blog) && $blog->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($blog->thumbnail_path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="" data-spy="affix" data-offset-top="50">
            <div class="panel-group" id="accordion1">
                <div class="card panel expanded">
                    <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                        <header>Publish</header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-1" class="collapse in">
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <a class="btn btn-default btn-ink" href="{{ route('blog.index') }}">
                                    <i class="md md-arrow-back"></i>
                                    Back
                                </a>
                                <input type="submit" name="pageSubmit" class="btn btn-info ink-reaction" value="Save">
                            </div>
                        </div>
                        <div class="card-head">

                            <div class="side-label">
                                <div class="label-head">
                                    <span>Featured</span>
                                </div>
                                <div class="label-body">
                                    <input type="checkbox" id="switch_demo_1" name="is_featured"
                                           {{ old('is_featured', isset($blog->is_featured) ? $blog->is_featured : '')=='1' ? 'checked':'' }} data-switchery/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end .panel --><!--end .panel --><!--end .panel --><!--end .panel -->
            </div><!--end .panel-group -->
        </div>
    </div>

  </div>




