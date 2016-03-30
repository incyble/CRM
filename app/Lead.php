<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'surname', 'title', 'status','industry','type',
        'campaignid','description','sourceid','sourcedetail','xcmpcode','createduser',
        'updateduser','created_at','updated_at'];

}
