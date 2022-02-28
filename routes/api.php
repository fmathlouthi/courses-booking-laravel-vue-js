<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Dashboard
    Route::get('dashboard', 'DashboardApiController@index')->name('dashboard');
    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::resource('users', 'UsersApiController');

    // Contact Company
    Route::resource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::resource('contact-contacts', 'ContactContactsApiController');

    // Transactions
    Route::resource('transactions', 'TransactionsApiController');

    
    // Coupons
    Route::resource('coupons', 'CouponsApiController');
    
    Route::get('coupons/active/{id}', 'CouponsApiController@active')->name('locales.messages');
    

    // Course Order
    Route::resource('course-orders', 'CourseOrderApiController');
    Route::get('course-orders/active/{id}', 'CourseOrderApiController@active')->name('locales.messages');
    // Language
    Route::resource('languages', 'LanguageApiController');

    // Availability
    Route::resource('availabilities', 'AvailabilityApiController');

    // Country
    Route::resource('countries', 'CountryApiController');
    Route::get('countries/depand/getcountries', 'CountryApiController@getCountries')->name('locales.messages');
    Route::get('countries/depand/getstates', 'CountryApiController@getStates')->name('locales.messages');

    // City
    Route::resource('cities', 'CityApiController');
    Route::get('cities/active/{id}', 'CityApiController@active')->name('locales.messages');
       // Subject
       Route::resource('subjects', 'SubjectApiController');
       Route::get('subjects/active/{id}', 'SubjectApiController@active')->name('locales.messages');
    // Extra
    Route::resource('extras', 'ExtraApiController');

    // Accommodation
    Route::resource('accommodations', 'AccommodationApiController');

    // Univercity Course
    Route::post('univercity-courses/media', 'UnivercityCourseApiController@storeMedia')->name('univercity-courses.storeMedia');
    Route::resource('univercity-courses', 'UnivercityCourseApiController');

    // Feature
    Route::post('features/media', 'FeatureApiController@storeMedia')->name('features.storeMedia');
    Route::resource('features', 'FeatureApiController');

    // Weekly Course
    Route::resource('weekly-courses', 'WeeklyCourseApiController');

    // Semester Course
    Route::resource('semester-courses', 'SemesterCourseApiController');

    // Semester Course Variantes
    Route::resource('semester-course-variantes', 'SemesterCourseVarianteApiController');

    // Weekly Accommodation
    Route::post('weekly-accommodations/media', 'WeeklyAccommodationApiController@storeMedia')->name('weekly-accommodations.storeMedia');
    Route::resource('weekly-accommodations', 'WeeklyAccommodationApiController');

    // Semester Accommodation
    Route::resource('semester-accommodations', 'SemesterAccommodationApiController');
    Route::post('semester-accommodations/media', 'SemesterAccommodationApiController@storeMedia')->name('weekly-accommodations.storeMedia');
    // Semester Accomm Variantes
    Route::resource('semester-accomm-variantes', 'SemesterAccommVariantesApiController');

    // Pathway University
    Route::post('pathway-universities/media', 'PathwayUniversityApiController@storeMedia')->name('pathway-universities.storeMedia');
    Route::resource('pathway-universities', 'PathwayUniversityApiController');

    // Pathway
    Route::resource('pathways', 'PathwayApiController');

    // University Subject
    Route::post('university-subjects/media', 'UniversitySubjectApiController@storeMedia')->name('university-subjects.storeMedia');
    Route::resource('university-subjects', 'UniversitySubjectApiController');

    // Subject Programs
    Route::resource('subject-programs', 'SubjectProgramsApiController');
});


Route::group(['prefix' => 'v2', 'as' => 'api.', 'namespace' => 'Api\V1\Front'], function () {
    $routes = ['only' => ['index','show']];
    Route::get('countriesaccommodation', 'AccommodatinsApiController@getcountres');
    Route::get('citiesbycountryaccommodation', 'AccommodatinsApiController@getcitybycountry');
    Route::get('accommodatinsfilter', 'AccommodatinsApiController@filtercourse' );

    Route::resource('course-weeklies', 'CoursesUniversitiesApiController',$routes );
    Route::get('checklogin', 'CoursesUniversitiesApiController@checklogin' );
    Route::get('universities-courses', 'LanguagesUniversitiesApiController@universitiescourse');
    Route::get('languages', 'LanguagesUniversitiesApiController@index');
    Route::get('countrybylanguage', 'LanguagesUniversitiesApiController@getcountrybylanguage');
    Route::get('citiesbycountry', 'LanguagesUniversitiesApiController@getcitybycountry');
    Route::get('course-weekliesfiltercourse', 'LanguagesUniversitiesApiController@filtercourse' );
    Route::get('prices', 'PriceApiController@index');
    Route::get('CourseUniversityFeatures', 'PriceApiController@features');
    Route::get('course-weeklies/{id}/price', 'CoursesUniversitiesApiController@pricefor');
    Route::get('course-weeklies/{id}/pricesemster', 'CoursesUniversitiesApiController@priceforsemester');
    Route::post('checkout', 'CheckoutApiController')->name('checkout');
    Route::get('courseweekliesdiscountprice', 'CoursesUniversitiesApiController@promocode');
    /*Route::resource('course-weeklies', 'CoursesPerWeekApiController',$routes );
    Route::get('course-weekliesfiltercourse', 'CoursesPerWeekApiController@filtercourse' );
     Route::get('checklogin', 'CoursesPerWeekApiController@checklogin' );
    Route::get('prices', 'PriceApiController@index');
    Route::get('languages', 'LanguagesUniversitiesApiController@index');
    Route::get('countrybylanguage', 'CoursecountryApiController@getcountrybylanguage');
    Route::get('courseweeklycitiesbycountry', 'CoursecountryApiController@getcitybycountry');
    Route::get('course-weeklies/{id}/price', 'CoursesUniversitiesApiController@pricefor');
    Route::get('courseweekliesdiscountprice', 'CoursesPerWeekApiController@promocode');
    Route::get('CourseUniversityFeatures', 'CourseUniversityFeaturesApiController@index');
    Route::post('checkout', 'CheckoutApiController')->name('checkout');*/
    });
