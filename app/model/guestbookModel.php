<?php
namespace app\model;

use \core\lib\model;

class GuestbookModel extends Model
{
    public $table = 'guestbook';

    public function all()
    {
        return $this->select($this->table, '*');
    }

    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }

    public function delOne($id)
    {
        $ret = $this->delete($this->table, array(
            'id' => $id
        ));

        if ($ret !== false) {
            return true;
        } else {
            return false;
        }
    }
}