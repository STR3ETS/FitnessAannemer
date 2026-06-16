@extends('layouts.app')

@section('title', 'Cookiebeleid | Fitness Aannemer')
@section('meta_description', 'Lees het cookiebeleid van Fitness Aannemer. Welke cookies wij gebruiken, waarom, en hoe je ze kunt beheren.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Cookies</span>
            </div>
            <h1 class="text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">Cookie<span class="text-primary">beleid</span></h1>
        </div>
    </section>

    <section class="bg-white py-12 lg:py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <p class="text-secondary/50 text-xs mb-12">Laatst bijgewerkt: {{ date('d-m-Y') }}</p>

            <div class="prose-legal">
                <h2>1. Wat zijn cookies</h2>
                <p>Cookies zijn kleine tekstbestanden die op je computer, tablet of telefoon worden opgeslagen wanneer je onze website bezoekt. Ze helpen ons om de website goed te laten functioneren, je voorkeuren te onthouden en inzicht te krijgen in hoe de website wordt gebruikt.</p>

                <h2>2. Welke cookies gebruiken wij</h2>

                <h3>Noodzakelijke cookies</h3>
                <p>Deze cookies zijn essentieel voor het functioneren van de website. Zonder deze cookies kunnen bepaalde onderdelen niet werken.</p>
                <div class="cookie-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Doel</th>
                                <th>Bewaartermijn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>XSRF-TOKEN</td>
                                <td>Bescherming tegen cross-site request forgery</td>
                                <td>Sessie</td>
                            </tr>
                            <tr>
                                <td>laravel_session</td>
                                <td>Sessie-identificatie</td>
                                <td>2 uur</td>
                            </tr>
                            <tr>
                                <td>cookie-consent</td>
                                <td>Onthouden van je cookievoorkeuren</td>
                                <td>1 jaar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Analytische cookies</h3>
                <p>Wij gebruiken analytische cookies om inzicht te krijgen in hoe bezoekers de website gebruiken. Deze informatie helpt ons om de website te verbeteren.</p>
                <div class="cookie-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Doel</th>
                                <th>Bewaartermijn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_ga</td>
                                <td>Google Analytics - onderscheid maken tussen gebruikers</td>
                                <td>2 jaar</td>
                            </tr>
                            <tr>
                                <td>_ga_*</td>
                                <td>Google Analytics - sessie-informatie bijhouden</td>
                                <td>2 jaar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Marketing cookies</h3>
                <p>Marketing cookies worden gebruikt om de effectiviteit van onze advertentiecampagnes te meten. Deze cookies worden alleen geplaatst als je hiervoor toestemming geeft.</p>
                <div class="cookie-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Doel</th>
                                <th>Bewaartermijn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>utm_source</td>
                                <td>Herkomst van de bezoeker bijhouden</td>
                                <td>30 dagen</td>
                            </tr>
                            <tr>
                                <td>utm_medium</td>
                                <td>Type marketingkanaal bijhouden</td>
                                <td>30 dagen</td>
                            </tr>
                            <tr>
                                <td>utm_campaign</td>
                                <td>Specifieke campagne bijhouden</td>
                                <td>30 dagen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2>3. Cookies beheren</h2>
                <p>Bij je eerste bezoek aan onze website vragen wij toestemming voor het plaatsen van cookies. Je kunt je keuze op elk moment wijzigen door je browserinstellingen aan te passen.</p>
                <p>Hieronder vind je instructies voor de meest gebruikte browsers:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                    <li><a href="https://support.mozilla.org/nl/kb/cookies-verwijderen-gegevens-wissen" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                    <li><a href="https://support.apple.com/nl-nl/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/nl-nl/microsoft-edge/cookies-verwijderen-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge</a></li>
                </ul>
                <p>Let op: het blokkeren van cookies kan invloed hebben op de werking van de website.</p>

                <h2>4. Google Analytics</h2>
                <p>Wij gebruiken Google Analytics om het gebruik van onze website te analyseren. Google kan deze informatie aan derden verschaffen als Google hiertoe wettelijk verplicht wordt. Wij hebben Google niet toegestaan de verkregen informatie te gebruiken voor andere Google-diensten.</p>
                <p>Wij hebben de volgende maatregelen genomen:</p>
                <ul>
                    <li>Wij hebben een verwerkersovereenkomst met Google gesloten</li>
                    <li>Het laatste octet van het IP-adres wordt geanonimiseerd</li>
                    <li>Gegevens delen met Google is uitgeschakeld</li>
                </ul>

                <h2>5. Wijzigingen</h2>
                <p>Wij behouden ons het recht voor om dit cookiebeleid te wijzigen. De meest actuele versie is altijd beschikbaar op deze pagina.</p>

                <h2>6. Vragen</h2>
                <p>Heb je vragen over ons cookiebeleid? Neem dan contact met ons op via <a href="mailto:info@fitnessaannemer.nl">info@fitnessaannemer.nl</a>.</p>
            </div>
        </div>
    </section>
@endsection
