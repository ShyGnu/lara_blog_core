<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    protected $fillable = ['title', 'content', 'date', 'description'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function author()
    {
    	return $this->belongsTo(User::class, 'user_id');
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
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if ($this->image != null) {
            Storage::delete('uploads/' . $this->image);
        }
    }
    //upload thumnail image for post function
    public function uploadImage($image)     
    {
        if ($image == null) { return; }
        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }
    //get post thumbnail image function
    public function getImage()
    {
        if ($this->image == null) 
        {
            return '/img/no_image_post.png';
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
        if ($ids == null) { return; }

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

    public function getCategoryTitle()
    {
        return ($this->category != null)
            ? $this->category->title
            : 'Нет категории';
    }

    public function getTagsTitles()
    {

        return(!$this->tags->isEmpty())
            ?   implode(', ', $this->tags->pluck('title')->all())
            :   'Нет тегов';
    }

    public function getCategoryID()
    {
        return $this->category != null ? $this ->category-> id : null;
    }

    public function hasCategory()
    {
        return $this->category != null ? true : false;
    }



    //public function getDate()
    //{
    //    dd(Carbon::createFromFormat('y-md', $this->date)->format('F d, Y'));
    //}
}

