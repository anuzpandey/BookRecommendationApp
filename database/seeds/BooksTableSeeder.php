<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'bookTitle' => 'The Lean Startup',
            'bookAuthor' => 'Eric Ries',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/the-lean-startup.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Lean-Startup-Entrepreneurs-Continuous-Innovation/dp/0307887898/ref=sr_1_2/133-5239949-7549327?ie=UTF8&qid=1545650084&sr=8-2&keywords=learn+startup',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'Rework',
            'bookAuthor' => 'Jason Fried & David Heinemeier Hansson',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/rework.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Rework-Jason-Fried/dp/0307463745/ref=sr_1_2?ie=UTF8&qid=1545650510&sr=8-2&keywords=rework',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'Sapiens',
            'bookAuthor' => 'Yuval Noah Harari',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/sapiens.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Sapiens-Humankind-Yuval-Noah-Harari/dp/0062316117/ref=sr_1_1?ie=UTF8&qid=1545650642&sr=8-1&keywords=sapiens',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'Steve Jobs',
            'bookAuthor' => 'Walter Isaacson',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/steve-jobs.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Steve-Jobs-Walter-Isaacson-ebook/dp/B004W2UBYW/ref=sr_1_3?ie=UTF8&qid=1545650905&sr=8-3&keywords=steve+jobs',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'Jab, Jab, Jab, Right Hook',
            'bookAuthor' => 'Gary Vaynerchuk',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/jab-jab-jab-right-hook.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Jab-Right-Hook-Story-Social/dp/006227306X/ref=sr_1_1?ie=UTF8&qid=1545650972&sr=8-1&keywords=jab+jab+jab+right+hook',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'Tribe of Mentors',
            'bookAuthor' => 'Tim Ferris',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/tribe-of-mentors.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Tribe-Mentors-Short-Advice-World/dp/1328994961/ref=sr_1_1?ie=UTF8&qid=1545651049&sr=8-1&keywords=tribe+of+mentors',
            'categoryId' => 1
        ]);

        Book::create([
            'bookTitle' => 'The Millionaire Fastlane',
            'bookAuthor' => 'MJ DeMarco',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/the-millionaire-fastlane.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Millionaire-Fastlane-Crack-Wealth-Lifetime/dp/0984358102/ref=sr_1_1?ie=UTF8&qid=1545651190&sr=8-1&keywords=the+millionaire+fastlane',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'Hooked: How to Build Habit-Forming Products',
            'bookAuthor' => 'Nir Eyal',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790671/booksql/hooked.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Hooked-How-Build-Habit-Forming-Products/dp/1591847788/ref=sr_1_1?ie=UTF8&qid=1545651286&sr=8-1&keywords=hooked',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'Good to Great',
            'bookAuthor' => 'Jim Collins',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790671/booksql/good-to-great.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Good-Great-Some-Companies-Others/dp/0066620996/ref=sr_1_1?ie=UTF8&qid=1545651367&sr=8-1&keywords=good+to+great',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'How to win friends and influence people',
            'bookAuthor' => 'Dale Carnegie',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790671/booksql/how-to-win-friends-and-influence-people.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/How-Win-Friends-Influence-People/dp/0671027034/ref=sr_1_3?ie=UTF8&qid=1546013739&sr=8-3&keywords=how+to+win+friends+and+influence+people+by+dale+carnegie',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'Tools of Titans',
            'bookAuthor' => 'Tim Ferris',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/tools-of-titans.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Tools-Titans-Billionaires-World-Class-Performers/dp/1328683788/ref=sr_1_1?ie=UTF8&qid=1546013862&sr=8-1&keywords=tools+of+titans',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'Influence',
            'bookAuthor' => 'Robert B. Cialdini',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/influence.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Influence-Psychology-Persuasion-Robert-Cialdini/dp/006124189X/ref=sr_1_3?ie=UTF8&qid=1546013978&sr=8-3&keywords=influence',
            'categoryId' => 2
        ]);

        Book::create([
            'bookTitle' => 'The Personal MBA',
            'bookAuthor' => 'Josh Kaufman',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/the-personal-mba.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Personal-MBA-Master-Art-Business/dp/1591845572/ref=sr_1_1?ie=UTF8&qid=1546223949&sr=8-1&keywords=personal+mba',
            'categoryId' => 3
        ]);

        Book::create([
            'bookTitle' => 'The 80/20 Principle',
            'bookAuthor' => 'Richard Koch',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/the-80-20-principle.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/80-20-Principle-Third-Achieving-ebook/dp/B000SEGG5G/ref=sr_1_1?ie=UTF8&qid=1546224042&sr=8-1&keywords=80+principle',
            'categoryId' => 3
        ]);

        Book::create([
            'bookTitle' => 'The 10X Rule',
            'bookAuthor' => 'Grant Cardone',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/the-10x-rule.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/10X-Rule-Difference-Between-Success/dp/0470627603/ref=sr_1_1?ie=UTF8&qid=1546224133&sr=8-1&keywords=10x+rule',
            'categoryId' => 3
        ]);

        Book::create([
            'bookTitle' => 'Start with Why',
            'bookAuthor' => 'Simon Sinek',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/start-with-why.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Start-Why-Leaders-Inspire-Everyone/dp/1591846447/ref=sr_1_1?ie=UTF8&qid=1546224550&sr=8-1&keywords=start+with+why',
            'categoryId' => 4
        ]);

        Book::create([
            'bookTitle' => 'Smarter Faster Better',
            'bookAuthor' => 'Charles Duhigg',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/smarter-faster-better.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Smarter-Faster-Better-Transformative-Productivity/dp/0812983599/ref=sr_1_1?ie=UTF8&qid=1546224617&sr=8-1&keywords=smarter+faster+better',
            'categoryId' => 4
        ]);

        Book::create([
            'bookTitle' => 'Springboard',
            'bookAuthor' => 'G. Richard Shell',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/springboard.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Springboard-Launching-Personal-Search-Success/dp/1591847001/ref=sr_1_1?ie=UTF8&qid=1546224753&sr=8-1&keywords=springboard',
            'categoryId' => 4
        ]);

        Book::create([
            'bookTitle' => 'Secret Sauce',
            'bookAuthor' => 'Austen Allred',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/secret-sauce.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Secret-Sauce-Ultimate-Growth-Hacking/dp/1635877393/ref=sr_1_7?ie=UTF8&qid=1546224858&sr=8-7&keywords=secret+sauce',
            'categoryId' => 5
        ]);

        Book::create([
            'bookTitle' => 'Netflixed',
            'bookAuthor' => 'Gina Keating',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/netflixed.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Netflixed-Epic-Battle-Americas-Eyeballs/dp/1591846595/ref=sr_1_1?ie=UTF8&qid=1546224961&sr=8-1&keywords=netflixed+book',
            'categoryId' => 5
        ]);

        Book::create([
            'bookTitle' => 'Marketing for Developers',
            'bookAuthor' => 'Justin Jackson',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790672/booksql/marketing-for-developers.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://devmarketing.xyz',
            'categoryId' => 5
        ]);

        Book::create([
            'bookTitle' => 'Drive',
            'bookAuthor' => 'Daniel H. Pink',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790665/booksql/drive.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Drive-Surprising-Truth-About-Motivates/dp/1594484805/ref=sr_1_1?ie=UTF8&qid=1546225150&sr=8-1&keywords=drive+daniel+pink',
            'categoryId' => 6
        ]);

        Book::create([
            'bookTitle' => 'Deep Work',
            'bookAuthor' => 'Cal Newport',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790665/booksql/deep-work.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Deep-Work-Focused-Success-Distracted/dp/1455586692/ref=sr_1_2?ie=UTF8&qid=1546225207&sr=8-2&keywords=deep+work',
            'categoryId' => 6
        ]);

        Book::create([
            'bookTitle' => 'Crushing It',
            'bookAuthor' => 'Gary Vaynerchuk',
            'bookImage' => 'https://res.cloudinary.com/dqzxpn5db/bookImage/upload/v1547790665/booksql/crushing-it.jpg',
            'bookDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'bookLink' => 'https://www.amazon.com/Crushing-Great-Entrepreneurs-Business-Influence/dp/0062674676/ref=sr_1_2?ie=UTF8&qid=1546225290&sr=8-2&keywords=crushing+it',
            'categoryId' => 6
        ]);
    }
}
