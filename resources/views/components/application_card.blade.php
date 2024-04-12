<div class="grid grid-cols-1 gap-4 mb-4 place-items-center items-center mt-14">
    <div class="grid grid-cols-1 gap-4 mb-4 place-items-center items-center mt-14">
        @foreach ($applications as $application)
            <div class="max-w-md p-4 bg-white border border-gray-300 rounded-lg ">
                <div class="flex">

                    <div class="flex-1">
                        <p class="text-md">{{ $application->name }}</p>
                        <p class="text-sm">{{ $application->created_at }}</p>
                    </div>

                </div>





            </div>
    </div>



</div>
@endforeach
