<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Cliente::create([
            'nome' => 'Maria Eduarda',
            'endereco' => 'Rua Exemplo, 17-89',
            'telefone' => '18 996306324',
            'cpf' => '1278956412',
            'email' => 'dudaTeste@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Cliente::create([
            'nome' => 'Maria Luiza',
            'endereco' => 'Rua Exemplo, 1789',
            'telefone' => '40027822',
            'cpf' => '12347898940',
            'email' => 'maluTeste@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Cliente::create([
            'nome' => 'Maria Clara Exemplo',
            'endereco' => 'Rua Exemplo, 785',
            'telefone' => '407896522',
            'cpf' => '123777854990',
            'email' => 'clara@gmail.com',
            'password' => bcrypt('123456')
        ]);

        
        
    }
}
