<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerOrgdetailResponseBody\result\bindSellers;

use AlibabaCloud\Tea\Model;

class shopEmpList extends Model {
    protected $_name = [
        'userid' => 'userid',
        'name' => 'name',
        'sellerNick' => 'seller_nick',
        'empType' => 'emp_type',
        'outerId' => 'outer_id',
        'outerSubId' => 'outer_sub_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sellerNick) {
            $res['seller_nick'] = $this->sellerNick;
        }
        if (null !== $this->empType) {
            $res['emp_type'] = $this->empType;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->outerSubId) {
            $res['outer_sub_id'] = $this->outerSubId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return shopEmpList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['seller_nick'])){
            $model->sellerNick = $map['seller_nick'];
        }
        if(isset($map['emp_type'])){
            $model->empType = $map['emp_type'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['outer_sub_id'])){
            $model->outerSubId = $map['outer_sub_id'];
        }
        return $model;
    }
    /**
     * @description staffId
     * @var string
     */
    public $userid;

    /**
     * @description 员工姓名
     * @var string
     */
    public $name;

    /**
     * @description 绑定淘宝账号nick
     * @var string
     */
    public $sellerNick;

    /**
     * @description 主子账号
     * @var string
     */
    public $empType;

    /**
     * @description 卖家ID
     * @var string
     */
    public $outerId;

    /**
     * @description 卖家子账号ID
     * @var string
     */
    public $outerSubId;

}
