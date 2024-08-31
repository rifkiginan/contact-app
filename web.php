    <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return "<h1><marquee>Wayolo</marquee></h1>";
});

Route::get('/contact/create', function () {
    return "<h1>Tambah Kontak Baru</h1>";
});

Route::get('/contact/{id}', function ($id) {
    return "Halama Kontak dengan ID ". $id;
});

Route::get('/students/{name}', function ($name=null) {
    if ($name) {
        return "Nama Lengkap: ". $name;
    } else {
        return "Gada nama moas";
    } where('name', '[A-Za-z]+');
});
Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
})->whereAlphaNumeric('name')->name('companies');
Route::get('/', function () {
    $html = "
    <h1>Contact App</h1>
    <div>
        <a href='/contacts'>All contacts</>
        <a href='/contacts/create'>Add contacts</>
        <a href='/contacts/1'>Show contacts</>
    </div>
    ";
    return $html;
    // return view('welcome');
 });