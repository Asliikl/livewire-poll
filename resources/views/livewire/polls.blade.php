<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
    @forelse($polls as $poll)
        <div class="bg-white p-4 rounded-lg shadow-md mb-4">
            <h3 class="text-sm font-semibold text-indigo-600 mb-2 truncate">
                {{ $poll->title }}
            </h3>
            @foreach($poll->options as $option)
                <div class="mb-3">
                    <p class="text-sm font-medium text-gray-800">{{ $option->name }}</p>
                    <p class="text-xs text-gray-500">{{ $option->votes->count() }} votes</p>
                    <button class="btn w-full text-left text-xs mt-2"
                            wire:click="vote({{ $option->id }})">
                        Vote
                    </button>
                </div>
            @endforeach
        </div>
    @empty
        <div class="text-gray-500 col-span-full text-center">
            No polls available
        </div>
    @endforelse
</div>
