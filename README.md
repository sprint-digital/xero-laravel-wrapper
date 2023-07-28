# 💸 Xero Laravel for Sprint Digital

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sprint-digital/xero-laravel.svg?style=flat-square)](https://packagist.org/packages/sprint-digital/xero-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/sprint-digital/xero-laravel.svg?style=flat-square)](https://packagist.org/packages/sprint-digital/xero-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require sprint-digital/xero-laravel
```

You can publish and run the migrations with:

```bash
php artisan xero-laravel:install
php artisan migrate
```


If `sprint-digital/sprint-digital/boilerplate-crud-generator` is installed, you can generate the CRUD for the following models:

```
php artisan make:crud invoices
php artisan make:crud invoice_line_items
```

## Setup

If you only intend to use one Xero app, the standard configuration 
file should be sufficient. All you will need to do is add the following 
variables to your `.env` file.

```
XERO_CLIENT_ID=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XERO_CLIENT_SECRET=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XERO_REDIRECT_URI={url}/xero/callback
XERO_WEBHOOK_KEY=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
```

In `web.php` add:

```
use App\Http\Controllers\XeroController;

Route::get('/xero/redirect', [XeroController::class, 'redirectUserToXero'])->name('xero.redirect');
Route::get('/xero/callback', [XeroController::class, 'handleCallbackFromXero'])->name('xero.callback');
Route::get('/xero/refresh', [XeroController::class, 'refreshAccessTokenIfNecessary'])->name('xero.refresh');
```

In `api.php` add:

```
use App\Http\Controllers\XeroWebhookController;

Route::apiResource('webhooks/xero', XeroWebhookController::class)->only(['store']);
```

You should protect these routes. 

Xero's documentation provides a full [list of available scopes](https://developer.xero.com/documentation/oauth2/scopes).


## Usage

Go to `{url}/xero/redirect` and your xero token will be saved to the database.

READ!!! the `XeroController.php`

After Authentication setup. You can run the xero pull commands:

```
php artisan xero:pull-contacts
php artisan xero:pull-items
```

### Available relationships

The list below shows all available relationships that can be used to access 
data related to your Xero application (e.g. `$xeroService->xero->relationshipName`). 

*Note: Some of these relationships may not be available if the related 
service(s) are not enabled for your Xero account.*

```
accounts
addresses
assetsAssetTypeBookDepreciationSettings
assetsAssetTypes
assetsOverviews
assetsSettings
attachments
bankTransactionBankAccounts
bankTransactionLineItems
bankTransactions
bankTransferFromBankAccounts
bankTransferToBankAccounts
bankTransfers
brandingThemes
contactContactPeople
contactGroups
contacts
creditNoteAllocations
creditNotes
currencies
employees
expenseClaimExpenseClaims
expenseClaims
externalLinks
filesAssociations
filesFiles
filesFolders
filesObjects
invoiceLineItems
invoiceReminders
invoices
itemPurchases
itemSales
items
journalJournalLines
journals
linkedTransactions
manualJournalJournalLines
manualJournals
organisationBills
organisationExternalLinks
organisationPaymentTerms
organisationSales
organisations
overpaymentAllocations
overpaymentLineItems
overpayments
payments
payrollAUEmployeeBankAccounts
payrollAUEmployeeHomeAddresses
payrollAUEmployeeLeaveBalances
payrollAUEmployeeOpeningBalances
payrollAUEmployeePayTemplateDeductionLines
payrollAUEmployeePayTemplateEarningsLines
payrollAUEmployeePayTemplateLeaveLines
payrollAUEmployeePayTemplateReimbursementLines
payrollAUEmployeePayTemplateSuperLines
payrollAUEmployeePayTemplates
payrollAUEmployeeSuperMemberships
payrollAUEmployeeTaxDeclarations
payrollAUEmployees
payrollAULeaveApplicationLeavePeriods
payrollAULeaveApplications
payrollAUPayItemDeductionTypes
payrollAUPayItemEarningsRates
payrollAUPayItemLeaveTypes
payrollAUPayItemReimbursementTypes
payrollAUPayItems
payrollAUPayRuns
payrollAUPayrollCalendars
payrollAUPayslipDeductionLines
payrollAUPayslipEarningsLines
payrollAUPayslipLeaveAccrualLines
payrollAUPayslipLeaveEarningsLines
payrollAUPayslipReimbursementLines
payrollAUPayslipSuperannuationLines
payrollAUPayslipTaxLines
payrollAUPayslipTimesheetEarningsLines
payrollAUPayslips
payrollAUSettingAccounts
payrollAUSettingTrackingCategories
payrollAUSettings
payrollAUSuperFundProducts
payrollAUSuperFundSuperFunds
payrollAUSuperFunds
payrollAUTimesheetTimesheetLines
payrollAUTimesheets
payrollUSEmployeeBankAccounts
payrollUSEmployeeHomeAddresses
payrollUSEmployeeMailingAddresses
payrollUSEmployeeOpeningBalances
payrollUSEmployeePayTemplates
payrollUSEmployeePaymentMethods
payrollUSEmployeeSalaryAndWages
payrollUSEmployeeTimeOffBalances
payrollUSEmployeeWorkLocations
payrollUSEmployees
payrollUSPayItemBenefitTypes
payrollUSPayItemDeductionTypes
payrollUSPayItemEarningsTypes
payrollUSPayItemReimbursementTypes
payrollUSPayItemTimeOffTypes
payrollUSPayItems
payrollUSPayRuns
payrollUSPaySchedules
payrollUSPaystubBenefitLines
payrollUSPaystubDeductionLines
payrollUSPaystubEarningsLines
payrollUSPaystubLeaveEarningsLines
payrollUSPaystubReimbursementLines
payrollUSPaystubTimeOffLines
payrollUSPaystubTimesheetEarningsLines
payrollUSPaystubs
payrollUSSalaryandWages
payrollUSSettingAccounts
payrollUSSettingTrackingCategories
payrollUSSettings
payrollUSTimesheetTimesheetLines
payrollUSTimesheets
payrollUSWorkLocations
phones
prepaymentAllocations
prepaymentLineItems
prepayments
purchaseOrderLineItems
purchaseOrders
receiptLineItems
receipts
repeatingInvoiceLineItems
repeatingInvoiceSchedules
repeatingInvoices
reportBalanceSheets
reportBankStatements
reportBudgetSummaries
reportProfitLosses
reportReports
reportTaxTypes
salesTaxBases
salesTaxPeriods
taxRateTaxComponents
taxRates
taxTypes
trackingCategories
trackingCategoryTrackingOptions
userRoles
users
```

## Credits

- [Hoang Ho](https://github.com/sprint-digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
