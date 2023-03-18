<x-layout>
    <h1>Start FCollections laravel</h1>
    <ul>
    @foreach ($categories as $category )
        <li class="border border-r-8">{{ $category->name }}</li>
    @endforeach
    </ul>
</x-layout>
