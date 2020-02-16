@if($permissions ?? '')
    @foreach($permissions ?? '' as $key => $value)
        <div class="col-md-6" id="permission_{{ $value->id }}" style="margin: 10px 0">
            <input type="checkbox" id="per-select-one" @foreach($data as $item) {{ $value->id === $item ? 'checked' : '' }} @endforeach data-ids="{{ $value->id }}" class="per-select-one" style="margin-right: 25px"><span class="per-select-label">{!! $value->permission_label !!}</span>
        </div>
    @endforeach
@endif
