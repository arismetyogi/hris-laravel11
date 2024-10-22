<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();


    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    User::factory()->create([
      'username' => 'hrisadmin',
      'first_name' => 'admin',
      'last_name' => 'hris',
      'email' => 'admin@admin.com',
      'password' => '12345678',
      'department_id' => 1,
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    $this->call(ProvinceSeeder::class);
    $this->call(ZipSeeder::class);
    $this->call(BankSeeder::class);

    $this->call(BandSeeder::class);
    $this->call(DescstatusSeeder::class);
    $this->call(GradeeselonSeeder::class);
    $this->call(RecruitmentSeeder::class);
    $this->call(EmplevelSeeder::class);
    $this->call(AreaSeeder::class);
    $this->call(EmployeeStatusSeeder::class);
    $this->call(TitleSeeder::class);
    $this->call(SubtitleSeeder::class);

    $this->call(DepartmentSeeder::class);
    $this->call(OutletSeeder::class);
  }
}
