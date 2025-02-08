<tr>
    <td>{{++$key}}</td>
    <td><img src="{{ asset(str_replace('\\', '/', $blog->image)) }}" class="img-circle width-1" alt="blog_image" width="50" height="50"></td>
    <td>{{ Str::limit($blog->title, 47) }}</td>
    <td>
        @if ($blog->type == 'recent-cause')
            <span class="badge rounded-pill text-bg-warning">Recent Cause</span>
        @elseif ($blog->type == 'recent-stories')
            <span class="badge rounded-pill text-bg-primary">Recent Stories</span>
        @else
            <span class="badge rounded-pill text-bg-info">Blog</span>
        @endif
    </td>
    <td class="text-right">
        <a href="{{route('blog.edit', $blog->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="fas fa-edit"></i>
        </a>

        <button class="btn btn-flat btn-danger btn-xs" title="delete" onclick="openDeleteModal({{ $blog->id }}, '{{ $blog->title }}')">
            <i class="fas fa-trash-alt"></i>
        </button>
    </td>


</tr>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the blog titled "<strong id="blogTitle"></strong>"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
