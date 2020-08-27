<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetbysourceidOapiTdpTaskBasicParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'sourceId' => 'source_id',
        'source' => 'source',
    ];
    public function validate() {
        Model::validateRequired('sourceId', $this->sourceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetbysourceidOapiTdpTaskBasicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $agentId;

    /**
     * @description 任务来源sourceId
     * @var string
     */
    public $sourceId;

    /**
     * @description 任务来源source
     * @var string
     */
    public $source;

}
