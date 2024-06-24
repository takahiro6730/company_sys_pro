<ol class="w-full flex flex-wrap">
    @foreach ($progress_state_types as $key => $progress_state_type)
        <li class="mr-4 mb-2" id="progress_state{{$key}}">
            @if ($project->progress_state + 1 == $key)
                <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                    role="alert" allowed="ready" id="click_target">
            @elseif ($project->progress_state + 1 > $key)
                <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                    role="alert" allowed="done" id="click_target">
            @else
                <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    role="alert" allowed="yet" id="click_target">
            @endif
                <div class="flex items-center justify-between">
                    <p class="">{{ $key }}. {{ $progress_state_type }}</p>
                    @if ($project->progress_state + 1 == $key)
                        <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    @elseif ($project->progress_state + 1 > $key)
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ol>
