<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';
    protected $primaryKey = 'id';
}