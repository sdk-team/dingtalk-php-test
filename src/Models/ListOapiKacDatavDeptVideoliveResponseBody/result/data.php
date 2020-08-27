<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavDeptVideoliveResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'liveLaunchCount' => 'live_launch_count',
        'liveTimeLength' => 'live_time_length',
        'livePlayUserCount' => 'live_play_user_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->liveLaunchCount) {
            $res['live_launch_count'] = $this->liveLaunchCount;
        }
        if (null !== $this->liveTimeLength) {
            $res['live_time_length'] = $this->liveTimeLength;
        }
        if (null !== $this->livePlayUserCount) {
            $res['live_play_user_count'] = $this->livePlayUserCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['live_launch_count'])){
            $model->liveLaunchCount = $map['live_launch_count'];
        }
        if(isset($map['live_time_length'])){
            $model->liveTimeLength = $map['live_time_length'];
        }
        if(isset($map['live_play_user_count'])){
            $model->livePlayUserCount = $map['live_play_user_count'];
        }
        return $model;
    }
    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 直播发起次数（成功）
     * @var int
     */
    public $liveLaunchCount;

    /**
     * @description 直播时长（分钟）
     * @var string
     */
    public $liveTimeLength;

    /**
     * @description 观看直播人数
     * @var int
     */
    public $livePlayUserCount;

}
