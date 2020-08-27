<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SaveOapiProcessTemplateParams extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'vm' => 'vm',
        'font' => 'font',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('vm', $this->vm, true);
        Model::validateRequired('font', $this->font, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->vm) {
            $res['vm'] = $this->vm;
        }
        if (null !== $this->font) {
            $res['font'] = $this->font;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SaveOapiProcessTemplateParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['vm'])){
            $model->vm = $map['vm'];
        }
        if(isset($map['font'])){
            $model->font = $map['font'];
        }
        return $model;
    }
    /**
     * @description 流程编码
     * @var string
     */
    public $processCode;

    /**
     * @description vm文件
     * @var string
     */
    public $vm;

    /**
     * @description 字体
     * @var string
     */
    public $font;

}
