<div class="mt-8 center-border-horizontal text-center relative before:absolute before:w-full before:h-[1px] before:top-1/2 before:-translate-y-1/2 before:bg-neutral-300 before:start-0">
    <span class="bg-white dark:bg-dark-2 z-[2] relative px-4">Or sign {{ Request::routeIs('signin') ? 'in' : 'up' }} with</span>
</div>
<div class="mt-8 flex items-center gap-3">
    <button type="button" class="font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 hover:bg-primary-50">
        <iconify-icon icon="ic:baseline-facebook" class="text-primary-600 text-xl"></iconify-icon>
        Facebook
    </button>
    <button type="button" class="font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 hover:bg-primary-50">
        <iconify-icon icon="logos:google-icon" class="text-primary-600 text-xl"></iconify-icon>
        Google
    </button>
</div>
