<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']); // Homepage
Route::get('/news', function() { return 'News page'; });
Route::get('/articles', function() { return 'Articles page'; });
Route::get('/lifestyle', function() { return 'Lifestyle page'; });
Route::get('/about', function() { return 'About page'; });
Route::get('/contact', function() { return 'Contact page'; });

// contact? home? idk
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


//about
Route::get('/about', function () {
    return view('about');
});


//news
Route::get('/news', function () {
    return view('news');
});

//articles
Route::get('/articles', function () {
    return view('articles');
});

//lifestyle
Route::get('/lifestyle', function () {
    return view('lifestyle');
});


// Admin route to view messages
Route::get('/admin/messages', function () {
    $messages = App\Models\Message::all();
    return view('admin.messages', compact('messages'));
});


Route::get('/index/{id}', function ($id) {
    if ($id == 1) {
        return view('pages.index.index-show1');
    } elseif ($id == 2) {
        return view('pages.index.index-show2');
    } elseif ($id == 3) {
        return view('pages.index.bloody-treasure');
    } elseif ($id ==4) {
        return view( 'pages.index.index-sidebar1');
    }elseif ($id ==5) {
        return view( 'pages.index.index-sidebar2');
    } elseif ($id ==6) {
        return view( 'pages.index.bleach-soul-resonance');
    }
})->name('index.show');




// News detail route
Route::get('/news/{id}', function ($id) {
    if ($id == 1) {
        return view('pages.news-show');
    } elseif ($id == 2) {
        return view('pages.news-show2');
    } elseif ($id == 3) {
        return view('pages.news-show3');
    } elseif ($id ==4) {
        return view( 'pages.news.news-sidebar1');
    }elseif ($id ==5) {
        return view( 'pages.news.news-sidebar2');
    } elseif ($id ==6) {
        return view( 'pages.news.news-sidebar3');
    }
})->name('news.show');


// Lifestyle detail route
Route::get('/lifestyle/{id}', function ($id) {
    if ($id == 1) {
        return view('pages.lifestyle-show1');
    } elseif ($id == 2) {
        return view('pages.lifestyle-show2');
    } elseif ($id == 3) {
        return view('pages.lifestyle-show3');
    } elseif ($id ==4) {
        return view( 'pages.lifestyle.healthy-morning-routines');
    }elseif ($id ==5) {
        return view( 'pages.lifestyle.minimalist-living');
    } elseif ($id ==6) {
        return view( 'pages.lifestyle.remote-work-tips');
    }
})->name('lifestyle.show');




// Articles detail route
Route::get('/articles/{id}', function ($id) {
    if ($id == 1) {
        return view('pages.articles-show1');
    } elseif ($id == 2) {
        return view('pages.articles-show2');
    } elseif ($id == 3) {
        return view('pages.articles-show3');
    } elseif ($id ==4) {
        return view( 'pages.articles.healthy-daily-routines');
    }elseif ($id ==5) {
        return view( 'pages.articles.modern-lifestyle-trends');
    } elseif ($id ==6) {
        return view( 'pages.articles.cultural-insights');
    }
})->name('articles.show');







// Articles detail route using slugs
// Route::get('/articles/{slug}', function ($slug) {
//     $views = [
//         'healthy-daily-routines' => 'pages.articles.healthy-daily-routines',
//         'modern-lifestyle-trends' => 'pages.articles.modern-lifestyle-trends',
//         'cultural-insights' => 'pages.articles.cultural-insights',
//     ];

//     $slug = strtolower($slug);

//     if (array_key_exists($slug, $views)) {
//         return view($views[$slug]);
//     } else {
//         abort(404);
//     }
// })->name('articles.show');













