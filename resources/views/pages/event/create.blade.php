<x-app-layout>
    <div class="p-8">

        <div class="flex flex-col gap-9">
            <!-- Input Fields -->
            <div
                class="rounded-lg border border-gray-700 bg-white shadow-default dark:border-strokedark dark:bg-boxdark p-8">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Event Create Form
                    </h3>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-5.5 p-6.5">
                        <div class="mb-4">
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Enter Item Name" />
                        </div>

                        <div>
                            <x-input-label for="discription" value="Description" />
                            <textarea name="discription" id="" cols="30" rows="5" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"></textarea>
                        </div>

                        <div>
                            <x-input-label for="date" value="Date" />
                            <x-text-input id="date" name="date" value="{{ old('date') }}" placeholder="Enter  Date" type="date" class="flatpickr-monthDropdown-months"/>
                        </div>

                        <div>
                            <x-input-label for="location" value="Location" />
                            <x-text-input id="location" name="total_alocationmount" type="text" value="{{ old('location') }}" placeholder="Enter Location"  />
                        </div>

                    </div>
                    <div class=" pt-2 text-end">
                        <button type="submit" class="px-3 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date", {
                enableTime: false,
                dateFormat: "Y-m-d", // Specify the date format
            });
        });
    </script>
</x-app-layout>