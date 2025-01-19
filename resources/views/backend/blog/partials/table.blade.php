<tr>
    <td>{{++$key}}</td>
    <td><img src="{{asset($blog->thumbnail_path)}}" class="img-circle width-1" alt="{{$blog->title}}" width="50" height="50"></td>
    <td>{{ Str::limit($blog->title, 47) }}</td>
    <td>{{ Str::limit($blog->content, 47) }}</td>
    <td class="text-center">
        @if($blog->is_featured =='1')
            <span class="badge" style="background-color: #419645">{{$blog->is_featured ? 'Yes' : 'No'}}</span>
        @elseif($blog->is_featured =='0')
            <span class="badge" style="background-color: #f44336">{{$blog->is_featured ? 'Yes' : 'No'}}</span>
        @endif
    </td>

    <td class="text-right">
        <a href="{{route('blog.edit', $blog->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('blog.destroy', $blog->id) }}">
        <button type="button"
            class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>
