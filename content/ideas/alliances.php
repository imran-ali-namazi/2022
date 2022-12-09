<?php
echo '<a href="' . am_var('url') . 'alliances/">Alliances Home</a>';
echo '<h2>Allies</h2>';
menu('/content/allies/', ['parent-slug' => 'alliances/']);
echo '<hr />';
$ally = am_var('page_parameter1');

$items = [
	'common-planet' => [ 'email' => 'future@common-planet.org' ],
	'love-for-life' => [ 'email' => 'action@loveforlife.com.au' ],
];

if ($ally) {
	$item = $items[$ally];
	echo '<h1>Ally: ' . humanize($ally) . '</h1><hr />';
	echo '<div class="engage" data-to="' . $item['email'] . '" data-cc="team@yieldmore.org" data-name="' . humanize($ally) . '">';
	render_txt_or_md(SITEPATH . '/content/allies/' . $ally . '.md');
	echo '</div>';
} else {
	render_txt_or_md('# Alliances for a Golden World
[Alliances for a golden world](https://groups.io/g/alliances-for-a-golden-world) is a dream to unite the genuine charities and individuals of this world.

Based on [Dear Brother](https://imran.yieldmore.org/dear-brother/), Imran\'s first revelation for YieldMore.org, **10,000 LOVING MOVEMENTS** are going to change the status quo and make humankind\'s life on Earth Paradise Like once more.

All the scriptures and prophets have confirmed it. But we need to survive our technological adolescece and use our tools to enact new themes of kindness. **LOVE is the force that will bring us to a brighter tomorrow**.

If you are a Visionary Leader or a Progressive thinking Community / Charity / Conscious Business and want to join the councils of others like you, please [fill in this form](https://forms.gle/U4uqX1QQNMfF9biD9).

Do read the [Lightworker Guidelines and FAQs](https://docs.google.com/document/d/1vfo7TwyPl-s4vnLrDaDbYDY1r7d42yAE8HOPylFNWqU/edit?usp=sharing) before signing up.

When you reach out to your readers and volunteers, encourage them to track their activity on the lightworker specific "enthusiast" form (listed below) so we all know who is being helped and how.

You may [subscribe to our group](https://groups.io/g/alliances-for-a-golden-world) and then send an introduction email to [alliances@yieldmore.org](mailto:alliances@yieldmore.org).

----
* I have [written a few poems on the subject](https://imran.yieldmore.org/poems/for/msa/), and invite you, dear comrade to come breathe fresh perspective and courage into our collective will.
* Please see the [original community invite of 2018](https://legacy.yieldmore.org/speak/shasa/6-join-us/).
* Meant to magnify goodness and get forward thinking individuals and groups to **acknowledge and support one another**, helping each other\'s **dreams** to manifest sooner, our community has the single minded purpose of achieving [the Life Divine here on Earth](https://archives.yieldmore.org/cwsa-21-22-the-life-divine/).

<p class="speakable">What members of the Alliances project MAY believe</p>

1. I am comforted to know that there are worlds where the true value of art is understood.
2. That there are worlds where Bright Ones choose to come back out of love to teach us.
3. That God\'s divine spark exists through music which brings us our ebbs and flows.
4. That the powerful play goes on and ye may contribute a verse.
5. That human things must be known to be loved, but divine things must be loved to be known.
6. That music exists which can heal hurts (imagine / lady in black), bring you to your knees (gethsemane).
7. It can make u want to go on (closer to believing, coming back to life).
8. It can make you think of enlightenment (the wall).
9. It can make you think of all that\'s good in you.
10. It can make you want to give it all.
'); }
