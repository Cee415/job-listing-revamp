<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobCategories = [
            'Accounting/Finance',
            'Automotive',
            'Banking/Financial Services',
            'Customer Service/Call Center',
            'Education/Training',
            'Engineering',
            'Government/Military',
            'Hospitality/Tourism',
            'Human Resources',
            'Information Technology (IT)',
            'Aviation/Aerospace',
            'Consulting',
            'Health and Safety',
            'Information Security',
            'Legal Services',
            'Market Research',
            'Product Management',
            'Quality Assurance',
            'Software Development',
            'User Experience (UX) Design',
            'Web Development',
            'Pet Care',
            'Veterinary/Animal Care',
        ];

        foreach ($jobCategories as $category) {
            JobCategory::firstOrCreate([
                'name' => $category,
            ]);
        }
    }
}
