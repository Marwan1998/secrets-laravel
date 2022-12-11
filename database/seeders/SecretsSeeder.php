<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SecretsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('secrets')->insert([
            [
                'title' => 'secret-1',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse quas doloribus, nostrum optio velit assumenda minus.',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-2',
                'content' => 'Hidden Inside Me (20*10), Animated by Joel Grossman Introduction and script by Lee Elliman Story by Julie Barnett, Ter',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-3',
                'content' => 'The routine was always the same. She would unlock the dormitory door with her own key, remove her shoes, and go to her',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-4',
                'content' => 'This email, which was sent from his private email address, was described by Bob Woodward as “full of confidential',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-5',
                'content' => 'Lyon, Ian. 2003. The Meaning of Risk: A Queer Geography. Edinburgh, UK: Newnham College, University of Cambridge. ISBN 0',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-6',
                'content' => 'The irony of a secret, seemingly meaningless letter, that stitched into the interior of an Air Canada plane, that just',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-7',
                'content' => 'A secret, being, a secret, being, made, made, made, is, made, is, I think, that, knowing, is, I think, Or, so, in,',
                'user_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-1',
                'content' => 'There are always surprises when things seem settled or you think they have been. And some of those surprises include the',
                'user_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-2',
                'content' => 'Clara searched for the magic words to draw the sword of the fallen hero out of the stone walls. The words, like the day,',
                'user_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-3',
                'content' => 'album on July 28 called "Musk Flag." The 10-track album was created in partnership with T-Pain and Charlie Puth. Musk posted',
                'user_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'secret-4',
                'content' => 'She found herself at the center of a clearing on a cool autumn day. The grass was moist and soft beneath her feet.',
                'user_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);

    }
}
