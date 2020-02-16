<div class="table-responsive">
    <table class="table table-hover">
        <thead class="text-primary">
        <th>Name</th>
        <th>Label</th>
        <th>Status</th>
        <th>Created</th>
        <th>Action</th>
        </thead>
        <tbody>
        @if(!empty($roles))
            @foreach($roles as $role)
                <tr id="role_{{$role->id}}">
                    <td>{{$role->role_name}}</td>
                    <td>{{$role->role_label}}</td>
                    <td>{!! !empty($role->role_status) ? ($role->role_status == 1 ? '<span class="badge badge-success">Actived</span>' : '<span class="badge badge-pill badge-primary">Locked</span>') : '<span class="badge badge-pill badge-primary">Locked</span>' !!}</td>
                    <td>{!! !empty($role->created_at) ? date('d-m-Y', strtotime($role->created_at)) : '' !!}</td>
                    <td>
                        <button type="button" class="btn btn-danger" id="buttonDelete" data-id="{{$role->id}}">Delete</button>
                        <button type="button" class="btn btn-warning" id="buttonEdit" data-id="{{$role->id}}" >Edit</button>
                        <button type="button" class="btn btn-success" id="buttonSetting" data-id="{{$role->id}}">Setting</button>
                    </td>
                </tr>
            @endforeach
        @else
            <h1>Data Not Found!</h1>
        @endif
        </tbody>
    </table>
    {{count($roles)}} of {{$totalProduct}}
    {{$roles->links()}}
</div>
