<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                {{ $course->name }}
            </h2>
            <img src="{{ $course->user->avatar }}" class="w-10 h-10 rounded-full ml-auto">
            <div class="ml-2">
                <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
                <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4">
                <div class="p-8 bg-gray-200 col-span-1 rounded-xl">
                    <ul class="flex flex-col">
                        <li class="font-medium text-sm text-gray-400 uppercase mb-4"> Contenido</li>
                        @foreach($course->posts as $post)
                            <li class="flex items-center text-gray-600 mt-2 py-2">
                                {{ $post->name }}
                                @if($post->free)
                                    <span class="text-xs text-white font-semibold bg-green-500 rounded-full py-1 px-2 ml-auto"> Gratis </span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-gray-700 col-span-2 rounded-xl">
                    <img src="{{ $course->image }}" class="rounded-xl">
                    <div class="flex my-2 items-center">
                        <h2 class="text-2xl my-3">{{ $course->name }}</h2>
                        <img src="{{ $course->user->avatar }}" class="w-10 h-10 rounded-full ml-auto">
                        <div class="ml-2">
                            <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
                            <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>
                        </div>

                    </div>
                    <p>{{ $course->description }}</p>


                    <h2 class="text-2xl mt-2">Cursos Similares</h2>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($course->similar() as $course)
                            <x-course-card :course="$course" />
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="text-center  mt-4">
                <h1 class="text-3xl text-gray-700 mb-2 uppercase ">Últimos Cursos</h1>
                <h2 class="text-xl text-gray-600 ">Fórmate online como profesional en tecnología</h2>
            </div>
            <livewire:course-list>
        </div>
    </div>
</x-app-layout>
