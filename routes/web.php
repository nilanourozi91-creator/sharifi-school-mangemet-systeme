<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

route::prefix('dashboard')->middleware('auth','verified')->group(function () {
    route::view('department.⚡index');
    route::view('payment.⚡index');
    route::view('salary.⚡index');
    route::view('employee.⚡index');
    route::view('descnation.⚡index');
    route::view('contract.⚡index');
    route::view('school.⚡index');
    route::view('payroll.⚡index');
});
require __DIR__.'/auth.php';
