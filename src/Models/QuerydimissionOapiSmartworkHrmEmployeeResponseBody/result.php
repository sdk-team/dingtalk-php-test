<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerydimissionOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nextCursor' => 'next_cursor',
        'dataList' => 'data_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->dataList) {
            $res['data_list'] = $this->dataList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['data_list'])){
            if(!empty($map['data_list'])){
                $model->dataList = $map['data_list'];
            }
        }
        return $model;
    }
    /**
     * @description 下一次分页调用的offset值，当返回结果里没有nextCursor时，表示分页结束
     * @var int
     */
    public $nextCursor;

    /**
     * @description 数据结果列表
     * @var array
     */
    public $dataList;

}
