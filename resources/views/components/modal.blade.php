<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400 none" style="transition: opacity 0.5s;">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75" wire:click="cerrarModal"></div>
        </div>
        <!-- Modal Contenido -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class=" px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                {{$contenido}}
            </div>
            <div class="flex justify-end p-2">
                {{$botones}}
            </div>
        </div>
    </div>
</div>