<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalParams\rq;

use AlibabaCloud\Tea\Model;

class itineraryList extends Model {
    protected $_name = [
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'arrDate' => 'arr_date',
        'depDate' => 'dep_date',
        'invoiceId' => 'invoice_id',
        'thirdpartCostCenterId' => 'thirdpart_cost_center_id',
        'costCenterId' => 'cost_center_id',
        'arrCityCode' => 'arr_city_code',
        'arrCity' => 'arr_city',
        'depCityCode' => 'dep_city_code',
        'depCity' => 'dep_city',
        'trafficType' => 'traffic_type',
        'itineraryId' => 'itinerary_id',
        'tripWay' => 'trip_way',
    ];
    public function validate() {
        Model::validateRequired('arrDate', $this->arrDate, true);
        Model::validateRequired('depDate', $this->depDate, true);
        Model::validateRequired('invoiceId', $this->invoiceId, true);
        Model::validateRequired('arrCity', $this->arrCity, true);
        Model::validateRequired('depCity', $this->depCity, true);
        Model::validateRequired('trafficType', $this->trafficType, true);
        Model::validateRequired('itineraryId', $this->itineraryId, true);
        Model::validateRequired('tripWay', $this->tripWay, true);
        Model::validatePattern('arrDate', $this->arrDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('depDate', $this->depDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->thirdpartCostCenterId) {
            $res['thirdpart_cost_center_id'] = $this->thirdpartCostCenterId;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->trafficType) {
            $res['traffic_type'] = $this->trafficType;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->tripWay) {
            $res['trip_way'] = $this->tripWay;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return itineraryList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['project_code'])){
            $model->projectCode = $map['project_code'];
        }
        if(isset($map['project_title'])){
            $model->projectTitle = $map['project_title'];
        }
        if(isset($map['arr_date'])){
            $model->arrDate = $map['arr_date'];
        }
        if(isset($map['dep_date'])){
            $model->depDate = $map['dep_date'];
        }
        if(isset($map['invoice_id'])){
            $model->invoiceId = $map['invoice_id'];
        }
        if(isset($map['thirdpart_cost_center_id'])){
            $model->thirdpartCostCenterId = $map['thirdpart_cost_center_id'];
        }
        if(isset($map['cost_center_id'])){
            $model->costCenterId = $map['cost_center_id'];
        }
        if(isset($map['arr_city_code'])){
            $model->arrCityCode = $map['arr_city_code'];
        }
        if(isset($map['arr_city'])){
            $model->arrCity = $map['arr_city'];
        }
        if(isset($map['dep_city_code'])){
            $model->depCityCode = $map['dep_city_code'];
        }
        if(isset($map['dep_city'])){
            $model->depCity = $map['dep_city'];
        }
        if(isset($map['traffic_type'])){
            $model->trafficType = $map['traffic_type'];
        }
        if(isset($map['itinerary_id'])){
            $model->itineraryId = $map['itinerary_id'];
        }
        if(isset($map['trip_way'])){
            $model->tripWay = $map['trip_way'];
        }
        return $model;
    }
    /**
     * @description 项目编码
     * @var string
     */
    public $projectCode;

    /**
     * @description 项目名称
     * @var string
     */
    public $projectTitle;

    /**
     * @description 到达日期
     * @var string
     */
    public $arrDate;

    /**
     * @description 出发日期
     * @var string
     */
    public $depDate;

    /**
     * @description 发票id
     * @var int
     */
    public $invoiceId;

    /**
     * @description 第三方成本中心id，若不填则商旅成本中心id必填
     * @var string
     */
    public $thirdpartCostCenterId;

    /**
     * @description 商旅成本中心id，若不填则第三方成本中心id必填
     * @var int
     */
    public $costCenterId;

    /**
     * @description 到达城市编码
     * @var string
     */
    public $arrCityCode;

    /**
     * @description 到达城市
     * @var string
     */
    public $arrCity;

    /**
     * @description 出发城市编码
     * @var string
     */
    public $depCityCode;

    /**
     * @description 出发城市
     * @var string
     */
    public $depCity;

    /**
     * @description 交通方式：0飞机, 1,火车, 2汽车, 3其他
     * @var int
     */
    public $trafficType;

    /**
     * @description 行程id
     * @var string
     */
    public $itineraryId;

    /**
     * @description 行程类型：0单程，1往返
     * @var int
     */
    public $tripWay;

}
