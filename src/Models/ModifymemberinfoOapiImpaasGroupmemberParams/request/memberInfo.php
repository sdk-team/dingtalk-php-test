<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifymemberinfoOapiImpaasGroupmemberParams\request;

use AlibabaCloud\Tea\Model;

class memberInfo extends Model {
    protected $_name = [
        'type' => 'type',
        'id' => 'id',
        'nick' => 'nick',
        'ext' => 'ext',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('nick', $this->nick, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return memberInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        return $model;
    }
    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 用户id
     * @var string
     */
    public $id;

    /**
     * @description 用户昵称，要修改到的值
     * @var string
     */
    public $nick;

    /**
     * @description 扩展属性
     * @var string
     */
    public $ext;

}
