<?php namespace blog;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {
    protected $table = 'posts';
	//

    public function user()
    {
        return $this->belongsTo('blog\User');
    }
    public function hasManyComments()
    {
        return $this->hasMany('blog\Comment', 'posts_id', 'id');
    }
    public function Category()
    {
        return $this->hasOne('blog\category', 'id', 'category_id');
    }

}
