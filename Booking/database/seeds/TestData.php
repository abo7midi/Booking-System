<?php

use Illuminate\Database\Seeder;
use App\User;
class TestData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<=5;$i++){
            $add=new User;
            $add->name="ali";
            $add->email="ali".$i."@gmail.com";
            $add->email_verified_at=now();
            $add->password='123456';
            $add->oldPassword='123123';
            $add->loginAttempt='1';
            $add->todayLoginAttempt='1';
            $add->isLogin='1';
            $add->typeID='1';
            $add->customerID='1';
            $add->agentID='1';
            $add->propertyHostID='1';
            $add->remember_token='1';
            $add->created_at=now();
            $add->updated_at=now();
            $add->save();
        }
    }
}
