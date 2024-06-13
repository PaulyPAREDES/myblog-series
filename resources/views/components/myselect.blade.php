@props(['name' => '', 'type' => 'text'])
<select
type="{{ $type }}"
id="{{ $name }}"
name="{{ $name }}"
{{ $attributes->merge([
  'class' => 'rounded h-9 w-40 text-sm  focus:border-yellow-500 focus:ring-yellow-500'
]) }}> 
 {{$slot }}
</select>

