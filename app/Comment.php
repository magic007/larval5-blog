<?php namespace blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    protected $fillable = ['nickname', 'email', 'content', 'posts_id'];

	//


}
