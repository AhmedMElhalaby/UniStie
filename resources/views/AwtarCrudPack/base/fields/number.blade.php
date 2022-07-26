<div class="@if(isset($Field['col'])) {{$Field['col']}} @else col-md-12 @endif">
    <div class="form-group label-floating">
        <label for="{{$Field['id'] ?? $Field['name']}}" class="control-label">{{__('crud.'.$lang.'.'.$Field['name'])}} @if($Field['is_required'])*@endif</label>
        <input type="number" id="{{$Field['id'] ?? $Field['name']}}" step="0.1" name="{{$Field['name']}}" @if($Field['is_required']) required @endif class="form-control {{ $errors->has($Field['name']) ? ' is-invalid' : '' }}" value="{{$value}}">
    </div>
    @if ($errors->has($Field['name']))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($Field['name']) }}</strong>
        </span>
    @endif
</div>
