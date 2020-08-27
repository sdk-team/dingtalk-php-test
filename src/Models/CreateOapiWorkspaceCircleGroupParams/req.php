<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiWorkspaceCircleGroupParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'name' => 'name',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 群名称，长度[3,20]字符
     * @var string
     */
    public $name;

    /**
     * @description 创建人，在圈子内的userid，这个人会成为群主。当圈子群超过100个时会禁止新建
     * @var string
     */
    public $userid;

}
