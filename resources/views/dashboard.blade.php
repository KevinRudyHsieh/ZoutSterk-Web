<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    @include('includes.header')

    <div class="dashboard-box">
        <h2>Sentinel Dashboard</h2>
        <p>Real-time data wordt geladen...</p>
    </div>

    <x-card>
        <h2 class="text-2xl font-bold text-[#2D5A27] mb-4">Sentinel Dashboard</h2>
        <p class="mb-6">Real-time data van hardware load...</p>

        <x-button href="/refresh">Refresh Data</x-button>
    </x-card>

    <x-card>
    <h3 class="text-xl font-bold text-[#2D5A27]">Sentinel Maintenance Tools</h3>
    <p class="text-sm text-[#333333]/70 mb-4">Voorkom hitte en verleng de batterijduur met onze tools.</p>

    <div class="grid grid-cols-2 gap-4">
        <div class="p-4 border border-[#2D5A27]/20 rounded-lg">
            <h4 class="font-bold">Ergonomic Stand</h4>
            <p class="text-xs text-gray-600">Betere airflow, minder stof-inname.</p>
        </div>
        <div class="p-4 border border-[#2D5A27]/20 rounded-lg">
            <h4 class="font-bold">Anti-Dust Kit</h4>
            <p class="text-xs text-gray-600">Hou je fans schoon, behoud je CPU.</p>
        </div>
    </div>
    </x-card>


</body>
</html>
