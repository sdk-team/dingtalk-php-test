<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryonjobOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dataList' => 'data_list',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dataList) {
            $res['data_list'] = $this->dataList;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data_list'])){
            if(!empty($map['data_list'])){
                $model->dataList = $map['data_list'];
            }
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description 数据结果列表
     * @var array
     */
    public $dataList;

    /**
     * @description 下一次分页调用的offset值，当返回结果里没有nextCursor时，表示分页结束
     * @var int
     */
    public $nextCursor;

}
