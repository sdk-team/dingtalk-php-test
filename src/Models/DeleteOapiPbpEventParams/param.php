<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiPbpEventParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiPbpEventParams\param\userEventList;

class param extends Model {
    protected $_name = [
        'userEventList' => 'user_event_list',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('userEventList', $this->userEventList, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userEventList) {
            $res['user_event_list'] = [];
            if(null !== $this->userEventList && is_array($this->userEventList)){
                $n = 0;
                foreach($this->userEventList as $item){
                    $res['user_event_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_event_list'])){
            if(!empty($map['user_event_list'])){
                $model->userEventList = [];
                $n = 0;
                foreach($map['user_event_list'] as $item) {
                    $model->userEventList[$n++] = null !== $item ? userEventList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 打卡事件列表
     * @var array
     */
    public $userEventList;

    /**
     * @description 打卡业务代码
     * @var string
     */
    public $bizCode;

}
