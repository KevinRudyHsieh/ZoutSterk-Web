<!DOCTYPE html>
<html>
<head>
    <title>Over Ons</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    @include('includes.header')

    <x-card>
        <h2 class="text-3xl font-bold text-[#2D5A27] mb-6">Duurzaamheid bij CoreCycle</h2>

    <p class="mb-6">Bij CoreCycle betekent duurzaamheid: <strong>behoud door techniek</strong>. Wij geloven niet in de wegwerpcultuur. Echte duurzaamheid zit in het verlengen van de levensduur van bestaande hardware, waardoor we de vraag naar nieuwe grondstoffen verminderen.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-4 border-l-4 border-[#2D5A27]">
            <h3 class="font-bold">Arbeiders</h3>
            <p class="text-sm">Wij werken met een team van specialisten. Wij garanderen een eerlijk loon, veilige werkplekken en investeren in continue bijscholing zodat ons team altijd op de hoogte is van de nieuwste hardware-technieken.</p>
        </div>

        <div class="p-4 border-l-4 border-[#2D5A27]">
            <h3 class="font-bold">Het Milieu</h3>
            <p class="text-sm">Onze kernactiviteit is het voorkomen van e-waste. Door laptops te refurbishen besparen we duizenden kilo's aan CO2-uitstoot. Chemisch afval en oude onderdelen worden gescheiden en gerecycled via gecertificeerde partners.</p>
        </div>

        <div class="p-4 border-l-4 border-[#2D5A27]">
            <h3 class="font-bold">Eerlijke Handel</h3>
            <p class="text-sm">Wij kopen onze voorraad enkel in bij partijen die transparant zijn over de herkomst. We streven ernaar om materiaalstromen zo veel mogelijk binnen Europa te houden om lange transportketens te vermijden.</p>
        </div>

        <div class="p-4 border-l-4 border-[#2D5A27]">
            <h3 class="font-bold">Omgeving & Maatschappij</h3>
            <p class="text-sm">Wij ondersteunen lokale onderwijsprojecten door refurbished hardware toegankelijk te maken voor studenten met een kleinere beurs. CoreCycle staat voor gelijke kansen in de digitale wereld.</p>
        </div>
    </div>
</x-card>

</body>
</html>
