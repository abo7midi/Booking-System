<?php

use Illuminate\Database\Seeder;
use App\PropertyRoomType;

class PropertyRoomTypeDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<=50;$i++){
             $add=new PropertyRoomType;
              $add->propertyID=rand(0,9);
              $add->roomTypeID=rand(0,9);
              $add->created_at=now();
              $add->updated_at=now();
              $add->save();
        }
    }
}
