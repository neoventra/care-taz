<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $categories = collect([
            'Home Care',
            'Dementia Care',
            'Family Support',
            'Live-in Care',
        ])->mapWithKeys(function (string $name) {
            $category = BlogCategory::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            );

            return [$name => $category->id];
        });

        $posts = [
            [
                'title' => 'How to choose urgent home care in Nottingham',
                'category' => 'Home Care',
                'excerpt' => 'When care is needed quickly, a clear checklist helps families act with confidence rather than panic.',
                'image' => 'assets/images/care-health-check.jpg',
                'featured' => true,
                'status' => 'published',
                'days' => 8,
                'body' => <<<'HTML'
<p>Urgent home care often starts with a hospital discharge, a sudden change in mobility, or a family carer who can no longer manage alone. Speed matters — but so does choosing a provider who can stay with you beyond the first few days.</p>
<h2>Ask about availability and continuity</h2>
<p>Confirm when care can start, who will visit, and how cover works if a carer is unwell. Continuity of familiar faces makes a large difference to someone who is already unsettled.</p>
<h2>Match the package to real needs</h2>
<p>Personal care, medication prompts, meal support and overnight cover are different skills. A short assessment helps avoid under- or over-prescribing hours.</p>
<p>If you need urgent cover in Nottingham, <a href="/contact-us">speak to the Caretaz team</a> — we will talk through options the same day where possible.</p>
HTML,
            ],
            [
                'title' => 'Supporting someone living with dementia at home',
                'category' => 'Dementia Care',
                'excerpt' => 'Familiar routines, calm communication and the right domiciliary support can help people stay safer at home for longer.',
                'image' => 'assets/images/care-tablet-together.jpg',
                'featured' => false,
                'status' => 'published',
                'days' => 16,
                'body' => <<<'HTML'
<p>Dementia care at home works best when it respects identity, routine and residual independence. Carers who rush tasks or rearrange a familiar environment can increase distress even when intentions are good.</p>
<h2>Keep the day predictable</h2>
<p>Regular visit times, consistent carers and clear handovers help. Families often find that written notes between paid carers and relatives prevent small issues becoming crises.</p>
<h2>Plan for change</h2>
<p>Needs evolve. A package that works this month may need twilight or overnight support later. Reviewing care regularly keeps people safer without leaping straight to residential options.</p>
HTML,
            ],
            [
                'title' => 'What family carers should ask before booking respite',
                'category' => 'Family Support',
                'excerpt' => 'Respite is not a luxury — it is how unpaid carers keep going. Here is what to clarify before cover begins.',
                'image' => 'assets/images/care-garden-outdoors.jpg',
                'featured' => false,
                'status' => 'published',
                'days' => 24,
                'body' => <<<'HTML'
<p>Family carers often wait until they are exhausted before asking for help. Planned respite is usually kinder — for everyone — than an emergency scramble.</p>
<ul>
<li>Will the same carer cover the break where possible?</li>
<li>Have medication, dietary and mobility notes been written down?</li>
<li>Who is the out-of-hours contact if something changes?</li>
</ul>
<p>Caretaz can arrange carer respite cover so families get rest without worrying that standards will slip.</p>
HTML,
            ],
            [
                'title' => 'Live-in care for couples: keeping people together',
                'category' => 'Live-in Care',
                'excerpt' => 'When both partners need support, live-in care can preserve shared routines that residential placements often split apart.',
                'image' => 'assets/images/care-evening-comfort.jpg',
                'featured' => true,
                'status' => 'draft',
                'days' => 3,
                'body' => <<<'HTML'
<p>Couples who have shared a home for decades often want to stay under one roof even when care needs rise. Live-in care can make that possible when visiting packages are no longer enough.</p>
<p>Draft article — publish when the care team has reviewed the final wording.</p>
HTML,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(
                ['slug' => Str::slug($post['title'])],
                [
                    'blog_category_id' => $categories[$post['category']],
                    'title' => $post['title'],
                    'excerpt' => $post['excerpt'],
                    'body' => $post['body'],
                    'featured_image' => $post['image'],
                    'status' => $post['status'],
                    'is_featured' => $post['featured'],
                    'author_name' => 'Caretaz Healthcare',
                    'meta_title' => $post['title'].' | Caretaz Healthcare',
                    'meta_description' => $post['excerpt'],
                    'published_at' => $post['status'] === 'published' ? now()->subDays($post['days']) : null,
                ]
            );
        }
    }
}
