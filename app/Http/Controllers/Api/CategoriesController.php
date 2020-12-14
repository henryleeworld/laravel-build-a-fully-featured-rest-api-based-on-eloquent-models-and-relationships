<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class CategoriesController extends Controller
{
	use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Category::class; // or "App\Models\Post"
}