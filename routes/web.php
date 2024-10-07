<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ClassesController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\backend\SubjectController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// ADMIN'S
Route::controller(AdminController::class)->group(function () {
    Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
    Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
    Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
    Route::get('admin/profile/change', 'AdminPasswordChange')->name('admin.password.change');
    Route::post('admin/password/change', 'AdminPasswordUpdate')->name('admin.password.update');

});

// CLASSES
Route::controller(ClassesController::class)->group(function () {
    Route::get('create/class', 'CreateClass')->name('create.class');
    Route::post('store/class', 'StoreClass')->name('store.class');
    Route::get('manage/creates', 'ManageClasses')->name('manage.classes');
    Route::get('edit/class/{id}', 'EditClass')->name('edit.class');
    Route::post('update/class', 'UpdateClass')->name('update.class');
    Route::get('delete/class/{id}', 'DeleteClass')->name('delete.class');


});

// SUBJECT
Route::controller(SubjectController::class)->group(function () {
    Route::get('create/subject', 'CreateSubject')->name('create.subject');
    Route::post('store/subject', 'StoreSubject')->name('store.subject');
    Route::get('manage/subject', 'ManageSubject')->name('manage.subject');
    Route::get('edit/subject/{id}', 'EditSubject')->name('edit.subject');
    Route::post('update/subject', 'UpdateSubject')->name('update.subject');
    Route::get('delete/subject/{id}', 'DeleteSubject')->name('delete.subject');


    // SUBJECT COMBINATION
    Route::get('add/subject/combination', 'AddSubjectCombination')->name('add.subject.combination');
    Route::post('store/subject/combination', 'StoreSubjectCombination')->name('store.subject.combination');
    Route::get('manage/subject/combination', 'ManageSubjectCombination')->name('manage.subject.combination');
    Route::get('deactivate/subject/combination/{id}', 'DeactivateSubjectCombination')->name('deactivate.subject.combination');
});

//STUDENT
Route::controller(StudentController::class)->group(function () {
    Route::get('add/student', 'AddStudent')->name('add.student');
    Route::post('store/student', 'StoreStudent')->name('store.student');
    Route::get('manage/students', 'ManageStudents')->name('manage.students');
    Route::get('edit/student/{id}', 'EditStudent')->name('edit.student');
    Route::post('update/student', 'UpdateStudent')->name('update.student');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
