<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('index');
    }
    public function privacy(){
        return view('privacy');
    }
    public function report(Request $request){
        // return $request;
        // if($request->language < 3){
        //     return
        //     response()->json([
        //         'error' => [
        //              [
        //                 "Sorry your English not upto the mark"
        //             ]
        //         ]
        //     ], 200);

        // }
        // if($request->date_arabic != ''){
        //     $date = $request->date_arabic;
        // }
        // elseif($request->date_english != ''){
        //     $date = $request->date_english;
        // }
        // elseif($request->date_both != ''){
        //     $date = $request->date_both;
        // }
        // //
        // // return $request;
        // if($request->time_arabic != ''){
        //     $time = $request->time_arabic;
        // }
        // elseif($request->time_english != ''){
        //     $time = $request->time_english;
        // }
        // elseif($request->time_both != ''){
        //     $time = $request->time_both;
        // }
        // //
        // $ip =  $request->ip();
        // // $location = $details->city . ',' . $details->country;
        // if ($ip == '127.0.0.1') {
        //     $location = "Offline";
        //     // $phone_request =
        // } else {
        //     $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
        //     $location =  $details->city . ',' . $details->region . ',' .  $details->country . ': Location: (' . $details->loc . ')';
        // }
        // //
        // if ($file = $request->file('fileupload')) {
        //     // return "a";
        //     // }
        //     $ext = date('d-m-Y-H-i');
        //     // return $file;
        //     $mytime = Carbon::now();
        //     $ext =  $mytime->toDateTimeString();
        //     $name = $ext . '-' . $file->getClientOriginalName();
        //     // $name = Str::slug($name, '-');

        //     // $name = str_replace($ext, date('d-m-Y-H-i') . $ext, $request->image->getClientOriginalName());
        //     $file->move('file', $name);
        //     $input['path'] = $name;
        //     $files = public_path('file/'.$name);
        // }
        // else{
        //     $files = '';
        // }
        // //
        // if($request->language == 1){
        //     $language = 'Poor';
        // }
        // else if($request->language == 2){
        //     $language = 'Not Good';
        // }
        // else if($request->language == 3){
        //     $language = 'Average';
        // }
        // else if($request->language == 4){
        //     $language = 'Good';
        // }
        // else if($request->language == 5){
        //     $language = 'Excellent';
        // }

        $details = [
            // 'date' => $date,
            // 'time' => $time,
            'email' => $request->email,
            'gender' => $request->gender,
            'vacancy' => $request->vacancy,
            // 'location' => $request->location,
            'name' => $request->name,
            'phone' => $request->phone,
            // 'Country' => $location,
            // 'Ip' => $ip,
        ];
        \Mail::to($request->email)
        ->cc('salmanahmed334@gmail.com')
        ->send(new \App\Mail\WelcomeMail($details));
        // \Mail::to(['parhakooo@gmail.com','dialupitint@gmail.com'])
        // ->cc('salmanahmed334@gmail.com')
        // ->attach($file)
        // ->send(new \App\Mail\ourmail($details));
        // if($files){
            // \Mail::send('email.ourmail', compact('details'), function ($message) use ($details, $files) {
                // $message->to(['parhakooo@gmail.com', 'dialupitint@gmail.com'])
                    // ->subject('Resume Career')
                    // ->attach($files);
                // foreach ($files as $file) {
                // }
            // });
        // }else{
            \Mail::send('email.ourmail', compact('details'), function ($message) use ($details) {
                $message->to(['parhakooo@gmail.com'])
                ->subject('Resume Career');
                // ->attach($files);
                // foreach ($files as $file) {
                // }
            });
        // }
        return response()->json(['success' => 'Thank You for applying, check your email']);

    }
}
