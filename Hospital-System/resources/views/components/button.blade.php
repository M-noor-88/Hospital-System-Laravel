



<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs
uppercase tracking-wides bg-emerald-400  hover:bg-emerald-600 hover:text-white active:bg-emerald-600 focus:outline-none focus:ring-2
focus:bg-emerald-600 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
