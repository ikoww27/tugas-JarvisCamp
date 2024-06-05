<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan dan menampilkan data tugas
    public function index()
    {
        // Mendapatkan semua tugas
        $tasks = Task::Getall();

        // Mengirim data ke view
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    // public function detail($id)
    // {
    //     // Mendapatkan detail tugas berdasarkan ID
    //     $task = Task::findOrFail($id);

    //     // Mengirim data ke view
    //     return view('tasks.detail', compact('task'));
    // }
}
