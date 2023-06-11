<div x-data="{ show: true }" x-show="show" class="w-full mt-4">
    @if (session('success'))
        <div x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)"
            class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 rounded" role="alert">
            <i class="fas fa-check-circle mr-2"></i>
            <p>{{ session('success') }}</p>
            <span class="ml-auto cursor-pointer" @click="open = false"><i class="fas fa-times"></i></span>
        </div>
    @endif

    @if (session('error'))
        <div x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)"
            class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 rounded" role="alert">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <p>{{ session('error') }}</p>
            <span class="ml-auto cursor-pointer" @click="open = false"><i class="fas fa-times"></i></span>
        </div>
    @endif

    @if (session('info'))
        <div x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)"
            class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 rounded" role="alert">
            <i class="fas fa-info-circle mr-2"></i>
            <p>{{ session('info') }}</p>
            <span class="ml-auto cursor-pointer" @click="open = false"><i class="fas fa-times"></i></span>
        </div>
    @endif

    @if (session('warning'))
        <div x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)"
            class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3 rounded" role="alert">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <p>{{ session('warning') }}</p>
            <span class="ml-auto cursor-pointer" @click="open = false"><i class="fas fa-times"></i></span>
        </div>
    @endif
</div>
