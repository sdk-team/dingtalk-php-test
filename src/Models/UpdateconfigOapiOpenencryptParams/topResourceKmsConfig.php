<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateconfigOapiOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topResourceKmsConfig extends Model {
    protected $_name = [
        'extension' => 'extension',
        'resource' => 'resource',
        'requestid' => 'requestid',
        'agentid' => 'agentid',
        'rotatePeriodDay' => 'rotate_period_day',
    ];
    public function validate() {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('agentid', $this->agentid, true);
        Model::validateRequired('rotatePeriodDay', $this->rotatePeriodDay, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->requestid) {
            $res['requestid'] = $this->requestid;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->rotatePeriodDay) {
            $res['rotate_period_day'] = $this->rotatePeriodDay;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topResourceKmsConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['resource'])){
            $model->resource = $map['resource'];
        }
        if(isset($map['requestid'])){
            $model->requestid = $map['requestid'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['rotate_period_day'])){
            $model->rotatePeriodDay = $map['rotate_period_day'];
        }
        return $model;
    }
    /**
     * @description 扩展字段,json格式
     * @var string
     */
    public $extension;

    /**
     * @description 资源路径
     * @var string
     */
    public $resource;

    /**
     * @description 请求id
     * @var string
     */
    public $requestid;

    /**
     * @description 企业内部应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 轮转周期
     * @var int
     */
    public $rotatePeriodDay;

}
