<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BindqueryOapiRetailUserParams extends Model {
    protected $_name = [
        'channel' => 'channel',
        'associateUnionId' => 'associate_union_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->associateUnionId) {
            $res['associate_union_id'] = $this->associateUnionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BindqueryOapiRetailUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['associate_union_id'])){
            $model->associateUnionId = $map['associate_union_id'];
        }
        return $model;
    }
    /**
     * @description 业务身份
     * @var string
     */
    public $channel;

    /**
     * @description 虚拟组织下的唯一ID
     * @var string
     */
    public $associateUnionId;

}
