<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiRelationRemarkParams;

use AlibabaCloud\Tea\Model;

class markees extends Model {
    protected $_name = [
        'remarkName' => 'remark_name',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('remarkName', $this->remarkName, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->remarkName) {
            $res['remark_name'] = $this->remarkName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return markees
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['remark_name'])){
            $model->remarkName = $map['remark_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 被修改的备注名
     * @var string
     */
    public $remarkName;

    /**
     * @description 被修改的userid
     * @var string
     */
    public $userid;

}
