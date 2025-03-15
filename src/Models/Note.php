<?php

namespace Gokulsingh\QuickNote\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'notes_category_id', 'description', 'title'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            if (auth()->check()) {
                $note->user_id = auth()->id(); // Automatically assign the logged-in user
            }else{
                $note->user_id = 0;
            }
        });

        static::updating(function ($note) {
            if (auth()->check()) {
                $note->user_id = auth()->id(); // Automatically assign the logged-in user
            }else{
                $note->user_id = 0;
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function notecategory()
    {
        return $this->belongsTo(NoteCategory::class, 'note_category_id');
    }
}
