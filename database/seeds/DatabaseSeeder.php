<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use blog\Category;
use blog\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
        $this->call('CategoriesSeeder');
	}

}

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(array('name'=>'test','email' => 'foo@bar.com','password'=>'$2y$10$qNSjc4mngLmInSMV4ort3u1X7fX0s3a/OhwhVRLiOm6c0Ql1n04Jy'));
    }

}
/*
 * 填充分类数据
 * */
class CategoriesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(array('name'=>'测试分类'));
    }

}