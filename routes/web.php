<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            return view('welcome');
        });

        Route::prefix('/dashboard')
            ->as('dashboard.')
            ->middleware(['auth', 'verified', 'super_admin'])
            ->group(function () {

                // Dashboard
                Route::view('/', 'index')->name('main');
                Route::view('v2', 'index2')->name('v2');
                Route::view('v3', 'index3')->name('v3');

                // Widgets
                Route::view('widgets', 'pages.widgets')->name('pages.widgets');

                // layouts
                Route::view('layout', 'pages.layout.top-nav')->name('pages.layout-nav');
                Route::view('layout/sidebar', 'pages.layout.top-nav-sidebar')->name('pages.layout-sidebar');
                Route::view('layout/boxed', 'pages.layout.boxed')->name('pages.layout-boxed');
                Route::view('layout/fixed/sidebar', 'pages.layout.fixed-sidebar')->name('pages.layout-fixed-sidebar');
                Route::view('layout/fixed/sidebar/custom', 'pages.layout.fixed-sidebar-custom')->name('pages.layout-fixed-sidebar-custom');
                Route::view('layout/fixed/topnav', 'pages.layout.fixed-topnav')->name('pages.layout-fixed-topnav');
                Route::view('layout/fixed/footer', 'pages.layout.fixed-footer')->name('pages.layout-fixed-footer');
                Route::view('layout/collapsed/sidebar', 'pages.layout.collapsed-sidebar')->name('pages.layout-collapsed-sidebar');
                
                // Charts
                Route::view('charts/chartjs', 'pages.charts.chartjs')->name('pages.charts.chartjs');
                Route::view('charts/flot', 'pages.charts.flot')->name('pages.charts.flot');
                Route::view('charts/inline', 'pages.charts.inline')->name('pages.charts.inline');
                Route::view('charts/uplot', 'pages.charts.uplot')->name('pages.charts.uplot');
                
                // Ui Elements
                Route::view('ui/elements/general', 'pages.ui.general')->name('pages.ui.general');
                Route::view('ui/elements/icons', 'pages.ui.icons')->name('pages.ui.icons');
                Route::view('ui/elements/buttons', 'pages.ui.buttons')->name('pages.ui.buttons');
                Route::view('ui/elements/sliders', 'pages.ui.sliders')->name('pages.ui.sliders');
                Route::view('ui/elements/modals', 'pages.ui.modals')->name('pages.ui.modals');
                Route::view('ui/elements/navbar', 'pages.ui.navbar')->name('pages.ui.navbar');
                Route::view('ui/elements/timeline', 'pages.ui.timeline')->name('pages.ui.timeline');
                Route::view('ui/elements/ribbons', 'pages.ui.ribbons')->name('pages.ui.ribbons');
                
                // Forms
                Route::view('forms/general', 'pages.forms.general')->name('pages.form.general');
                Route::view('forms/advanced', 'pages.forms.advanced')->name('pages.form.advanced');
                Route::view('forms/editors', 'pages.forms.editors')->name('pages.form.editors');
                Route::view('forms/validation', 'pages.forms.validation')->name('pages.form.validation');
                
                // Tables
                Route::view('tables/simple', 'pages.tables.simple')->name('pages.table.simple');
                Route::view('tables/data', 'pages.tables.data')->name('pages.table.data');
                Route::view('tables/jsgrid', 'pages.tables.jsgrid')->name('pages.table.jsgrid');

                // 

            });

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        require __DIR__ . '/auth.php';
    }
);
