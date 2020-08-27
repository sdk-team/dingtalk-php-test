<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddmemberCcoserviceServicegroupParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'openGroupId' => 'open_group_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('openGroupId', $this->openGroupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->openGroupId) {
            $res['open_group_id'] = $this->openGroupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddmemberCcoserviceServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['open_group_id'])){
            $model->openGroupId = $map['open_group_id'];
        }
        return $model;
    }
    /**
     * @description 企业员工id
     * @var string
     */
    public $userid;

    /**
     * @description 服务群id
     * @var string
     */
    public $openGroupId;

}
