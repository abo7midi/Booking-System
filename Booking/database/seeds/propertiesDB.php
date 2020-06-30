<?php

use Illuminate\Database\Seeder;
use App\Property;

class propertiesDB extends Seeder
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
            $add=new Property;
            $add->id=++$i;
            $add->propertyName="saba ".$i;
            $add->starRatingID=rand(0,9);
            $add->propertyHostID=1;
            $add->propertyAddressID=1;
            $add->propertyTypeID=1;
            $add->created_at=now();
            $add->updated_at=now();
            $add->save();
        }
    }
}
