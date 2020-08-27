<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripVehicleOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripVehicleOrderResponseBody\vehicleOrderList\priceInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripVehicleOrderResponseBody\vehicleOrderList\userAffiliateList;

class vehicleOrderList extends Model {
    protected $_name = [
        'id' => 'id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'passengerName' => 'passenger_name',
        'corpid' => 'corpid',
        'corpName' => 'corp_name',
        'userName' => 'user_name',
        'userid' => 'userid',
        'deptName' => 'dept_name',
        'deptid' => 'deptid',
        'applyShowId' => 'apply_show_id',
        'applyId' => 'apply_id',
        'realFromCityName' => 'real_from_city_name',
        'realToCityName' => 'real_to_city_name',
        'fromAddress' => 'from_address',
        'toAddress' => 'to_address',
        'fromCityName' => 'from_city_name',
        'toCityName' => 'to_city_name',
        'memo' => 'memo',
        'orderStatus' => 'order_status',
        'carLevel' => 'car_level',
        'carInfo' => 'car_info',
        'estimatePrice' => 'estimate_price',
        'publishTime' => 'publish_time',
        'takenTime' => 'taken_time',
        'driverConfirmTime' => 'driver_confirm_time',
        'cancelTime' => 'cancel_time',
        'travelDistance' => 'travel_distance',
        'payTime' => 'pay_time',
        'serviceType' => 'service_type',
        'businessCategory' => 'business_category',
        'costCenterId' => 'cost_center_id',
        'costCenterNumber' => 'cost_center_number',
        'costCenterName' => 'cost_center_name',
        'invoiceId' => 'invoice_id',
        'invoiceTitle' => 'invoice_title',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'priceInfoList' => 'price_info_list',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'userAffiliateList' => 'user_affiliate_list',
        'userConfirm' => 'user_confirm',
        'provider' => 'provider',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('publishTime', $this->publishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('takenTime', $this->takenTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('driverConfirmTime', $this->driverConfirmTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('cancelTime', $this->cancelTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('payTime', $this->payTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
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
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->realFromCityName) {
            $res['real_from_city_name'] = $this->realFromCityName;
        }
        if (null !== $this->realToCityName) {
            $res['real_to_city_name'] = $this->realToCityName;
        }
        if (null !== $this->fromAddress) {
            $res['from_address'] = $this->fromAddress;
        }
        if (null !== $this->toAddress) {
            $res['to_address'] = $this->toAddress;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->carLevel) {
            $res['car_level'] = $this->carLevel;
        }
        if (null !== $this->carInfo) {
            $res['car_info'] = $this->carInfo;
        }
        if (null !== $this->estimatePrice) {
            $res['estimate_price'] = $this->estimatePrice;
        }
        if (null !== $this->publishTime) {
            $res['publish_time'] = $this->publishTime;
        }
        if (null !== $this->takenTime) {
            $res['taken_time'] = $this->takenTime;
        }
        if (null !== $this->driverConfirmTime) {
            $res['driver_confirm_time'] = $this->driverConfirmTime;
        }
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }
        if (null !== $this->travelDistance) {
            $res['travel_distance'] = $this->travelDistance;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->serviceType) {
            $res['service_type'] = $this->serviceType;
        }
        if (null !== $this->businessCategory) {
            $res['business_category'] = $this->businessCategory;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
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
        if (null !== $this->userAffiliateList) {
            $res['user_affiliate_list'] = [];
            if(null !== $this->userAffiliateList && is_array($this->userAffiliateList)){
                $n = 0;
                foreach($this->userAffiliateList as $item){
                    $res['user_affiliate_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userConfirm) {
            $res['user_confirm'] = $this->userConfirm;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return vehicleOrderList
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
        if(isset($map['passenger_name'])){
            $model->passengerName = $map['passenger_name'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        if(isset($map['apply_show_id'])){
            $model->applyShowId = $map['apply_show_id'];
        }
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        if(isset($map['real_from_city_name'])){
            $model->realFromCityName = $map['real_from_city_name'];
        }
        if(isset($map['real_to_city_name'])){
            $model->realToCityName = $map['real_to_city_name'];
        }
        if(isset($map['from_address'])){
            $model->fromAddress = $map['from_address'];
        }
        if(isset($map['to_address'])){
            $model->toAddress = $map['to_address'];
        }
        if(isset($map['from_city_name'])){
            $model->fromCityName = $map['from_city_name'];
        }
        if(isset($map['to_city_name'])){
            $model->toCityName = $map['to_city_name'];
        }
        if(isset($map['memo'])){
            $model->memo = $map['memo'];
        }
        if(isset($map['order_status'])){
            $model->orderStatus = $map['order_status'];
        }
        if(isset($map['car_level'])){
            $model->carLevel = $map['car_level'];
        }
        if(isset($map['car_info'])){
            $model->carInfo = $map['car_info'];
        }
        if(isset($map['estimate_price'])){
            $model->estimatePrice = $map['estimate_price'];
        }
        if(isset($map['publish_time'])){
            $model->publishTime = $map['publish_time'];
        }
        if(isset($map['taken_time'])){
            $model->takenTime = $map['taken_time'];
        }
        if(isset($map['driver_confirm_time'])){
            $model->driverConfirmTime = $map['driver_confirm_time'];
        }
        if(isset($map['cancel_time'])){
            $model->cancelTime = $map['cancel_time'];
        }
        if(isset($map['travel_distance'])){
            $model->travelDistance = $map['travel_distance'];
        }
        if(isset($map['pay_time'])){
            $model->payTime = $map['pay_time'];
        }
        if(isset($map['service_type'])){
            $model->serviceType = $map['service_type'];
        }
        if(isset($map['business_category'])){
            $model->businessCategory = $map['business_category'];
        }
        if(isset($map['cost_center_id'])){
            $model->costCenterId = $map['cost_center_id'];
        }
        if(isset($map['cost_center_number'])){
            $model->costCenterNumber = $map['cost_center_number'];
        }
        if(isset($map['cost_center_name'])){
            $model->costCenterName = $map['cost_center_name'];
        }
        if(isset($map['invoice_id'])){
            $model->invoiceId = $map['invoice_id'];
        }
        if(isset($map['invoice_title'])){
            $model->invoiceTitle = $map['invoice_title'];
        }
        if(isset($map['project_code'])){
            $model->projectCode = $map['project_code'];
        }
        if(isset($map['project_title'])){
            $model->projectTitle = $map['project_title'];
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
        if(isset($map['user_affiliate_list'])){
            if(!empty($map['user_affiliate_list'])){
                $model->userAffiliateList = [];
                $n = 0;
                foreach($map['user_affiliate_list'] as $item) {
                    $model->userAffiliateList[$n++] = null !== $item ? userAffiliateList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['user_confirm'])){
            $model->userConfirm = $map['user_confirm'];
        }
        if(isset($map['provider'])){
            $model->provider = $map['provider'];
        }
        return $model;
    }
    /**
     * @description 订单id
     * @var int
     */
    public $id;

    /**
     * @description 订单创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 订单更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 乘客名称
     * @var string
     */
    public $passengerName;

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
     * @description 预定人名称
     * @var string
     */
    public $userName;

    /**
     * @description 预定人id
     * @var string
     */
    public $userid;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 部门id
     * @var string
     */
    public $deptid;

    /**
     * @description 商旅审批单展示id(非审批api对接企业)
     * @var string
     */
    public $applyShowId;

    /**
     * @description 商旅系统审批单id
     * @var int
     */
    public $applyId;

    /**
     * @description 实际出发城市
     * @var string
     */
    public $realFromCityName;

    /**
     * @description 实际到达城市
     * @var string
     */
    public $realToCityName;

    /**
     * @description 出发地
     * @var string
     */
    public $fromAddress;

    /**
     * @description 目的地
     * @var string
     */
    public $toAddress;

    /**
     * @description 出发城市
     * @var string
     */
    public $fromCityName;

    /**
     * @description 目的城市
     * @var string
     */
    public $toCityName;

    /**
     * @description 打车事由
     * @var string
     */
    public $memo;

    /**
     * @description 订单状态:0:初始状态,1:已超时,2:派单成功,3:派单失败,4:已退款,5:已支付,6:已取消
     * @var int
     */
    public $orderStatus;

    /**
     * @description 类型级别：1经济型、2舒适型、3豪华型
     * @var string
     */
    public $carLevel;

    /**
     * @description 车辆类型
     * @var string
     */
    public $carInfo;

    /**
     * @description 订单预估价格
     * @var string
     */
    public $estimatePrice;

    /**
     * @description 乘客发布用车时间
     * @var string
     */
    public $publishTime;

    /**
     * @description 乘客上车时间
     * @var string
     */
    public $takenTime;

    /**
     * @description 司机到达目的地时间
     * @var string
     */
    public $driverConfirmTime;

    /**
     * @description 取消时间
     * @var string
     */
    public $cancelTime;

    /**
     * @description 行驶公里数
     * @var string
     */
    public $travelDistance;

    /**
     * @description 支付时间
     * @var string
     */
    public $payTime;

    /**
     * @description 打车服务类型 1:出租车, 2:专车, 3:快车
     * @var int
     */
    public $serviceType;

    /**
     * @description 用车原因：TRAVEL: 差旅, TRAFFIC: 市内交通, WORK: 加班, OTHER: 其它
     * @var string
     */
    public $businessCategory;

    /**
     * @description 商旅成本中心id
     * @var int
     */
    public $costCenterId;

    /**
     * @description 成本中心编号
     * @var string
     */
    public $costCenterNumber;

    /**
     * @description 成本中心名称
     * @var string
     */
    public $costCenterName;

    /**
     * @description 商旅发票id
     * @var int
     */
    public $invoiceId;

    /**
     * @description 发票抬头
     * @var string
     */
    public $invoiceTitle;

    /**
     * @description 项目编号
     * @var string
     */
    public $projectCode;

    /**
     * @description 项目名称
     * @var string
     */
    public $projectTitle;

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
     * @description 出行人列表
     * @var array
     */
    public $userAffiliateList;

    /**
     * @description 用户确认状态：0未确认；1已确认；2有异议；3系统检查不合理
     * @var int
     */
    public $userConfirm;

    /**
     * @description 服务商：2滴滴；3:曹操；4:首汽；5:阳光。可能会有其他服务商的增加。
     * @var int
     */
    public $provider;

}
