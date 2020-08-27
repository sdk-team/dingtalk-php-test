<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmemberlistOapiImpaasGroupmemberResponseBody;

use AlibabaCloud\Tea\Model;

class memberList extends Model {
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
        'nick' => 'nick',
        'role' => 'role',
        'ext' => 'ext',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return memberList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description nick
     * @var string
     */
    public $nick;

    /**
     * @description role
     * @var int
     */
    public $role;

    /**
     * @description ext
     * @var string
     */
    public $ext;

}
