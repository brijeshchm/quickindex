<?php

use App\Http\Controllers\Sales\VendorController;


Route::get('/logout',[App\Http\Controllers\Auth\AuthSalesController::class,'logout']);
Route::get('/dashboard',[App\Http\Controllers\Sales\DashboardController::class, 'index'])->name('dashboard');


    Route::get('/vendors/export', [VendorController::class, 'export'])->name('vendors.export');
    Route::patch('/vendors/{vendor}/status', [VendorController::class, 'toggleStatus'])
    ->name('vendors.status');
    Route::resource('vendors', VendorController::class)->except(['show']);


    
	Route::post('/cities/getajaxcities', [App\Http\Controllers\Sales\BusinessController::class, 'getAjaxCities'])->name('salesCities.ajax');
	Route::post('/state/getAjaxSate', [App\Http\Controllers\Sales\BusinessController::class, 'getAjaxSate']);
	Route::post('/zone/getAjaxZone', [App\Http\Controllers\Sales\BusinessController::class, 'getAjaxZone'])->name('salesZone.ajax');
	Route::get('/get-assigned-zones', [App\Http\Controllers\Sales\BusinessController::class, 'getAssignedZonesPagination']);
	Route::post('/saveBusinessMeta', [App\Http\Controllers\Sales\BusinessController::class, 'saveBusinessMeta'])->name('updateBusiness.meta');

 
	Route::post('/savePersonalDetails', [App\Http\Controllers\Sales\PersonalDetailsController::class, 'savePersonalDetails'])->name('personal.details');
Route::post('/saveProfileInfo', [App\Http\Controllers\Sales\ProfileController::class, 'saveProfileInfo'])->name('business.information');

Route::post('/saveBusinessOverview', [App\Http\Controllers\Sales\BusinessController::class, 'saveBusinessOverview'])->name('business.overview');

Route::post('/saveLocationInformation', [App\Http\Controllers\Sales\BusinessLocationController::class, 'saveLocationInformation'])->name('business.location');
Route::post('/saveAssignLocation', [App\Http\Controllers\Sales\BusinessLocationController::class, 'saveAssignLocation'])->name('assign.location');
Route::get('/assignLocations/{id}', [App\Http\Controllers\Sales\VendorController::class, 'assignLocationsList'])->name('assignLocations.list');

Route::post(
    '/clients/{id}/assigned-zones/bulk-delete',
    [App\Http\Controllers\Sales\VendorController::class, 'bulkDeleteAssignedZones']
)->name('assignLocations.bulkDelete');


Route::get('/assignZoneDelete/{id}', [App\Http\Controllers\Sales\BusinessLocationController::class, 'assignZoneDelete'])->name('assignLocations.delete');

Route::post('/saveBusinessFaqs', [App\Http\Controllers\Sales\BusinessController::class, 'saveBusinessFaqs'])->name('business.Faq');

Route::post('/saveProfileLogo', [App\Http\Controllers\Sales\BusinessLogoController::class, 'saveProfileLogo'])->name('profileLogo.upload');
Route::get('/profileLogoDel/{id}', [App\Http\Controllers\Sales\BusinessLogoController::class, 'businessProfileLogoDel'])->name('profileLogo.logoDel');
Route::get('/profileBannerDel/{id}', [App\Http\Controllers\Sales\BusinessLogoController::class, 'profileBannerDel'])->name('profileBanner.picDel');


Route::post('/gallery/{id}/delete/{slot}',
    [App\Http\Controllers\Sales\BusinessLogoController::class, 'deleteGalleryImage']
)->whereNumber('slot')->name('gallery.delete');




Route::post('/saveGallary', [App\Http\Controllers\Sales\BusinessLogoController::class, 'saveGallary'])->name('gallery.upload');

Route::post('/save-award-auto', [App\Http\Controllers\Sales\CertificateController::class, 'saveBusinessAward'])->name('save-award-auto');


Route::post('/save-certificate-auto', [App\Http\Controllers\Sales\CertificateController::class, 'autoSaveCertificate'])->name('business.certificate');


Route::post('/business/save-recent-activity-auto', [App\Http\Controllers\Sales\CertificateController::class, 'saveBusinessRecentActivity'])->name('recent.activity');


	Route::post('/business/saveKeywordAssign', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'saveKeywordAssign'])->name('keywords.add');
	Route::post('/business/assignKeyword/delete/{id}', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'assignKeywordDelete'])->name('keywords.delete');
	Route::get('/business/get-paginated-assigned-keywords', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'getPaginatedAssignedKeywords']);


Route::post('/clients/update/{id}',[App\Http\Controllers\BackEndClientsController::class, 'update'])->name('accountSettings');
	
Route::get('/clients/update/{id}/getleads',[App\Http\Controllers\BackEndClientsController::class, 'getPaginatedLeads'])->name('business.getLeads');

Route::get('/dashboard/get-paid-client', [App\Http\Controllers\DashboardController::class, 'getPaidClients']);	
 