<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAlitripBtripCostCenterResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAlitripBtripCostCenterResponseBody\costCenterList\entityList;

class costCenterList extends Model {
    protected $_name = [
        'id' => 'id',
        'corpid' => 'corpid',
        'title' => 'title',
        'number' => 'number',
        'thirdpartId' => 'thirdpart_id',
        'scope' => 'scope',
        'alipayNo' => 'alipay_no',
        'entityList' => 'entity_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->alipayNo) {
            $res['alipay_no'] = $this->alipayNo;
        }
        if (null !== $this->entityList) {
            $res['entity_list'] = [];
            if(null !== $this->entityList && is_array($this->entityList)){
                $n = 0;
                foreach($this->entityList as $item){
                    $res['entity_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return costCenterList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['scope'])){
            $model->scope = $map['scope'];
        }
        if(isset($map['alipay_no'])){
            $model->alipayNo = $map['alipay_no'];
        }
        if(isset($map['entity_list'])){
            if(!empty($map['entity_list'])){
                $model->entityList = [];
                $n = 0;
                foreach($map['entity_list'] as $item) {
                    $model->entityList[$n++] = null !== $item ? entityList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 商旅成本中心id
     * @var int
     */
    public $id;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 成本中心名称
     * @var string
     */
    public $title;

    /**
     * @description 成本中心编号
     * @var string
     */
    public $number;

    /**
     * @description 第三方成本中心id
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 适用范围: 1全员，2部分员工
     * @var int
     */
    public $scope;

    /**
     * @description 绑定支付宝账号
     * @var string
     */
    public $alipayNo;

    /**
     * @description 绑定人员信息
     * @var array
     */
    public $entityList;

}
