<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function index() {
    $projects = Project::latest()->get();
    return view('index', compact('projects'));
}
}
