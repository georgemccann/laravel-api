<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fh_tests', function (Blueprint $table) {
            $table->increments('testId'); 
            $table->string('testCode', 250);
            $table->string('testCode_exeterNHS', 250);
            $table->string('testCode_exeterNHSProfileCode', 250);
            $table->integer('parentTestId'); 
            $table->string('testName', 250);
            $table->longText('testIntro');
            $table->longText('testDescription'); 
            $table->decimal('testCost', '10', '2');
            $table->decimal('testCost_l1', '10', '2');
            $table->decimal('testCost_l3', '10', '2');
            $table->decimal('testCost_l5', '10', '2');
            $table->decimal('testCost_l6', '10', '2');
            $table->decimal('adminCost', '10', '2');
            $table->decimal('testPrice', '10', '2');
            $table->decimal('testOfferPrice', '10', '2');
            $table->decimal('testPrice_sasMonthly', '10', '2');
            $table->integer('testPrice_sasMonthlySaving'); 
            $table->decimal('testPrice_sas3monthly', '10', '2');
            $table->integer('testPrice_sas3monthlySaving');
            $table->decimal('testPrice_sas4monthly', '10', '2');
            $table->integer('testPrice_sas4monthlySaving');
            $table->decimal('testPrice_sas6monthly', '10', '2');
            $table->integer('testPrice_sas6monthlySaving');
            $table->integer('testPrice_sasDefault');
            $table->integer('testType');
            $table->longText('testCollectionMethod');
            $table->integer('testTier');
            $table->string('testTurnaround', 250);
            $table->integer('turnaroundInt');
            $table->string('testCodeArray', 250);
            $table->integer('testAvailable');
            $table->integer('subscriptionAvailable');
            $table->longText('testInstructions');
            $table->integer('testInstructionsEmail');
            $table->string('kitCode', 250);
            $table->string('phlebotomyKitCode', 250);
            $table->string('kitCode_s', 250);
            $table->string('phlebotomyKitCode_s', 250);
            $table->integer('labId');
            $table->integer('fulfillmentId');
            $table->integer('siteId');
            $table->integer('bespokeTest');
            $table->integer('baseTestId');
            $table->integer('plusTest');
            $table->integer('plusTestWebsiteId');
            $table->string('bespokeTestSession', 250);
            $table->string('bespokeTestAdded', 250);
            $table->integer('bespokeTestComplete');
            $table->integer('defaultReviewerId');
            $table->integer('relatedTestId1');
            $table->integer('relatedTestId2');
            $table->integer('relatedTestId3');
            $table->mediumText('testReasons');
            $table->string('testReasonsTitle', 250);
            $table->string('testDescription2Title', 250);
            $table->longText('testDescription2');
            $table->integer('askFemaleQuestions');
            $table->string('googleMerchantTitle', 250);
            $table->longText('googleMerchantDescription');
            $table->string('googleMerchantImage', 250);
            $table->string('gtin', 250);
            $table->integer('removeIrreleventTests');
            $table->integer('chatTest');
            $table->integer('doubleKit');
            $table->integer('femaleHormoneTest');
            $table->integer('bespokePartialRetest');
            $table->integer('subscriptionUpgrade');
            $table->integer('customTestInstruction');
            $table->integer('partnerQuotePage');
            $table->integer('availableForPartners');
            $table->integer('nonCustomisable');
            $table->string('internalTestName', 250);
            $table->longText('internalTestNotes');
            $table->integer('groupPlusTest');
            $table->decimal('groupPlusTestSaving', '10', '2');
            $table->integer('askAdditionalHormoneQuestions');
            $table->decimal('autoCreditAmount', '10', '2');
            $table->string('bespokeToolTip', 250);
            $table->integer('isBespokeWithNoBase');
            $table->mediumText('relevantMarkersReason');
            $table->integer('cycleday1');
            $table->integer('cycleday2');
            $table->string('testIcon', 250);
            $table->integer('replacementTestId');
            $table->integer('lastEditorId');
            $table->decimal('testPrice_sas', '10', '2');
            $table->integer('testPrice_sasSaving');
            $table->integer('firstOrderLabStatus');
            $table->integer('bespokeReceiptEmailId');
            $table->integer('homePhlebotomyOnly');
            $table->integer('preventGuestPurchase');
            $table->integer('singleTestOnly');
            $table->integer('minAgeLimit');
            $table->integer('maxAgeLimit'); 
            $table->timestamps();
        });
        DB::unprepared('ALTER TABLE fh_tests DROP PRIMARY KEY, ADD PRIMARY KEY(testId)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fh_tests');
    }
};
