<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMedalCorpmedalResponseBody\result;

use AlibabaCloud\Tea\Model;

class corpMedalList extends Model {
    protected $_name = [
        'grantTime' => 'grant_time',
        'wear' => 'wear',
        'templateId' => 'template_id',
    ];
    public function validate() {
        Model::validatePattern('grantTime', $this->grantTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->grantTime) {
            $res['grant_time'] = $this->grantTime;
        }
        if (null !== $this->wear) {
            $res['wear'] = $this->wear;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return corpMedalList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['grant_time'])){
            $model->grantTime = $map['grant_time'];
        }
        if(isset($map['wear'])){
            $model->wear = $map['wear'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        return $model;
    }
    /**
     * @description 勋章授予时间
     * @var string
     */
    public $grantTime;

    /**
     * @description 是否佩戴勋章
     * @var bool
     */
    public $wear;

    /**
     * @description 勋章模板ID
     * @var int
     */
    public $templateId;

}
