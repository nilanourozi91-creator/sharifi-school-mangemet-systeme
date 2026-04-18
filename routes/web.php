<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

route::prefix('dashboard')->middleware('auth','verified')->group(function () {
    route::view('department','department.⚡edite');
    route::view('school','school.⚡index');
    route::view('contract','contract.⚡index');
    route::view('payroll','payroll.⚡index');
    route::view('payment','payment.⚡index');
});
require __DIR__.'/auth.php';
