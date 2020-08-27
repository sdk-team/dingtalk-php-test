<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InvalidbyentopOapiRhinoMosExecPerformParams;

class InvalidbyentopOapiRhinoMosExecPerformRequest extends Model {
    public function validate() {
        Model::validateRequired('params', $this->params, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InvalidbyentopOapiRhinoMosExecPerformRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['params'])){
            $model->params = InvalidbyentopOapiRhinoMosExecPerformParams::fromMap($map['params']);
        }
        return $model;
    }
    public $headers;

    /**
     * @var InvalidbyentopOapiRhinoMosExecPerformParams
     */
    public $params;

}
