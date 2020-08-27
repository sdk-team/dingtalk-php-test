<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BindqueryOapiRetailUserResponseBody\result;

use AlibabaCloud\Tea\Model;

class outerList extends Model {
    protected $_name = [
        'channel' => 'channel',
        'outerId' => 'outer_id',
        'outerSubId' => 'outer_sub_id',
        'outerNick' => 'outer_nick',
        'outerSubNick' => 'outer_sub_nick',
        'extension' => 'extension',
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
        if (null !== $this->outerSubId) {
            $res['outer_sub_id'] = $this->outerSubId;
        }
        if (null !== $this->outerNick) {
            $res['outer_nick'] = $this->outerNick;
        }
        if (null !== $this->outerSubNick) {
            $res['outer_sub_nick'] = $this->outerSubNick;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return outerList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['outer_sub_id'])){
            $model->outerSubId = $map['outer_sub_id'];
        }
        if(isset($map['outer_nick'])){
            $model->outerNick = $map['outer_nick'];
        }
        if(isset($map['outer_sub_nick'])){
            $model->outerSubNick = $map['outer_sub_nick'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 业务渠道
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
    public $outerSubId;

    /**
     * @description 主帐号名称
     * @var string
     */
    public $outerNick;

    /**
     * @description 子帐号名称
     * @var string
     */
    public $outerSubNick;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

}
