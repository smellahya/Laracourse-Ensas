<div class="row w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="col-sm-3  w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", $teacher->classes_count) }}</span>
                <span class="leading-tight">Classes</span>
            </h3>
        </div>
        <div class="col-sm-3 w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", $teacher->subjects_count) }}</span>
                <span class="leading-tight">Subjects</span>
            </h3>
        </div>
        <div class="col-sm-3  w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ ($teacher->students[0]->students_count) ?? 0 }}</span>
                <span class="leading-tight">Students</span>
            </h3>
        </div>
    </div>
</div>

