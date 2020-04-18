$factory->define(App\User::class, function (Faker $faker) {
    static $password;return [
	'name' => $faker->name,
	'email' => $faker->unique()->safeEmail,
	'password' => $password ?: $password = bcrypt("secret"),
	'remember_token' => str_random(10),
    ];
});
$factory->define(App\Job::class, function (Faker $faker) {
    return [
	'reference' => $faker->domainWord,
	'employer' => $faker->company,
	'title' => $faker->jobTitle,
	'location' => $faker->city,
	'salary' => $faker->numberBetween($min = 1000, $max = 9000),
	'post_date' => $faker->dateTimeBetween($startDate = ‘-30 years’,
	$endDate = ‘now’, $timezone = date_default_timezone_get()),
	'type' => $faker->jobTitle,
	'description' => $faker->sentence
    ];
});