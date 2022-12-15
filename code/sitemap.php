<?php
$var_sections = ['ideas', 'about', 'webring', 'interact', 'possibilities', 'grow', 'grow-teams', 'action'];
if (am_var('local')) $var_sections[] = 'private'; //imrans private notes, excluded from FTPSync. Needs local to be defined before functions.php is included

am_var('sections', $var_sections);

am_var('footer-message', 'Connect people, share ideas, create a platform for collaboration and harmony.');

am_var('pages', [

//	'' => ['title' => '', 'description' => ''],
	'index' => ['title' => 'YieldMore.org for Children, Growth and Healing', 'description' => am_var('footer-message'), 'video' => 'PTIqjpkF5Ss'],

	'programs', //section
	'children' => ['title' => '<strong>Children</strong> for Inner Development', 'description' => 'Curation Based Education, Creative Expression and Project ARYA, aimed at emotional, social and personal development of families.'],
		'collective parenting' => ['title' => '<strong>Collective Parenting</strong> as meaningful activity for groups of families', 'description' => 'Contemplate PROJECT ARYA and the spontaneous formation of Multi Family Learning Pods.'],
		//forward thinkers
		//new age education

	'groups' => ['title' => 'Ideas and Programs for <strong>Groups</strong>', 'description' => 'Close Knit Activities and Ideas for Groups.'],
		'imaginative communities' => ['title' => 'Thinking about all <strong>Communities Imaginatively</strong>', 'description' => 'With the mantra: What behaviours / actions will improve our myriad communities!'],
		'inherent divinity' => ['title' => '<strong>Inherent Divinity</strong> means a level playing field for all', 'description' => 'When we recognize everyone\'s Inherent Divinity we will help the WORKING CLASS Rise in Stature', 'video' => 'KiT63DB1m30'],
		'intimate gatherings' => ['title' => '<strong>Intimate Gatherings</strong> for Inspiration, Abundance, Healing and Expression', 'description' => 'Workshops to: ENJOY | EXPLORE | HEAL | EXPRESS and SHARE a WISDOM WITH WORDS.', 'video' => 'S6E-gzDqmgs'],
		'spaces' => ['title' => '<strong>Spaces</strong> for Growth and Healing', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc.'],
		//collectives
		//peace making

	'serenity' => ['title' => '<strong>Serenity</strong>, Harmony and Healing for All', 'description' => 'Various Resources on Healing ourselves, families and the whole world with strong focus on alternate healing methods and practitioners.'],
		'cancer' => ['title' => 'How to <strong>Combat Cancer</strong>', 'description' => 'Helping people take Informed Decisions, Rootcausing it etc'],
		'resources' => ['title' => '<strong>Health Resources</strong>', 'description' => 'Various Health Resources and Links to Mental Health Professionals'],
		'words' => ['title' => '<strong>Words</strong> for Inspiration and Healing', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future.'],

	'sunlight' => ['title' => '<strong>Evolving Sunlight</strong> and Soulful Moonlight', 'description' => 'Don\'t Repeat Same Mistakes in Corporate Life and share IT Wisdom and Volunteers to NGOs and Charities.', 'video' => '5XR0HGG_iws'],
		'leadership' => ['title' => '<strong>Leadership</strong> Workshop by Mustafa', 'description' => 'Participants must be passionate, dedicated, commited to self, family and community development'],

	'symphony' => ['title' => '<strong>Symphony</strong> of Organizations', 'description' => 'Have a great idea to harmonize the members of a movement? Join us?' ],
		'alliances' => ['title' => '<strong>Alliances</strong> - A Global Network of forward thinking Organizations and Leaders', 'description' => 'LOVE is the force that will bring us to a brighter tomorrow'],
		'crises' => ['title' => 'Champion Causes and Avert <strong>Crises</strong>', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness, animals and education for lower income strata.'],
		'earth' => ['title' => 'Dare we Save our Planet <strong>Earth</strong>', 'description' => 'For all things environmental, worldy and with thoughts of harmony and unification'],
		'growing together' => ['title' => '400 people <strong>Growing Together</strong> in 2 years', 'description' => 'A Blueprint that "shares everything equally after compensation"', 'video' => 'DM_xGyzcYxI'],
		'spirit' => ['title' => 'Instituting a <strong>Spirituality</strong> that Liberates', 'description' => 'A new-age integrative, harmonious and holistic approach to religion, philosophy, spirituality and governance.'],

	'webring', //section
	'world pattern of process' => ['title' => 'A thesis about the <strong>World Pattern of Process</strong>', 'description' => 'A conversation with Rasunah Marsden.'],

	'ideas in action', //section
	'imran' => ['title' => '<strong>Imran</strong>, Founder', 'description' => 'The 400+ poems and new age writing of Imran Ali Namazi.'],

	'global growth', //section
	'help' => ['title' => '<strong>Help</strong> by Kindly Acts', 'description' => '#DirectDonations to the friends we\'ve made and our various families and their centers.'],

	/*
	'interact' => ['title' => '<strong>Interact</strong> with Us Online and Physically', 'description' => 'Links to our groups on tribe.so and groups.io and google groups.'],
	'community' => ['title' => '<strong>Community</strong> - Home for Collaborators, Well Wishers and Allies', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s dreams to manifest sooner...'],
	'tech and web' => ['title' => '<strong>Tech and Web</strong> powered by AmadeusWeb.com', 'description' => 'Use AmadeusWeb to build a Field of Love (Premakshetre) and Dreams enabling your dreams of a spiritual commune.'],
	*/

	'webring', //section
	'delta school' => ['title' => '<strong>Delta</strong> Nursery and Primary School', 'description' => 'Knowledge is Power. Discipline and Diligence.'],
	'vidzi heals' => ['title' => '<strong>Vidzeal</strong> - Healing and Skincare', 'description' => 'Beg to be healed by this lovely woman through her skin-tingling creations.'],

	'about', //section
	'about us' => ['title' => '<strong>About YieldMore.org</strong> and it\'s Spirit', 'description' => 'A candid look at why YieldMore.org exists, it\'s Spirit and Imran\'s intentions.'],
	'imrans profile' => ['title' => 'Profile of <strong>Imran Ali</strong> Namazi', 'description' => 'The Non Tech Profile of founder, trainer, ideator - Imran Ali Namazi.'],
	'imrans resume' => ['title' => 'Resume of <strong>Imran Ali</strong> Namazi', 'description' => 'The Technical Profile of programmer founder, Imran Ali Namazi.'],
	'joyland' => ['title' => 'The Proliferation of <strong>Joyland</strong>', 'description' => 'Old 2019/20 notes on how Joyous Lands could be setup, the forerunner to Spaces for Growth and Healing'],
	'marketplace' => ['title' => 'A Conscious <strong>Marketplace</strong>', 'description' => 'Ideas to start a marketplace for people to promote their products and services in a sustainable ecosystem.'],

//TODO: Notes, deterrents, nuances, criticisms etc

]);
?>
