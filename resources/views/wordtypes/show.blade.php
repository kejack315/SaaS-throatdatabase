<x-guest-layout>
    <h2 class="text-3xl
    p-6 pt-0 mb-4
    text-green-600
    bg-stone-200
    dark:text-green-200 dark:bg-stone-800">WordTypes</h2>

    <h3>WordType #{{$wordtypes->id}} Details </h3>

    <section class="flex flex-col gap-2">
        <p class="text-stone-400">Code</p>
        <p class="pl-8">{{$wordtypes->code}}</p>
        <p class="text-stone-400">Name</p>
        <p class="pl-8">{{$wordtypes->name}}</p>
        <p class="w-full text-right">
            <a class="p-1 py-0 border border-1 border-green-700
            rounded-md hover:border-green-100 hover:bg-green-700 hover:text-white
            transition ease-in-out duration-350"
               href="{{route('wordtypes.index')}}">Back</a>
            Edit
            Delete</p>
    </section>
</x-guest-layout>
