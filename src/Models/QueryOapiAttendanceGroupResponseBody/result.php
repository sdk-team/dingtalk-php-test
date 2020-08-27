<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'id' => 'id',
        'wifis' => 'wifis',
        'addressList' => 'address_list',
        'workDayList' => 'work_day_list',
        'memberCount' => 'member_count',
        'type' => 'type',
        'url' => 'url',
        'managerList' => 'manager_list',
        'ownerUserId' => 'owner_user_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->wifis) {
            $res['wifis'] = $this->wifis;
        }
        if (null !== $this->addressList) {
            $res['address_list'] = $this->addressList;
        }
        if (null !== $this->workDayList) {
            $res['work_day_list'] = $this->workDayList;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->managerList) {
            $res['manager_list'] = $this->managerList;
        }
        if (null !== $this->ownerUserId) {
            $res['owner_user_id'] = $this->ownerUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['wifis'])){
            if(!empty($map['wifis'])){
                $model->wifis = $map['wifis'];
            }
        }
        if(isset($map['address_list'])){
            if(!empty($map['address_list'])){
                $model->addressList = $map['address_list'];
            }
        }
        if(isset($map['work_day_list'])){
            if(!empty($map['work_day_list'])){
                $model->workDayList = $map['work_day_list'];
            }
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['manager_list'])){
            $model->managerList = $map['manager_list'];
        }
        if(isset($map['owner_user_id'])){
            $model->ownerUserId = $map['owner_user_id'];
        }
        return $model;
    }
    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description wifi名称
     * @var array
     */
    public $wifis;

    /**
     * @description 考勤地址
     * @var array
     */
    public $addressList;

    /**
     * @description 工作日
     * @var array
     */
    public $workDayList;

    /**
     * @description 人员人数
     * @var int
     */
    public $memberCount;

    /**
     * @description 固定值，轮班制
     * @var string
     */
    public $type;

    /**
     * @description 跳转链接
     * @var string
     */
    public $url;

    /**
     * @description 考勤组管理员
     * @var string
     */
    public $managerList;

    /**
     * @description 考勤组主负责人 id
     * @var string
     */
    public $ownerUserId;

}
