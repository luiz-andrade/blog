<?php

class CategoriaController extends BaseController {

    public function index()
    {
//        return View::make('categoria.categoria');

        $results = DB::select('select * from usuarios where id = ?', array(1));
        return View::make ($results);
    }
}
?>