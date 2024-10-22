<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $menuLinks = [
        [
            'name' => 'Characters',
            'current' => false
        ],
        [
            'name' => 'Comics',
            'current' => true
        ],
        [
            'name' => 'Movies',
            'current' => false
        ],
        [
            'name' => 'Tv',
            'current' => false
        ],
        [
            'name' => 'Games',
            'current' => false
        ],
        [
            'name' => 'Collectibles',
            'current' => false
        ],
        [
            'name' => 'Videos',
            'current' => false
        ],
        [
            'name' => 'Fans',
            'current' => false
        ],
        [
            'name' => 'News',
            'current' => false
        ],
        [
            'name' => 'Shop',
            'current' => false
        ],
    ];
    $comics = config('comics');
    $menuItems = [];
    $menuLinksDcComics = [];
    $menuLinksShop = [];
    $menuLinksDc = [];
    $menuLinksSites = [
        [
            'name' => 'DC',
            'link' => '#'
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '#'
        ],
        [
            'name' => 'DC Kids',
            'link' => '#'
        ],
        [
            'name' => 'DC Universe',
            'link' => '#'
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#'
        ]
    ];


    return view('welcome', compact('menuLinks','comics','menuItems',
                'menuLinksDcComics','menuLinksShop','menuLinksDc','menuLinksSites'));
})->name('homePage');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
