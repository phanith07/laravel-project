<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = "student";
    protected $primarykey = "id";
    protected $fillable = [
        "fullname", "gender", "DOB", "phone",
        "subjectId", "active"
    ];
    use HasFactory;
}
