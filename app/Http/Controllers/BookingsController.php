<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Object_;

class BookingsController extends Controller
{

    public function apis() {
        $bookings = Bookings::all();
        $events = [];

        foreach($bookings as $booking){
            $events[] = array('title' => 'Foglalt!', 'start' => $booking['from_date'], 'end' => $booking['until_date']);
        }

        return response()->json($events);
    }

    public function index() {

        return view('bookings', ['success' => false, 'bookings' => Bookings::all()]);
    }

    public static function getUserNameByID($id) {
        $user = DB::table('users')
            ->where('id', '=', $id)
            ->value('name');
        return $user;
    }

    public static function getUserEmailByID($id) {
        $user = DB::table('users')
            ->where('id', '=', $id)
            ->value('email');
        return $user;
    }

    public function create() {

        return view('bookings.create', ['success' => false, 'bookings' => Bookings::all()]);
    }

    public function store(Request $request){

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $fromDate = $request->input('from_date');
        $untilDate = $request->input('until_date');
        $prop = $request->input('prop');

        $user = $this->createUser($email, $firstname, $lastname);

        DB::table('bookings')
            ->insert([
                'user_id' => $user,
                'property_id' => $prop,
                'from_date' => $fromDate,
                'until_date' => $untilDate,
                'occupied_dates' => $fromDate
            ]);
        return view('bookings', ['success' => true, 'bookings' => Bookings::all()]);
    }

    public static function createUser($email, $firstname, $lastname){
        $user = new User();
        $user->password = Hash::make('the-password-of-choice');
        $user->email = $email;
        $user->name = $firstname . " " . $lastname;
        $user->save();
        return $user->id;
    }

}
