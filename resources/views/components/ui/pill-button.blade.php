@props(['active' => false])

<button {{ $attributes->merge([
    'class' => $active 
        ? 'bg-gradient-to-r from-purple-500/20 to-blue-500/15 text-white border border-gray-700 px-3 py-2 rounded-full cursor-pointer text-sm'
        : 'bg-transparent border border-gray-800 px-3 py-2 rounded-full text-gray-400 cursor-pointer text-sm hover:bg-gray-800'
]) }}>
    {{ $slot }}
</button>