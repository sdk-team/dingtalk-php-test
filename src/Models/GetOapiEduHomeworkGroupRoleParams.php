<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduHomeworkGroupRoleParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduHomeworkGroupRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
