<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody\trainOrderList\invoice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody\trainOrderList\costCenter;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody\trainOrderList\priceInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody\trainOrderList\userAffiliateList;

class trainOrderList extends Model {
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
        'depStation' => 'dep_station',
        'arrStation' => 'arr_station',
        'depTime' => 'dep_time',
        'arrTime' => 'arr_time',
        'trainNumber' => 'train_number',
        'trainType' => 'train_type',
        'seatType' => 'seat_type',
        'runTime' => 'run_time',
        'ticketNo12306' => 'ticket_no_12306',
        'depCity' => 'dep_city',
        'arrCity' => 'arr_city',
        'riderName' => 'rider_name',
        'ticketCount' => 'ticket_count',
        'status' => 'status',
        'invoice' => 'invoice',
        'costCenter' => 'cost_center',
        'priceInfoList' => 'price_info_list',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'userAffiliateList' => 'user_affiliate_list',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('depTime', $this->depTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('arrTime', $this->arrTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
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
        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->trainNumber) {
            $res['train_number'] = $this->trainNumber;
        }
        if (null !== $this->trainType) {
            $res['train_type'] = $this->trainType;
        }
        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }
        if (null !== $this->runTime) {
            $res['run_time'] = $this->runTime;
        }
        if (null !== $this->ticketNo12306) {
            $res['ticket_no_12306'] = $this->ticketNo12306;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->riderName) {
            $res['rider_name'] = $this->riderName;
        }
        if (null !== $this->ticketCount) {
            $res['ticket_count'] = $this->ticketCount;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
     * @return trainOrderList
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
        if(isset($map['dep_station'])){
            $model->depStation = $map['dep_station'];
        }
        if(isset($map['arr_station'])){
            $model->arrStation = $map['arr_station'];
        }
        if(isset($map['dep_time'])){
            $model->depTime = $map['dep_time'];
        }
        if(isset($map['arr_time'])){
            $model->arrTime = $map['arr_time'];
        }
        if(isset($map['train_number'])){
            $model->trainNumber = $map['train_number'];
        }
        if(isset($map['train_type'])){
            $model->trainType = $map['train_type'];
        }
        if(isset($map['seat_type'])){
            $model->seatType = $map['seat_type'];
        }
        if(isset($map['run_time'])){
            $model->runTime = $map['run_time'];
        }
        if(isset($map['ticket_no_12306'])){
            $model->ticketNo12306 = $map['ticket_no_12306'];
        }
        if(isset($map['dep_city'])){
            $model->depCity = $map['dep_city'];
        }
        if(isset($map['arr_city'])){
            $model->arrCity = $map['arr_city'];
        }
        if(isset($map['rider_name'])){
            $model->riderName = $map['rider_name'];
        }
        if(isset($map['ticket_count'])){
            $model->ticketCount = $map['ticket_count'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
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
     * @description 商旅审批单id
     * @var int
     */
    public $applyId;

    /**
     * @description 联系人名称
     * @var string
     */
    public $contactName;

    /**
     * @description 出发站
     * @var string
     */
    public $depStation;

    /**
     * @description 到达站
     * @var string
     */
    public $arrStation;

    /**
     * @description 出发时间
     * @var string
     */
    public $depTime;

    /**
     * @description 到达时间
     * @var string
     */
    public $arrTime;

    /**
     * @description 车次
     * @var string
     */
    public $trainNumber;

    /**
     * @description 车次类型
     * @var string
     */
    public $trainType;

    /**
     * @description 座位类型
     * @var string
     */
    public $seatType;

    /**
     * @description 运行时长
     * @var string
     */
    public $runTime;

    /**
     * @description 12306票号
     * @var string
     */
    public $ticketNo12306;

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
     * @description 乘客姓名
     * @var string
     */
    public $riderName;

    /**
     * @description 票的数量
     * @var int
     */
    public $ticketCount;

    /**
     * @description 订单状态：0待支付,1出票中,2已关闭,3,改签成功,4退票成功,5出票完成,6退票申请中,7改签申请中,8已出票,已发货,9出票失败,10改签失败,11退票失败
     * @var int
     */
    public $status;

    /**
     * @description 发票对象
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
     * @description 第三方行程id
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @description 乘车人列表
     * @var array
     */
    public $userAffiliateList;

}
