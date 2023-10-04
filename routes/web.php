<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EmployeeController as AdminEmployeeController;
use App\Http\Controllers\Admin\MakeScheduleController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\TitleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\Employee\AccountController;
use App\Http\Controllers\Employee\EmployeeAuthController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\IssueController;
use App\Http\Controllers\Engineer\EngineerDashboardController;
use App\Http\Controllers\Engineer\FeedbackController;
use App\Http\Controllers\Engineer\ReportController as EngineerReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user-regitrationForm', [EmployeeAuthController::class, 'registerForm'])->name('employee.registerForm');
Route::post('/create-user', [EmployeeAuthController::class, 'register'])->name('employee.register');

Route::get('/user-loginForm', [EmployeeAuthController::class, 'loginForm'])->name('employee.loginForm');
Route::post('/user-login', [EmployeeAuthController::class, 'login'])->name('employee.login');

Route::get('/dashboard', [AuthController::class, 'redirect'])->name('dashboard');


Route::middleware([
    'auth:sanctum', 'verified', 'usertype:0'
    // 'auth:sanctum',
    // config('jetstream.auth_session'),
    // 'verified',
])->group(function () {
    Route::get('/company-add', [CompanyController::class, 'index'])->name('company.add');
    Route::post('/company-create', [CompanyController::class, 'create'])->name('company.create');
    Route::get('/company-List', [CompanyController::class, 'companyList'])->name('company.list');

    Route::get('/department-add', [DepartmentController::class, 'index'])->name('department.add');
    Route::post('/department-create', [DepartmentController::class, 'create'])->name('department.create');
    Route::get('/department-list', [DepartmentController::class, 'list'])->name('department.list');

    Route::get('/engineer-list', [AdminEmployeeController::class, 'engineerList'])->name('engineer.list');
    Route::get('/engineer-list/{id}', [AdminEmployeeController::class, 'ChangeStatus'])->name('engineer.status');

    Route::get('/employee-add', [AdminEmployeeController::class, 'employeeAdd'])->name('employee.add');
    Route::post('/employee-create', [AdminEmployeeController::class, 'employeeCreate'])->name('employee.create');
    Route::get('/employee-list', [AdminEmployeeController::class, 'employeeList'])->name('employee.list');
    Route::get('/employee-list/{id}', [AdminEmployeeController::class, 'makeChangeStatus'])->name('employee.status');

    Route::get('/title-add', [TitleController::class, 'titleAdd'])->name('title.add');
    Route::post('/title-create', [TitleController::class, 'titleCreate'])->name('title.create');
    Route::get('/title-list', [TitleController::class, 'list'])->name('title.list');

    Route::get('/view-report', [ReportController::class, 'index'])->name('view.report');
    Route::get('/complete-reportList', [ReportController::class, 'completeList'])->name('complete.report');
    Route::get('/complete-reportDetail/{id}', [ReportController::class, 'reportDetail'])->name('report.detail');
    Route::get('/complete-report/statusChange/{id}', [ReportController::class, 'reportStatus'])->name('report.status');

    Route::get('/make-schedule/{id}', [MakeScheduleController::class, 'index'])->name('scheduledate.add');
    Route::post('/make-schedule-date/{id}', [MakeScheduleController::class, 'createSchedule'])->name('scheduleDate.create');

    Route::get('/schedule-edit/{id}', [MakeScheduleController::class, 'editSchedule'])->name('edit.schedule');
    Route::post('/schedule-update/{scheduleId}', [MakeScheduleController::class, 'updateSchedule'])->name('update.schedule');

    Route::get('/schedule-List', [MakeScheduleController::class, 'scheduleList'])->name('schedule.list');
});

// Engineer Routes (usertype = 1)
Route::middleware(['auth:sanctum', 'verified', 'usertype:1'])->group(function () {
    Route::get('/pending-task', [EngineerReportController::class, 'reportList'])->name('pending.report');
    Route::get('/task-list', [EngineerReportController::class, 'taskList'])->name('pending.task');

    Route::get('/working-feedback/{id}',[FeedbackController::class, 'workingFeedback'])->name('working.feedback');
    Route::post('/submit-feedback/{id}',[FeedbackController::class, 'submitFeedback'])->name('submit.feedback');

    Route::get('/start-working/{id}', [EngineerReportController::class,'statusChange'])->name('status.working');

    Route::get('/complete-list', [EngineerReportController::class, 'completeList'])->name('complete.list');
    Route::get('/accessory-detail/{id}',[EngineerReportController::class, 'reportDetail'])->name('accessory.detail');
});

Route::middleware('employee')->group(function () {
    Route::get('/user-dashboard', [EmployeeController::class, 'index'])->name('employee.dashborad');

    Route::get('/account-view', [AccountController::class, 'viewAccount'])->name('account.view');
    Route::get('/account/password-change', [AccountController::class, 'changePasswordForm'])->name('account.passwordChange');
    Route::post('/account/password/{id}', [AccountController::class, 'passwordChange'])->name('account.password');

    Route::get('/make-report', [IssueController::class, 'addIssue'])->name('issue.add');
    Route::post('/create-report', [IssueController::class, 'createIssue'])->name('issue.create');
    Route::get('/report-list', [IssueController::class, 'issueList'])->name('report.list');

    Route::get('/status-complete/{id}', [IssueController::class, 'statusComplete'])->name('status.complete');

    Route::get('/accessories-apporovation/{id}', [IssueController::class, 'apporvedAccessory'])->name('accessory.apporved');
    Route::get('/status-approve/{id}', [IssueController::class, 'statusApporved'])->name('status.approve');
    Route::get('/status-reject/{id}', [IssueController::class, 'statusrejected'])->name('status.reject');
});
