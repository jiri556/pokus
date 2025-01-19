<?php
    namespace App\Controllers;

    use App\Models\NewUser;
    use App\Views\HomeView;

    class HomeController
    {
        public function index()
        {
            
            $user=new NewUser("Jana");
            $view=new HomeView();
            $view->render($user->getName());
        }
    }