@props(['category'])

<a href="/?category={{ $category->slug }}"
    class="px-3 py-1 text-xs font-semibold text-blue-300 uppercase border border-blue-300 rounded-full"
    style="font-size: 10px">{{ $category->name }}
</a>