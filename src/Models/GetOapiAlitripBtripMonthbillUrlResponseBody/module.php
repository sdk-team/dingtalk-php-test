<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripMonthbillUrlResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'url' => 'url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 账期开始时间
     * @var string
     */
    public $startDate;

    /**
     * @description 账期结束时间
     * @var string
     */
    public $endDate;

    /**
     * @description json数据下载链接，通过HttpClient 获取 并GBK格式解析，链接五分钟有效期
     * @var string
     */
    public $url;

}
