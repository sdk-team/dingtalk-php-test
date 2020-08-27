<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduGuardianResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduGuardianResponseBody\result\relations;

class result extends Model {
    protected $_name = [
        'nick' => 'nick',
        'studentUserid' => 'student_userid',
        'guardianUserid' => 'guardian_userid',
        'relation' => 'relation',
        'relations' => 'relations',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->studentUserid) {
            $res['student_userid'] = $this->studentUserid;
        }
        if (null !== $this->guardianUserid) {
            $res['guardian_userid'] = $this->guardianUserid;
        }
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->relations) {
            $res['relations'] = [];
            if(null !== $this->relations && is_array($this->relations)){
                $n = 0;
                foreach($this->relations as $item){
                    $res['relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['student_userid'])){
            $model->studentUserid = $map['student_userid'];
        }
        if(isset($map['guardian_userid'])){
            $model->guardianUserid = $map['guardian_userid'];
        }
        if(isset($map['relation'])){
            $model->relation = $map['relation'];
        }
        if(isset($map['relations'])){
            if(!empty($map['relations'])){
                $model->relations = [];
                $n = 0;
                foreach($map['relations'] as $item) {
                    $model->relations[$n++] = null !== $item ? relations::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 关系名称
     * @var string
     */
    public $nick;

    /**
     * @description 学生ID
     * @var string
     */
    public $studentUserid;

    /**
     * @description 家长ID
     * @var string
     */
    public $guardianUserid;

    /**
     * @description 关系类型（M妈妈，D爸爸，O其他）
     * @var string
     */
    public $relation;

    /**
     * @description fdaf
     * @var array
     */
    public $relations;

}
