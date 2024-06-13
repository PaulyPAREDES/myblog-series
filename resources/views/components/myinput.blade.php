 @props(['name' => '', 'type' => 'text', 'value' => ''])
<input
type="{{ $type }}"
id="{{ $name }}"
name="{{ $name }}"
value="{{ $value }}"
{{ $attributes->merge([
  'class' => 'rounded h-7 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500'.
  ($type === 'number' ? ' w-20' : ' w-full')
]) }}> 
