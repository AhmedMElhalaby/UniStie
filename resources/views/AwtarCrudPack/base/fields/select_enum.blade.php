<div class="@if(isset($Field['col'])) {{$Field['col']}} @else col-md-12 @endif">
    <div class="form-group label-floating">
        <label for="{{$Field['name']}}" class="control-label">{{__('crud.'.$lang.'.'.$Field['name'])}} @if(isset($Field['is_required'])&&$Field['is_required'])*@endif</label>
        <select name="{{$Field['name']}}" style="margin: 0;padding: 0" id="{{$Field['name']}}" class="form-control">
            @if(!(isset($Field['is_required'])&&$Field['is_required']))
                <option value=""></option>
            @endif
            @foreach($Field['enum'] as $case)
                <option value="{{$case->value}}" @if($value == $case->value) selected @endif>{{__('crud.'.$lang.'.'.$Field['name'].'_enum.'.$case->value)}}</option>
            @endforeach
        </select>
    </div>
    @if ($errors->has($Field['name']))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($Field['name']) }}</strong>
        </span>
    @endif
</div>
