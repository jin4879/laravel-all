<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    /*
     * 소프트 삭제 delete 메소드를 호출하면 deleted_at 컬럼은 현재 날짜와 시간에 맞춰질 것입니다.
     */
    use SoftDeletes;

    /*
     * 타임스탬프를 저장하는 필드의 이름을 수정하고자 하는 경우, 모델에 CREATED_AT 그리고 UPDATED_AT 상수를 설정
     */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'board';
    protected $primaryKey = 'id';
    /*
     * 기본적으로, Eloquent는 테이블에 created_at 과 updated_at 컬럼이 존재한다고 생각합니다.
     * 자동으로 이 컬럼값이 채워지기를 원하지 않는다면 $timestamps 속성을 false 로 지정
     */
    public $timestamps = true;

    /*
     * 일부 모델의 속성에 대한 기본값을 정의하고 싶다면 모델의 $attributes에 속성을 정의
     */
    protected $attributes = [];

    public function comments(){
        return $this->hasMany('App\Model\Comment');
    }

    public function user(){
        return $this->belongsTo('App\Model\User');
    }

}