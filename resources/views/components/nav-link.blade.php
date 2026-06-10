@props(['active' => false])

<a {{ $attributes }} class="
    px-4 py-2 rounded-full font-medium transition-all duration-300
    {{ $active
        ? 'bg-[#2D5A27] text-white shadow-md'
        : 'text-[#333333] hover:bg-[#2D5A27]/10 hover:text-[#2D5A27]'
    }}
">
    {{ $slot }}
</a>
