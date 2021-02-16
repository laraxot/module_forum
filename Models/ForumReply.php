<?php

declare(strict_types=1);

namespace Modules\Forum\Models;

//----- traits ----
//------services---------

//--- models ---

//--- bases ---

/**
 * Modules\Forum\Models\ForumReply.
 *
 * @property int                                                                    $post_id
 * @property string|null                                                            $type
 * @property int                                                                    $forum_post_id
 * @property int|null                                                               $pos
 * @property string|null                                                            $updated_by
 * @property string|null                                                            $created_by
 * @property \Illuminate\Support\Carbon|null                                        $created_at
 * @property \Illuminate\Support\Carbon|null                                        $updated_at
 * @property string|null                                                            $parent_type
 * @property int|null                                                               $parent_id
 * @property int|null                                                               $auth_user_id
 * @property \Illuminate\Support\Collection                                         $my_rating
 * @property float                                                                  $ratings_avg
 * @property int                                                                    $ratings_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $ratingObjectives
 * @property int|null                                                               $rating_objectives_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereForumPostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForumReply withRating()
 * @mixin \Eloquent
 */
class ForumReply extends BaseModelLang {
    protected $fillable = ['id', 'forum_post_id', 'auth_user_id'];

    /* https://itnext.io/7-things-you-need-to-know-to-get-the-most-out-of-your-laravel-model-4f915acbb47c */

    //--------- relationship ---------------
}//end model