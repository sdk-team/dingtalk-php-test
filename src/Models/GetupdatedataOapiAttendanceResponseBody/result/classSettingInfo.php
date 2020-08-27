<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\classSettingInfo\restTimeVoList;

class classSettingInfo extends Model {
    protected $_name = [
        'restTimeVoList' => 'rest_time_vo_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->restTimeVoList) {
            $res['rest_time_vo_list'] = [];
            if(null !== $this->restTimeVoList && is_array($this->restTimeVoList)){
                $n = 0;
                foreach($this->restTimeVoList as $item){
                    $res['rest_time_vo_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return classSettingInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rest_time_vo_list'])){
            if(!empty($map['rest_time_vo_list'])){
                $model->restTimeVoList = [];
                $n = 0;
                foreach($map['rest_time_vo_list'] as $item) {
                    $model->restTimeVoList[$n++] = null !== $item ? restTimeVoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description restTimeVOList
     * @var array
     */
    public $restTimeVoList;

}
