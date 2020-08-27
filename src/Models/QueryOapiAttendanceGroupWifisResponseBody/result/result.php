<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupWifisResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupWifisResponseBody\result\result\wifiList;

class result extends Model {
    protected $_name = [
        'wifiList' => 'wifi_list',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->wifiList) {
            $res['wifi_list'] = [];
            if(null !== $this->wifiList && is_array($this->wifiList)){
                $n = 0;
                foreach($this->wifiList as $item){
                    $res['wifi_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['wifi_list'])){
            if(!empty($map['wifi_list'])){
                $model->wifiList = [];
                $n = 0;
                foreach($map['wifi_list'] as $item) {
                    $model->wifiList[$n++] = null !== $item ? wifiList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description wifi列表
     * @var array
     */
    public $wifiList;

    /**
     * @description 是否更多
     * @var bool
     */
    public $hasMore;

}
