<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Page extends Model
{
    protected $fillable = ['name_en', 'name_ar', 'url', 'icon', 'order', 'parent'];

    public $timestamps = false;

    public $appends = ['name'];

    /*********************** relation example ******************* */
    // const fields = [
    //     'name' => 'الاسم',
    //     'image' => 'الصوره',
    //     'description' => 'الوصف',
    //     'price' => 'السعر',
    //     'relation' => [
    //         'name' => 'category_id',
    //         'coulmn_en' => 'Category',
    //         'coulmn_ar' => 'النوع',
    //         'model' => \App\Models\Category::class
    //     ]
    // ];
    
    public function getNameAttribute()
    {
        return App::getLocale() == 'en' ? ($this->name_en ?? $this->name_ar) : ($this->name_ar ?? $this->name_en);
    }

    public function subPage()
    {
        return $this->hasMany(Page::class, 'parent')->orderBy('order', 'asc');
    }

    public function parentPage()
    {
        return $this->belongsTo(Page::class, 'parent');
    }
}
