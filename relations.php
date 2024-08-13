<?Php
/**
 * Practice laravel Relationships Practices
 */

/**
 * 1. One to One relationship
 */

 // User Model
class User extends Model {
    public function profilePicture() {
        return $this->hasOne(ProfilePicture::class);
    }
}


// Post Model
class Post Extends Model {
    public function Posts() {
        return $this->belongsTo(User::class);
    }
}