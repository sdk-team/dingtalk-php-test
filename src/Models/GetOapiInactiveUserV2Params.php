<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiInactiveUserV2Params extends Model {
    protected $_name = [
        'isActive' => 'is_active',
        'deptIds' => 'dept_ids',
        'offset' => 'offset',
        'size' => 'size',
        'queryDate' => 'query_date',
    ];
    public function validate() {
        Model::validateRequired('isActive', $this->isActive, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('queryDate', $this->queryDate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->isActive) {
            $res['is_active'] = $this->isActive;
        }
        if (null !== $this->deptIds) {
            $res['dept_ids'] = $this->deptIds;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->queryDate) {
            $res['query_date'] = $this->queryDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiInactiveUserV2Params
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_active'])){
            $model->isActive = $map['is_active'];
        }
        if(isset($map['dept_ids'])){
            if(!empty($map['dept_ids'])){
                $model->deptIds = $map['dept_ids'];
            }
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['query_date'])){
            $model->queryDate = $map['query_date'];
        }
        return $model;
    }
    /**
     * @description 是否活跃 false不活跃 true 活跃
     * @var bool
     */
    public $isActive;

    /**
     * @description 过滤部门id列表，不传表示查询整个企业
     * @var array
     */
    public $deptIds;

    /**
     * @description 获取数据偏移量，第一页使用0，后面页使用接口返回的nextCursor
     * @var int
     */
    public $offset;

    /**
     * @description 获取数据size,最大100
     * @var int
     */
    public $size;

    /**
     * @description 查询日期, 日期格式yyyyMMdd
     * @var string
     */
    public $queryDate;

}
