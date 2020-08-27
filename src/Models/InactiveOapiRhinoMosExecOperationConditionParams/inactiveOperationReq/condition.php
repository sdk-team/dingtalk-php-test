<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InactiveOapiRhinoMosExecOperationConditionParams\inactiveOperationReq;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InactiveOapiRhinoMosExecOperationConditionParams\inactiveOperationReq\condition\source;

class condition extends Model {
    protected $_name = [
        'ids' => 'ids',
        'source' => 'source',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return condition
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ids'])){
            if(!empty($map['ids'])){
                $model->ids = $map['ids'];
            }
        }
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
        }
        return $model;
    }
    /**
     * @description 记录id
     * @var array
     */
    public $ids;

    /**
     * @description 来源
     * @var source
     */
    public $source;

}
