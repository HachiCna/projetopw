<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;

    protected $fillable = [
    'Nome',
    'Telefone',
    'Origem',
    'Data_contato',
    'Observacao',
 ];
}
