<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    protected $fillable = ['title', 'content'];

    public function category()
    {
    	return $this->hasOne(Category::class);
    }

    public function author()
    {
    	return $this->hasOne(User::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(
    		Tag::class,
    		'post_tags',
    		'post_id',
    		'tag_id'
    	);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    // add post static function
    public static function add($fields)    
    {
        $post = new static;
        $post->fill($fields);
        $post->user_id = 1;
        $post->save();

        return $post;
    }
    // edit post function
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
    //remove psot function
    public function remove()
    {
        Storage::delete('uploads/' . $this->$image);
        $this->delete();
    }
    //upload thumnail image for post function
    public function uploadImage($image)     
    {
        if ($image == null) { return; }

        Storage::delete('uploads/' . $this->$image);
        $filename = str_random(10) . '.' . $image->extension();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }
    //get post thumbnail image function
    public function getImage()
    {
        if ($this->image == null) 
        {
            return '/img/no-image.png';    
        }

        return '/uploads/' . $this->image;
    }
    //set category for post function
    public function setCategory($id)
    {
        if ($id == null) { return; }
        
        $this->category_id = $id;
        $this->save();
    }
    //set tags for post functions
    public function setTags($ids)
    {
        if ($id == null) { return; }

        $this->tags()->sync($ids);
    }
    // set post status draft function (default)
    public function setDraft()
    {
        $this->status = Post::IS_DRAFT;
        $this->save();
    }
    // set post status public (posted) function
    public function setPublic()
    {
        $this->status = Post::IS_PUBLIC;
        $this->save();
    }

    public function toggleStatus($value)    
    {
        if ($value == null) 
        {
            return $this->setDraft();
        }
        return $this->setPublic();
    }
    // promoted post function
    public function setFeatured()
    {
        $this->is_featured = 1;
        $this->save();
    }
    // not promoter post function (default)
    public function setStandart()
    {
        $this->is_featured = 0;
        $this->save();
    }

    public function toggleFeature($value)    
    {
        if ($value == null) 
        {
            return $this->setStandart();
        }
        return $this->setFeatured();
    }

}

