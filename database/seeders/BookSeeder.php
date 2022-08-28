<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book=[
              /*[
                'id'=>'',
                'book_name'=>'',
                'book_author'=>'',
                'book_image'=>'',
                'rate'=>'500',
                'category'=>'Art,Music,Mediacl,Science,Nature,Pets,Psycology,Sports,Romantic',
                'pdf'=>'',
                'desc'=>''
              ],*/
              [
                'id'=>'1100',
                'book_name'=>'The Lord Of Rings',
                'book_author'=>'J.R.R.TOLKIEN',
                'book_image'=>'1.jpg',
                'rate'=>'500',
                'category'=>'Art',
                'pdf'=>'1.pdf',
                'desc'=>'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien.'
              ],
              [
                'id'=>'1101',
                'book_name'=>'HARRY POTTER',
                'book_author'=>'J.K ROWLING',
                'book_image'=>'2.jpg',
                'rate'=>'500',
                'category'=>'Music',
                'pdf'=>'2.pdf',
                'desc'=>'Harry Potter, and his friends Hermione Granger and Ron Weasley,all of whom are students at Hogwarts School of Witchcraft and Wizardry.'
              ],
              [
                'id'=>'1102',
                'book_name'=>'JULIA ALVAREZ',
                'book_author'=>'THE POET X',
                'book_image'=>'3.jpg',
                'rate'=>'500',
                'category'=>'Medical',
                'pdf'=>'3.pdf',
                'desc'=>'A Time Magazine Must-Read Book of 2020 A Most-Anticipated Book of the Year'
              ],
              [
                'id'=>'1103',
                'book_name'=>'Good Pop Bad Pop',
                'book_author'=>'Jarvis Cocker',
                'book_image'=>'4.jpg',
                'rate'=>'500',
                'category'=>'Science',
                'pdf'=>'4.pdf',
                'desc'=>'This isn’t the story of his time at the top.'
              ],
              [
                'id'=>'1104',
                'book_name'=>'ISLAND TIME',
                'book_author'=>'HANNAH ORENSTEIN',
                'book_image'=>'5.JPG',
                'rate'=>'500',
                'category'=>'Romantic',
                'pdf'=>'5.pdf',
                'desc'=>'This is one island you won’t want to be rescued from.The Kellys are messy, loud, loving Australians.'
              ],
              [
                'id'=>'1105',
                'book_name'=>'LORRAINE HEATH',
                'book_author'=>'HEIRESS',
                'book_image'=>'6.jpg',
                'rate'=>'500',
                'category'=>'Music',
                'pdf'=>'6.pdf',
                'desc'=>'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien.'
              ],
              [
                'id'=>'1106',
                'book_name'=>'THE BETROTHED',
                'book_author'=>'KIERA CASS',
                'book_image'=>'7.jpg',
                'rate'=>'500',
                'category'=>'Romantic',
                'pdf'=>'7.pdf',
                'desc'=>'A Time Magazine Must-Read Book of 2020 A Most-Anticipated Book of the Year'
              ],
              [
                'id'=>'1107',
                'book_name'=>'DARK STARS',
                'book_author'=>'JOHN F.D. TAFF',
                'book_image'=>'8.jpg',
                'rate'=>'500',
                'category'=>'Horror',
                'pdf'=>'8.pdf',
                'desc'=>'A Time Magazine Must-Read Book of 2020 A Most-Anticipated Book of the Year'
              ],
              [
                'id'=>'1108',
                'book_name'=>'THE DARK GHOST',
                'book_author'=>'SIRAP JOHN',
                'book_image'=>'9.jpg',
                'rate'=>'500',
                'category'=>'Horror',
                'pdf'=>'9.pdf',
                'desc'=>'This isn’t the story of his time at the top.'
              ],
              [
                'id'=>'1109',
                'book_name'=>'ISLAND TIME',
                'book_author'=>'HANNAH ORENSTEIN',
                'book_image'=>'5.JPG',
                'rate'=>'500',
                'category'=>'Romantic',
                'pdf'=>'5.pdf',
                'desc'=>'This is one island you won’t want to be rescued from.The Kellys are messy, loud, loving Australians.'
              ],

        ];
        DB::table('books')->insert($book);
    }
}
