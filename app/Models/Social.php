<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $guarded = [];

    const model_en = 'social';
    const model_ar = 'التواصل الاجتماعي';
    const fields = [
        'name' => 'الاسم',
        'icon' => 'الصوره',
        'url' => 'الرابط ',
    ];

    
   
    const rules_create = [
        'name' => 'required',
        'icon' => 'required',
        'url' => 'required|url',
    ];

    const rules_edit = [
        'name' => 'required',
        'icon' => 'required',
        'url' => 'required|url',
    ];
}
