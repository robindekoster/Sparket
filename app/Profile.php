<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function foo\func;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        if ($this->image) {
            $imagePath = $this->image;
        } else {
            $imagePath = "profile/5fnqsjfADtFgiXm5R2DWXpskyWZc4a4wVWjIO37S.jpeg";
        }

        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
