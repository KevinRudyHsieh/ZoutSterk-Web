<!DOCTYPE html>
<html>
<head>
    <title>Diagnose - CoreCycle</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50">

    @include('includes.header')

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-[#2D5A27] mb-4">Hardware Diagnose Tool</h2>

        <div class="mb-8">
            <h3 class="font-bold text-lg mb-2">Stap 1: Genereer je Battery Report</h3>
            <p class="text-gray-600 mb-4">Volg deze stappen om je batterijrapport te maken via Windows:</p>

            <ol class="list-decimal ml-5 space-y-2 text-sm text-gray-700">
                <li>Druk op de <strong>Windows-toets</strong>, typ <code>cmd</code> en kies <strong>Als administrator uitvoeren</strong>.</li>
                <li>Kopieer en plak de volgende opdracht in het zwarte scherm:</li>
                <code class="block bg-gray-900 text-green-400 p-3 rounded mt-2 mb-2">powercfg /batteryreport /output "C:\battery-report.html"</code>
                <li>Druk op <strong>Enter</strong>. Je rapport staat nu op je C-schijf.</li>
            </ol>
        </div>

        <div class="border-t pt-6">
            <h3 class="font-bold text-lg mb-2">Stap 2: Analyseer je rapport</h3>
            <p class="text-gray-600 mb-4">Upload hieronder het gegenereerde <code>battery-report.html</code> bestand:</p>

            <form action="/diagnose/upload" method="POST" enctype="multipart/form-data" class="flex gap-4">
                @csrf
                <input type="file" name="battery_report" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#2D5A27] file:text-white hover:file:bg-[#1e3d1a]">
                <button type="submit" class="bg-[#2D5A27] text-white px-6 py-2 rounded-lg hover:bg-[#1e3d1a]">Analyseer</button>
            </form>
        </div>
    </div>

</body>
</html>
