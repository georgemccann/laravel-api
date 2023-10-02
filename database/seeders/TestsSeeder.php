<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tests;
use Illuminate\Support\Str;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $testCode = Str::random(3);
            Tests::create([
                'testCode'=>$testCode,
                'testCode_exeterNHS'=>$testCode,
                'testCode_exeterNHSProfileCode'=>$faker->numberBetween(0, 100),
                'parentTestId'=>0,
                'testName'=>$faker->name,
                'testIntro'=>$faker->sentence(10),
                'testDescription'=>$faker->sentence(10),
                'testCost'=>$faker->randomFloat(2, 10, 100),
                'testCost_l1'=>$faker->randomFloat(2, 10, 100),
                'testCost_l3'=>$faker->randomFloat(2, 10, 100),
                'testCost_l5'=>$faker->randomFloat(2, 10, 100),
                'testCost_l6'=>$faker->randomFloat(2, 10, 100),
                'testPrice'=>$faker->randomFloat(2, 10, 100),
                'adminCost'=>$faker->randomFloat(2, 10, 100),
                'testOfferPrice'=>$faker->randomFloat(2, 10, 100),
                'testPrice_sasMonthly'=>$faker->randomFloat(2, 10, 100),
                'testPrice_sasMonthlySaving'=>$faker->numberBetween(0, 10),
                'testPrice_sas3Monthly'=>$faker->randomFloat(2, 10, 100),
                'testPrice_sas3MonthlySaving'=>$faker->numberBetween(0, 10),
                'testPrice_sas4Monthly'=>$faker->randomFloat(2, 10, 100),
                'testPrice_sas4MonthlySaving'=>$faker->numberBetween(0, 10),
                'testPrice_sas6Monthly'=>$faker->randomFloat(2, 10, 100),
                'testPrice_sas6MonthlySaving'=>$faker->numberBetween(0, 10),
                'testPrice_sasDefault'=>$faker->numberBetween(0, 100),
                'testType'=>$faker->numberBetween(1, 3),
                'testCollectionMethod'=>'x1 Gold Tiny',
                'testTier'=>$faker->numberBetween(1, 5),
                'testTurnaround'=>'2 working days',
                'turnaroundInt'=>2,
                'testCodeArray'=>$testCode,
                'testAvailable'=>1,
                'subscriptionAvailable'=>$faker->numberBetween(0, 2),
                'testInstructions'=>$faker->sentence(10),
                'testInstructionsEmail'=>$faker->numberBetween(0, 1),
                'kitCode'=>'KT094V2',
                'phlebotomyKitCode'=>'KT205V2',
                'kitCode_s'=>'',
                'phlebotomyKitCode_s'=>'',
                'labId'=>5,
                'fulfillmentId'=>2,
                'siteId'=>1,
                'bespokeTest'=>0,
                'baseTestId'=>0,
                'plusTest'=>0,
                'plusTestWebsiteId'=>0,
                'bespokeTestSession'=>'',
                'bespokeTestAdded'=>'',
                'bespokeTestComplete'=>0,
                'defaultReviewerId'=>0,
                'relatedTestId1'=>0,
                'relatedTestId2'=>0,
                'relatedTestId3'=>0,
                'testReasons'=>$faker->sentence(10),
                'testReasonsTitle'=>$faker->sentence(2),
                'testDescription2Title'=>$faker->sentence(2),
                'testDescription2'=>$faker->sentence(10),
                'askFemaleQuestions'=>$faker->numberBetween(0, 1),
                'googleMerchantTitle'=>'',
                'googleMerchantDescription'=>'',
                'googleMerchantImage'=>'',
                'gtin'=>'',
                'removeIrreleventTests'=>0,
                'chatTest'=>0,
                'doubleKit'=>0,
                'femaleHormoneTest'=>0,
                'bespokePartialRetest'=>0,
                'subscriptionUpgrade'=>0,
                'customTestInstruction'=>0,
                'partnerQuotePage'=>0,
                'availableForPartners'=>1,
                'nonCustomisable'=>0,
                'internalTestName'=>$faker->name,
                'internalTestNotes'=>'',
                'groupPlusTest'=>0,
                'groupPlusTestSaving'=>0.00,
                'askAdditionalHormoneQuestions'=>$faker->numberBetween(0, 1),
                'autoCreditAmount'=>0.00,
                'bespokeToolTip'=>$faker->sentence(10),
                'isBespokeWithNoBase'=>0,
                'relevantMarkersReason'=>$faker->sentence(10),
                'cycleday1'=>0,
                'cycleday2'=>0,
                'testIcon'=>'',
                'replacementTestId'=>0,
                'lastEditorId'=>0,
                'testPrice_sas'=>30.00,
                'testPrice_sasSaving'=>0,
                'firstOrderLabStatus'=>0,
                'bespokeReceiptEmailId'=>0,
                'homePhlebotomyOnly'=>0,
                'preventGuestPurchase'=>0,
                'singleTestOnly'=>0,
                'minAgeLimit'=>0,
                'maxAgeLimit'=>0
            ]);
        }
    }
}
