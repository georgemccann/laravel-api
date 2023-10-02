<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FHTestsTest extends TestCase
{
 
    public function testMustEnterValidTestId()
    {
        $this->json(
            'GET',
            'api/tests/93402493214242142142423423'
        )
        ->assertStatus(404)
        ->assertJson([
            'message' => 'Test not found'
        ]);
    }

    public function testArrayOfTestsAreReturned()
    {
        $this->json(
            'GET',
            'api/tests'
        )
            ->assertStatus(200)
            ->assertJsonStructure([
                0 => [
                    'testCode',
                    'testCode',
                    'testCode_exeterNHS',
                    'testCode_exeterNHSProfileCode',
                    'parentTestId',
                    'testName',
                    'testIntro',
                    'testDescription',
                    'testCost',
                    'testCost_l1',
                    'testCost_l3',
                    'testCost_l5',
                    'testCost_l6',
                    'adminCost',
                    'testPrice',
                    'testOfferPrice',
                    'testPrice_sasMonthly',
                    'testPrice_sasMonthlySaving',
                    'testPrice_sas3monthly',
                    'testPrice_sas3monthlySaving',
                    'testPrice_sas4monthly',
                    'testPrice_sas4monthlySaving',
                    'testPrice_sas6monthly',
                    'testPrice_sas6monthlySaving',
                    'testPrice_sasDefault',
                    'testType',
                    'testCollectionMethod',
                    'testTier',
                    'testTurnaround',
                    'turnaroundInt',
                    'testCodeArray',
                    'testAvailable',
                    'subscriptionAvailable',
                    'testInstructions',
                    'testInstructionsEmail',
                    'kitCode',
                    'phlebotomyKitCode',
                    'kitCode_s',
                    'phlebotomyKitCode_s',
                    'labId',
                    'fulfillmentId',
                    'siteId',
                    'bespokeTest',
                    'baseTestId',
                    'plusTest',
                    'plusTestWebsiteId',
                    'bespokeTestSession',
                    'bespokeTestAdded',
                    'bespokeTestComplete',
                    'defaultReviewerId',
                    'relatedTestId1',
                    'relatedTestId2',
                    'relatedTestId3',
                    'testReasons',
                    'testReasonsTitle',
                    'testDescription2Title',
                    'testDescription2',
                    'askFemaleQuestions',
                    'googleMerchantTitle',
                    'googleMerchantDescription',
                    'googleMerchantImage',
                    'gtin',
                    'removeIrreleventTests',
                    'chatTest',
                    'doubleKit',
                    'femaleHormoneTest',
                    'bespokePartialRetest',
                    'subscriptionUpgrade',
                    'customTestInstruction',
                    'partnerQuotePage',
                    'availableForPartners',
                    'nonCustomisable',
                    'internalTestName',
                    'internalTestNotes',
                    'groupPlusTest',
                    'groupPlusTestSaving',
                    'askAdditionalHormoneQuestions',
                    'autoCreditAmount',
                    'bespokeToolTip',
                    'isBespokeWithNoBase',
                    'relevantMarkersReason',
                    'cycleday1',
                    'cycleday2',
                    'testIcon',
                    'replacementTestId',
                    'lastEditorId',
                    'testPrice_sas',
                    'testPrice_sasSaving',
                    'firstOrderLabStatus',
                    'bespokeReceiptEmailId',
                    'homePhlebotomyOnly',
                    'preventGuestPurchase',
                    'singleTestOnly',
                    'minAgeLimit',
                    'maxAgeLimit' 
                ] 
            ]);
    }
}
