<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UnbindOapiRetailUserParams extends Model {
    protected $_name = [
        'channel' => 'channel',
        'outerId' => 'outer_id',
        'subOuterId' => 'sub_outer_id',
        'associateUnionId' => 'associate_union_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->subOuterId) {
            $res['sub_outer_id'] = $this->subOuterId;
        }
        if (null !== $this->associateUnionId) {
            $res['associate_union_id'] = $this->associateUnionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindOapiRetailUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['sub_outer_id'])){
            $model->subOuterId = $map['sub_outer_id'];
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
     * @description 主帐号ID
     * @var string
     */
    public $outerId;

    /**
     * @description 子帐号ID
     * @var string
     */
    public $subOuterId;

    /**
     * @description 中心组织下唯一Id
     * @var string
     */
    public $associateUnionId;

}
