<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	//protected $table = 'my_blogs';
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'body', 'featured_image', 'slug', 'metatitle', 'metadescription', 'status'];
	
	public function category() {
		return $this->belongsToMany(Category::class);
	}
	
	public function user() {
		return $this->belongsTo(User::class);
	}
}
