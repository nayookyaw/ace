<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;
use DB;
use Validator;
use Log;

class ContactController extends Controller
{
  public function confirm(Request $input)
  {
    $validator = Validator::make($input->all(),[
        'firstname' => 'required|max:50',
        'lastname' => 'required|max:50',
        'age'=> 'required|integer',
        'email'=> 'required|email',
        'phone'=> 'required|numeric',
        'subject'=> 'required',
        'message'=> 'required'
      ]);

      if ($validator->fails()){
        return response()->json(['errors'=> $validator->errors()], 400);
      }
      $contact = new Contact();
      $contact->firstname = $input->firstname;
      $contact->lastname = $input->lastname;
      $contact->age = $input->age;
      $contact->email = $input->email;
      $contact->phone = $input->phone;
      $contact->subject = $input->subject;
      $contact->message = $input->message;
      $contact->save();
      return response()->json([
        'success' => 'Data SUCCEED'
      ]);
    }

  public function show()
  {
    $contact = new Contact();
    // $contact = DB::table('contacts')
    //               ->leftJoin('genders', function($join)
    //                 {
    //                   $join->on('genders.contact_id', '=', 'contacts.id')
    //                     ->whereNull('deleted_at');
    //                 })
    //               ->select('contacts.*','genders.name')
    //               ->get();
    $contact = $contact->get();
    log::info($contact);
    return response()->json([
      'data' => $contact
    ]);

      }

  }
