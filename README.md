<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Admin Panel

the list of menu
API
Blog
Dashboard
Group
Page
Post
Profile
Report
Review
Setting
Subscription
Support
User

## user admin
Blog
Chart
Dashboard
Event
Group
Help
Page
Post
Profile
Report
Review
Setting
Subscription
Support
User

## User
About us
Blog
Contact us
Event
Frend
Group
Help
Home
Page
Post
Search Friend

userDetail
-id
-user_id
-dob
-post
-education
-greadute
-post_greduate
-skill
-hobby
-school
-other_school
-collage
-post_collage
-address
-city
-pincode
-state
-country
-other_address
-other_city
-other_state
-other_pincode
-other_country


userProfile
-id
-user_id
-follows
-followers
-friends
-pages
-groups
-profile_likes
-cover_image

Group
-id
-user_id
-title
-name
-desc
-avatar

GroupMember
-id
-user_id
-group_id
-role

Post
-id
-uid
-title
-desc
-name
-img
-likes
-type like post, blog, event, page etc

##
$table->index( [ 'first_name', 'last_name' ] );
User::query()->orderBy('last_name')->orderBy('first_name')->paginate();

##

$table->rawIndex("(date_format(dob, '%m -%d')), name", "users_birthday_name_index");
public function scopeOrderByBirthday($query) {
    // YYYY-MM-DD
    // MM-DD
    $query->orderByRaw('date_format(dob, "%m-%d")');
}
User::query()
->orderByBirthday()
->orderBy('name')
->paginate();

##
public function scopeWhereBirthdayThisWeek($query) {

    $query->whereRow('date_formate() between ? and ?', [
        Carbon::now()->startOfWeek()->format('m-d'),
        Carbon::now()->endofWeek()->format('m-d'),
    ]);
}

User::query()
->whereBirthdayThisWeek()
->orderByBirthday()
->orderBy('name')
->paginate();

##

$table->rawIndex("(date_format(dob, '%m-%d')), name", 'users_birthday_name_index');

public function scopeWhereBirthdayThisWeek($query) {

    Carbon::setTestNow(Carbon::parse('January 1, 2020'));

    $dates = Carbon::now()->startOfWeek()
    ->daysUntil(Carbon::now()->endOfWeek())
    ->map(fn ($date) => $date->format('m-d'));

    $query->whereRow('date_formate(dob, "%m-%d") in (?,?,?,?,?,?,?,?)', iterator_to_array($dates));
}

User::query()
->whereBirthdayThisWeek()
->orderByBirthday()
->orderBy('name')
->paginate();


## DigitalOcean Creditionls
https://cloud.digitalocean.com/login
email: nonefep782@rebation.com
password: nonefep@782

https://devdojo.com/login

https://laraveldaily.teachable.com/
https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA
https://blog.quickadminpanel.com/new-api-generator-2019-now-with-laravel-passport/
https://quickadminpanel.com/