<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserlistIsvCallResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'staffIdList' => 'staff_id_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->staffIdList) {
            $res['staff_id_list'] = $this->staffIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['staff_id_list'])){
            if(!empty($map['staff_id_list'])){
                $model->staffIdList = $map['staff_id_list'];
            }
        }
        return $model;
    }
    /**
     * @description hasMore
     * @var bool
     */
    public $hasMore;

    /**
     * @description staffIdList
     * @var array
     */
    public $staffIdList;

}
