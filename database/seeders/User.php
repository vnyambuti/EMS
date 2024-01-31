<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = new Country();
        $country->name = "kenya";
        $country->country_code = "+254";
        $country->save();
        
        $state = new State();
        $state->name = "kenya";
        $state->country_id = $country->id;
        $state->save();

        $city = new City();
        $city->name = "Nairobi";
        $city->state_id = $state->id;
        $city->save();


        $user = new ModelsUser();
        $user->firstname = "admin";
        $user->lastname = "admin";
        $user->name="admin";
        $user->email = "admin@mail.com";
        $user->phone = "254724000000";
        $user->country_id=$country->id;
        $user->state_id=$state->id;
        $user->city_id=$city->id;
        $user->birthdate='1990/01/31';
        $user->password=Hash::make('nuski9000');
        $user->save();
    }
}
