<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduUserResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduUserResponseBody\result\details;

class result extends Model {
    protected $_name = [
        'details' => 'details',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->details) {
            $res['details'] = [];
            if(null !== $this->details && is_array($this->details)){
                $n = 0;
                foreach($this->details as $item){
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['details'])){
            if(!empty($map['details'])){
                $model->details = [];
                $n = 0;
                foreach($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 人员身份详情列表
     * @var array
     */
    public $details;

}
