<?php
namespace App\Http\Controllers;

use App\Models\StaffMember;

class DirectoryController extends Controller
{
    public function index()
    {
        $staff = StaffMember::orderBy('name')->get();
        return view('directory.index', compact('staff'));
    }
}
