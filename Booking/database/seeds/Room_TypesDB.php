<?php

use Illuminate\Database\Seeder;
use App\RoomType;
class Room_TypesDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        for($i=0;$i<=50;$i++){
            $add=new RoomType;

            $add->roomName='Room Number-'.rand(0,9);
            $add->created_at=now();
            $add->updated_at=now();
            $add->save();
        }
    }
}
