<?php

use Illuminate\Database\Seeder;
use App\Supplier;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier();
        $supplier->name = "Fornecedor 100";
        $supplier->site = "Fornecedor100.com.br";
        $supplier->uf = "RJ";
        $supplier->email = "Fornecedor100@gmail.com";
        $supplier->save();

        Supplier::create([
            "name" => "Fornecedor 200",
            "site" => "Fornecedor200.com.br",
            "uf" => "MG",
            "email" => "Fornecedor200@gmail.com"
        ]);

        DB::table("suppliers")->insert([
            "name" => "Fornecedor 300",
            "site" => "Fornecedor300.com.br",
            "uf" => "SP",
            "email" => "Fornecedor300@gmail.com"
        ]);
    }
}
