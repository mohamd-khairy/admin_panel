<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Sponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class HomePageController extends Controller
{
    public function index()
    {
        $settings = Schema::hasTable('settings') ?  Setting::first() : null;
        $data = [];
        return view('shamort.index', compact('data'));
    }

}
