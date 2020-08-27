<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduSubjectParams extends Model {
    protected $_name = [
        'cursor' => 'cursor',
        'dataOrderType' => 'data_order_type',
        'codes' => 'codes',
        'size' => 'size',
        'sortType' => 'sort_type',
        'operatorUserid' => 'operator_userid',
    ];
    public function validate() {
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->dataOrderType) {
            $res['data_order_type'] = $this->dataOrderType;
        }
        if (null !== $this->codes) {
            $res['codes'] = $this->codes;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->sortType) {
            $res['sort_type'] = $this->sortType;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduSubjectParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['data_order_type'])){
            $model->dataOrderType = $map['data_order_type'];
        }
        if(isset($map['codes'])){
            if(!empty($map['codes'])){
                $model->codes = $map['codes'];
            }
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['sort_type'])){
            $model->sortType = $map['sort_type'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        return $model;
    }
    /**
     * @description 游标
     * @var int
     */
    public $cursor;

    /**
     * @description 排序方式（0:创建时间）
     * @var int
     */
    public $dataOrderType;

    /**
     * @description 学科编码列表
     * @var array
     */
    public $codes;

    /**
     * @description 每页数据条数
     * @var int
     */
    public $size;

    /**
     * @description 排序规则（0:升序，1:降序）
     * @var int
     */
    public $sortType;

    /**
     * @description 用户id
     * @var string
     */
    public $operatorUserid;

}
