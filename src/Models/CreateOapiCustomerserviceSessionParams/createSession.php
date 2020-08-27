<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams\createSession\source;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams\createSession\target;

class createSession extends Model {
    protected $_name = [
        'source' => 'source',
        'target' => 'target',
    ];
    public function validate() {
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('target', $this->target, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return createSession
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
        }
        if(isset($map['target'])){
            $model->target = target::fromMap($map['target']);
        }
        return $model;
    }
    /**
     * @description 会员来源
     * @var source
     */
    public $source;

    /**
     * @description 会话目标
     * @var target
     */
    public $target;

}
