@extends('layouts.app')

@section('title', 'Privacybeleid | Fitness Aannemer')
@section('meta_description', 'Lees het privacybeleid van Fitness Aannemer. Hoe wij omgaan met jouw persoonsgegevens, welke data wij verzamelen en jouw rechten.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Privacybeleid</span>
            </div>
            <h1 class="text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">Privacy<span class="text-primary">beleid</span></h1>
        </div>
    </section>

    <section class="bg-white py-12 lg:py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <p class="text-secondary/50 text-xs mb-12">Laatst bijgewerkt: {{ date('d-m-Y') }}</p>

            <div class="prose-legal">
                <h2>1. Wie zijn wij</h2>
                <p>Fitness Aannemer is gevestigd aan Soerense Zand Zuid 13, 6961 RA Eerbeek. Wij zijn verantwoordelijk voor de verwerking van persoonsgegevens zoals beschreven in dit privacybeleid. Voor vragen kun je contact opnemen via <a href="mailto:info@fitnessaannemer.nl">info@fitnessaannemer.nl</a>.</p>

                <h2>2. Welke gegevens verzamelen wij</h2>
                <p>Wij verwerken persoonsgegevens wanneer je gebruikmaakt van onze diensten of deze gegevens zelf aan ons verstrekt. Dit betreft onder andere:</p>
                <ul>
                    <li>Naam en contactgegevens (e-mail, telefoonnummer)</li>
                    <li>Bedrijfsnaam en -gegevens</li>
                    <li>Gegevens die je invult via onze formulieren (adviesgesprek, offerte-aanvraag)</li>
                    <li>IP-adres en browsergegevens via cookies</li>
                    <li>UTM-parameters voor marketingdoeleinden</li>
                </ul>

                <h2>3. Waarom verzamelen wij deze gegevens</h2>
                <p>Wij gebruiken jouw gegevens voor de volgende doeleinden:</p>
                <ul>
                    <li>Het verwerken en beantwoorden van aanvragen en offertes</li>
                    <li>Het inplannen en uitvoeren van adviesgesprekken</li>
                    <li>Het verbeteren van onze website en dienstverlening</li>
                    <li>Het versturen van relevante informatie over onze diensten (alleen met toestemming)</li>
                    <li>Het analyseren van websitegebruik via analytische cookies</li>
                    <li>Het meten van de effectiviteit van marketingcampagnes</li>
                </ul>

                <h2>4. Bewaartermijn</h2>
                <p>Wij bewaren persoonsgegevens niet langer dan strikt noodzakelijk is voor de doeleinden waarvoor ze zijn verzameld. Contactgegevens uit formulieren bewaren wij maximaal 2 jaar na het laatste contact. Financiele en boekhoudkundige gegevens bewaren wij 7 jaar conform de wettelijke bewaarplicht.</p>

                <h2>5. Delen met derden</h2>
                <p>Wij delen jouw gegevens niet met derden, tenzij dit noodzakelijk is voor de uitvoering van onze diensten of wettelijk verplicht is. Wij kunnen gebruikmaken van:</p>
                <ul>
                    <li>E-maildiensten voor het verwerken van formulieren</li>
                    <li>Google Analytics voor websiteanalyse (geanonimiseerd)</li>
                    <li>Hosting providers voor het draaien van onze website</li>
                </ul>
                <p>Met deze partijen hebben wij verwerkersovereenkomsten afgesloten om de bescherming van jouw gegevens te waarborgen.</p>

                <h2>6. Jouw rechten</h2>
                <p>Op grond van de Algemene Verordening Gegevensbescherming (AVG) heb je de volgende rechten:</p>
                <ul>
                    <li><strong>Inzage</strong> - Je hebt het recht om je persoonsgegevens in te zien</li>
                    <li><strong>Correctie</strong> - Je kunt onjuiste gegevens laten corrigeren</li>
                    <li><strong>Verwijdering</strong> - Je kunt verzoeken om verwijdering van je gegevens</li>
                    <li><strong>Beperking</strong> - Je kunt de verwerking laten beperken</li>
                    <li><strong>Overdracht</strong> - Je kunt je gegevens in een gangbaar formaat ontvangen</li>
                    <li><strong>Bezwaar</strong> - Je kunt bezwaar maken tegen de verwerking</li>
                </ul>
                <p>Je kunt een verzoek indienen via <a href="mailto:info@fitnessaannemer.nl">info@fitnessaannemer.nl</a>. Wij reageren binnen 30 dagen op je verzoek.</p>

                <h2>7. Beveiliging</h2>
                <p>Wij nemen passende technische en organisatorische maatregelen om jouw persoonsgegevens te beschermen tegen ongeautoriseerde toegang, verlies of misbruik. Onze website maakt gebruik van SSL-encryptie (HTTPS) voor een veilige verbinding.</p>

                <h2>8. Cookies</h2>
                <p>Onze website maakt gebruik van cookies. Meer informatie hierover vind je in ons <a href="{{ url('/cookies') }}">cookiebeleid</a>.</p>

                <h2>9. Wijzigingen</h2>
                <p>Wij behouden ons het recht voor om dit privacybeleid te wijzigen. De meest actuele versie is altijd beschikbaar op deze pagina. Bij significante wijzigingen informeren wij je via de website.</p>

                <h2>10. Klachten</h2>
                <p>Heb je een klacht over de verwerking van je persoonsgegevens? Neem dan contact met ons op via <a href="mailto:info@fitnessaannemer.nl">info@fitnessaannemer.nl</a>. Je hebt daarnaast altijd het recht om een klacht in te dienen bij de Autoriteit Persoonsgegevens (<a href="https://autoriteitpersoonsgegevens.nl" target="_blank" rel="noopener">autoriteitpersoonsgegevens.nl</a>).</p>
            </div>
        </div>
    </section>
@endsection
