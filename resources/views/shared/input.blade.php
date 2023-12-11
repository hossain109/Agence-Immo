@php
    $class ??='';
    $label ??='';
    $type ??= 'text';
    $name ??= '';
    $value ??= '';
    $placeholder ??='';
@endphp

<div @class(['form-gourp',$class])>
    <label for="{{ $name }}">{{$label}}</label>

    @if ($type=="textarea")
        <textarea class="form-control @error($name) is-invalid  @enderror"   type="{{ $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}" >{{ old($name,$value) }} </textarea>
    @else
        <input class="form-control @error($name) is-invalid  @enderror"   type="{{ $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name,$value) }}" /> 
    @endif
</div>

@error($name)
    <div class="valid-feedback">{{ $message }}</div>
@enderror
