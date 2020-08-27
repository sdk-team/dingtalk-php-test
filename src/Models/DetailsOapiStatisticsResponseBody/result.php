<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DetailsOapiStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'type' => 'type',
        'returnFields' => 'return_fields',
        'date' => 'date',
        'url' => 'url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->returnFields) {
            $res['return_fields'] = $this->returnFields;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['return_fields'])){
            $model->returnFields = $map['return_fields'];
        }
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 业务类型
     * @var string
     */
    public $type;

    /**
     * @description 返回的数据列
     * @var string
     */
    public $returnFields;

    /**
     * @description 数据的日期,格式为yyyy-MM-dd
     * @var string
     */
    public $date;

    /**
     * @description 数据的下载地址
     * @var string
     */
    public $url;

}
