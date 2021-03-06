<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $notifications = DB::table('notifications')
            ->whereDate('created', today())
            ->latest('created')
            ->get();

            // foreach($notifications as $notification){

            //     $currentTime = date("Y-m-d H:i:s", strtotime("now")); //current time
            //     $messageTime = date("Y-m-d H:i:s", strtotime($notification->created));
            //     $currentyear = date('Y', strtotime($currentTime));
            //     $currentmonth = date('m', strtotime($currentTime));
            //     $currentday = date('d', strtotime($currentTime));
            //     $currenthours = date('G', strtotime($currentTime));
            //     $currentminutes = date('i', strtotime($currentTime));
            //     $messageyear = date('Y', strtotime($messageTime));
            //     $messagemonth = date('m', strtotime($messageTime));
            //     $messageday = date('d', strtotime($messageTime)); 
            //     // $messagehours = date('G', strtotime($messageTime));
            //     // $messageminutes = date('i', strtotime($messageTime));

            //     if($currentyear == $messageyear && $currentmonth == $messagemonth && $currentday == $messageday){
            //             $notifications[] = $notification;
            //     }
        //             // if ($message->status == 0){
        //             //     $messagee= 'Disconnection Successful';
        //             // }
        //             // else if ($message->status == 1){
        //             //     $messagee= 'Reconnection Successful';
        //             // }
        //     // }
            
        return view('pages.notification',['notifications' => $notifications]);
        
    }
}

        

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // public function getNotifications(){
    //     return "asd";
    // }
    // public function getNotification(){
        
    // }
    // public function createNotification(){
        
    // }
    // public function updateNotification(){
        
    // }
    // public function deleteNotification(){
        
    // }
}
