<?php

namespace App\Console\Commands;

use App\Models\Produto;
use App\Models\Servico;
use App\Models\User;
use App\Models\UserProduto;
use App\Models\UserServico;
use Illuminate\Console\Command;

class jsonBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'json:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'backup das infos do banco da heroku - antes que seja deletado';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_servico = UserServico::all();

        $user_servico = json_encode($user_servico);
        file_put_contents(storage_path('/backup/user-servicos.json'), $user_servico);

        $this->line("user_servico salvo");

        $user_produto = UserProduto::all();
        $infos = json_encode($user_produto);
        file_put_contents(storage_path('/backup/user-produtos.json'), $infos);

        $this->line("user_produto salvo");

        $produtos = Produto::all();
        $produtos = json_encode($produtos);
        file_put_contents(storage_path('/backup/produtos.json'), $produtos);

        $this->line("Produtos salvo");

        $servicos = Servico::all();
        $servicos = json_encode($servicos);
        file_put_contents(storage_path('/backup/servicos.json'), $servicos);

        $this->line("Serviços salvo");

        $users = User::all();
        $users = json_encode($users);
        file_put_contents(storage_path('/backup/users.json'), $users);

        $this->line("users salvo");

        $this->info("Tudo ok");

    }
}
