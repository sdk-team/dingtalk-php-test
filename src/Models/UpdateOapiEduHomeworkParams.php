<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiEduHomeworkParams extends Model {
    protected $_name = [
        'hwId' => 'hw_id',
        'status' => 'status',
        'teacherUserid' => 'teacher_userid',
        'identifier' => 'identifier',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('hwId', $this->hwId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('teacherUserid', $this->teacherUserid, true);
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->hwId) {
            $res['hw_id'] = $this->hwId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->teacherUserid) {
            $res['teacher_userid'] = $this->teacherUserid;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiEduHomeworkParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hw_id'])){
            $model->hwId = $map['hw_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['teacher_userid'])){
            $model->teacherUserid = $map['teacher_userid'];
        }
        if(isset($map['identifier'])){
            $model->identifier = $map['identifier'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 作业ID
     * @var int
     */
    public $hwId;

    /**
     * @description 状态
     * @var string
     */
    public $status;

    /**
     * @description 老师UserId
     * @var string
     */
    public $teacherUserid;

    /**
     * @description 幂等标识
     * @var string
     */
    public $identifier;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

}
