<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'icon',
        'type',
        'create_by',
    ];

    public function storeCategory($data)
    {
        $category = $this->create($data);

        return $category;
    }

    protected $table = "categories";

    public function transaction(){
        return $this->hasMany('App\Models\Transaction');
    }

    public function budget_category(){
        return $this->hasMany('App\Models\Budget_Category');
    }
}
