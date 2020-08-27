<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerOrgdetailResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerOrgdetailResponseBody\result\bindSellers\shopEmpList;

class bindSellers extends Model {
    protected $_name = [
        'sellerId' => 'seller_id',
        'sellerNick' => 'seller_nick',
        'shopEmpList' => 'shop_emp_list',
        'type' => 'type',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }
        if (null !== $this->sellerNick) {
            $res['seller_nick'] = $this->sellerNick;
        }
        if (null !== $this->shopEmpList) {
            $res['shop_emp_list'] = [];
            if(null !== $this->shopEmpList && is_array($this->shopEmpList)){
                $n = 0;
                foreach($this->shopEmpList as $item){
                    $res['shop_emp_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return bindSellers
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['seller_id'])){
            $model->sellerId = $map['seller_id'];
        }
        if(isset($map['seller_nick'])){
            $model->sellerNick = $map['seller_nick'];
        }
        if(isset($map['shop_emp_list'])){
            if(!empty($map['shop_emp_list'])){
                $model->shopEmpList = [];
                $n = 0;
                foreach($map['shop_emp_list'] as $item) {
                    $model->shopEmpList[$n++] = null !== $item ? shopEmpList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 卖家ID
     * @var int
     */
    public $sellerId;

    /**
     * @description 卖家昵称
     * @var string
     */
    public $sellerNick;

    /**
     * @description 卖家绑定的员工list
     * @var array
     */
    public $shopEmpList;

    /**
     * @description 天猫店 淘宝店
     * @var string
     */
    public $type;

    /**
     * @description staffId
     * @var string
     */
    public $userid;

}
