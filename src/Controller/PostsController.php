<?php
namespace App\Controller;

class PostsController extends AppController {
    // public $autoRender = false;

// ここのinitializeがクラス全体に適用される。
    public function initialize():void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('test');
    }

    public function index()
    {
        // echo "Posts Index";
    }

    public function index2()
    {
        // echo "Posts Index";
    }

    public function view($id = null)
    {
        // $this->viewBuilder()->disableAutoLayout();
        $this->viewBuilder()->setLayout('test');

        // echo "ID:" . $id . "Posts View";
        // $this->set(['id' => $id]);
        $title = 'たいとる追加.php';
        $this->set(compact('id','title'));
        $this->render('index');
    }
}
