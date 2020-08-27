<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiLiveGroupliveDetailParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'liveUuid' => 'live_uuid',
        'deptId' => 'dept_id',
    ];
    public function validate() {
        Model::validateRequired('liveUuid', $this->liveUuid, true);
        Model::validateRequired('deptId', $this->deptId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->liveUuid) {
            $res['live_uuid'] = $this->liveUuid;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['live_uuid'])){
            $model->liveUuid = $map['live_uuid'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 群直播id
     * @var string
     */
    public $liveUuid;

    /**
     * @description 直播所属群对应部门id
     * @var int
     */
    public $deptId;

}
