@if($permissions ?? '')
    @foreach($permissions ?? '' as $key => $value)
        <div class="col-md-6" id="permission_{{ $value->id }}" style="margin: 10px 0">
            <input type="checkbox" id="per-select-one" class="per-select-one" style="margin-right: 25px"><span class="per-select-label">{!! $value->permission_label !!}</span>
        </div>
    @endforeach
@endif
