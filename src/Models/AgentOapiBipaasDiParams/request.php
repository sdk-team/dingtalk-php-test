<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AgentOapiBipaasDiParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'path' => 'path',
        'params' => 'params',
    ];
    public function validate() {
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('params', $this->params, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['path'])){
            $model->path = $map['path'];
        }
        if(isset($map['params'])){
            $model->params = $map['params'];
        }
        return $model;
    }
    /**
     * @description 路径
     * @var string
     */
    public $path;

    /**
     * @description 参数
     * @var string
     */
    public $params;

}
