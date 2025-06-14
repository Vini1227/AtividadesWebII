<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'author_id', 
        'category_id', 
        'publisher_id', 
        'published_year'
    ];

    // Relacionamento com Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relacionamento com Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacionamento com Publisher
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    // Relacionamento muitos-para-muitos com User (empréstimos)
   public function users()
{
    return $this->belongsToMany(User::class, 'borrowings')
                ->withPivot('id', 'borrowed_at', 'returned_at')
                ->withTimestamps();
}




    // Método para verificar se o livro está disponível
    public function isAvailable()
    {
        return !$this->users()->whereNull('returned_at')->exists();
    }
}

