<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripCategoryAddressParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'itineraryId' => 'itinerary_id',
        'userid' => 'userid',
        'type' => 'type',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('itineraryId', $this->itineraryId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['itinerary_id'])){
            $model->itineraryId = $map['itinerary_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 第三方行程id
     * @var string
     */
    public $itineraryId;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 跳转类型：1机票，2火车票，3酒店
     * @var int
     */
    public $type;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
