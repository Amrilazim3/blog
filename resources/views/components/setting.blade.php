@props(['heading'])
<section class="max-w-4xl py-8 mx-auto">
    <h1 class="pb-2 mb-8 text-lg font-bold border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="flex-shrink-0 w-48">
            <h4 class="mb-4 font-semibold">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                </li>
                
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
