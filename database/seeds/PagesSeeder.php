<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $first = Page::create(
            [
                'name_en' => 'Pages',
                'name_ar' => 'الصفحات',
                'url' => 'pages',
                'icon' => 'glyphicon glyphicon-list',
                'parent' => 0,
                'order' => 1
            ]
        );
    }
}
