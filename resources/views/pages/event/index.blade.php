<x-app-layout>

    <div class="p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
        <!-- component -->
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full max-w-full px-3 mx-auto mb-6">
                <div
                    class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white">
                    <div
                        class="relative flex flex-col min-w-0 break-words border  bg-clip-border rounded-[.95rem] border-stone-200 bg-light/30">
                        <div class="flex-auto block py-8 pt-6 px-9">
                            <div class="overflow-x-auto">
                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                    <thead class="align-bottom">
                                        <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                            <th class="pb-3 text-start">{{ __('Sl. No') }}</th>
                                            <th class="pb-3 text-center min-w-[100px]">{{ __('Title') }}</th>
                                            <th class="pb-3 text-center min-w-[100px]">{{ __('Description') }}</th>
                                            <th class="pb-3 text-center min-w-[100px]">{{ __('Date') }}</th>
                                            <th class="pb-3 text-center min-w-[100px]">{{ __('Location') }}</th>
                                            <th class="pb-3 text-center min-w-[50px]">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($events as $even)
                                            <tr class="border-b border-dashed last:border-b-0">
                                                <td class="p-3 pl-0">{{ $loop->iteration }}</td>
                                               
                                                <td class="p-3 pr-0 text-center">
                                                    <span
                                                        class="font-normal text-light-inverse text-md/normal">{{ $even->title }}</span>
                                                </td>

                                                <td class="pr-0 text-center">
                                                    <span
                                                        class="font-normal text-light-inverse text-md/normal">{{ $even->description }}</span>
                                                </td>
                                                <td class="pr-0 text-center">
                                                    <span
                                                        class="font-normal text-light-inverse text-md/normal">{{ $even->date }}</span>
                                                </td>
                                                <td class="pr-0 text-center">
                                                    <span
                                                        class="font-normal text-light-inverse text-md/normal">{{ $even->location }}</span>
                                                </td>
                                                <td class="p-3 pr-0 text-center">
                                                    <a 
                                                        class="relative flex items-center justify-center px-4 py-1 ml-auto text-base font-medium leading-normal text-center align-middle transition-colors duration-200 ease-in-out border-0 rounded shadow-none cursor-pointer text-secondary-dark bg-secondary hover:text-primary">
                                                        View
                                                    </a>
                                                </td>
                                                <td class="p-3 pr-0 text-center">
                                                    <a 
                                                        class="relative flex items-center justify-center px-4 py-1 ml-auto text-base font-medium leading-normal text-center align-middle transition-colors duration-200 ease-in-out border-0 rounded shadow-none cursor-pointer text-secondary-dark bg-secondary hover:text-primary">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td class="p-3 pr-0 text-center">
                                                    <form 
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="relative flex items-center justify-center px-4 py-1 ml-auto text-base font-medium leading-normal text-center align-middle transition-colors duration-200 ease-in-out border-0 rounded shadow-none cursor-pointer text-secondary-dark bg-danger hover:text-primary">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8">No Employee Found</td>
                                            </tr>
                                        @endforelse

                                       		
                                    </tbody>
                                </table>
                                <div class="py-3 text-center">
                                    {{ $events->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>