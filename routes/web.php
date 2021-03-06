<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
Route::put('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
Route::get('/profile/changepassword', 'HomeController@changePasswordForm')->name('profile.change.password');
Route::post('/profile/changepassword', 'HomeController@changePassword')->name('profile.changepassword');

Route::group(['middleware' => ['auth','role:Admin']], function () 
{
    Route::get('/roles-permissions', 'RolePermissionController@roles')->name('roles-permissions');
    Route::get('/role-create', 'RolePermissionController@createRole')->name('role.create');
    Route::post('/role-store', 'RolePermissionController@storeRole')->name('role.store');
    
    Route::get('/role-edit/{id}', 'RolePermissionController@editRole')->name('role.edit');
    Route::put('/role-update/{id}', 'RolePermissionController@updateRole')->name('role.update');

    Route::get('/permission-create', 'RolePermissionController@createPermission')->name('permission.create');
    Route::post('/permission-store', 'RolePermissionController@storePermission')->name('permission.store');
    Route::get('/permission-edit/{id}', 'RolePermissionController@editPermission')->name('permission.edit');
    Route::put('/permission-update/{id}', 'RolePermissionController@updatePermission')->name('permission.update');

    Route::get('assign-subject-to-class/{id}', 'GradeController@assignSubject')->name('class.assign.subject');
    Route::post('assign-subject-to-class/{id}', 'GradeController@storeAssignedSubject')->name('store.class.assign.subject');

    Route::resource('assignrole', 'RoleAssign');
    Route::resource('classes', 'GradeController');
    Route::resource('subject', 'SubjectController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('parents', 'ParentsController');
    Route::resource('student', 'StudentController');
    Route::get('attendance', 'AttendanceController@index')->name('attendance.index');
    Route::get('/anounecement', 'AnnounecemtsControlle@index')->name('anounecement.index');
    Route::get('/anounecement/create', 'AnnounecemtsControlle@create')->name('anounecement.create');
    Route::get('/anounecement/edit', 'AnnounecemtsControlle@edit')->name('anounecement.edit');
    Route::post('/anounecement/store', 'AnnounecemtsControlle@store')->name('anounecement.store');
    Route::delete('/anounecement-destroy/{id}', 'AnnounecemtsControlle@destroy')->name('anounecement.destroy');

});

Route::group(['middleware' => ['auth','role:Teacher']], function () 
{

    Route::get('/classlist', 'Class_Subject_ListController@index')->name('classlist.show');
    Route::get('/subjectlist', 'Class_Subject_ListController@index2')->name('subjectlist.show');

    Route::post('attendance', 'AttendanceController@store')->name('teacher.attendance.store');
    Route::get('attendance-create/{classid}', 'AttendanceController@createByTeacher')->name('teacher.attendance.create');
    Route::get('/classlist/units/{id}', 'UnitController@index')->name('units.index');
    Route::get('/unit-create/{id}', 'UnitController@create')->name('units.create');
    Route::get('/unit-edit/{id}', 'UnitController@edit')->name('units.edit');
    Route::delete('/unit-destroy/{id}', 'UnitController@destroy')->name('units.destroy');

    // Route::resource('units', 'UnitController');


    Route::post('/unit-store/{id}', 'UnitController@store')->name('units.store');
    Route::put('/unit-update/{id}', 'UnitController@update')->name('units.update');

    
});

Route::group(['middleware' => ['auth','role:Parent']], function () 
{
    Route::get('attendance/{attendance}', 'AttendanceController@show')->name('attendance.show');
});

Route::group(['middleware' => ['auth','role:Student']], function () {

    Route::get('/myattendance', 'Student_interfaceController@index')->name('myattendance.show');
    Route::get('/mysubjectlist', 'Student_interfaceController@index2')->name('mysujectlist.show');

    Route::get('/mycourses/{id}', 'Student_interfaceController@index3')->name('mycourses.show');

});
