<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    public function index() {

        return view('bookings', ['success' => false, 'bookings' => Bookings::all()]);
    }

    public static function getUserNameByID($id) {
        $user = DB::table('users')
            ->where('id', '=', $id)
            ->value('name');
        return $user;
    }

    public static function getUserPhoneByID($id) {
        $user = DB::table('profile')
            ->where('user_id', '=', $id)
            ->value('phone');
        return $user;
    }

    public function create() {
        return view('bookings.create', ['success' => false]);
    }

}
