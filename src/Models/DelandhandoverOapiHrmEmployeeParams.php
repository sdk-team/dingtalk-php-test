<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DelandhandoverOapiHrmEmployeeParams\dismissionInfoWithHandOver;

class DelandhandoverOapiHrmEmployeeParams extends Model {
    protected $_name = [
        'dismissionInfoWithHandOver' => 'dismission_info_with_hand_over',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('dismissionInfoWithHandOver', $this->dismissionInfoWithHandOver, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dismissionInfoWithHandOver) {
            $res['dismission_info_with_hand_over'] = null !== $this->dismissionInfoWithHandOver ? $this->dismissionInfoWithHandOver->toMap() : null;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DelandhandoverOapiHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dismission_info_with_hand_over'])){
            $model->dismissionInfoWithHandOver = dismissionInfoWithHandOver::fromMap($map['dismission_info_with_hand_over']);
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 确认离职对象
     * @var dismissionInfoWithHandOver
     */
    public $dismissionInfoWithHandOver;

    /**
     * @description 操作人userid
     * @var string
     */
    public $opUserid;

}
