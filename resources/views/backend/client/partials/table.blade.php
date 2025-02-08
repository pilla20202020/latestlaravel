<tr>
    <td>{{++$key}}</td>
    <td><img src="{{ asset(str_replace('\\', '/', $client->image)) }}" class="img-circle width-1" alt="client_image" width="50" height="50"></td>
    <td>{{ Str::limit($client->title, 47) }}</td>
{{--    <td class="text-center">{{ Carbon\Carbon::parse($client->date)->format('Y-m-d') }}</td>--}}


    <td class="text-right">
        <a href="{{route('client.edit', $client->id)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="fas fa-edit"></i>
        </a>

        <button class="btn btn-flat btn-danger btn-xs" title="delete" onclick="openDeleteclientModal({{ $client->id }}, '{{ $client->title }}')">
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
                Are you sure you want to delete the client "<strong id="clientTitle"></strong>"?
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
