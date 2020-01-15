<?php

class Model_Guestbook extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPosts() :array
    {
        $sql = "SELECT * FROM `" . $this->table . "` ORDER BY `id` DESC LIMIT 5";
        $result = array();
        if($this->db->query($sql))
        {
        while ($this->db->next()) {
            $result[] = [
                'id' => $this->db->getValue('id'),
                'dtime' => $this->db->getValue('dtime'),
                'name' => $this->db->getValue('name'),
                'body' => $this->db->getValue('body'),
            ];
            }
        }

        return $result;
    }

    public function validate($post = array())
    {
        $error = array();

        if (empty($post['name'])) {
            $error[] = [
                'name' => 'Имя не может быть пустым',
            ];
        }



        if (empty($post['body'])) {
            $error[] = [
                'body' => 'Сообщение не может быть пустым',
            ];
        }

        if (empty($error)) {
            return false;
        } else {
            return $error;
        }

    }

    public function create($post, $validate = true) : bool
    {
        if ($validate) {
            if ($this->validate($post) != false) {
                return false;
            }
        }

        $created = date('Y-m-d h:m:s');
        $name = mysqli_real_escape_string($this->db->getConnection(), $post['name']);
        $body = mysqli_real_escape_string($this->db->getConnection(), $post['body']);

        $sql = "INSERT INTO `{$this->table}` (`id`, `dtime`, `name`,  `body`) VALUES (NULL, '$created', '$name', '$body')";

        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


}
