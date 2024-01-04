<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{

    //use HasFactory;
    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "location" => "required|max:255",
            "size" => "required",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'image' => 'image',
            'imgs.*' => 'image',// Validation for each image in the array
            ]);
    }

    public function getId()
    {
    return $this->attributes['id'];
    }
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
    public function getSize()
    {
    return $this->attributes['size'];
    }
    public function setSize($size)
    {
    $this->attributes['size'] = $size;
    }

    public function getPrice()
    {
    return $this->attributes['price'];
    }

    public function setPrice($price)
    {
    $this->attributes['price'] = $price;
    }
    public function getLocation()
    {
        return $this->attributes['location'];
    }

    public function setLocation($location)
    {
        $this->attributes['location'] = $location;
    }

    public function getScore()
    {
        return $this->attributes['score'];
    }

    public function setScore($score)
    {
        $this->attributes['score'] = $score;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getName()
    {
   
        return strtoupper($this->attributes['name']);
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getComments()
    {
        return $this->attributes['comments'];
    }

    public function setComments($comments)
    {
        $this->attributes['comments'] = $comments;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function setImgsAttribute($value)
    {
        $this->attributes['imgs'] = json_encode($value);
    }

    // Getter
    public function getImgsAttribute($value)
    {
        return json_decode($value, true);
    }


}
