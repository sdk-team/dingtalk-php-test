<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerylistOapiSmartdeviceDeviceParams;

use AlibabaCloud\Tea\Model;

class pageQueryVo extends Model {
    protected $_name = [
        'pk' => 'pk',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pageQueryVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pk'])){
            $model->pk = $map['pk'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 产品唯一编码
     * @var string
     */
    public $pk;

    /**
     * @description 游标地址,第一页填0
     * @var int
     */
    public $cursor;

    /**
     * @description 分页大小，最大20
     * @var int
     */
    public $size;

}
