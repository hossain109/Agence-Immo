
@php
$class ??='';
@endphp

<div @class(['form-check form-switch',$class])>
    <input type="hidden" value="0" name="{{$name}}">
    <input @checked(old($name,$value??false)) type="checkbox" value="1" class="form-check-input @error($name) is-invalid   @enderror"  name="{{ $name }}" id="{{ $name }}" role="switch">
    <label  class="form-check-label" for="{{ $name }}">{{$label}}</label>
</div>

<div>
    @error($name)
    <div class="valid-feedback">{{ $message }}</div>
    @enderror
</div>
