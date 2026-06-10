<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons - CoreCycle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-[#f8fafc] text-gray-800">

    @include('includes.header')

    <main class="max-w-6xl mx-auto px-4 py-16">

        <div class="text-center mb-20">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#2D5A27] mb-6">Onze Missie voor Duurzaamheid</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Bij <span class="text-[#2D5A27] font-bold">CoreCycle</span> geloven we dat de meest duurzame laptop de laptop is die al bestaat.
                Wij verlengen de levensduur van hardware om de digitale afvalberg (e-waste) te verkleinen en grondstoffen te sparen.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-[#2D5A27]/10 rounded-lg flex items-center justify-center mb-6">
                    <i class="fa-solid fa-users text-2xl text-[#2D5A27]"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Onze Arbeiders</h3>
                <p class="text-gray-600 leading-relaxed italic border-l-4 border-[#2D5A27] pl-4 mb-4">
                    "Mensen maken de techniek."
                </p>
                <p class="text-gray-600">
                    Wij bieden onze technici een eerlijk loon boven het minimum en een veilige, ergonomische werkplek. Elke medewerker krijgt 10% van hun tijd voor <strong>bijscholing</strong> in de nieuwste circulaire technieken.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-[#2D5A27]/10 rounded-lg flex items-center justify-center mb-6">
                    <i class="fa-solid fa-leaf text-2xl text-[#2D5A27]"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Het Milieu</h3>
                <p class="text-gray-600 leading-relaxed italic border-l-4 border-[#2D5A27] pl-4 mb-4">
                    "Geen gram verspilling."
                </p>
                <p class="text-gray-600">
                    Door reparatie besparen we gemiddeld <strong>320kg CO2</strong> per laptop. We gebruiken 100% gifvrije schoonmaakmiddelen en recyclen niet-herstelbare onderdelen via gecertificeerde partners.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-[#2D5A27]/10 rounded-lg flex items-center justify-center mb-6">
                    <i class="fa-solid fa-handshake text-2xl text-[#2D5A27]"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Eerlijke Handel</h3>
                <p class="text-gray-600 leading-relaxed italic border-l-4 border-[#2D5A27] pl-4 mb-4">
                    "Transparant van begin tot eind."
                </p>
                <p class="text-gray-600">
                    Wij kopen onze hardware enkel in bij bedrijven die kunnen aantonen dat hun vloot ethisch is verkregen. We vermijden lange transportketens om onze voetafdruk minimaal te houden.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-[#2D5A27]/10 rounded-lg flex items-center justify-center mb-6">
                    <i class="fa-solid fa-earth-europe text-2xl text-[#2D5A27]"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Omgeving & Maatschappij</h3>
                <p class="text-gray-600 leading-relaxed italic border-l-4 border-[#2D5A27] pl-4 mb-4">
                    "Techniek voor iedereen."
                </p>
                <p class="text-gray-600">
                    Wij sponsoren lokale scholen door technisch afgeschreven laptops te doneren aan gezinnen die dit zelf niet kunnen betalen. Zo dragen we bij aan <strong>digitale gelijkheid</strong>.
                </p>
            </div>

        </div>
    </main>

    <footer class="text-center py-10 text-gray-400 text-sm">
        &copy; 2026 CoreCycle - Sustainable Hardware Management
    </footer>

</body>
</html>
