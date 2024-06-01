<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // definisikan data tugas
    protected static $tasks = [
        [
            'id' => 1,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-06-08',
            'status' => 'Belum selesai',
            'description' => 'Tugas Chapter 3',
        ], [
            'id' => 2,
            'name' => 'Matematika',
            'deadline' => '2024-06-10',
            'status' => 'SUdah Selesai',
            'description' => 'Mengerjakan persamaan linier',
        ], [
            'id' => 3,
            'name' => 'Fisika',
            'deadline' => '2024-06-11',
            'status' => 'Belum selesai',
            'description' => 'Tugus pada pertemuan 7',
        ], [
            'id' => 4,
            'name' => 'Kimia',
            'deadline' => '2024-06-01',
            'status' => 'Belum selesai',
            'description' => 'Melanjutkan tugas pada rumus x',
        ],
    ];

    //method untuk mendapatkan semua data tugas
    public static function getALL()
    {
        return self::$tasks;
    }
}
