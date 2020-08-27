<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripApplyResponseBody\module;

use AlibabaCloud\Tea\Model;

class itineraryList extends Model {
    protected $_name = [
        'tripWay' => 'trip_way',
        'itineraryId' => 'itinerary_id',
        'trafficType' => 'traffic_type',
        'depCity' => 'dep_city',
        'arrCity' => 'arr_city',
        'depDate' => 'dep_date',
        'costCenterName' => 'cost_center_name',
        'arrDate' => 'arr_date',
        'invoiceName' => 'invoice_name',
        'projectTitle' => 'project_title',
        'projectCode' => 'project_code',
    ];
    public function validate() {
        Model::validatePattern('depDate', $this->depDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('arrDate', $this->arrDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tripWay) {
            $res['trip_way'] = $this->tripWay;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->trafficType) {
            $res['traffic_type'] = $this->trafficType;
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
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->invoiceName) {
            $res['invoice_name'] = $this->invoiceName;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return itineraryList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['trip_way'])){
            $model->tripWay = $map['trip_way'];
        }
        if(isset($map['itinerary_id'])){
            $model->itineraryId = $map['itinerary_id'];
        }
        if(isset($map['traffic_type'])){
            $model->trafficType = $map['traffic_type'];
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
        if(isset($map['cost_center_name'])){
            $model->costCenterName = $map['cost_center_name'];
        }
        if(isset($map['arr_date'])){
            $model->arrDate = $map['arr_date'];
        }
        if(isset($map['invoice_name'])){
            $model->invoiceName = $map['invoice_name'];
        }
        if(isset($map['project_title'])){
            $model->projectTitle = $map['project_title'];
        }
        if(isset($map['project_code'])){
            $model->projectCode = $map['project_code'];
        }
        return $model;
    }
    /**
     * @description 行程方式：0单程 1往返
     * @var int
     */
    public $tripWay;

    /**
     * @description 行程id
     * @var string
     */
    public $itineraryId;

    /**
     * @description 交通方式：0飞机 1火车 2汽车 3其他
     * @var int
     */
    public $trafficType;

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
     * @description 出发时间
     * @var string
     */
    public $depDate;

    /**
     * @description 成本中心
     * @var string
     */
    public $costCenterName;

    /**
     * @description 到达时间
     * @var string
     */
    public $arrDate;

    /**
     * @description 发票抬头
     * @var string
     */
    public $invoiceName;

    /**
     * @description 项目名称
     * @var string
     */
    public $projectTitle;

    /**
     * @description 项目编号
     * @var string
     */
    public $projectCode;

}
