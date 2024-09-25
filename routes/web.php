<?php

use App\Http\Controllers\Frontend\CourseContentController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use Illuminate\Support\Facades\Route;

/**
 * ------------------------------------------------------
 * Frontend Routes
 * ------------------------------------------------------
 */

 Route::get('/', [FrontendController::class, 'index'])->name('home');

/**
 * ------------------------------------------------------
 * Student Routes
 * ------------------------------------------------------
 */
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:student'], 'prefix' => 'student', 'as' => 'student.'], function() {
   Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
   Route::get('/become-instructor', [StudentDashboardController::class, 'becomeInstructor'])->name('become-instructor');
   Route::post('/become-instructor/{user}', [StudentDashboardController::class, 'becomeInstructorUpdate'])->name('become-instructor.update');

   /** Profile Routes */
   Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
   Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');
   Route::post('profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
   Route::post('profile/update-social', [ProfileController::class, 'updateSocial'])->name('profile.update-social');

});

/**
 * ------------------------------------------------------
 * Instructor Routes
 * ------------------------------------------------------
 */
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor.'], function() {
   Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');

   /** Profile Routes */
   Route::get('profile', [ProfileController::class, 'instructorIndex'])->name('profile.index');
   Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');
   Route::post('profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
   Route::post('profile/update-social', [ProfileController::class, 'updateSocial'])->name('profile.update-social');

   /** Course Routes */
   Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
   Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
   Route::post('courses/create', [CourseController::class, 'storeBasicInfo'])->name('courses.sore-basic-info');
   Route::get('courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
   Route::post('courses/update', [CourseController::class, 'update'])->name('courses.update');

   Route::get('course-content/{course}/create-chapter', [CourseContentController::class, 'createChapterModal'])->name('course-content.create-chapter');
   Route::post('course-content/{course}/create-chapter', [CourseContentController::class, 'storeChapter'])->name('course-content.store-chapter');
   Route::get('course-content/{course}/edit-chapter', [CourseContentController::class, 'editChapterModal'])->name('course-content.edit-chapter');
   Route::post('course-content/{course}/edit-chapter', [CourseContentController::class, 'updateChapterModal'])->name('course-content.update-chapter');

   Route::get('course-content/create-lesson', [CourseContentController::class, 'createLesson'])->name('course-content.create-lesson');
   Route::post('course-content/create-lesson', [CourseContentController::class, 'storeLesson'])->name('course-content.store-lesson');

   Route::get('course-content/edit-lesson', [CourseContentController::class, 'editLesson'])->name('course-content.edit-lesson');
   Route::post('course-content/{id}/update-lesson', [CourseContentController::class, 'updateLesson'])->name('course-content.update-lesson');
   Route::delete('course-content/{id}/lesson', [CourseContentController::class, 'destroyLesson'])->name('course-content.destroy-lesson');











   /** lfm Routes */
   Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
         \UniSharp\LaravelFilemanager\Lfm::routes();
   });

});




require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
