<?php

namespace App\Http\Controllers;

use App\Models\SeoMetadata;
use App\Services\PaginaTeksten;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * De vaste pagina's waarvan InSpace de teksten mag aanpassen, met per pagina
 * de velden en de tekst die er nu staat. Alleen voor EazyDash: die vraagt het
 * op met het leestoken van deze site en laat het InSpace zien.
 *
 * Elke pagina wordt hiervoor één keer opgebouwd: welke velden er zijn, volgt
 * zo uit de pagina zelf (zie PaginaTeksten) en hoeft nergens bijgehouden.
 */
class PaginaTekstenController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $token = (string) config('services.eazyonline.token');
        abort_if($token === '' || ! hash_equals($token, (string) $request->bearerToken()), 404);

        $paginas = [];

        foreach (self::paginas() as $pad => [$sjabloon, $view]) {
            $opname = PaginaTeksten::opname();
            $view()->with(['teksten' => $opname, 'seo' => SeoMetadata::findByPath($pad)])->render();

            $paginas[] = ['path' => $pad, 'template' => $sjabloon, 'fields' => $opname->velden()];
        }

        return response()->json(['data' => $paginas]);
    }

    /**
     * De dienst-, apparatuur- en inrichtenpagina's, uit de routes.
     *
     * @return array<string, array{0: string, 1: Closure(): View}>
     */
    public static function paginas(): array
    {
        $paginas = [];

        foreach (Route::getRoutes()->getRoutes() as $route) {
            $actie = $route->getActionName();
            $slug = $route->defaults['slug'] ?? null;
            $view = $route->defaults['view'] ?? '';
            $pad = '/' . $route->uri();

            if ($actie === PageController::class . '@apparatuurCategorie') {
                $paginas[$pad] = ['apparatuur', fn () => app(PageController::class)->apparatuurCategorie($slug)];
            } elseif ($actie === PageController::class . '@oplossing') {
                $paginas[$pad] = ['inrichten', fn () => app(PageController::class)->oplossing($slug)];
            } elseif (str_starts_with($view, 'diensten.') && $view !== 'diensten.index') {
                $paginas[$pad] = ['dienst', fn () => view($view)];
            }
        }

        return $paginas;
    }
}
