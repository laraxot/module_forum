<?php

namespace Modules\Forum\Models;

//----- traits ----
//------services---------

//--- models ---

//--- bases ---
use Modules\Blog\Models\Profile as BlogProfile;

/**
 * Modules\Forum\Models\Profile
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $bio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $firstname
 * @property string|null $surname
 * @property mixed $email
 * @property string|null $phone
 * @property false|mixed|string $address
 * @property int|null $auth_user_id
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $googleplace_url
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $campground
 * @property string|null $campground_short
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string|null $post_type
 * @property string|null $website
 * @property string|null $formatted_address
 * @property string|null $min_order
 * @property string|null $delivery_cost
 * @property string|null $delivery_options
 * @property int|null $order_action
 * @property string|null $price_currency
 * @property string|null $price_range
 * @property string|null $latitude
 * @property string|null $longitude
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property-read int|null $container_widgets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Forum\Models\Forum[] $forums
 * @property-read int|null $forums_count
 * @property-read mixed $first_name
 * @property-read string $full_address
 * @property-read string $full_name
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[] $privacies
 * @property-read string|null $subtitle
 * @property-read string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @property-read int|null $privacies_count
 * @property-read \Modules\Food\Models\Profile|null $profile
 * @property-write mixed $url
 * @property-read \Modules\LU\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property-read int|null $widgets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistance(float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 */
class Profile extends BlogProfile {
    //--- relationship ---
    public function forums() {
        return $this->hasMany(Forum::class, 'auth_user_id', 'auth_user_id');
    }
}
