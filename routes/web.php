<?php





Route::get('/', 'NavigationController@index');





Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/maintenance', 'MaintenanceController@index');

Route::middleware(['maintenance'])->group(function(){

  Route::get('genres', 'GenresController@index');
  Route::get('genres/{id}/edit', 'GenresController@edit');
  Route::post('genres/{id}/edit', 'GenresController@store');

  Route::get('tracks', 'TracksController@index');
  Route::get('tracks/new', 'TracksController@create');
  Route::post('/tracks', 'TracksController@store');

  Route::get('/playlists', 'PlaylistController@index');
  Route::get('playlists/new', 'PlaylistController@create');
  Route::get('/playlists/{id}', 'PlaylistController@index');
  Route::post('/playlists', 'PlaylistController@store');

  Route::get('/signup', 'SignUpController@index');
  Route::post('/signup', 'SignUpController@signup');
});

Route::middleware(['authenticated'])->group(function(){
  Route::get('/profile', 'AdminController@index');
  Route::get('/settings', 'SettingsController@index');
  Route::post('/settings', 'SettingsController@change');

});
