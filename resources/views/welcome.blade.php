<x-layout>
    <h1>Start FCollections laravel</h1>
    <ul>
    @foreach ($categories as $category )
        <li>{{ $category->name }}</li>
    @endforeach
    </ul>
</x-layout>
