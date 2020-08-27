<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripAddressParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'userid' => 'userid',
        'type' => 'type',
        'actionType' => 'action_type',
        'itineraryId' => 'itinerary_id',
        'phone' => 'phone',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('actionType', $this->actionType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->actionType) {
            $res['action_type'] = $this->actionType;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['action_type'])){
            $model->actionType = $map['action_type'];
        }
        if(isset($map['itinerary_id'])){
            $model->itineraryId = $map['itinerary_id'];
        }
        if(isset($map['phone'])){
            $model->phone = $map['phone'];
        }
        return $model;
    }
    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 类目类型：1：机票，2：火车票，3：酒店，4：用车
     * @var int
     */
    public $type;

    /**
     * @description 操作类型：1：预订，2：我的订单列表，3：商旅管理后台（其他参数可不要，只需corpid，userid）
     * @var int
     */
    public $actionType;

    /**
     * @description 第三方行程id（存在代表通过审批单预订，不存在代表特殊场景：普通员工是预览，特殊授权人和代订人是免审批预订场景）
     * @var string
     */
    public $itineraryId;

    /**
     * @description 员工第一次使用用车需要手机号，与司机联系
     * @var string
     */
    public $phone;

}
