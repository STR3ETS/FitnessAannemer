<?php

/*
|--------------------------------------------------------------------------
| Merkpagina's
|--------------------------------------------------------------------------
|
| Merken met een eigen pagina onder /onze-merken/{slug}. De slug is de
| URL, de waarde de weergavenaam. Deze lijst wordt gebruikt voor de route
| constraint, de sitemap en het automatisch linken van merknamen op het
| merkenoverzicht, de krachtapparatuurpagina en projectpagina's.
|
| De inhoud van elke merkpagina staat in PageController::$merken.
|
*/

return [

    'paginas' => [
        'gym80' => 'Gym80',
        'watson' => 'Watson',
    ],

];
