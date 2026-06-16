@extends('layouts.app')

@section('title', 'Algemene Voorwaarden | Fitness Aannemer')
@section('meta_description', 'Lees de algemene voorwaarden van Fitness Aannemer. Voorwaarden voor onze diensten, leveringen, garantie en aansprakelijkheid.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Algemene voorwaarden</span>
            </div>
            <h1 class="text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">Algemene <span class="text-primary">voorwaarden</span></h1>
        </div>
    </section>

    <section class="bg-white py-12 lg:py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <p class="text-secondary/50 text-xs mb-12">Laatst bijgewerkt: {{ date('d-m-Y') }}</p>

            <div class="prose-legal">
                <h2>1. Definities</h2>
                <p>In deze algemene voorwaarden wordt verstaan onder:</p>
                <ul>
                    <li><strong>Fitness Aannemer</strong>: Fitness Aannemer, gevestigd aan Soerense Zand Zuid 13, 6961 RA Eerbeek.</li>
                    <li><strong>Opdrachtgever</strong>: de natuurlijke of rechtspersoon die een overeenkomst aangaat met Fitness Aannemer.</li>
                    <li><strong>Overeenkomst</strong>: elke afspraak tussen Fitness Aannemer en de opdrachtgever betreffende de levering van diensten en/of producten.</li>
                    <li><strong>Diensten</strong>: alle werkzaamheden die Fitness Aannemer verricht, waaronder ontwerp, advies, levering, installatie en onderhoud van fitnessapparatuur en -ruimtes.</li>
                </ul>

                <h2>2. Toepasselijkheid</h2>
                <p>Deze algemene voorwaarden zijn van toepassing op alle aanbiedingen, offertes, overeenkomsten en leveringen van Fitness Aannemer. Afwijkingen van deze voorwaarden zijn alleen geldig indien schriftelijk overeengekomen.</p>
                <p>Door het plaatsen van een opdracht of het accepteren van een offerte aanvaardt de opdrachtgever deze voorwaarden.</p>

                <h2>3. Offertes en aanbiedingen</h2>
                <p>Alle offertes en aanbiedingen van Fitness Aannemer zijn vrijblijvend, tenzij uitdrukkelijk anders vermeld. Een offerte is geldig gedurende 30 dagen na dagtekening, tenzij anders aangegeven.</p>
                <p>Genoemde prijzen zijn exclusief BTW, tenzij anders vermeld. Fitness Aannemer behoudt zich het recht voor om prijzen te wijzigen bij gewijzigde omstandigheden of specificaties.</p>

                <h2>4. Uitvoering van de overeenkomst</h2>
                <p>Fitness Aannemer zal de overeenkomst naar beste inzicht en vermogen uitvoeren conform de eisen van goed vakmanschap. Indien nodig kan Fitness Aannemer derden inschakelen voor de uitvoering van werkzaamheden.</p>
                <p>De opdrachtgever zorgt ervoor dat alle gegevens en toegang die nodig zijn voor de uitvoering tijdig beschikbaar worden gesteld. Vertragingen als gevolg van het niet of niet tijdig verstrekken hiervan komen voor rekening van de opdrachtgever.</p>

                <h2>5. Levering en installatie</h2>
                <p>Genoemde levertijden zijn indicatief en gelden niet als fatale termijnen. Bij overschrijding van de levertijd heeft de opdrachtgever geen recht op schadevergoeding of ontbinding, tenzij de overschrijding onredelijk lang is.</p>
                <p>Levering geschiedt op de overeengekomen locatie. De opdrachtgever dient ervoor te zorgen dat de locatie toegankelijk en geschikt is voor levering en installatie. Eventuele meerkosten door ongeschikte locatieomstandigheden komen voor rekening van de opdrachtgever.</p>

                <h2>6. Betaling</h2>
                <p>Betaling dient te geschieden conform de op de factuur vermelde betalingsvoorwaarden. Bij gebreke van specifieke voorwaarden geldt een betalingstermijn van 14 dagen na factuurdatum.</p>
                <p>Bij niet-tijdige betaling is de opdrachtgever van rechtswege in verzuim en is wettelijke rente verschuldigd. Alle kosten voor invordering, zowel gerechtelijk als buitengerechtelijk, komen voor rekening van de opdrachtgever.</p>

                <h2>7. Garantie</h2>
                <p>Op geleverde apparatuur gelden de garantievoorwaarden van de betreffende fabrikant. Fitness Aannemer verstrekt hierover informatie bij levering. Op uitgevoerde installatiewerkzaamheden geldt een garantietermijn van 6 maanden na oplevering.</p>
                <p>Garantie vervalt bij oneigenlijk gebruik, gebrekkig onderhoud, of wijzigingen door derden zonder toestemming van Fitness Aannemer.</p>

                <h2>8. Aansprakelijkheid</h2>
                <p>De aansprakelijkheid van Fitness Aannemer is beperkt tot het bedrag dat in het desbetreffende geval door de aansprakelijkheidsverzekering wordt uitgekeerd. Indien de verzekering geen dekking biedt, is de aansprakelijkheid beperkt tot het factuurbedrag van de betreffende opdracht.</p>
                <p>Fitness Aannemer is niet aansprakelijk voor indirecte schade, waaronder gevolgschade, gederfde winst of gemiste besparingen.</p>

                <h2>9. Overmacht</h2>
                <p>In geval van overmacht is Fitness Aannemer niet gehouden tot nakoming van enige verplichting. Onder overmacht wordt verstaan: elke omstandigheid buiten de macht van Fitness Aannemer die nakoming van de overeenkomst geheel of gedeeltelijk verhindert, waaronder leveringsproblemen bij fabrikanten, transportbeperkingen, natuurrampen en pandemien.</p>

                <h2>10. Annulering</h2>
                <p>Annulering van een opdracht door de opdrachtgever is mogelijk tot 14 dagen voor de geplande levering of installatie. Bij latere annulering is de opdrachtgever 30% van het offertebedrag verschuldigd als annuleringskosten, tenzij anders overeengekomen.</p>
                <p>Reeds bestelde en op maat gemaakte producten kunnen niet geannuleerd worden.</p>

                <h2>11. Intellectueel eigendom</h2>
                <p>Alle ontwerpen, tekeningen, 3D-visualisaties en overige documenten die door Fitness Aannemer zijn vervaardigd, blijven eigendom van Fitness Aannemer. Deze mogen niet zonder schriftelijke toestemming worden verveelvoudigd of aan derden ter beschikking worden gesteld.</p>

                <h2>12. Geschillen en toepasselijk recht</h2>
                <p>Op alle overeenkomsten is Nederlands recht van toepassing. Geschillen worden bij voorkeur in onderling overleg opgelost. Indien dit niet mogelijk is, wordt het geschil voorgelegd aan de bevoegde rechter in het arrondissement waarin Fitness Aannemer is gevestigd.</p>

                <h2>13. Wijzigingen</h2>
                <p>Fitness Aannemer behoudt zich het recht voor om deze algemene voorwaarden te wijzigen. De meest actuele versie is altijd beschikbaar op deze pagina.</p>
            </div>
        </div>
    </section>
@endsection
