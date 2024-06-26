<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EplController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\wc22Controller;
use App\Http\Controllers\LaLigaController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LegendController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SeriaAController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BundesLigaController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LeagueListController;
use App\Http\Controllers\PrevSeasonController;
use App\Http\Controllers\LandingPageController;

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
// Navigate to Home Page
Route::get('/', [LandingPageController::class, 'landingPage'])->name('index.landing-page');

// Navigate to Legend Page
Route::get('/legend', [LegendController::class, 'legendPage'])->name('index.legend-page');

// Navigate to League List Page
Route::controller(LeagueListController::class)->group(function () {
    // For synopsis League List
    Route::get('/league-list', 'leagueListPage')->name('index.league-list-page');
    // For Previous Seasons League List
    Route::get('/league-list-prev', 'leagueListPagePrev')->name('index.league-list-page-prev');
});


// Navigate to Previous Seasons Page --> JSON Parsing
Route::controller(PrevSeasonController::class)->group(function () {
    // Previous Champions League
    Route::get('/previous-ucl', 'previousUcl')->name('index.previous-ucl');
    // Previous EPL Seasons
    Route::get('/previous-epl-seasons', 'previousEplSeasons')->name('index.previous-epl-seasons');
    // Previous La-Liga Seasons
    Route::get('/previous-la-liga-seasons', 'previousLaLigaSeasons')->name('index.previous-la-liga-seasons');
    // Previous La-Liga Seasons
    Route::get('/previous-bundes-liga-seasons', 'previousBundesSeasons')->name('index.previous-bundes-seasons');
    // Previous Ligue-1 Seasons
    Route::get('/previous-serie-a-seasons', 'previousSerieaSeasons')->name('index.previous-seriea-seasons');
});

// Navigate to Players --> CRUD Operations
Route::controller(PlayerController::class)->group(function () {
    // Players Card Page
    Route::get('/players', 'playerCardPage')->name('index.players');
    // Show Create Player Form
    Route::get('/players/create', 'createPlayer')->name('index.create-player')->middleware(['auth', 'user-access:admin']);
    // Store Created Player
    Route::post('/players/store', 'storePlayer')->name('index.store-player')->middleware(['auth', 'user-access:admin']);
    // Show Edit Player Form
    Route::get('/players/{id}/edit', 'updatePlayer')->name('index.update-player')->middleware(['auth', 'user-access:admin']);
    // Update Player and Save
    Route::put('/players/{id}/update', 'saveUpdatPlayer')->name('index.save-player')->middleware(['auth', 'user-access:admin']);
    // Delete Player
    Route::delete('/players/{id}/delete', 'deletePlayer')->name('index.delete-player')->middleware(['auth', 'user-access:admin']);
    // Show Compare Page
    Route::get('/players/compare', 'comparePlayers')->name('index.compare-players');
    // Compare Action
    Route::post('/players/compareaction', 'compareAction')->name('index.compare-action');
    // Show Player Profile
    Route::get('/players/{player}', 'showPlayer')->name('index.show-player');
});

// Navigate to La-Liga Clubs
Route::controller(LaLigaController::class)->group(function () {
    // Club Card Page
    Route::get('/la-liga-clubs', 'laligaClubCardPage')->name('laliga.la-liga-clubs');
    // Show Create Club Form
    Route::get('/la-liga-clubs/create', 'createClub')->name('laliga.create-club')->middleware(['auth', 'user-access:admin']);
    // Store Create Club
    Route::post('/la-liga-clubs/store', 'storeClub')->name('laliga.store-club')->middleware(['auth', 'user-access:admin']);
    // Show Edit Club Form
    Route::get('/la-liga-clubs/{id}/edit', 'updateClub')->name('laliga.update-club')->middleware(['auth', 'user-access:admin']);
    // Update Club and Save
    Route::put('/la-liga-clubs/{id}/update', 'saveUpdatClub')->name('laliga.save-club')->middleware(['auth', 'user-access:admin']);
    // Delete Player
    Route::delete('/la-liga-clubs/{id}/delete', 'deleteClub')->name('la-liga.delete-club')->middleware(['auth', 'user-access:admin']);

    // Compare Clubs
    Route::get('/clubs/compare', [LeagueListController::class, 'compareClubs'])->name('laliga.compare-clubs');
    // Compare Action
    Route::post('/clubs/compareaction', [LeagueListController::class, 'compareClubAction'])->name('laliga.compare-action');

    // Show Club Profile
    Route::get('/la-liga-clubs/{club}', 'showClub')->name('laliga.show-club');

    // Show Club Cards
    Route::get('/leagues/{league}/clubs', [ClubController::class, 'index'])->name('clubs.club-cards');
    // Show Club Profile
    Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');
});

// Navigate to EPL Clubs
Route::controller(EplController::class)->group(function () {
    // Club Card Page
    Route::get('/epl-clubs', 'eplClubCardPage')->name('epl.la-liga-clubs');
    // Show Create Club Form
    Route::get('/epl-clubs/create', 'createClub')->name('epl.create-club')->middleware(['auth', 'user-access:admin']);
    // Store Create Club
    Route::post('/epl-clubs/store', 'storeClub')->name('epl.store-club')->middleware(['auth', 'user-access:admin']);
    // Show Edit Club Form
    Route::get('/epl-clubs/{id}/edit', 'updateClub')->name('epl.update-club')->middleware(['auth', 'user-access:admin']);
    // Update Club and Save
    Route::put('/epl-clubs/{id}/update', 'saveUpdatClub')->name('epl.save-club')->middleware(['auth', 'user-access:admin']);
    // Delete Player
    Route::delete('/epl-clubs/{id}/delete', 'deleteClub')->name('epl.delete-club')->middleware(['auth', 'user-access:admin']);
    // Show Club Profile
    Route::get('/epl-clubs/{club}', 'showClub')->name('epl.show-club');
});

// Navigate to Bundes Liga Clubs
Route::controller(BundesLigaController::class)->group(function () {
    // Club Card Page
    Route::get('/bundes-liga-clubs', 'bundesligaClubCardPage')->name('bundesliga.la-liga-clubs');
    // Show Create Club Form
    Route::get('/bundes-liga-clubs/create', 'createClub')->name('bundesliga.create-club')->middleware(['auth', 'user-access:admin']);
    // Store Create Club
    Route::post('/bundes-liga-clubs/store', 'storeClub')->name('bundesliga.store-club')->middleware(['auth', 'user-access:admin']);
    // Show Edit Club Form
    Route::get('/bundes-liga-clubs/{id}/edit', 'updateClub')->name('bundesliga.update-club')->middleware(['auth', 'user-access:admin']);
    // Update Club and Save
    Route::put('/bundes-liga-clubs/{id}/update', 'saveUpdatClub')->name('bundesliga.save-club')->middleware(['auth', 'user-access:admin']);
    // Delete Player
    Route::delete('/bundes-liga-clubs/{id}/delete', 'deleteClub')->name('bundesliga.delete-club')->middleware(['auth', 'user-access:admin']);
    // Show Club Profile
    Route::get('/bundes-liga-clubs/{club}', 'showClub')->name('bundesliga.show-club');
});

// Navigate to Seria A Clubs
Route::controller(SeriaAController::class)->group(function () {
    // Club Card Page
    Route::get('/seria-a-clubs', 'seriaAClubCardPage')->name('seriaa.la-liga-clubs');
    // Show Create Club Form
    Route::get('/seria-a-clubs/create', 'createClub')->name('seriaa.create-club')->middleware(['auth', 'user-access:admin']);
    // Store Create Club
    Route::post('/seria-a-clubs/store', 'storeClub')->name('seriaa.store-club')->middleware(['auth', 'user-access:admin']);
    // Show Edit Club Form
    Route::get('/seria-a-clubs/{id}/edit', 'updateClub')->name('seriaa.update-club')->middleware(['auth', 'user-access:admin']);
    // Update Club and Save
    Route::put('/seria-a-clubs/{id}/update', 'saveUpdatClub')->name('seriaa.save-club')->middleware(['auth', 'user-access:admin']);
    // Delete Player
    Route::delete('/seria-a-clubs/{id}/delete', 'deleteClub')->name('seriaa.delete-club')->middleware(['auth', 'user-access:admin']);
    // Show Club Profile
    Route::get('/seria-a-clubs/{club}', 'showClub')->name('seriaa.show-club');
});



// Navigate to World Cup 22
Route::controller(wc22Controller::class)->group(function () {
    // Group Stage Point Table
    Route::get('/wc22-group-stage', 'wc22GroupStage')->name('worldcup22.group-stage-point-table');
    // Result Table
    Route::get('/wc22-result-table', 'wc22ResultTable')->name('worldcup22.result-table');
});

// Navigate to Game Page
Route::controller(GameController::class)->group(function () {
    // Game Page
    Route::get('/kickoff!!!', 'gamePage')->name('game.game-page');
});

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    // Register Page
    Route::get('/loginsystem', 'registerPage')->name('auth.register-page');
    // Save Registered User
    Route::post('/loginsystem/save', 'storeUser')->name('auth.save-user');
    // Login Page
    Route::get('/loginsystem', 'loginPage')->name('auth.login-page');
    // Login Action
    Route::post('/loginsystem/login', 'loginAction')->name('auth.login-action');
    // Logout Action
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout-action');
});

// Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::controller(HomePageController::class)->group(function () {
        Route::get('/user-profile', 'userProfilePage')->name('homepage.user-profile');
        // Oder Products
        Route::post('/user-profile/order-products', 'orderProducts')->name('homepage.order-products');
        // Send Message to Admin
        Route::post('/user-profile/send-message', 'sendMessage')->name('homepage.send-message');
        // Add Player to Profile Dream11
        Route::post('/add-player-to-profile', 'addPlayerToProfile')->name('add.player.to.profile');
        // Remove Player from Dream11
        Route::delete('/player/remove', 'removePlayer')->name('player.remove');
    });
    // Show Player on User Profile Dream11
    Route::get('/dream11', 'App\Http\Controllers\UserController@showProfile')->name('user.profile');
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::controller(HomePageController::class)->group(function () {
        Route::get('/admin-dashboard', 'adminDashboard')->name('homepage.admin-dashboard');
        // Delete Order
        Route::delete('/order/{id}/delete', 'deleteOrder')->name('homepage.delete-order');
        // Delete Message
        Route::delete('/message/{id}/delete', 'deleteMessage')->name('homepage.delete-message');
        // Delete Users
        Route::delete('/users/{id}/delete', 'deleteUsers')->name('homepage.delete-users');
    });

    Route::controller(LeagueController::class)->group(function () {
        // Display form to create a league
        Route::get('/leagues/create', 'create')->name('leagues.create');
        // Handle the post request to store the league
        Route::post('/leagues/store', 'store')->name('leagues.store');
        // Display form to edit a league
        Route::get('/leagues/{league}/edit', 'edit')->name('leagues.edit');
        // Handle the post request to update the league
        Route::put('/leagues/{league}', 'update')->name('leagues.update');
        // Handle the request to delete the league
        Route::delete('/leagues/{league}', 'destroy')->name('leagues.destroy');
    });

    Route::controller(ClubController::class)->group(function () {
        // Display form to create a club of the league
        Route::get('/leagues/{league}/clubs/create', 'create')->name('clubs.create');
        // Handle the post request to store the club
        Route::post('/leagues/{league}/clubs', 'store')->name('clubs.store');
        // Display form to edit a club
        Route::get('/leagues/{league}/clubs/{club}/edit', 'edit')->name('clubs.edit');
        // Handle the post request to update the club
        Route::put('/leagues/{league}/clubs/{club}', 'update')->name('clubs.update');
        // Handle the request to delete the club
        Route::delete('/leagues/{league}/clubs/{club}', 'destroy')->name('clubs.destroy');
    });
});

// News Website
Route::get('/news', [NewsController::class, 'newsPage'])->name('index.news-page');

// Products
Route::controller(ProductsController::class)->group(function () {
    // Products Page
    Route::get('/products', 'productsPage')->name('products.products-page');
    // Show Create Product Form
    Route::get('/products/create', 'createProduct')->name('products.create-product')->middleware(['auth', 'user-access:admin']);
    // Store Created Product
    Route::post('/products/store', 'storeProduct')->name('products.store-product')->middleware(['auth', 'user-access:admin']);
    // Show Edit Product Form
    Route::get('/products/{id}/edit', 'updateProduct')->name('products.update-product')->middleware(['auth', 'user-access:admin']);
    // Update Product and Save
    Route::put('/products/{id}/update', 'saveUpdateProduct')->name('products.save-product')->middleware(['auth', 'user-access:admin']);
    // Delete Product
    Route::delete('/products/{id}/delete', 'deleteProduct')->name('products.delete-product')->middleware(['auth', 'user-access:admin']);
    // Show Product Profile
    Route::get('/products/{product}', 'showProduct')->name('products.show-product');
});

// Forum
Route::controller(ForumController::class)->group(function () {
    // Show forum page
    Route::get('/forum', 'forumPage')->name('forum.forum-page');
    // Store post
    Route::post('/posts', 'store')->name('forum.posts-store');
    // Delete post
    Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
    // Show reply form
    Route::get('/posts/{post}/reply', 'replyForm')->name('posts.reply-form');
    // Store reply
    Route::post('/posts/{post}/reply', 'storeReply')->name('replies.store')->middleware('auth');
});
