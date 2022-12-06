<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\User;

Auth::routes(["register" => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('dashboard', 'ExamplePagesController@dashboard')->name('dashboard');

Route::get('storage-link', function(){
    return Artisan::call('storage:link');
});

	Route::get('changepassword', function() {
	    $user = User::where('email', 'admin@landrada.mx')->first();
	    $user->password = Hash::make('Landrada_568923');
	    $user->save();
	 
	    echo 'Password changed successfully.';
	});

Route::namespace('Blog')->group(function () {
    Route::get('articulo/{article}', 'ArticleController@show')->name('blog.article.show');
    Route::post('comments/{article}', 'CommentsController@store')->name('blog.comments.store');
    Route::get('buscar/{search}', 'SearchController@index')->name('blog.search');
    Route::get('categoria/{category}', 'CategoryController@index')->name('blog.category');
    Route::get('etiqueta/{tag}', 'TagController@index')->name('blog.tag');
    Route::get('author/{user}', 'AuthorController@index')->name('blog.author');
    Route::get('articulos', 'ArticleController@index')->name('blog.article.index');
    Route::get('buscar', 'SearchController@index')->name('blog.search');
    Route::post('article/{article}', 'ArticleController@store')->name('blog.article.store');
    Route::post('newsletter', 'NewsletterController@store')->name('blog.newsletter.store');
    Route::get('thanks_newsletter', 'NewsletterController@thanksNewsletter')->name('blog.thanks_newsletter');
});

Route::group(['middleware' => 'auth','prefix'=>'admin'], function () {
    Route::resource('category', 'CategoryController', ['except' => ['show']]);
    Route::resource('tag', 'TagController', ['except' => ['show']]);
    Route::resource('article', 'ArticleController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    Route::get('rtl-support', ['as' => 'page.rtl-support', 'uses' => 'ExamplePagesController@rtlSupport']);
    Route::get('timeline', ['as' => 'page.timeline', 'uses' => 'ExamplePagesController@timeline']);
    Route::get('widgets', ['as' => 'page.widgets', 'uses' => 'ExamplePagesController@widgets']);
    Route::get('charts', ['as' => 'page.charts', 'uses' => 'ExamplePagesController@charts']);
    Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);

    Route::get('buttons', ['as' => 'page.buttons', 'uses' => 'ComponentPagesController@buttons']);
    Route::get('grid-system', ['as' => 'page.grid', 'uses' => 'ComponentPagesController@grid']);
    Route::get('panels', ['as' => 'page.panels', 'uses' => 'ComponentPagesController@panels']);
    Route::get('sweet-alert', ['as' => 'page.sweet-alert', 'uses' => 'ComponentPagesController@sweetAlert']);
    Route::get('notifications', ['as' => 'page.notifications', 'uses' => 'ComponentPagesController@notifications']);
    Route::get('icons', ['as' => 'page.icons', 'uses' => 'ComponentPagesController@icons']);
    Route::get('typography', ['as' => 'page.typography', 'uses' => 'ComponentPagesController@typography']);
    
    Route::get('regular-tables', ['as' => 'page.regular_tables', 'uses' => 'TablePagesController@regularTables']);
    Route::get('extended-tables', ['as' => 'page.extended_tables', 'uses' => 'TablePagesController@extendedTables']);
    Route::get('datatable-tables', ['as' => 'page.datatable_tables', 'uses' => 'TablePagesController@datatableTables']);

    Route::get('regular-form', ['as' => 'page.regular_forms', 'uses' => 'FormPagesController@regularForms']);
    Route::get('extended-form', ['as' => 'page.extended_forms', 'uses' => 'FormPagesController@extendedForms']);
    Route::get('validation-form', ['as' => 'page.validation_forms', 'uses' => 'FormPagesController@validationForms']);
    Route::get('wizard-form', ['as' => 'page.wizard_forms', 'uses' => 'FormPagesController@wizardForms']);

    Route::get('google-maps', ['as' => 'page.google_maps', 'uses' => 'MapPagesController@googleMaps']);
    Route::get('fullscreen-maps', ['as' => 'page.fullscreen_maps', 'uses' => 'MapPagesController@fullscreenMaps']);
    Route::get('vector-maps', ['as' => 'page.vector_maps', 'uses' => 'MapPagesController@vectorMaps']);
  });


