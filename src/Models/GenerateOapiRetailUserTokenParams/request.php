<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GenerateOapiRetailUserTokenParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'subOuterNick' => 'sub_outer_nick',
        'extension' => 'extension',
        'outerNick' => 'outer_nick',
        'outerId' => 'outer_id',
        'subOuterId' => 'sub_outer_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->subOuterNick) {
            $res['sub_outer_nick'] = $this->subOuterNick;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->outerNick) {
            $res['outer_nick'] = $this->outerNick;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->subOuterId) {
            $res['sub_outer_id'] = $this->subOuterId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sub_outer_nick'])){
            $model->subOuterNick = $map['sub_outer_nick'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['outer_nick'])){
            $model->outerNick = $map['outer_nick'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['sub_outer_id'])){
            $model->subOuterId = $map['sub_outer_id'];
        }
        return $model;
    }
    /**
     * @description 子帐号名称
     * @var string
     */
    public $subOuterNick;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

    /**
     * @description 主帐号名称
     * @var string
     */
    public $outerNick;

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

}
