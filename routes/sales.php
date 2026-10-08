<?php

use App\Http\Controllers\Sales\VendorController;


Route::get('/logout',[App\Http\Controllers\Auth\AuthSalesController::class,'logout']);
Route::get('/dashboard',[App\Http\Controllers\Sales\DashboardController::class, 'index'])->name('dashboard');
Route::get('/vendor/followup',[App\Http\Controllers\Sales\DashboardController::class, 'vendorsFollowup'])->name('vendorsFollowup');
Route::get('/vendor/assign',[App\Http\Controllers\Sales\DashboardController::class, 'vendorsAssign'])->name('vendorsAssignVendor');

Route::post('/vendor/stor-followup/{id}',[App\Http\Controllers\Sales\DashboardController::class, 'followUpStore'])->name('followUp.store');
Route::get('/vendor/{id}/followups',[App\Http\Controllers\Sales\DashboardController::class, 'followUpHistory'])->name('followUp.history');

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
Route::post('/save-socials-link', [App\Http\Controllers\Sales\ProfileController::class, 'saveBusinessSocial'])->name('socials.link');
Route::post('/vendor/register', [App\Http\Controllers\Sales\ProfileController::class, 'vendorRegister'])->name('vendor.register');

Route::post('/saveBusinessOverview', [App\Http\Controllers\Sales\BusinessController::class, 'saveBusinessOverview'])->name('business.overview');

Route::post('/saveLocationInformation', [App\Http\Controllers\Sales\BusinessLocationController::class, 'saveLocationInformation'])->name('business.location');
Route::post('/saveAssignLocation', [App\Http\Controllers\Sales\BusinessLocationController::class, 'saveAssignLocation'])->name('assign.location');
Route::get('/assignLocations/{id}', [VendorController::class, 'assignLocationsList'])->name('assignLocations.list');

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


Route::get('/certificate/{slug}/{id}', [App\Http\Controllers\Sales\CertificateController::class, 'certificateDel'])->name('certificate.delete');
Route::get('/award/{slug}/{id}', [App\Http\Controllers\Sales\CertificateController::class, 'awardDel'])->name('award.delete');
Route::get('/recent-activity/{slug}/{id}', [App\Http\Controllers\Sales\CertificateController::class, 'recentActivityDel'])->name('recent.delete');

Route::post('/business/save-recent-activity-auto', [App\Http\Controllers\Sales\CertificateController::class, 'saveBusinessRecentActivity'])->name('recent.activity');


Route::post('/business/saveKeywordAssign', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'saveKeywordAssign'])->name('assignKeywords.add');
Route::post('/assignKeyword/delete/{id}', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'assignKeywordDelete'])->name('assignKeywords.delete');
Route::get('/get-paginated-assigned-keywords', [App\Http\Controllers\Sales\BusinessKeywordController::class, 'getPaginatedAssignedKeywords'])->name('assignedKeywords.list');



Route::post(
    '/vendor/{id}/assigned-keyword/bulk-delete',
    [App\Http\Controllers\Sales\BusinessKeywordController::class, 'bulkDeleteAssignedKeyword']
)->name('assignKeywords.bulkDelete');

Route::post('/vendor/update/{id}',[App\Http\Controllers\Sales\VendorController::class, 'updateAccountSettings'])->name('vendor.accountSettings');
	
Route::get('/vendor/{id}/getleads',[App\Http\Controllers\Sales\VendorController::class, 'getPaginatedLeads'])->name('vendor.getLeads');

Route::get('/dashboard/get-paid-client', [App\Http\Controllers\DashboardController::class, 'getPaidClients']);	
 


Route::post('/vendor/discussion/{id}',[App\Http\Controllers\Sales\VendorController::class, 'remarkDiscussion'])->name('remarkDiscussion.add');

Route::get('/vendor/{id}/getdescussion',[App\Http\Controllers\Sales\VendorController::class, 'getDescussion'])->name('getdescussion.list');



Route::post('/vendor/payment/{id}',[App\Http\Controllers\Sales\VendorController::class,'paymentAdd'])->name('payment.save');


Route::get('/order-history/{id}',[App\Http\Controllers\Sales\VendorController::class,'getOrderHistory'])->name('payment.list');


 

Route::get('/clientOrderHistoryStatus/status',[App\Http\Controllers\Sales\VendorController::class,'approveInvoice'])->name('approve.PrintPdf');

 



Route::get('/vendor/getOrderPrint', [
    VendorController::class, 'getOrderPrint',
])->name('invoice.orderPrint');

Route::get('/vendor/getproformaPrintPdf', [
    VendorController::class, 'getproformaPrintPdf',
])->name('proforma.PrintPdf');

Route::get('/vendor/getinvoicePrintPdf', [
    VendorController::class, 'getinvoicePrintPdf',
])->name('invoice.PrintPdf');