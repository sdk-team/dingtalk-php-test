<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module\costCenter;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module\invoice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module\userAffiliateList;

class module extends Model {
    protected $_name = [
        'id' => 'id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'corpid' => 'corpid',
        'corpName' => 'corp_name',
        'userid' => 'userid',
        'userName' => 'user_name',
        'deptid' => 'deptid',
        'deptName' => 'dept_name',
        'applyId' => 'apply_id',
        'contactName' => 'contact_name',
        'city' => 'city',
        'hotelName' => 'hotel_name',
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'roomType' => 'room_type',
        'roomNum' => 'room_num',
        'night' => 'night',
        'guest' => 'guest',
        'orderTypeDesc' => 'order_type_desc',
        'orderStatusDesc' => 'order_status_desc',
        'costCenter' => 'cost_center',
        'invoice' => 'invoice',
        'priceInfoList' => 'price_info_list',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'orderStatus' => 'order_status',
        'orderType' => 'order_type',
        'userAffiliateList' => 'user_affiliate_list',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkIn', $this->checkIn, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkOut', $this->checkOut, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->roomType) {
            $res['room_type'] = $this->roomType;
        }
        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }
        if (null !== $this->night) {
            $res['night'] = $this->night;
        }
        if (null !== $this->guest) {
            $res['guest'] = $this->guest;
        }
        if (null !== $this->orderTypeDesc) {
            $res['order_type_desc'] = $this->orderTypeDesc;
        }
        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toMap() : null;
        }
        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toMap() : null;
        }
        if (null !== $this->priceInfoList) {
            $res['price_info_list'] = [];
            if(null !== $this->priceInfoList && is_array($this->priceInfoList)){
                $n = 0;
                foreach($this->priceInfoList as $item){
                    $res['price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->userAffiliateList) {
            $res['user_affiliate_list'] = [];
            if(null !== $this->userAffiliateList && is_array($this->userAffiliateList)){
                $n = 0;
                foreach($this->userAffiliateList as $item){
                    $res['user_affiliate_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        if(isset($map['contact_name'])){
            $model->contactName = $map['contact_name'];
        }
        if(isset($map['city'])){
            $model->city = $map['city'];
        }
        if(isset($map['hotel_name'])){
            $model->hotelName = $map['hotel_name'];
        }
        if(isset($map['check_in'])){
            $model->checkIn = $map['check_in'];
        }
        if(isset($map['check_out'])){
            $model->checkOut = $map['check_out'];
        }
        if(isset($map['room_type'])){
            $model->roomType = $map['room_type'];
        }
        if(isset($map['room_num'])){
            $model->roomNum = $map['room_num'];
        }
        if(isset($map['night'])){
            $model->night = $map['night'];
        }
        if(isset($map['guest'])){
            $model->guest = $map['guest'];
        }
        if(isset($map['order_type_desc'])){
            $model->orderTypeDesc = $map['order_type_desc'];
        }
        if(isset($map['order_status_desc'])){
            $model->orderStatusDesc = $map['order_status_desc'];
        }
        if(isset($map['cost_center'])){
            $model->costCenter = costCenter::fromMap($map['cost_center']);
        }
        if(isset($map['invoice'])){
            $model->invoice = invoice::fromMap($map['invoice']);
        }
        if(isset($map['price_info_list'])){
            if(!empty($map['price_info_list'])){
                $model->priceInfoList = [];
                $n = 0;
                foreach($map['price_info_list'] as $item) {
                    $model->priceInfoList[$n++] = null !== $item ? priceInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['thirdpart_itinerary_id'])){
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if(isset($map['order_status'])){
            $model->orderStatus = $map['order_status'];
        }
        if(isset($map['order_type'])){
            $model->orderType = $map['order_type'];
        }
        if(isset($map['user_affiliate_list'])){
            if(!empty($map['user_affiliate_list'])){
                $model->userAffiliateList = [];
                $n = 0;
                foreach($map['user_affiliate_list'] as $item) {
                    $model->userAffiliateList[$n++] = null !== $item ? userAffiliateList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 订单id
     * @var int
     */
    public $id;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 用户名称
     * @var string
     */
    public $userName;

    /**
     * @description 部门id
     * @var string
     */
    public $deptid;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 商旅申请单id
     * @var int
     */
    public $applyId;

    /**
     * @description 联系人姓名
     * @var string
     */
    public $contactName;

    /**
     * @description 酒店所在城市
     * @var string
     */
    public $city;

    /**
     * @description 酒店名称
     * @var string
     */
    public $hotelName;

    /**
     * @description 入住时间
     * @var string
     */
    public $checkIn;

    /**
     * @description 离店时间
     * @var string
     */
    public $checkOut;

    /**
     * @description 房型
     * @var string
     */
    public $roomType;

    /**
     * @description 房间数
     * @var int
     */
    public $roomNum;

    /**
     * @description 总共住几晚
     * @var int
     */
    public $night;

    /**
     * @description 入住顾客，多个用','分割
     * @var string
     */
    public $guest;

    /**
     * @description 订单类型描述
     * @var string
     */
    public $orderTypeDesc;

    /**
     * @description 订单状态描述
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @description 成本中心对象
     * @var costCenter
     */
    public $costCenter;

    /**
     * @description 发票对象
     * @var invoice
     */
    public $invoice;

    /**
     * @description 价目详情列表
     * @var array
     */
    public $priceInfoList;

    /**
     * @description 第三方行程id
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @description 订单状态
     * @var int
     */
    public $orderStatus;

    /**
     * @description 订单类型
     * @var int
     */
    public $orderType;

    /**
     * @description 入住人列表
     * @var array
     */
    public $userAffiliateList;

}
