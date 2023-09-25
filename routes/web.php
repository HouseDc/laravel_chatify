<?php

use App\Events\NotificationEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Goutte\Client;

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
    return view('welcome');
});

Route::get('/get-content', function () {

    $client = new Client();
    $crawler = $client->request('GET', 'https://www.daraz.pk/mens-shoes/?spm=a2a0e.home.cate_3.8.35e34076Gbpjru');
    echo '<pre>';

    // dd($crawler->filter('.currency--GVKjl')->text());


    $crawler->filter('a')->each(function ($node){
        $nt = $node->text();
        print_r($nt)  ;
        echo '<br>';
    });

    echo 'done';
    // dd($crawler->html());
    // Extract data from the page
    // $data = $crawler->filter('h4')->text();
    // echo $crawler->filter('h4')->last()->text();
    // Process and store the scraped data as needed

});

Route::get('/hello-this', function () {
    return view('welcome');
});

Route::get('test', function () {
    event(new NotificationEvent('Monika'));
    return "Event has been sent!";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
