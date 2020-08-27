<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiSmartdeviceFacelevelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'certifyType' => 'certify_type',
        'hasFace' => 'has_face',
        'lastModified' => 'last_modified',
        'userid' => 'userid',
        'operatorUserid' => 'operator_userid',
        'operatorUsername' => 'operator_username',
    ];
    public function validate() {
        Model::validatePattern('lastModified', $this->lastModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->certifyType) {
            $res['certify_type'] = $this->certifyType;
        }
        if (null !== $this->hasFace) {
            $res['has_face'] = $this->hasFace;
        }
        if (null !== $this->lastModified) {
            $res['last_modified'] = $this->lastModified;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        if (null !== $this->operatorUsername) {
            $res['operator_username'] = $this->operatorUsername;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['certify_type'])){
            $model->certifyType = $map['certify_type'];
        }
        if(isset($map['has_face'])){
            $model->hasFace = $map['has_face'];
        }
        if(isset($map['last_modified'])){
            $model->lastModified = $map['last_modified'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        if(isset($map['operator_username'])){
            $model->operatorUsername = $map['operator_username'];
        }
        return $model;
    }
    /**
     * @description 实人认证结果
     * @var int
     */
    public $certifyType;

    /**
     * @description 有人脸
     * @var bool
     */
    public $hasFace;

    /**
     * @description 人脸最后更新时间
     * @var string
     */
    public $lastModified;

    /**
     * @description 用户staffid
     * @var string
     */
    public $userid;

    /**
     * @description 当前操作人的userid
     * @var string
     */
    public $operatorUserid;

    /**
     * @description 当前操作人的姓名
     * @var string
     */
    public $operatorUsername;

}
