<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(

            // All Books
            [

                [

                    'name' =>
                    'Living in the Light',
                    'issueDate' =>
                    '2023-01-05T16:55',
                    'authorName'  =>
                    'David_Sargent',
                    'authorEmail'  =>
                    'hameemdk4@gmail.com',
                    'description' =>
                    'Living in the Light: A guide to personal transformation',
                    'file' =>
                    'assests/booksPdf/living in the Light_ A guide to personal transformation ( PDFDrive ).pdf',
                    'image' => 'book/images/i.jpg',
                ],
                [

                    'name' =>
                    'Resisting Happiness',
                    'issueDate' =>
                    '2017-02-01T20:00',
                    'authorName'  =>
                    'James Dollen',
                    'authorEmail'  =>
                    '6gganetr446@gmail.com',
                    'description' =>
                    'A True Story about Why We Sabotage Ourselves',
                    'file' =>
                    'assests/booksPdf/RH_StudyGuide_V2.pdf',
                    'image' =>
                    'book/images/resisiting_happinness.jpg',


                ],
                [
                    'name' =>
                    'Start Where You Are',
                    'issueDate' =>
                    '2017-07-05T20:07',
                    'authorName'  =>
                    'James Dollen',
                    'authorEmail'  =>
                    'lahhsb777@gmail.com',
                    'description' =>
                    'A Guide to Compassionate Living',
                    'file' =>
                    'assests/booksPdf/Start Where You Are_ A Guide to Compassionate Living ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/start_where.jpg',
                ],
                [
                    'name' =>
                    'Handbook of Medicinal Herbs',
                    'issueDate' =>
                    '2006-06-06T22:06',
                    'authorName'  =>
                    'Julian Shapiro',
                    'authorEmail'  =>
                    'julion77@gmail.com',
                    'description' =>
                    'Handbook of Medicinal Herbs',
                    'file' =>
                    'assests/booksPdf/Handbook of Medicinal Herbs ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/handbook.jpg',
                ],
                [
                    'name' =>
                    'Hillbilly Elegy',
                    'issueDate' =>
                    '2016-12-06T22:09',
                    'authorName'  =>
                    'David_Sargent',
                    'authorEmail'  =>
                    'hjonh55@gmail.com',
                    'description' =>
                    'Hillbilly Elegy: A Memoir of a Family and Culture in Crisis',
                    'file' =>
                    'assests/booksPdf/Hillbilly Elegy_ A Memoir of a Family and Culture in Crisis ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/hibilly.jpg',

                ],
                [
                    'name' =>
                    'Napoleon:',
                    'issueDate' =>
                    '2009-11-06T22:10',
                    'authorName'  =>
                    'James Dollen',
                    'authorEmail'  =>
                    'james76876@gmial.com',
                    'description' =>
                    'Napoleon: A Biography',
                    'file' =>
                    'assests/booksPdf/Napoleon_ A Biography ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/napolen.jpg',
                ],
                [
                    'name' =>
                    'Subtle is the Lord',
                    'issueDate' =>
                    '2005-11-06T22:17',
                    'authorName'  =>
                    'Hamnee',
                    'authorEmail'  =>
                    'hamne8657@gmial.com',
                    'description' =>
                    'Subtle is the Lord: The Science and Life of Albert Einstein',
                    'file' =>
                    'assests/booksPdf/abraham_pais_subtle_is_the_lord.pdf',
                    'image' =>
                    'book/images/lord.jpg',
                ],
                [
                    'name' =>
                    'Mother Teresa',
                    'issueDate' =>
                    '2008-07-06T22:23',
                    'authorName'  =>
                    'Meg Greene',
                    'authorEmail'  =>
                    'MegGreene@outlook.com',
                    'description' =>
                    'Mother Teresa - A Biography',
                    'file' =>
                    'assests/booksPdf/Mother Teresa - A Biography ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/terisa.jpg',
                ],
                [
                    'name' =>
                    'The Oxford Dictionary of English Grammar',
                    'issueDate' =>
                    '2016-11-08T17:52',
                    'authorName'  =>
                    'Oxford University Press',
                    'authorEmail'  =>
                    'oxfored7657@gmail.com',
                    'description' =>
                    'The Oxford Dictionary of English Grammar',
                    'file' =>
                    'assests/booksPdf/The Oxford Dictionary of English Grammar ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/oxford.jpg',
                ],
                [
                    'name' =>
                    'Praying To Get Results By Kenneth E. Hagin',
                    'issueDate' =>
                    '2007-07-08T18:04',
                    'authorName'  =>
                    'Kenneth E. Hagin',
                    'authorEmail'  =>
                    'keneeth55@gmail.com',
                    'description' =>
                    'Praying To Get Results By Kenneth E. Hagin',
                    'file' =>
                    'assests/booksPdf/Kenneth E Hagin - Praying to Get Results.pdf',
                    'image' =>
                    'book/images/prayiing.jpg',
                ],
                [
                    'name' =>
                    'The Oxford Dictionary of English Grammar',
                    'issueDate' =>
                    '2013-11-08T17:52',
                    'authorName'  =>
                    'Oxford University Press',
                    'authorEmail'  =>
                    'oxfored7657@gmail.com',
                    'description' =>
                    'the-oxford-dictionary-of-english-grammar-oxford-quick-reference-2nd_edition',
                    'file' =>
                    'assests/booksPdf/the-oxford-dictionary-of-english-grammar-oxford-quick-reference-2nd_edition ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/oxford1.jpg',
                ],
                [
                    'name' =>
                    'Gandhi Autobiography',
                    'issueDate' =>
                    '2002-07-06T22:16',
                    'authorName'  =>
                    'Ahsan_khan',
                    'authorEmail'  =>
                    'anwargg@gmail.com',
                    'description' =>
                    'Gandhi Autobiography',
                    'file' =>
                    'assests/booksPdf/Gandhi-Truth.pdf',
                    'image' =>
                    'book/images/ghandhi.jpg',
                ],
                [
                    'name' =>
                    'Oxford Modern English Grammar',
                    'issueDate' =>
                    '2017-12-08T18:01',
                    'authorName'  =>
                    'Bas Aarts',
                    'authorEmail'  =>
                    'basarts322@gmail.com',
                    'description' =>
                    'Oxford Modern English Grammar',
                    'file' =>
                    'assests/booksPdf/Bas-Aarts-Oxford-Modern-English-Grammar-Oxford-University-Press-2011.pdf',
                    'image' =>
                    'book/images/18a6ea8e1c26951a7516df4473403bc9.jpg',
                ],
                [
                    'name' =>
                    'Web Animation using JavaScript',
                    'issueDate' =>
                    '2015-07-06T22:05',
                    'authorName'  =>
                    'Julian Shapiro',
                    'authorEmail'  =>
                    'julion77@gmail.com',
                    'description' =>
                    'Web Animation using JavaScript: Develop & Design',
                    'file' =>
                    'assests/booksPdf/Web Animation using JavaScript_ Develop _ Design ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/web.jpg',
                ],
                [
                    'name' =>
                    'BIOGRAPHY OF SWAMI VIVEKANANDA',
                    'issueDate' =>
                    '2007-03-06T21:55',
                    'authorName'  =>
                    'Anthony',
                    'authorEmail'  =>
                    'anthony65553@gmail.com',
                    'description' =>
                    'BIOGRAPHY OF SWAMI VIVEKANANDA',
                    'file' =>
                    'assests/booksPdf/VIVEKANAND BIOGRAPHY.pdf',
                    'image' =>
                    'book/images/biography.jpg',
                ],
                [

                    'name' =>
                    'Kant: A Biography',
                    'issueDate' =>
                    '2007-10-08T21:53',
                    'authorName'  =>
                    'James Dollen',
                    'authorEmail'  =>
                    '7ygfhgfh3@gmail.com',
                    'description' =>
                    'Kant: A Biography',
                    'file' =>
                    'assests/booksPdf/Kant_ A Biography ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/kant.jpg',
                ],
                [
                    'name' =>
                    'I am Malala',
                    'issueDate' =>
                    '2012-07-10T11:49',
                    'authorName'  =>
                    'Anne_Callon',
                    'authorEmail'  =>
                    'jjganbbbg@gmail.com',
                    'description' =>
                    'The Story of the Girl Who Stood Up for Education',
                    'file' =>
                    'assests/booksPdf/i-am-malala-pdf-book-by-malala-downloaded-4m-pakistanifun.commalala-yousafzai-christina-lamb.pdf',
                    'image' =>
                    'book/images/malala.jpg',
                ],
                [
                    'name' =>
                    'The Purpose-Driven Life',
                    'issueDate' =>
                    '2003-07-05T20:16',
                    'authorName'  =>
                    'Rick_Warren',
                    'authorEmail'  =>
                    'rick77ar4@gmail.com',
                    'description' =>
                    'What on Earth Am I Here For',
                    'file' =>
                    'assests/booksPdf/RH_StudyGuide_V2.pdf',
                    'image' =>
                    'book/images/rick_wareen.jpg',
                ],
                [
                    'name' =>
                    'Boundaries',
                    'issueDate' =>
                    '2001-02-05T20:11',
                    'authorName'  =>
                    'Heny_Cloud',
                    'authorEmail'  =>
                    'henycloud22@gmai.com',
                    'description' =>
                    'How to Say No to Take Control of Your Life',
                    'file' =>
                    'assests/booksPdf/Boundaries_ When to Say Yes, How to Say No to Take Control of Your Life ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/Boundries.jpg',
                ],
                [
                    'name' =>
                    'CRITICAL THINKING',
                    'issueDate' =>
                    '2012-11-08T18:05',
                    'authorName'  =>
                    'Unknown',
                    'authorEmail'  =>
                    'basarts322@gmail.com',
                    'description' =>
                    'CRITICAL THINKING: Consider the Verdict Sixth Edition',
                    'file' =>
                    'assests/booksPdf/CRITICAL THINKING_ Consider the Verdict Sixth Edition ( PDFDrive ).pdf',
                    'image' =>
                    'book/images/aaaaa.jpg',
                ]
            ],
        );
    }
}