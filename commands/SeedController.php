<?php


namespace app\commands;

use yii\console\Controller;
//use app\models\Articles;
//use app\models\Users;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $seeder = new \tebazil\yii2seeder\Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();

        \Yii::$app->db->createCommand("SET foreign_key_checks = 0")->execute();

        $seeder->table('{{%articles}}')->columns([
            'id', //automatic pk
            'category_id'=>$generator->relation('categories', 'id'),
            'author_id'=>$generator->relation('users', 'id'),
            'title'=>$faker->sentence,
            'slug'=>$faker->slug,
            'description'=>$faker->text,
            'content'=>$faker->text,
            'status'=> $faker->numberBetween(0, 1),
            'publish_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'viewed'=> $faker->numberBetween(0, 1500),
            'is_featured'=> $faker->numberBetween(0, 1),
            'created_at' =>$faker->unixTime,
            'updated_at' =>null

        ])->rowQuantity(10);

        $seeder->table('{{%users}}')->columns([
            'id', //automatic pk
            'name'=> $faker->name,
            'email'=> $faker->email,
            'password'=> $faker->password,
            'password_reset_token'=> $faker->md5,
            'isAdmin'=> $faker->numberBetween(0, 1),
            'status'=> $faker->numberBetween(0, 1),
            'document_id'=> null,
            'login_at'=> $faker->unixTime,
            'ip'=> $faker->ipv4,
            'avatar'=> null,
            'auth_key'=> null,
            'remember_token'=> $faker->md5,
            'email_verified_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),
            'created_at' =>$faker->unixTime,
            'updated_at' =>null

        ])->rowQuantity(2);

        $seeder->table('{{%categories}}')->columns([
            'id', //automatic pk
            'status'=> $faker->numberBetween(0, 1),
            'title'=>$faker->sentence,
            'slug'=>$faker->slug,
            'created_at' =>$faker->unixTime,
            'updated_at' =>null

        ])->rowQuantity(1);

        $seeder->table('{{%tags}}')->columns([
            'id', //automatic pk
            'status'=> $faker->numberBetween(0, 1),
            'title'=>$faker->word,
            'slug'=>$faker->slug,
            'created_at' =>$faker->unixTime,
            'updated_at' =>null

        ])->rowQuantity(2);


        $seeder->table('{{%comments}}')->columns([
            'id', //automatic pk
            'text'=>$faker->text(30),
            'user_id'=>$generator->relation('users', 'id'),
            'article_id'=>$generator->relation('articles', 'id'),
            'status'=> $faker->numberBetween(0, 1),
            'created_at' =>$faker->unixTime,
            'updated_at' =>null

        ])->rowQuantity(2);


        $seeder->table('{{%password_resets}}')->columns([
            'id', //automatic pk
            'email'=> $faker->email,
            'token'=> $faker->uuid,
            'created_at' =>$faker->unixTime,
            'updated_at' =>null
        ])->rowQuantity(2);

        $seeder->table('{{%subscriptions}}')->columns([
            'id', //automatic pk
            'email'=> $faker->email,
            'token'=> $faker->uuid,
            'created_at' =>$faker->unixTime,
            'updated_at' =>null
        ])->rowQuantity(2);

        $seeder->refill();

        \Yii::$app->db->createCommand("SET foreign_key_checks = 1")->execute();
    }
}