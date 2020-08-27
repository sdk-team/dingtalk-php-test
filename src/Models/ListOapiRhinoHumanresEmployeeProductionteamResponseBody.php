<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoHumanresEmployeeProductionteamResponseBody\corpEmployeeInfo;

class ListOapiRhinoHumanresEmployeeProductionteamResponseBody extends Model {
    protected $_name = [
        'statusCode' => 'status_code',
        'success' => 'success',
        'errcode' => 'errcode',
        'corpEmployeeInfo' => 'corp_employee_info',
        'errmsg' => 'errmsg',
        'externalMsgInfo' => 'external_msg_info',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->statusCode) {
            $res['status_code'] = $this->statusCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->corpEmployeeInfo) {
            $res['corp_employee_info'] = [];
            if(null !== $this->corpEmployeeInfo && is_array($this->corpEmployeeInfo)){
                $n = 0;
                foreach($this->corpEmployeeInfo as $item){
                    $res['corp_employee_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->externalMsgInfo) {
            $res['external_msg_info'] = $this->externalMsgInfo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRhinoHumanresEmployeeProductionteamResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status_code'])){
            $model->statusCode = $map['status_code'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['corp_employee_info'])){
            if(!empty($map['corp_employee_info'])){
                $model->corpEmployeeInfo = [];
                $n = 0;
                foreach($map['corp_employee_info'] as $item) {
                    $model->corpEmployeeInfo[$n++] = null !== $item ? corpEmployeeInfo::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['external_msg_info'])){
            $model->externalMsgInfo = $map['external_msg_info'];
        }
        return $model;
    }
    /**
     * @description status_code
     * @var int
     */
    public $statusCode;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description 员工信息
     * @var array
     */
    public $corpEmployeeInfo;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 扩展信息
     * @var string
     */
    public $externalMsgInfo;

}
