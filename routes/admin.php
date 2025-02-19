<?php
// Admin Route
Route::group(['prefix'=>'admin','middleware' => ['auth','dashboard']], function() {
    Route::match(['get','post'],'/',function (){
        $module = ucfirst(htmlspecialchars('Dashboard'));
        $controller = ucfirst(htmlspecialchars($module));
        $class = "\\Modules\\$module\\Admin\\";
        $action = 'index';
        if(class_exists($class.$controller.'Controller') && method_exists($class.$controller.'Controller',$action)){
            return App::call($class.$controller.'Controller@'.$action,[]);
        }
        abort(404);
    });
    Route::match(['get','post'],'/module/{module}/{controller?}/{action?}/{param1?}/{param2?}/{param3?}',function ($module,$controller = '',$action = '',$param1 = '',$param2 = '',$param3 = ''){
        $module = ucfirst(htmlspecialchars($module));
        $controller = ucfirst(htmlspecialchars($controller));
        $class = "\\Modules\\$module\\Admin\\";
        if(!class_exists($class.$controller.'Controller')){
            $param3 = $param2;
            $param2 = $param1;
            $param1 = $action;
            $action = $controller;
            $controller = $module;
        }
        $action = $action ? $action : 'index';
        if(class_exists($class.$controller.'Controller') && method_exists($class.$controller.'Controller',$action)){
            $p = array_values(array_filter([$param1,$param2,$param3]));
            return App::call($class.$controller.'Controller@'.$action,$p);
//            return App::make($class.$controller.'Controller')->callAction($action,$p);
        }
        abort(404);
    });
    Route::get('/home/about','HomeConfigController@index')->name('admin.home.about');
    Route::post('/home/about','HomeConfigController@store')->name('store.about.data');

    Route::get('/home/whychoose','HomeConfigController@getWhy')->name('admin.home.why');
    Route::post('/home/why','HomeConfigController@storeWhy')->name('store.why.data');
    /**Luxury Holiday Routes*/
    Route::get('/home/holiday','HomeConfigController@getHoliday')->name('admin.home.holiday');
    Route::get('/home/holiday/edit/{id}','HomeConfigController@Holidayedit')->name('admin.holiday.edit');
    Route::post('/home/holiday/store/{id}','HomeConfigController@Holidaystore')->name('store.holiday.data');
    /**Perfect Place Routes */
    Route::get('/home/perfect/','HomeConfigController@getPerfect')->name('admin.perfect.place');
    Route::get('/home/perfect/create','HomeConfigController@PerfectCreate')->name('admin.perfect.create');
    Route::post('/home/perfect/place/store/','HomeConfigController@Perfectstore')->name('store.perfect.data');
    Route::get('/home/perfect/place/edit/{id}','HomeConfigController@PerfectEdit')->name('admin.perfect.edit');
    Route::post('/home/perfect/place/update/{id}','HomeConfigController@Perfectupdate')->name('update.perfect.data');

    /**Client Testimonial Routes */
    Route::get('/home/testimonial/','HomeConfigController@getTestimonial')->name('admin.testimonial.index');
    Route::get('/home/testimonial/create','HomeConfigController@TestimonialCreate')->name('admin.testimonial.create');
    Route::post('/home/testimonial/store/','HomeConfigController@Testimonialstore')->name('store.testimonial.data');
    Route::get('/home/perfect/place/edit/{id}','HomeConfigController@TestimonialEdit')->name('admin.testimonial.edit');
    Route::post('/home/perfect/place/update/{id}','HomeConfigController@Testimonialupdate')->name('update.testimonial.data');


});
