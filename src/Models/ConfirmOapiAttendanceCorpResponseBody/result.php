<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ConfirmOapiAttendanceCorpResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'phone' => 'phone',
        'corpId' => 'corp_id',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['phone'])){
            $model->phone = $map['phone'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 手机号
     * @var string
     */
    public $phone;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 管理员id
     * @var string
     */
    public $userid;

}
