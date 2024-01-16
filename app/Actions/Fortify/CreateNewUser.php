<?php

namespace App\Actions\Fortify;

use App\Mail\Emailotp;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use RealRashid\SweetAlert\Facades\Alert;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:11', 'min:11'],
            'username' => ['required', 'string',  'min:6', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://integration.mcd.5starcompany.com.ng/api/reseller/virtual-account',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('account_name' => $input['name'],
                    'business_short_name' => 'Starlight','uniqueid' => $input['username'].rand(1111, 9999),
                    'email' => $input['email'],
                    'phone' =>$input['number'],'webhook_url' => 'https://starlightcommunication.com.ng/api/run'),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: mcd_key_75rq4][oyfu545eyuriup1q2yue4poxe3jfd'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response, true);
            if ($data['success']==1){
                $account = $data["data"]["account_name"];
                $number = $data["data"]["account_number"];
                $bank = $data["data"]["bank_name"];

            }else{
                $account = "1";
                $number = "1";
                $bank = null;
            }
            $receiver=$input ['email'];
            $admin= 'info@starlightcommunication.com.ng';
            Mail::to($receiver)->send(new Emailotp($input));
            Mail::to($admin)->send(new Emailotp($input));
            return tap(User::create([
                'name' => $input['name'],
                'username'=>$input['username'],
                'phone'=>$input['number'],
                'account_number'=>$number,
                'account_name'=>$account,
                'bank'=>$bank,
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
