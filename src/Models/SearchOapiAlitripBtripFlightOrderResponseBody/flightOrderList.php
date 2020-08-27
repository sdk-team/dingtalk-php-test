<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList\invoice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList\costCenter;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList\priceInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList\insureInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList\userAffiliateList;

class flightOrderList extends Model {
    protected $_name = [
        'id' => 'id',
        'gmtModified' => 'gmt_modified',
        'userid' => 'userid',
        'corpName' => 'corp_name',
        'corpid' => 'corpid',
        'gmtCreate' => 'gmt_create',
        'userName' => 'user_name',
        'deptid' => 'deptid',
        'deptName' => 'dept_name',
        'applyId' => 'apply_id',
        'contactName' => 'contact_name',
        'depCity' => 'dep_city',
        'arrCity' => 'arr_city',
        'depDate' => 'dep_date',
        'retDate' => 'ret_date',
        'tripType' => 'trip_type',
        'passengerCount' => 'passenger_count',
        'cabinClass' => 'cabin_class',
        'status' => 'status',
        'discount' => 'discount',
        'flightNo' => 'flight_no',
        'passengerName' => 'passenger_name',
        'depAirport' => 'dep_airport',
        'arrAirport' => 'arr_airport',
        'invoice' => 'invoice',
        'costCenter' => 'cost_center',
        'priceInfoList' => 'price_info_list',
        'insureInfoList' => 'insureInfo_list',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'userAffiliateList' => 'user_affiliate_list',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('depDate', $this->depDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('retDate', $this->retDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
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
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->retDate) {
            $res['ret_date'] = $this->retDate;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }
        if (null !== $this->passengerCount) {
            $res['passenger_count'] = $this->passengerCount;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->depAirport) {
            $res['dep_airport'] = $this->depAirport;
        }
        if (null !== $this->arrAirport) {
            $res['arr_airport'] = $this->arrAirport;
        }
        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toMap() : null;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toMap() : null;
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
        if (null !== $this->insureInfoList) {
            $res['insureInfo_list'] = [];
            if(null !== $this->insureInfoList && is_array($this->insureInfoList)){
                $n = 0;
                foreach($this->insureInfoList as $item){
                    $res['insureInfo_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        return $res;
    }
    /**
     * @param array $map
     * @return flightOrderList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
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
        if(isset($map['dep_city'])){
            $model->depCity = $map['dep_city'];
        }
        if(isset($map['arr_city'])){
            $model->arrCity = $map['arr_city'];
        }
        if(isset($map['dep_date'])){
            $model->depDate = $map['dep_date'];
        }
        if(isset($map['ret_date'])){
            $model->retDate = $map['ret_date'];
        }
        if(isset($map['trip_type'])){
            $model->tripType = $map['trip_type'];
        }
        if(isset($map['passenger_count'])){
            $model->passengerCount = $map['passenger_count'];
        }
        if(isset($map['cabin_class'])){
            $model->cabinClass = $map['cabin_class'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['discount'])){
            $model->discount = $map['discount'];
        }
        if(isset($map['flight_no'])){
            $model->flightNo = $map['flight_no'];
        }
        if(isset($map['passenger_name'])){
            $model->passengerName = $map['passenger_name'];
        }
        if(isset($map['dep_airport'])){
            $model->depAirport = $map['dep_airport'];
        }
        if(isset($map['arr_airport'])){
            $model->arrAirport = $map['arr_airport'];
        }
        if(isset($map['invoice'])){
            $model->invoice = invoice::fromMap($map['invoice']);
        }
        if(isset($map['cost_center'])){
            $model->costCenter = costCenter::fromMap($map['cost_center']);
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
        if(isset($map['insureInfo_list'])){
            if(!empty($map['insureInfo_list'])){
                $model->insureInfoList = [];
                $n = 0;
                foreach($map['insureInfo_list'] as $item) {
                    $model->insureInfoList[$n++] = null !== $item ? insureInfoList::fromMap($item) : $item;
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
        return $model;
    }
    /**
     * @description 机票订单id
     * @var int
     */
    public $id;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

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
     * @var string
     */
    public $applyId;

    /**
     * @description 联系人
     * @var string
     */
    public $contactName;

    /**
     * @description 出发城市
     * @var string
     */
    public $depCity;

    /**
     * @description 到达城市
     * @var string
     */
    public $arrCity;

    /**
     * @description 出发日期
     * @var string
     */
    public $depDate;

    /**
     * @description 到达日期
     * @var string
     */
    public $retDate;

    /**
     * @description 行程类型。0:单程，1:往返，2:中转
     * @var int
     */
    public $tripType;

    /**
     * @description 乘机人数量
     * @var int
     */
    public $passengerCount;

    /**
     * @description 舱位类型
     * @var string
     */
    public $cabinClass;

    /**
     * @description 订单状态：0待支付,1出票中,2已关闭,3有改签单,4有退票单,5出票成功,6退票申请中,7改签申请中
     * @var int
     */
    public $status;

    /**
     * @description 折扣
     * @var string
     */
    public $discount;

    /**
     * @description 航班号
     * @var string
     */
    public $flightNo;

    /**
     * @description 乘机人，多个用‘,’分割
     * @var string
     */
    public $passengerName;

    /**
     * @description 出发机场
     * @var string
     */
    public $depAirport;

    /**
     * @description 到达机场
     * @var string
     */
    public $arrAirport;

    /**
     * @description 发票信息对象
     * @var invoice
     */
    public $invoice;

    /**
     * @description 成本中心对象
     * @var costCenter
     */
    public $costCenter;

    /**
     * @description 价目信息
     * @var array
     */
    public $priceInfoList;

    /**
     * @description 保险信息
     * @var array
     */
    public $insureInfoList;

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

}
