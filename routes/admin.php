<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Http\Controllers\Auth\AuthController;
use App\Admin\Http\Controllers\Dashboard\DashboardController;
use App\Admin\Http\Controllers\Module\ModuleController;
use App\Admin\Http\Controllers\Permission\PermissionController;
use App\Admin\Http\Controllers\Role\RoleController;
use App\Admin\Http\Controllers\Admin\AdminController;
use App\Admin\Http\Controllers\User\UserController;
use App\Admin\Http\Controllers\Post\PostCatalogueController;
use App\Admin\Http\Controllers\Post\PostController;
use App\Admin\Http\Controllers\Slider\SliderController;


Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/password/forgot', [AuthController::class, 'forgotPassword'])->name('password.forgot');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Module
        Route::prefix('module')->as('module.')->group(function () {
            Route::middleware(['permission:viewModule'])->group(function () {
                Route::get('/', [ModuleController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createModule'])->group(function () {
                Route::get('/create', [ModuleController::class, 'create'])->name('create');
                Route::post('/store', [ModuleController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editModule'])->group(function () {
                Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('edit');
                Route::put('/update', [ModuleController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteModule'])->group(function () {
                Route::delete('/delete/{id}', [ModuleController::class, 'delete'])->name('delete');
            });
        });

        // Permission
        Route::prefix('permission')->as('permission.')->group(function () {
            Route::middleware(['permission:viewPermission'])->group(function () {
                Route::get('/', [PermissionController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createPermission'])->group(function () {
                Route::get('/create', [PermissionController::class, 'create'])->name('create');
                Route::post('create', [PermissionController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editPermission'])->group(function () {
                Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('edit');
                Route::put('/update', [PermissionController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deletePermission'])->group(function () {
                Route::delete('/{id}', [PermissionController::class, 'delete'])->name('delete');
            });
        });

        //Role
        Route::prefix('role')->as('role.')->group(function () {
            Route::middleware(['permission:viewRole'])->group(function () {
                Route::get('/', [RoleController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createRole'])->group(function () {
                Route::get('/create', [RoleController::class, 'create'])->name('create');
                Route::post('create', [RoleController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editRole'])->group(function () {
                Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
                Route::put('/update', [RoleController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteRole'])->group(function () {
                Route::delete('/{id}', [RoleController::class, 'delete'])->name('delete');
            });
        });

        //Admin
        Route::prefix('admin')->as('admin.')->group(function () {
            Route::middleware(['permission:viewAdmin'])->group(function () {
                Route::get('/', [AdminController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createAdmin'])->group(function () {
                Route::get('create', [AdminController::class, 'create'])->name('create');
                Route::post('create', [AdminController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editAdmin'])->group(function () {
                Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
                Route::put('/update', [AdminController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteAdmin'])->group(function () {
                Route::delete('/{id}', [AdminController::class, 'delete'])->name('delete');
            });
        });

        //User
        Route::prefix('user')->as('user.')->group(function () {
            Route::middleware(['permission:viewCustomer'])->group(function () {
                Route::get('/', [UserController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createCustomer'])->group(function () {
                Route::get('create', [UserController::class, 'create'])->name('create');
                Route::post('create', [UserController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editCustomer'])->group(function () {
                Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
                Route::put('/update', [UserController::class, 'update'])->name('update');
                Route::patch('/update-status', [UserController::class, 'updateStatus'])->name('update.status');
            });

            Route::middleware(['permission:deleteCustomer'])->group(function () {
                Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
            });
        });

        //Post Catalogue
        Route::prefix('post-catalogue')->as('post_catalogue.')->group(function () {
            Route::middleware(['permission:viewCatalogue'])->group(function () {
                Route::get('/', [PostCatalogueController::class, 'index'])->name('index');
                Route::get('/get', [PostCatalogueController::class, 'get'])->name('get');
            });

            Route::middleware(['permission:createCatalogue'])->group(function () {
                Route::get('/create', [PostCatalogueController::class, 'create'])->name('create');
                Route::post('/store', [PostCatalogueController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editCatalogue'])->group(function () {
                Route::get('/edit/{id}', [PostCatalogueController::class, 'edit'])->name('edit');
                Route::put('/update', [PostCatalogueController::class, 'update'])->name('update');
                Route::patch('/update-status', [PostCatalogueController::class, 'updateStatus'])->name('update.status');
            });

            Route::middleware(['permission:deleteCatalogue'])->group(function () {
                Route::delete('/delete/{id}', [PostCatalogueController::class, 'delete'])->name('delete');
            });
        });

        //Post
        Route::prefix('post')->as('post.')->group(function () {
            Route::middleware(['permission:viewPost'])->group(function () {
                Route::get('/', [PostController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createPost'])->group(function () {
                Route::get('/create', [PostController::class, 'create'])->name('create');
                Route::post('/store', [PostController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editPost'])->group(function () {
                Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
                Route::put('/update', [PostController::class, 'update'])->name('update');
                Route::patch('/update-status', [PostController::class, 'updateStatus'])->name('update.status');
            });

            Route::middleware(['permission:deletePost'])->group(function () {
                Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
            });
        });

        //quản lý slider
        Route::prefix('slider')->group(function () {
            Route::middleware(['permission:viewSlider'])->group(function () {
                Route::get('/', [SliderController::class, 'index'])->name('slider.index');
            });

            Route::middleware(['permission:createSlider'])->group(function () {
                Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
                Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
            });

            Route::middleware(['permission:editSlider'])->group(function () {
                Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
                Route::put('/update', [SliderController::class, 'update'])->name('slider.update');
                Route::patch('/update/status', [SliderController::class, 'updateStatus'])->name('slider.update.status');
            });

            Route::middleware(['permission:deleteSlider'])->group(function () {
                Route::delete('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
            });
        });

        //quản lý slider item
        Route::prefix('slider/{id}/item')->group(function () {
            Route::middleware(['permission:viewSlider'])->group(function () {
                Route::get('/', [SliderController::class, 'indexItem'])->name('slider.item.index');
            });

            Route::middleware(['permission:createSlider'])->group(function () {
                Route::get('/create', [SliderController::class, 'createItem'])->name('slider.item.create');
                Route::post('/store', [SliderController::class, 'storeItem'])->name('slider.item.store');
            });
        });

        Route::middleware(['permission:deleteSlider'])->group(function () {
            Route::delete('slider-item/delete/{id}', [SliderController::class, 'deleteItem'])->name('slider.item.delete');
        });

        Route::middleware(['permission:editSlider'])->group(function () {
            Route::get('slider-item/edit/{id}', [SliderController::class, 'editItem'])->name('slider.item.edit');
            Route::put('slider-item/update', [SliderController::class, 'updateItem'])->name('slider.item.update');
        });
    });
});