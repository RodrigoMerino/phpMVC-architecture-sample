<?php


namespace App\Controllers;
use \Core\View;
use App\Models\Posts;

class Post extends \Core\Controller
{

    protected function before()
    {
        echo '(before)';
    }

    protected function after()
    {
        echo '(after)';
    }

    public function indexAction(){

        echo 'welcome to index';
        echo '<pre>'
        .
        htmlspecialchars(print_r($_GET,true))
        .
        '</pre>';
    }

    public function editAction(){
        echo 'hello';
        echo '<pre>'
        .
        htmlspecialchars(print_r($this->route_params,true)).
        htmlspecialchars(print_r($_GET,true))
        .
        '</pre>';
        
    }
    public function getallAction()
    {
        $Posts = Posts::getAll();
        View::render('Home/index.php',[
            'posts' => $Posts
        ]);
    }
}
?>