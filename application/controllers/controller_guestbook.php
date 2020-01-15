<?php

class Controller_Guestbook extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Guestbook();
        $this->view = new View();
    }

    function action_index()
    {
        $error = array();
        $data = array();

            if ((!empty($_REQUEST['post']))) {
                $post = $_REQUEST['post'];
                $data['post'] = $post;
                $error = $this->model->validate($post);

                if (empty($error)) {
                    $this->model->create($post, false);
                    $data['success'] = 'Сообщение успешно отправлено';
                } else {
                    $data['error'] = $error;
                }
            }


        $data['items'] = $this->model->getPosts();

        $this->view->render('guestbook_view.php', 'template_view.php', $data);
    }

    function action_update()
    {
        $error = array();
        $data = array();

        if ((!empty($_REQUEST['post']))) {
            $post = $_REQUEST['post'];
            $data['post'] = $post;
            $error = $this->model->validate($post);

            if (empty($error)) {
                $this->model->create($post, false);
                $data['success'] = 'Сообщение успешно отправлено';
            } else {
                $data['error'] = $error;
            }
        }


        $data['items'] = $this->model->getPosts();

        $this->view->renderPartial('_messages_view.php', $data);
    }



}