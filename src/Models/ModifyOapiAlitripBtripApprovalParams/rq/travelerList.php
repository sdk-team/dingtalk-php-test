<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalParams\rq;

use AlibabaCloud\Tea\Model;

class travelerList extends Model {
    protected $_name = [
        'userName' => 'user_name',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return travelerList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 出行人名称
     * @var string
     */
    public $userName;

    /**
     * @description 出行人id
     * @var string
     */
    public $userid;

}
