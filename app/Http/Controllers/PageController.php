<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //dopo function il nome da mettere è quello che ti richiami sul file web.php dopo ,class
    public function index()
    {
        //qua devi mettere il nome dei file che crei su views
        return view('list');
    }


    public function details($id)//questo id è il parametro che ti arriva(ouoi creare diversi parametri con i nomi che vuoi)
//NOTA: vai  a vedere come deve essere scritto questo parametro id sul file web.php
    {
        return view('details');
    }
    public function modify($id)  //qua stesso discorso di sopra
    {
        return view('modify', ['id'->$id]);//qua ha questa sintassi perchè il primo id è quello che legge dall url(il nome)il secondo è il parametro reale che ti lavori come vuoi
    }
  
    public function delete($id)
    {
        return view('delete', ['id'->$id]);
    }
    public function create()
    {
        return view('create');
    }
}
