<?php

use App\Http\Controllers\Admin\AboutUsSectionController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\BecomeInstructorSectionController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandSectionController;
use App\Http\Controllers\Admin\CertificateBuilderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseContentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseLanguageController;
use App\Http\Controllers\Admin\CourseLevelController;
use App\Http\Controllers\Admin\CourseSubCategoryController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatabaseClearController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FeaturedInstructorController;
use App\Http\Controllers\Admin\FooterColumnOneController;
use App\Http\Controllers\Admin\FooterColumnTwoController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InstructorReqeustController;
use App\Http\Controllers\Admin\InstructorRequestController;
use App\Http\Controllers\Admin\LatestCourseSectionController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\PayoutGatewayController;
use App\Http\Controllers\Admin\ProfileUpdateController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopBarController;
use App\Http\Controllers\Admin\VideoSectionController;
use App\Http\Controllers\Admin\WithdrawRequestController;
use App\Http\Controllers\Frontend\HeroController;
use App\Models\BecomeInstructorSection;
use App\Models\FeaturedInstructor;
use App\Models\Footer;
use App\Models\FooterColumnOne;
use App\Models\LatestCourseSection;
use App\Models\TopBar;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "guest:admin", "prefix" => "admin", "as" => "admin."], function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::group(["middleware" => "auth:admin", "prefix" => "admin", "as" => "admin."], function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /** Profile Update Routes */

    Route::get('profile', [ProfileUpdateController::class, 'index'])->name('profile.index');
    Route::post('profile', [ProfileUpdateController::class, 'profileUpdate'])->name('profile.update');
    Route::post('update-password', [ProfileUpdateController::class, 'updatePassword'])->name('password.update');

    /** Instructor Request Routes */
    Route::get('instructor-doc-download/{user}', [InstructorRequestController::class, 'download'])->name('instructor-doc-download');
    Route::resource('instructor-requests', InstructorRequestController::class);

    /** Course Languages Routes */
    Route::resource('course-languages', CourseLanguageController::class);

    /** Course Levels Routes */
    Route::resource('course-levels', CourseLevelController::class);

    /** Course Categories Routes */
    Route::resource('course-categories', CourseCategoryController::class);
    Route::get('/{course_category}/sub-categories', [CourseSubCategoryController::class, 'index'])->name('course-sub-categories.index');
    Route::get('/{course_category}/sub-categories/create', [CourseSubCategoryController::class, 'create'])->name('course-sub-categories.create');
    Route::post('/{course_category}/sub-categories', [CourseSubCategoryController::class, 'store'])->name('course-sub-categories.store');
    Route::get('/{course_category}/sub-categories/{course_sub_category}/edit', [CourseSubCategoryController::class, 'edit'])->name('course-sub-categories.edit');

    Route::put('/{course_category}/sub-categories/{course_sub_category}', [CourseSubCategoryController::class, 'update'])->name('course-sub-categories.update');
    Route::delete('/{course_category}/sub-categories/{course_sub_category}', [CourseSubCategoryController::class, 'destroy'])->name('course-sub-categories.destroy');

    /** Crouse Module Routes */
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::put('courses/{course}/update-approval', [CourseController::class, 'updateApproval'])->name('courses.update-approval');

    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses/create', [CourseController::class, 'storeBasicInfo'])->name('courses.sore-basic-info');

    Route::get('courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::post('courses/update', [CourseController::class, 'update'])->name('courses.update');

    Route::get('course-content/{course}/create-chapter', [CourseContentController::class, 'createChapterModal'])->name('course-content.create-chapter');
    Route::post('course-content/{course}/create-chapter', [CourseContentController::class, 'storeChapter'])->name('course-content.store-chapter');
    Route::get('course-content/{chapter}/edit-chapter', [CourseContentController::class, 'editChapterModal'])->name('course-content.edit-chapter');
    Route::post('course-content/{chapter}/edit-chapter', [CourseContentController::class, 'updateChapterModal'])->name('course-content.update-chapter');
    Route::delete('course-content/{chapter}/chapter', [CourseContentController::class, 'destroyChapter'])->name('course-content.destory-chapter');

    Route::get('course-content/create-lesson', [CourseContentController::class, 'createLesson'])->name('course-content.create-lesson');
    Route::post('course-content/create-lesson', [CourseContentController::class, 'storeLesson'])->name('course-content.store-lesson');

    Route::get('course-content/edit-lesson', [CourseContentController::class, 'editLesson'])->name('course-content.edit-lesson');
    Route::post('course-content/{id}/update-lesson', [CourseContentController::class, 'updateLesson'])->name('course-content.update-lesson');
    Route::delete('course-content/{id}/lesson', [CourseContentController::class, 'destroyLesson'])->name('course-content.destroy-lesson');


    Route::post('course-chapter/{chapter}/sort-lesson', [CourseContentController::class, 'sortLesson'])->name('course-chapter.sort-lesson');

    Route::get('course-content/{course}/sort-chapter', [CourseContentController::class, 'sortChapter'])->name('course-content.sort-chpater');
    Route::post('course-content/{course}/sort-chapter', [CourseContentController::class, 'updateSortChapter'])->name('course-content.update-sort-chpater');



    /** Order Routes */
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');


    /** Payment setting routes */
    Route::get('payment-setting', [PaymentSettingController::class, 'index'])->name('payment-setting.index');
    Route::post('paypal-setting', [PaymentSettingController::class, 'paypalSetting'])->name('paypal-setting.update');
    Route::post('stripe-setting', [PaymentSettingController::class, 'stripeSetting'])->name('stripe-setting.update');
    Route::post('razorpay-setting', [PaymentSettingController::class, 'razorpaySetting'])->name('razorpay-setting.update');

    /** Site Settings Route */
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('general-settings', [SettingController::class, 'updateGeneralSettings'])->name('general-settings.update');

    Route::get('commission-settings', [SettingController::class, 'commissionSettingIndex'])->name('commission-settings.index');
    Route::post('commission-settings', [SettingController::class, 'updateCommissionSetting'])->name('commission-settings.update');

    Route::get('smtp-settings', [SettingController::class, 'smtpSetting'])->name('smtp-settings.index');
    Route::post('smtp-settings', [SettingController::class, 'updateSmtpSetting'])->name('smtp-settings.update');

    Route::get('logo-settings', [SettingController::class, 'logoSettingIndex'])->name('logo-settings.index');
    Route::post('logo-settings', [SettingController::class, 'updateLogoSetting'])->name('logo-settings.update');
    /** Payout Gateway Routes */
    Route::resource('payout-gateway', PayoutGatewayController::class);

    /** Withdrawal routes */
    Route::get('withdraw-requests', [WithdrawRequestController::class, 'index'])->name('withdraw-request.index');
    Route::get('withdraw-requests/{withdraw}/details', [WithdrawRequestController::class, 'show'])->name('withdraw-request.show');
    Route::post('withdraw-requests/{withdraw}/status', [WithdrawRequestController::class, 'updateStatus'])->name('withdraw-request.status.update');

    /** Certificate Builder Routes */
    Route::get('certificate-builder', [CertificateBuilderController::class, 'index'])->name('certificate-builder.index');
    Route::post('certificate-builder', [CertificateBuilderController::class, 'update'])->name('certificate-builder.update');
    Route::post('certificate-item', [CertificateBuilderController::class, 'itemUpdate'])->name('certificate-item.update');

    /** Hero Routes */
    Route::resource('hero', HeroController::class);
    /** Feature Routes */
    Route::resource('feature', FeatureController::class);

    /** Feature Routes */
    Route::resource('about-section', AboutUsSectionController::class);


    /** Latest Courses Routes */
    Route::resource('latest-courses-section', LatestCourseSectionController::class);

    /** Become Instructor Section Routes */
    Route::resource('become-instructor-section', BecomeInstructorSectionController::class);

    /** Video Section Routes */
    Route::resource('video-section', VideoSectionController::class);

    /** Video Section Routes */
    Route::resource('brand-section', BrandSectionController::class);

    /** Featured Instructor Section Routes */
    Route::get('get-instructor-courses/{id}', [FeaturedInstructorController::class, 'getInstructorCourses'])->name('get-instructor-courses');
    Route::resource('featured-instructor-section', FeaturedInstructorController::class);


    /** Video Section Routes */
    Route::resource('testimonial-section', TestimonialController::class);

    /** Counter Routes */
    Route::resource('counter-section', CounterController::class);

    /** Contact Routes */
    Route::resource('contact', ContactController::class);

    /** Contact Setting Routes */
    Route::resource('contact-setting', ContactSettingController::class);

    /** Review Routes */
    Route::resource('reviews', ReviewController::class);

    /** Top bar routes */
    Route::resource('top-bar', TopBarController::class);

    /** Footer routes */
    Route::resource('footer', FooterController::class);

    /** Social links routes */
    Route::resource('social-links', SocialLinkController::class);

    /** footer column one routes */
    Route::resource('footer-column-one', FooterColumnOneController::class);

    /** footer column one routes */
    Route::resource('footer-column-two', FooterColumnTwoController::class);

    /** footer column one routes */
    Route::resource('custom-page', CustomPageController::class);

    /** blog category routes */
    Route::resource('blog-categories', BlogCategoryController::class);

    /** blog routes */
    Route::resource('blogs', BlogController::class);


    /** Database Clear Routes */
    Route::get('database-clear', [DatabaseClearController::class, 'index'])->name('database-clear.index');
    Route::delete('database-clear', [DatabaseClearController::class, 'destroy'])->name('database-clear.destroy');


    /** lfm Routes */
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:admin']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});
