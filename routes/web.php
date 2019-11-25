<?php
Route::get('setlocale/{locale}', "PagesController@ChangeLanguage")->name('changeLang');
Route::middleware('https')->group(function(){
    Route::get('privacy' , function(){
        return "";
    });
    Route::get('/', 'PagesController@getLandingPage')->name('LandingPageRoute');
    Route::get('/contact', 'PagesController@getContactPage')->name('ContactRoute');
    Route::post('/contact', 'ContactController@ProccessContact')->name('ContactRouteProccess');
    Route::any('/newsletter-add' , 'NewsLetterController@postNewsLetter')->name('newsletter.post');
    Route::get('/newsletter-out' , 'NewsLetterController@getOutNewsLetter')->name('newsletter.out.get');
    Route::post('/newsletter-out' , 'NewsLetterController@postOutNewsLetter')->name('newsletter.out.post');
    Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/' , 'AdminController@getIndex')->name('admin.home');
            Route::get('/new' , 'AdminController@getNewPost')->name('admin.new');
            Route::post('/post' , 'AdminController@UploadPost')->name('admin.UploadPost');
            Route::any('/post-edit/{id}' , 'AdminController@EditPost')->name('admin.EditPost');
            Route::any('/post-important/{id}' , 'AdminController@SetImportant')->name('admin.SetImportant');
            Route::any('/post-update/{id}' , 'AdminController@UpadatePost')->name('admin.UpdatePost');
            Route::any('/post-delete/{id}' , 'AdminController@DeletePost')->name('admin.DeletePost');
            Route::get('/all' , 'AdminController@getAllPosts')->name('admin.allPosts');
            //Messages and Support Requests
            Route::get('/messages' , 'AdminController@getMessages')->name('admin.allMessages');
            Route::get('/archive-messages/{id}' , 'AdminController@ArchiveMessage')->name('message.archive');
            Route::get('/delete-message/{id}' , 'AdminController@DeleteMessage')->name('message.delete');
        });
    });
    Route::get('/logout', 'AdminController@logout')->name('link.logout');
    Route::prefix('news')->group(function() {
        Route::get('/' , 'NewsController@getIndex')->name('blog.index');
        Route::get('/{slug}' , 'NewsController@getSingle')->name('blog.single');
        Route::post('/join' , 'NewsController@joinNewsLetter')->name('blog.join');
    });
    Route::get('/sitemap.xml' , 'SitemapsController@getSitemap');
    Auth::routes();
});