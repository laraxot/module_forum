<?php

declare(strict_types=1);

namespace Modules\Forum\Models;

//----- traits ----
//------services---------

//--- models ---

//--- bases ---

/**
 * Modules\Forum\Models\Forum.
 *
 * @property int                                                                         $post_id
 * @property string|null                                                                 $type
 * @property string|null                                                                 $parent_type
 * @property int|null                                                                    $parent_id
 * @property int|null                                                                    $pos
 * @property string|null                                                                 $updated_by
 * @property string|null                                                                 $created_by
 * @property \Illuminate\Support\Carbon|null                                             $created_at
 * @property \Illuminate\Support\Carbon|null                                             $updated_at
 * @property int|null                                                                    $auth_user_id
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Forum\Models\ForumReply[] $forumReplies
 * @property int|null                                                                    $forum_replies_count
 * @property \Illuminate\Database\Eloquent\Collection|Forum[]                            $forums
 * @property int|null                                                                    $forums_count
 * @property \Illuminate\Support\Collection                                              $my_rating
 * @property float                                                                       $ratings_avg
 * @property int                                                                         $ratings_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[]      $ratingObjectives
 * @property int|null                                                                    $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Forum\Models\ForumReply[] $replies
 * @property int|null                                                                    $replies_count
 * @property \Illuminate\Database\Eloquent\Collection|Forum[]                            $sons
 * @property int|null                                                                    $sons_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Forum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Forum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Forum query()
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forum withRating()
 * @mixin \Eloquent
 */
class Forum extends BaseModel {
    protected $fillable = ['post_id', 'parent_id', 'auth_user_id'];

    /* https://itnext.io/7-things-you-need-to-know-to-get-the-most-out-of-your-laravel-model-4f915acbb47c */

    //--------- relationship ---------------
    public function sons() {
        return $this->hasMany(Forum::class, 'parent_id', 'post_id');
    }

    public function forums() {
        return $this->hasMany(Forum::class, 'parent_id', 'post_id');
    }

    public function replies() {
        return $this->hasMany(ForumReply::class);
    }

    public function forumReplies() {
        return $this->hasMany(ForumReply::class);
    }

    //---------- mututars -----------
    public function getParentIdAttribute($value) {
        if ('' != $value) {
            return $value;
        }
        $value = 0;
        $this->parent_id = $value;
        $this->save();

        return $value;
    }
}//end model