<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RemoveOapiAttendanceGroupUsersResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RemoveOapiAttendanceGroupUsersResponseBody\result\errorInfoList;

class result extends Model {
    protected $_name = [
        'errorInfoList' => 'error_info_list',
        'successList' => 'success_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errorInfoList) {
            $res['error_info_list'] = [];
            if(null !== $this->errorInfoList && is_array($this->errorInfoList)){
                $n = 0;
                foreach($this->errorInfoList as $item){
                    $res['error_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successList) {
            $res['success_list'] = $this->successList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['error_info_list'])){
            if(!empty($map['error_info_list'])){
                $model->errorInfoList = [];
                $n = 0;
                foreach($map['error_info_list'] as $item) {
                    $model->errorInfoList[$n++] = null !== $item ? errorInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['success_list'])){
            if(!empty($map['success_list'])){
                $model->successList = $map['success_list'];
            }
        }
        return $model;
    }
    /**
     * @description 错误列表
     * @var array
     */
    public $errorInfoList;

    /**
     * @description 成功列表
     * @var array
     */
    public $successList;

}
