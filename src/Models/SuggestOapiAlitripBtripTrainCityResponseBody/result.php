<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SuggestOapiAlitripBtripTrainCityResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SuggestOapiAlitripBtripTrainCityResponseBody\result\cities;

class result extends Model {
    protected $_name = [
        'cities' => 'cities',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cities) {
            $res['cities'] = [];
            if(null !== $this->cities && is_array($this->cities)){
                $n = 0;
                foreach($this->cities as $item){
                    $res['cities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cities'])){
            if(!empty($map['cities'])){
                $model->cities = [];
                $n = 0;
                foreach($map['cities'] as $item) {
                    $model->cities[$n++] = null !== $item ? cities::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 城市列表
     * @var array
     */
    public $cities;

}
