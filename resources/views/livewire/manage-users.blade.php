


<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach($users as $user)
            <tr class="hover:bg-gray-50">
                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-10 w-10">
                        <img
                            class="h-full w-full rounded-full object-cover object-center"
                            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                        />
                        <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                    </div>
                    <div class="text-sm">
                        <div class="font-medium text-gray-700">{{ $user->name }}</div>
                        <div class="text-gray-400"> {{$user->mail}} </div>
                    </div>
                </th>
                <td class="px-6 py-4">
                </td>
                <td class="px-6 py-4">

                </td>
                <td class="px-6 py-4">
                    <div class="flex justify-end gap-4">
                        <button wire:click="confirmDelete({{ $user->id }})">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                                x-tooltip="tooltip"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if($deleteUserModal)
    <x-confirmation-modal>
        <x-slot name="title">
            Delete {{ $currentUser->name }}
        </x-slot>
        <x-slot name="body">
            Are you sure you want to delete this post?
        </x-slot>
        <x-slot name="footer">
            <x-button class="bg-gray-400 hoover:bg-gray-500" wire:click="$set('deleteUserModal', false)">Cancel</x-button>
            <x-button class="bg-blue-400 text-white hoover:bg-blue-500" wire:click="delete">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
        @endif
</div>


