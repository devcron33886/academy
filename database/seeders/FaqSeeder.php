<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is [Your System Name] and how does it work?',
                'answer' => '[Your System Name] is a basketball statistics recording system designed to simplify the process of capturing and analyzing game data. It allows you to track player performance, team statistics, and more. To get started, simply [brief instructions on how to initiate the system].',
            ],
            [
                'question' => 'What devices are compatible with [Your System Name]?',
                'answer' => '[Your System Name] is compatible with [list of compatible devices and platforms]. Ensure that your device meets the system requirements for optimal performance.',
            ],
            [
                'question' => 'How do I record player statistics during a game?',
                'answer' => 'To record player statistics, [provide step-by-step instructions or refer to the user manual]. This typically involves selecting the player, choosing the relevant statistic (points, rebounds, assists, etc.), and inputting the data.',
            ],
            [
                'question' => 'Can I customize the statistics categories tracked by [Your System Name]?',
                'answer' => 'Yes, [Your System Name] allows you to customize the statistics categories based on your specific needs. Refer to the settings or configuration section for instructions on how to modify the default settings.',
            ],
            [
                'question' => 'Is there a tutorial or user guide available?',
                'answer' => 'Absolutely! We have a comprehensive tutorial/user guide [provide the location – could be a link or a reference to a printed manual] that walks you through the setup, recording process, and advanced features of [Your System Name].',
            ],
            [
                'question' => 'How do I review and analyze the recorded statistics?',
                'answer' => 'To review and analyze recorded statistics, navigate to the [specific section or feature] on the dashboard. There, you can find detailed player and team performance reports, graphs, and other visualization tools to help you make informed decisions.',
            ],
            [
                'question' => 'Can I export the recorded data for further analysis or sharing?',
                'answer' => 'Yes, [Your System Name] allows you to export data in [supported formats, e.g., CSV, Excel]. This feature enables you to share statistics with team members, coaches, or analyze the data using external tools.',
            ],
            [
                'question' => 'What should I do if I encounter technical issues or have questions not covered in the FAQs?',
                'answer' => 'If you experience technical issues or have additional questions, please reach out to our support team at [provide contact information]. We are here to assist you and ensure you have a smooth experience with [Your System Name].',
            ],
        ];
        Faq::insert($faqs);
    }
}
