<header class="p-6 border-b border-[#2D5A27] bg-white/50 backdrop-blur-sm mb-8">
    <nav class="flex justify-between items-center max-w-5xl mx-auto">
        <h1 class="text-2xl font-bold text-[#2D5A27]">EcoCore Systems</h1>
        <div class="space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
            <x-nav-link href="/diagnose" :active="request()->is('diagnose')">Diagnose</x-nav-link>
            <x-nav-link href="/over-ons" :active="request()->is('over-ons')">Over Ons</x-nav-link>
        </div>
    </nav>
</header>
