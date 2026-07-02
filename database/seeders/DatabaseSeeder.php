<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BlogPost;
use App\Models\Setting;
use App\Models\ContentBlock;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Admin User
        User::updateOrCreate(
            ['email' => 'upc@gmail.com'],
            [
                'name' => 'Universal Peace Council Admin',
                'password' => Hash::make('Justice'),
            ]
        );

        $blogs = [
            [
                'title' => 'How Mobile Health Camps Lifelines Save Lives in Mumbai Slums',
                'summary' => 'Our medical camps bring essential screenings, health checkups, and free medicine directly to those in need, offering referrals for severe cases.',
                'content' => 'Universal Peace Council brings crucial healthcare services directly into marginalized communities. For many families in the Royal Palms area and wider Mumbai, basic healthcare is an unaffordable luxury. Our General Health Camps bring medical check-ups, BP screenings, and blood sugar tests directly to local slums. We distribute free, basic medicine for common ailments and focus heavily on preventive care and hygiene training. In cases of severe medical conditions, we provide patients with hospital referrals and financial assistance to cover critical treatments.',
                'category' => 'Humanity & Health',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS',
                'reading_time' => '4 min read',
            ],
            [
                'title' => 'Preventive Care: The Future of Community Healthcare',
                'summary' => 'Focusing on early detection and preventative hygiene routines to build a healthier, more resilient neighborhood.',
                'content' => 'Preventive care is the cornerstone of sustainable health. At Universal Peace Council, we believe that education is just as important as medication. Our camps focus on early diagnosis of diabetes and high blood pressure, two chronic conditions that often go undetected. Volunteers teach children and adults essential hygiene routines, clean water practices, and simple first-aid techniques. Preventing diseases before they escalate is our ultimate goal.',
                'category' => 'Humanity & Health',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDOTP--x46oybEB0uJNigd39GnqPfsIubWWlk1aGsFwUD88J4oErRjMb1SGQzjvRG9piuwMKifDX0f7DuAr8WwLOmTVyDpHKwyw2y5C2EH6RtfF3TS_U4o3Y89m6_kSIue3ZFa6r94DKq7CtVWCwqqczslyKIkrR1D7F5vf_m1edLiJQnesibtnT2eZZAQsuLMT8ZkurO3P7Srpe1IRs9lqramaRSCtrXlIfKIrLhOsmhIXFeqV-Vmb',
                'reading_time' => '3 min read',
            ],
            [
                'title' => 'Caring for the Silent: A Glimpse into Stray Shelters',
                'summary' => 'Exploring the operational challenges and success stories of strays shelters in suburban Mumbai.',
                'content' => 'Street animals often bear the brunt of urban expansion. Our dedicated stray shelter program provides a safe haven for injured, sick, and abandoned dogs and cats. Equipped with basic surgical tables and staffed by volunteer veterinarians, we perform critical operations daily. Beyond treatment, our goal is community integration—raising awareness about stray friendly neighborhoods and driving adoption campaigns.',
                'category' => 'Animal Welfare',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDU9GWH0fePWgxgdycCk2cuewevbJyPG-krhic0rI5MbE8deVL5RBMTGjH_eXY0AA_Nhjf_nmjMp0rGW8DTbltDQU3N_-WUEUA8zamkWKIppHcLdrlX8QTGNVpjFOwlGEaFjl7fhw5CI-0P8opyC_NjF4yrqbI1vUk49k4UIX5tkdrkqdig3B42qFLzeR3FeO4xaDAJ_G3wI7DtbzxP2R52mD44RjgJTyaTnZkhL6kohj9TWXEd-ZqZ',
                'reading_time' => '5 min read',
            ],
            [
                'title' => 'Vaccination Drives: Shielding Communities from Zoonotic Threat',
                'summary' => 'Why mass anti-rabies vaccination is the most human way to manage urban stray populations.',
                'content' => 'Rabies is a preventable but deadly disease. Our mobile vaccination clinics coordinate with local community leaders to map stray colonies and administer anti-rabies and multi-disease vaccines. By protecting the dogs, we protect the families that share the streets with them, reducing conflict and fostering harmony between nature and humanity.',
                'category' => 'Animal Welfare',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDU9GWH0fePWgxgdycCk2cuewevbJyPG-krhic0rI5MbE8deVL5RBMTGjH_eXY0AA_Nhjf_nmjMp0rGW8DTbltDQU3N_-WUEUA8zamkWKIppHcLdrlX8QTGNVpjFOwlGEaFjl7fhw5CI-0P8opyC_NjF4yrqbI1vUk49k4UIX5tkdrkqdig3B42qFLzeR3FeO4xaDAJ_G3wI7DtbzxP2R52mD44RjgJTyaTnZkhL6kohj9TWXEd-ZqZ',
                'reading_time' => '4 min read',
            ],
            [
                'title' => 'Aeration and Bio-remediation: Breathing Life into Lakes',
                'summary' => 'Understanding dissolved oxygen and how small bio-remediation tools can clean massive stagnating pools.',
                'content' => 'Stagnant water bodies in urban regions easily become toxic pools of eutrophication. Our team designs and deploys low-cost solar aerators that introduce oxygen bubbles into deep water layers. This aids beneficial aerobic microbes in decomposing organic waste, significantly lowering the Biochemical Oxygen Demand (BOD) and reviving aquatic plants and fish colonies.',
                'category' => 'Climate Action',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBiE7jwpWzOcQ9BiyJKxkya_ob6_ENpf7QoCx_zo2IpjUXn-SuvziEcP-70hZ98Dzr-IyG_pKRePbV_xNpqw7sKf_ocLRu7F0cmlz24hYGXfeqZ8VBQfc7h8cLfCXxzfCUZ8JutUCDUmkEkpNKNP4ogWGNvCguyzwiXQAiy0veNKBY79-LcLbWfrQTXNmvgjcKMvGpV2ucU0z5f4RrobXah1JFS9xARdmVCCq_1N79m6Q1m9dtPrFeh',
                'reading_time' => '5 min read',
            ],
            [
                'title' => 'Rooftop Afforestation: Fighting Urban Heat Islands',
                'summary' => 'How pocket gardens on flat roofs lower structural temperatures and clean local air columns.',
                'content' => 'Concrete absorbs heat during the day and radiates it at night. To combat this heat island effect, Universal Peace Council initiates community rooftop gardening. We help flat owners install soil beds, plant native shrubs, and manage micro-composting units. These rooftop pocket jungles lower internal building temperatures by up to 4 degrees and absorb tons of carbon.',
                'category' => 'Climate Action',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCjh6w7rGSRxv2hxp_ocaEHbI5oaAppt4g-DE8BapFuFxUJFbXzmtPXK0mZnuRYHiu66kdzZlTY1tTQ62H2h5i0ahcT3PppaFv37nNbrJxDk2ZoAMB-ESY9JNiOOnX8y136cl7Y8GvfokYetopyzVtzSv5lmim_Rzx_xbEGA9GGe0LbMkuwpHoUMooNDtu66bRLZiLMO8cjiBgY61kg7OqpxIQwSHoFbTWIlkNXBpADi1SfP3DINDX_',
                'reading_time' => '4 min read',
            ],
            [
                'title' => 'Bridging Schools: Laying Foundations for Drop-out Kids',
                'summary' => 'How transitional educational camps prepare marginalized children to re-enter mainstream classrooms.',
                'content' => 'Many children from temporary labor camps drop out of formal education due to constant shifting. Our Bridging Schools act as transitional hubs. We provide basic literacy, numerical reasoning, and language support, helping children catch up to their age appropriate levels. Our volunteer groups then assist families in completing the admissions process for local government schools.',
                'category' => 'Education',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhmP00XI_r8KWTAJPupV1SAYABFXN83S1EEL45IlKjaAdVDbRavZX2Xuw4JfcZfaGIKMs9vJfLJUoE4t1z5AokJv24QD4gVkeJ2sNteCJd_pxRkB5UI4kHiQl6f_Koow_HmSaACkgWFlNcE-rFTm0CQqLKrRuaODpSoJYix2EYjGOrt_m1vto8nsaLo8wzyfsXSLIL1W-b9I4-NwdlX6SdYgTRaPEiSD-ik_GuMT6Vr90L9Jf8yKx3',
                'reading_time' => '4 min read',
            ],
            [
                'title' => 'Bridging the Digital Divide: Free Coding Labs for Girls',
                'summary' => 'Introducing logical reasoning and basic programming skills to under-represented young girls.',
                'content' => 'In the modern economy, digital literacy is non-negotiable. Universal Peace Council sets up basic computer and programming labs in rural margins. We run structured courses on algorithms, web coding, and design for girls, helping them view computers not just as devices, but as tools of creation and pathways to future engineering careers.',
                'category' => 'Education',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhmP00XI_r8KWTAJPupV1SAYABFXN83S1EEL45IlKjaAdVDbRavZX2Xuw4JfcZfaGIKMs9vJfLJUoE4t1z5AokJv24QD4gVkeJ2sNteCJd_pxRkB5UI4kHiQl6f_Koow_HmSaACkgWFlNcE-rFTm0CQqLKrRuaODpSoJYix2EYjGOrt_m1vto8nsaLo8wzyfsXSLIL1W-b9I4-NwdlX6SdYgTRaPEiSD-ik_GuMT6Vr90L9Jf8yKx3',
                'reading_time' => '3 min read',
            ],
            [
                'title' => 'Vocational Upskilling: Tailoring, Weaving and Clay Shaping',
                'summary' => 'Empowering adult learners with marketable artisan skills to break long cycles of debt.',
                'content' => 'Basic literacy is enhanced when paired with direct economic utility. Our evening classes train adult learners in traditional handloom weaving, terracotta clay shaping, and sewing. This allows participants to craft commercial products, join local artisan guilds, and generate extra streams of home income, creating absolute self-reliance.',
                'category' => 'Adult Literacy',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCcl2Bi25E2GOC-TMtnRLGQomj0Tph91U59XHjMOlL9CwC-L8vgrstXnG_SeofvmrHuqCcLvJtSHc1c9fk5GPX4WjBl6co9_WLH3rJKvxF2ZV7cwETObw97NlUnBcf_ykZ6JoncUR4BTDJOXbnGoT6X6eaxL7VHfyDiKSB_vItEElsu9egDPrmtD5Oe0y87JflBXiEnZN0IN4E4CPS45qCnIsRx-QyMPgnn8fWfe8hhQyIL63Mxd0cX',
                'reading_time' => '5 min read',
            ],
            [
                'title' => 'Financial Literacy: Navigating Mobile Banking and Micro-Credits',
                'summary' => 'Empowering rural women with safe digital banking practices to secure their earnings.',
                'content' => 'Earning money is only the first step; managing it safely is what guarantees security. We organize basic training camps to teach adult learners how to operate mobile banking apps, use secure UPI transactions, and access micro-credit options. This protects them from predatory local money-lenders and keeps their savings safe.',
                'category' => 'Adult Literacy',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCcl2Bi25E2GOC-TMtnRLGQomj0Tph91U59XHjMOlL9CwC-L8vgrstXnG_SeofvmrHuqCcLvJtSHc1c9fk5GPX4WjBl6co9_WLH3rJKvxF2ZV7cwETObw97NlUnBcf_ykZ6JoncUR4BTDJOXbnGoT6X6eaxL7VHfyDiKSB_vItEElsu9egDPrmtD5Oe0y87JflBXiEnZN0IN4E4CPS45qCnIsRx-QyMPgnn8fWfe8hhQyIL63Mxd0cX',
                'reading_time' => '3 min read',
            ],
            [
                'title' => 'Ethical Trade: Why We Send 100% of Sales Directly to Artisans',
                'summary' => 'Understanding the economic exploitation of artisans and our mission for transparent craft trade.',
                'content' => 'Many artisans sell their hard work to middlemen for a fraction of its true value. Our Artisan Encouragement initiative creates a direct link between the buyer and the artisan. When you purchase an item or make an inquiry in our products section, the request goes directly to the cooperative. We manage the delivery logistics, ensuring the artisan receives the full retail price, helping them escape debt cycles and preserve their ancestral crafts.',
                'category' => 'Traditional Arts',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS',
                'reading_time' => '4 min read',
            ],
        ];

        foreach ($blogs as $blog) {
            BlogPost::updateOrCreate(
                ['slug' => Str::slug($blog['title'])],
                [
                    'title' => $blog['title'],
                    'summary' => $blog['summary'],
                    'content' => $blog['content'],
                    'category' => $blog['category'],
                    'image_url' => $blog['image_url'],
                    'reading_time' => $blog['reading_time'],
                ]
            );
        }

        // Seed Default Razorpay Settings
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'razorpay_key' => 'rzp_test_39f70d21f475',
                'razorpay_secret' => 'sec_test_3422d0a72a1c',
                'is_enabled' => false,
            ]
        );

        // Seed Default Content Blocks
        $contentSeeds = [
            // Theme configuration
            ['page' => 'global', 'section' => 'theme', 'element_key' => 'background_color', 'type' => 'color', 'value' => '#ffc7fd'],
            ['page' => 'global', 'section' => 'theme', 'element_key' => 'primary_color', 'type' => 'color', 'value' => '#130c5f'],
            ['page' => 'global', 'section' => 'theme', 'element_key' => 'secondary_color', 'type' => 'color', 'value' => '#a200ba'],

            // Home Page content
            ['page' => 'home', 'section' => 'hero', 'element_key' => 'title', 'type' => 'text', 'value' => 'Idea is to leave the world at least same, if not better than what we received.'],
            ['page' => 'home', 'section' => 'hero', 'element_key' => 'subtitle', 'type' => 'textarea', 'value' => 'Universal Peace Council operates with radical empathy in suburban Mumbai, deploying health vans, animal rescue shelters, and afforestation centers.'],
            ['page' => 'home', 'section' => 'hero', 'element_key' => 'image_1', 'type' => 'image', 'value' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS'],
            ['page' => 'home', 'section' => 'hero', 'element_key' => 'image_2', 'type' => 'image', 'value' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS'],
            ['page' => 'home', 'section' => 'hero', 'element_key' => 'image_3', 'type' => 'image', 'value' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_1_count', 'type' => 'text', 'value' => '124,853'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_1_label', 'type' => 'text', 'value' => 'Total Visitors'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_2_count', 'type' => 'text', 'value' => '₹18M+'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_2_label', 'type' => 'text', 'value' => 'Funds Disbursed'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_3_count', 'type' => 'text', 'value' => '12'],
            ['page' => 'home', 'section' => 'stats', 'element_key' => 'stat_3_label', 'type' => 'text', 'value' => 'States Impacted'],

            // About Page content
            ['page' => 'about', 'section' => 'vision', 'element_key' => 'title', 'type' => 'text', 'value' => 'Universal Peace Council'],
            ['page' => 'about', 'section' => 'vision', 'element_key' => 'description', 'type' => 'textarea', 'value' => 'Idea is to leave the world at least same, if not better than what we received.'],
            ['page' => 'about', 'section' => 'founder', 'element_key' => 'title', 'type' => 'text', 'value' => 'Visionary Founder'],
            ['page' => 'about', 'section' => 'founder', 'element_key' => 'name', 'type' => 'text', 'value' => 'Dr. Soma Basu Sharma'],
            ['page' => 'about', 'section' => 'founder', 'element_key' => 'bio', 'type' => 'textarea', 'value' => 'Dr. Soma Basu Sharma is a visionary leader, environment scientist, and child activist based in Royal Palms, Mumbai. She dedicated her life to building community structures that merge modern sciences with empathy.'],
            ['page' => 'about', 'section' => 'founder', 'element_key' => 'img', 'type' => 'image', 'value' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC424L1ndM-_hVAwCO4zMi4i7CAIJtfB9RDzdl2-FmM1r_3p63d1nDusUhZkSxLlPegD6ODS_GDjsqbFMgWlBBT4MX4fGuPjDWGDnpNouzNBfEyjy4Sq-YXJt0NMBT2S8Zl8nZu-79NIT0_zvck4qm_uDIB3z3l5QAbQNtbfR0bW0drokUw8yv76vixPpSTxodyyAWBnsww93IN4AN2u1TUdBitYjg1vyPxv-Bf4t-mJaGyvBdQ48G8'],
            
            // About Initiatives
            ['page' => 'about', 'section' => 'init_1', 'element_key' => 'title', 'type' => 'text', 'value' => 'Humanity & Health'],
            ['page' => 'about', 'section' => 'init_1', 'element_key' => 'desc', 'type' => 'textarea', 'value' => 'Running daily health clinics, emergency ambulance teams, and basic diagnostic support in rural belts.'],
            ['page' => 'about', 'section' => 'init_2', 'element_key' => 'title', 'type' => 'text', 'value' => 'Animal Welfare'],
            ['page' => 'about', 'section' => 'init_2', 'element_key' => 'desc', 'type' => 'textarea', 'value' => 'Establishing stray shelters, veterinary clinics, and vaccination drives across Mumbai suburban pockets.'],
            ['page' => 'about', 'section' => 'init_3', 'element_key' => 'title', 'type' => 'text', 'value' => 'Climate Action'],
            ['page' => 'about', 'section' => 'init_3', 'element_key' => 'desc', 'type' => 'textarea', 'value' => 'Organizing river cleanups, local lake aeration systems, and urban rooftop afforestation campaigns.'],
            ['page' => 'about', 'section' => 'init_4', 'element_key' => 'title', 'type' => 'text', 'value' => 'Education'],
            ['page' => 'about', 'section' => 'init_4', 'element_key' => 'desc', 'type' => 'textarea', 'value' => 'Running free bridging schools, scholarship campaigns, and digital literacy labs for girls.'],
            ['page' => 'about', 'section' => 'init_5', 'element_key' => 'title', 'type' => 'text', 'value' => 'Artisan Revival'],
            ['page' => 'about', 'section' => 'init_5', 'element_key' => 'desc', 'type' => 'textarea', 'value' => 'Supporting traditional potters and sarees weavers through fair market access and tools support.'],

            // Gallery Page content
            ['page' => 'gallery', 'section' => 'hero', 'element_key' => 'title', 'type' => 'text', 'value' => 'Gallery & Field Logs'],
            ['page' => 'gallery', 'section' => 'hero', 'element_key' => 'subtitle', 'type' => 'textarea', 'value' => 'Visual proof of radical empathy. Browse snapshots of our environmental restoration projects, stray rescues, medical setups, and vocational school classes.'],

            // Donation Page content
            ['page' => 'donation', 'section' => 'hero', 'element_key' => 'title', 'type' => 'text', 'value' => 'Invest in Radical Empathy'],
            ['page' => 'donation', 'section' => 'hero', 'element_key' => 'subtitle', 'type' => 'textarea', 'value' => 'Your contribution fuels a movement of radical empathy. Choose a cause that resonates with your spirit and watch the ripple effect of your kindness.'],

            // Contact Page content
            ['page' => 'contact', 'section' => 'hero', 'element_key' => 'title', 'type' => 'text', 'value' => "Let's Create Peace Together"],
            ['page' => 'contact', 'section' => 'hero', 'element_key' => 'subtitle', 'type' => 'textarea', 'value' => 'Have questions about our initiatives or want to get involved? Reach out to our global coordination center in Mumbai.'],
        ];

        foreach ($contentSeeds as $seed) {
            ContentBlock::updateOrCreate(
                [
                    'page' => $seed['page'],
                    'section' => $seed['section'],
                    'element_key' => $seed['element_key']
                ],
                [
                    'type' => $seed['type'],
                    'value' => $seed['value']
                ]
            );
        }
    }
}
