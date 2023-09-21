<x-guest-layout>
    <h1 class="text-3xl
    p-6 pt-0 mb-4
    text-green-600
    bg-stone-200
    dark:text-green-200 dark:bg-stone-800">Word Types</h1>

    <table class="table w-full ">
        <thead>
        <tr class="bg-stone-900 text-stone-300">
            <th class="p-1 px-2 text-left">Code</th>
            <th class="p-1 px-2 text-left">Name</th>
            <th class="p-2 text-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($wordtypes as $wordtype)
            <tr>
                <td class="p-2 px-2">{{$wordtype->code}}</td>
                <td class="p-2 px-2">{{$wordtype->name}}</td>
                <td class="p-1">

                    <a href="{{route('wordtypes.show', $wordtype->id)}}">View</a> Edit Delete</td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr class="bg-stone-700 text-stone-400">
            <td class="p-1" colspan="3">
                {{$wordtypes->links()}}
            </td>
        </tr>
        </tfoot>

    </table>
</x-guest-layout>
