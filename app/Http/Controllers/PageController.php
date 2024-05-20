<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //dopo function il nome da mettere è quello che ti richiami sul file web.php dopo ,class
    public function index()
    {
        $Books = Books::paginate(5);
        // $Books = Books::all();
        // dd($Books);
        //qua devi mettere il nome dei file che crei su views
        return view('list', [
            //questo 'books' sarà il nome della variabile che richiamerai nella pagina html 
            'books' => $Books
        ]);
    }



    public function details($id)//questo id è il parametro che ti arriva(ouoi creare diversi parametri con i nomi che vuoi)
    //NOTA: vai  a vedere come deve essere scritto questo parametro id sul file web.php
    {
        $Books = Books::findOrFail($id);
        // $Books = Books::find($id);
        // $Books = Books::where('title','LIKE',"%$searchTerm%")->orderby('price','asc')->limit(3)-<offset(2)->get();
        // $Books = Books::paginate(5);

        return view('details', [
            'books' => $Books

        ]);
    }
    public function modify($id)  //qua stesso discorso di sopra
    {
        return view('modify', ['id'->$id]);//qua ha questa sintassi perchè il primo id è quello che legge dall url(il nome)il secondo è il parametro reale che ti lavori come vuoi
    }

    public function delete($id)
    {
        return view('delete', ['id'->$id]);
    }
    // public function delete($id)
    // {
    //     return view('delete',compact('id'));
    // }
    public function create()
    {
        return view('create');
    }
}
