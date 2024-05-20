<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //dopo function il nome da mettere è quello che ti richiami sul file web.php dopo ,class
    public function index()
    {
        $Books = Books::paginate(25);
        // $Books = Books::all();
        // dd($Books);

        return view('list', [ //qua devi mettere il nome dei file che crei su views
            //questo 'books' sarà il nome della variabile che richiamerai nella pagina html 
            'books' => $Books
        ]);
    }



    public function details($id)//questo id è il parametro che ti arriva(ouoi creare diversi parametri con i nomi che vuoi)
    //NOTA: vai  a vedere come deve essere scritto questo parametro id sul file web.php
    {
        // $Books = Books::find($id);
        // $Books = Books::where('title','LIKE',"%$searchTerm%")->orderby('price','asc')->limit(3)-<offset(2)->get();
        // $Books = Books::paginate(5);
        $Books = Books::findOrFail($id);

        return view('details', [
            'books' => $Books

        ]);
    }


    public function delete($id)
    {
        $Books = Books::findOrFail($id);
        $Books->delete();
        return redirect()->route('index');
    }
    // public function delete($id)
    // {
    //     return view('delete',compact('id'));
    // }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        //metodo per prendere i dati dal form per inserire un libro
        $mybook = new Books();

        $data = $request->all();
        // dd($data);

        // validare i dati

        // salvare i dati nel database
        $newBook = new Books();
        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->price = $data['price'];
        $newBook->img = $data['img'];
        $newBook->save();//questo chiama il database e salva i dati




        return redirect()->route('index');
    }
    public function modify(Request $request, $id)
    {
        $book = Books::findOrFail($id);
       
        return view('modify', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $book = Books::findOrFail($id);
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->price = $data['price'];
        $book->img = $data['img'];
        $book->update();

        // ridirezionare
        return redirect()->route('details', ['id' => $id]);
    }
}
