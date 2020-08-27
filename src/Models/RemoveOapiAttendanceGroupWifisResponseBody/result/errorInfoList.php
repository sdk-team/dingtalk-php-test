<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RemoveOapiAttendanceGroupWifisResponseBody\result;

use AlibabaCloud\Tea\Model;

class errorInfoList extends Model {
    protected $_name = [
        'failureList' => 'failure_list',
        'msg' => 'msg',
        'code' => 'code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->failureList) {
            $res['failure_list'] = $this->failureList;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return errorInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['failure_list'])){
            if(!empty($map['failure_list'])){
                $model->failureList = $map['failure_list'];
            }
        }
        if(isset($map['msg'])){
            $model->msg = $map['msg'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description 错误列表
     * @var array
     */
    public $failureList;

    /**
     * @description 错误描述
     * @var string
     */
    public $msg;

    /**
     * @description 错误码
     * @var string
     */
    public $code;

}
