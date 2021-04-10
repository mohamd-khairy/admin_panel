<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    const MODEL = Social::class;

    use HelperTrait;
}
