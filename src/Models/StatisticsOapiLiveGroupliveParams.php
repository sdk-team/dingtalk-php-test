<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class StatisticsOapiLiveGroupliveParams extends Model {
    protected $_name = [
        'liveUuid' => 'live_uuid',
        'cid' => 'cid',
        'openId' => 'open_id',
    ];
    public function validate() {
        Model::validateRequired('liveUuid', $this->liveUuid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->liveUuid) {
            $res['live_uuid'] = $this->liveUuid;
        }
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return StatisticsOapiLiveGroupliveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['live_uuid'])){
            $model->liveUuid = $map['live_uuid'];
        }
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['open_id'])){
            $model->openId = $map['open_id'];
        }
        return $model;
    }
    /**
     * @description 直播uuid
     * @var string
     */
    public $liveUuid;

    /**
     * @description 群id
     * @var int
     */
    public $cid;

    /**
     * @description 用户id
     * @var int
     */
    public $openId;

}
