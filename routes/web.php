<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\Permission\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\VolunteerController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;

// Default Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::controller(LoginController::class)->group(function () {
    Route::get('/backend/login', 'showLoginForm')->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
});


// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin Routes with Middleware
Route::prefix('admin')->middleware('auth')->group(function () {

    // Role CRUD routes
    Route::group(['as' => 'role.', 'prefix' => 'role'], function () {
        Route::get('', [RoleController::class, 'index'])->name('index')->middleware('permission:role-index');
        Route::get('role-data', [RoleController::class, 'getAllData'])->name('data')->middleware('permission:role-data');
        Route::get('create', [RoleController::class, 'create'])->name('create')->middleware('permission:role-create');
        Route::post('', [RoleController::class, 'store'])->name('store')->middleware('permission:role-store');
        Route::get('{role}/edit', [RoleController::class, 'edit'])->name('edit')->middleware('permission:role-edit');
        Route::put('{role}', [RoleController::class, 'update'])->name('update')->middleware('permission:role-update');
        Route::get('role/{id}/destroy', [RoleController::class, 'destroy'])->name('destroy')->middleware('permission:role-delete');
    });

    // Permission CRUD routes
    Route::group(['as' => 'permission.', 'prefix' => 'permission'], function () {
        Route::get('', [PermissionController::class, 'index'])->name('index')->middleware('permission:role-index');
        Route::get('permission-data', [PermissionController::class, 'getAllData'])->name('data')->middleware('permission:role-data');
        Route::get('create', [PermissionController::class, 'create'])->name('create')->middleware('permission:permission-create');
        Route::post('', [PermissionController::class, 'store'])->name('store')->middleware('permission:role-store');
        Route::get('{permission}/edit', [PermissionController::class, 'edit'])->name('edit')->middleware('permission:permission-edit');
        Route::put('{permission}', [PermissionController::class, 'update'])->name('update')->middleware('permission:role-update');
        Route::get('permission/{id}/destroy', [PermissionController::class, 'destroy'])->name('destroy')->middleware('permission:permission-delete');
    });


    // Settings
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('setting/update', [SettingController::class, 'update'])->name('setting.update');

    // Dashboard
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('index');
    });

    // Menu Management
    Route::prefix('menu')->name('menu.')->group(function () {
        Route::get('', [MenuController::class, 'index'])->name('index');
        Route::get('/indexnp', [MenuController::class, 'indexnp'])->name('indexnp');
        Route::post('', [MenuController::class, 'store'])->name('store');
        Route::put('', [MenuController::class, 'update'])->name('update');
        Route::delete('{menu}', [MenuController::class, 'destroy'])->name('destroy');

        // SubMenu Management
        Route::prefix('{menu}/subMenu')->name('subMenu.')->group(function () {
            Route::post('', [MenuController::class, 'storeSubMenu'])->name('store');
            Route::delete('{subMenu}', [MenuController::class, 'destroySubMenu'])->name('destroy');
            Route::get('modal', [MenuController::class, 'subMenuModal'])->name('component.modal');
        });
    });

    // Page Management
    Route::resource('page', PageController::class)->except('show');

    // Slider Management
    Route::resource('slider', SliderController::class);

    // Category Management
    Route::resource('category', CategoryController::class);

    // Product Management
    Route::resource('product', ProductController::class);

    // Event Management
    Route::resource('event', EventController::class);

    // Client Management
    Route::resource('client', ClientController::class);

    // Gallery Management
    Route::resource('gallery', GalleryController::class);

    // Album Management
    Route::resource('album', AlbumController::class);

    // Team Management
    Route::resource('team', TeamController::class);

    // Booking Management
    Route::resource('booking', BookingController::class);

    // Testimonial Management
    Route::resource('testimonial', TestimonialController::class);

    // Blog Management
    Route::resource('blog', BlogController::class);
    Route::resource('volunteer', VolunteerController::class);
});

// Frontend Routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('', 'homepage')->name('homepage');
    Route::get('menu', 'menu')->name('menu');
    Route::get('about-us', 'about')->name('about');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('sectorsdetail/{sectors}', 'sectorsDetail')->name('sectors.detail');
    Route::get('timelines', 'timeline')->name('timeline');
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact', 'sendcontact')->name('send-contact');
    Route::post('booking', 'bookingDetails')->name('booking-details');
    Route::get('book-a-table', 'book')->name('book');
    Route::get('teams', 'teams')->name('teams');
    Route::get('blogs/{type}', 'blog')->name('blogs');
    Route::get('blogsdetail/{blogs}', 'blogDetail')->name('blog.detail');
    Route::get('events', 'events')->name('events');
    Route::get('eventDetail/{event}', 'eventDetail')->name('event.detail');
    Route::get('{page}', 'page')->name('page.detail');
});
