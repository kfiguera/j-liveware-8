<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course') }}">
                <img src="{{ $course->image }}" class="rounded-md mb-2 ">
                <h2 class="text-lg font-bold truncate uppercase">{{ $course->name }}</h2>
                <p>{{ $course->get_excerpt }}</p>
                <div class="flex justify-center items-center mt-4">
                    <img src="{{ $course->user->avatar }}" class="rounded-full h-16 w-16">
                    <p class="ml-4 text-gray-500 uppercase">{{ $course->user->name }}</p>
                </div>

            </a>
        </div>
    @endforeach
</div>
