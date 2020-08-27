<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SimplelistOapiUserParams extends Model {
    protected $_name = [
        'lang' => 'lang',
        'departmentId' => 'department_id',
        'offset' => 'offset',
        'size' => 'size',
        'order' => 'order',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SimplelistOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['lang'])){
            $model->lang = $map['lang'];
        }
        if(isset($map['department_id'])){
            $model->departmentId = $map['department_id'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        return $model;
    }
    /**
     * @description 通讯录语言(默认zh_CN另外支持en_US)
     * @var string
     */
    public $lang;

    /**
     * @description 获取的部门id
     * @var int
     */
    public $departmentId;

    /**
     * @description 支持分页查询，与size参数同时设置时才生效，此参数代表偏移量
     * @var int
     */
    public $offset;

    /**
     * @description 支持分页查询，与offset参数同时设置时才生效，此参数代表分页大小，最大100
     * @var int
     */
    public $size;

    /**
     * @description 支持分页查询，部门成员的排序规则，默认不传是按自定义排序；entry_asc代表按照进入部门的时间升序，entry_desc代表按照进入部门的时间降序，modify_asc代表按照部门信息修改时间升序，modify_desc代表按照部门信息修改时间降序，custom代表用户定义(未定义时按照拼音)排序
     * @var string
     */
    public $order;

}
