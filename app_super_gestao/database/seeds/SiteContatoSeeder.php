<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $siteContato = new SiteContato();
        $siteContato->name = "Sistema SG";
        $siteContato->phone = "(21) 99191919)";
        $siteContato->email = "contact@sg.com.br";
        $siteContato->reason_contact = 1;
        $siteContato->message = "Seja bem-vindo ao sistema Super Gestão!";
        $siteContato->save();

        SiteContato::create([
            "name" => "Sistema SG",
            "phone" => "(21) 99191919)",
            "email" => "contact@sg.com.br",
            "reason_contact" => 2,
            "message" => "Estaremos sempre a sua disposição!"
        ]); */

        factory(SiteContato::class, 100)->create();
    }
}
