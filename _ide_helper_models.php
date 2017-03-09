<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\models{
/**
 * App\models\Member
 *
 * @method static \Illuminate\Database\Query\Builder|\App\models\Member abc()
 */
	class Member extends \Eloquent {}
}

namespace App\models{
/**
 * App\models\Menu
 *
 * @mixin \Eloquent
 */
	class Menu extends \Eloquent {}
}

namespace App\models{
/**
 * App\models\UserRole
 *
 */
	class UserRole extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

