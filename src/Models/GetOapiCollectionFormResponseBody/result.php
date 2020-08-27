<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionFormResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionFormResponseBody\result\visibleList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionFormResponseBody\result\setting;

class result extends Model {
    protected $_name = [
        'content' => 'content',
        'shouldParticipationCnt' => 'should_participation_cnt',
        'visibleList' => 'visible_list',
        'setting' => 'setting',
        'name' => 'name',
        'memo' => 'memo',
        'creator' => 'creator',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->shouldParticipationCnt) {
            $res['should_participation_cnt'] = $this->shouldParticipationCnt;
        }
        if (null !== $this->visibleList) {
            $res['visible_list'] = [];
            if(null !== $this->visibleList && is_array($this->visibleList)){
                $n = 0;
                foreach($this->visibleList as $item){
                    $res['visible_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->setting) {
            $res['setting'] = null !== $this->setting ? $this->setting->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['should_participation_cnt'])){
            $model->shouldParticipationCnt = $map['should_participation_cnt'];
        }
        if(isset($map['visible_list'])){
            if(!empty($map['visible_list'])){
                $model->visibleList = [];
                $n = 0;
                foreach($map['visible_list'] as $item) {
                    $model->visibleList[$n++] = null !== $item ? visibleList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['setting'])){
            $model->setting = setting::fromMap($map['setting']);
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['memo'])){
            $model->memo = $map['memo'];
        }
        if(isset($map['creator'])){
            $model->creator = $map['creator'];
        }
        return $model;
    }
    /**
     * @description schema
     * @var string
     */
    public $content;

    /**
     * @description 应参与人数
     * @var int
     */
    public $shouldParticipationCnt;

    /**
     * @description 发送范围
     * @var array
     */
    public $visibleList;

    /**
     * @description 设置
     * @var setting
     */
    public $setting;

    /**
     * @description 填表名称
     * @var string
     */
    public $name;

    /**
     * @description 填表提示
     * @var string
     */
    public $memo;

    /**
     * @description 创建人
     * @var string
     */
    public $creator;

}
