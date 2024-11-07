<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil as ProfilModel;
use App\Models\Post as PostModel;
use App\Models\Comment as CommentModel;

class MahasiswaController extends Controller
{
    //
   
    public function tampil(){
        $data = ProfilModel::all();
        printf($data);

        return "Ini adalah proses dari controller";
    }

    public function view(){
        $posts =  PostModel::with('comments')->paginate(5); //buat tampilih jumlah data yg ingin d tampilin
        return view('post.index', compact('posts'));
    }
}
