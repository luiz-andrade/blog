<?php

class CategoriaController extends BaseController {

    public function index()
    {
//        return View::make('categoria.categoria');

        $users = DB::table('usuarios')->get();

        foreach ($users as $user)
        {
            var_dump($user->nomePC);
        }
    }
}
?>