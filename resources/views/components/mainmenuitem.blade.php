 <!-- these props are used to determine the active state and type of the menu item -->
<!-- @props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
<a
class="{{ $active ? 'bg-green-200 text-green-900' : 'bg-white text-gray-900' }} border border-green-700 rounded-lg px-4 py-2 shadow-sm transition-colors duration-200 hover:bg-green-700 hover:text-white"
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }}
>
{{ $slot }}
</a>

@else    

<button
    class="{{ $active ? 'bg-green-200 text-green-900' : 'bg-white text-gray-900' }} border border-green-700 rounded-lg px-4 py-2 shadow-sm transition-colors duration-200 hover:bg-green-700 hover:text-white"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</button>

@endif -->


@props(['active' => false])
<a
class="{{ $active ? 'bg-green-200 text-green-900' : 'bg-white text-gray-900' }} border border-green-700 rounded-lg px-4 py-2 shadow-sm transition-colors duration-200 hover:bg-green-700 hover:text-white"
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }}
>
{{ $slot }}
</a>