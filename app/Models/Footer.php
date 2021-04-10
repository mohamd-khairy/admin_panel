<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $guarded = [];

    const model_en = 'footer';
    const model_ar = 'نهايه الموقع';
    const fields = [
        'title' => 'العنوان',
        'description' => 'الوصف',
        'copyright' => 'حقوق الملكيه'
    ];
   
    const rules_create = [
        'title' => 'required',
        'description' => 'required'
    ];

    const rules_edit = [
        'title' => 'required',
        'description' => 'required'
    ];
}
