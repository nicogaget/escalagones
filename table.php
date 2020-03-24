<?php
// page interieur.php
$welcomeInfos=[
    ['page' => 'Grimper en intérieur',
        'infos'=>'Il existe différentes salles pour grimper sur Lyon, que vous soyez adeptes du bloc ou de la voie. Découvrez ici les différents pratiques, les salles et leurs offres !',
        'pageLink'=> "interieur.php"
    ],
    ['page' => 'Grimper en extérieur',
        'infos'=>'Grimper en extérieur est accessible à tous, à conditions de connaître les bons spots ! Découvrez ici les meilleurs endroits pour grimper en extérieur, dans Lyon et ses environs.',
        'pageLink'=> 'exterieur.php'
    ],
    ['page' => 'Grimper ensemble',
        'infos'=> 'Si le bloc peut se pratiquer seul.e, les voies nécessitent un.e partenaire de grimpe. Ici nous regroupons des annonces pour vous retrouver, et passer un bon moments à la salle en étant sûr d\'avoir un.e partenaire. Vous pouvez-aussi retrouver des événements pour grimper en extérieur ou proposer vos propres événements !',
        'pageLink'=> 'grimperEnsemble.php'
    ],
    ['page' => 'Matériel',
        'infos'=> 'Débutant.e.s ou initié.e.s, si vous cherchez des conseils sur le matériel à avoir, vous êtes au bon endroit. Retrouvez le matériel de base pour du bloc, de la voie, ou l\'aventure à l\'extérieur.',
        'pageLink'=> 'materiel.php'
    ],
    ['page' => 'Contactez nous !',
        'infos'=> 'Une question ? Une envie de proposer un événement ? Pour toute demande, n\'hésitez pas à nous contacter via notre formulaire. Toute la team Escalagones se fera un plaisir de vous répondre.',
        'pageLlink' => 'contact.php'
    ]
];
$roomsVoies = [
    ['type' => 'Salle de voie',
        'name' => "VERTICAL'ART",
        'infos' => 'A 5 mn de Lyon un bâtiment de 2000m² dont 1000 m² grimpables aux blocs variés et accessibles à tous.',
        'openingTime' => 'Du Lundi au Dimanche de 11h00 à 23h00.',
        'webSiteName' => 'Vertical\'art.fr',
        'webSite' => 'https://lyon.vertical-art.fr/',
        'googleMap' => 'https://g.page/Verticalartlyon?share',
        'img' => 'images/ng_bloc.jpg',
        'imgAlt' =>"Vertical'art'"
    ],
    ['type' => 'Salle de voie',
        'name' => 'CLIMB UP LYON CONFLUENCE',
        'infos' => 'Fun Climbing et activités ludiques pour les plus jeunes, une salle de voies avec des murs de 22 mètres de long et des itinéraires du.de la débutant.e à l\'expert.e!',
        'openingTime' => 'Du Lundi au Dimanche de 10h00 à 23h30',
        'webSiteName' => 'Lyon-confluence.climb-up.fr',
        'webSite' => 'https://lyon-confluence.climb-up.fr/',
        'googleMap' => 'https://goo.gl/maps/YG4gTagScJnpMZVh9',
        'img' => 'images/ng_bloc2.jpg',
        'imgAlt' =>"CLIMB UP LYON CONFLUENCE'"

    ],
    ['type' => 'Salle de voie',
        'name' => 'CLIMB UP LYON GERLAND',
        'infos' => 'Fun Climbing et activités ludiques pour les plus jeunes, une salle de voies avec des murs de 22 mètres de long et des itinéraires du.de la débutant.e à l\'expert.e!',
        'openingTime' => 'Du Lundi au Dimanche de 10h00 à 23h30',
        'webSiteName' => 'Lyon-gerland.climb-up.fr',
        'webSite' => 'https://lyon-gerland.climb-up.fr/',
        'googleMap' => 'https://goo.gl/maps/5JSNYDZpNGxgfpAv7',
        'img' => 'images/ng_bloc3.jpeg',
        'imgAlt' =>"CLIMB UP LYON GERLAND"
    ],
    ['type' => 'Salle de voie',
        'name' => 'ESCALADE A L\'ARBRESLE',
        'infos' => 'Voies, blocs, grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre, enfant ou adulte, tous pratiquent dans ce même lieu de vie!',
        'openingTime' => ' Mardi & Jeudi 12:00-22:00 / Mercredi & Vendredi 14:00-22:00 / Samedi 09:00-18:00',
        'webSiteName' => 'espace-escalade.com',
        'webSite' => 'http://www.espace-escalade.com/',
        'googleMap' => 'https://goo.gl/maps/Qx4HWtkeiowy7x1K8',
        'img' => 'images/ng_bloc4.jpg',
        'imgAlt' =>'ESPACE ESCALADE A L\'ARBRESLE'
    ],
    ['type' => 'Salle de voie',
        'name' => 'HOLD\'UP ESCALADE',
        'infos' => 'Voies, blocs, une des plus grandes salles d\'escalade de France au cœur de Lyon. Grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre.',
        'openingTime' => 'Du Lundi au Dimanche de 11h00 à 22h00.',
        'webSiteName' => 'holdup-escalade.fr',
        'webSite' => 'http://holdup-escalade.fr/',
        'googleMap' => 'https://g.page/holdupescalade?share',
        'img' => 'images/ng_bloc5.jpg',
        'imgAlt' =>'HOLD\'UP ESCALADE'
    ],

];
$roomsBloc=[
    ['type' => 'Salle de bloc',
        'name' => 'MROC LAENNEC',
        'webSiteName' => 'holdup-escalade.fr',
        'webSite' => 'https://laennec.mroc.fr/',
        'googleMap' => 'https://g.page/mroclaennec?share'
    ],
    ['type' => 'Salle de bloc',
        'name' => 'MROC PART-DIEU',
        'webSiteName' => 'partdieu.mroc.fr',
        'webSite' => 'https://partdieu.mroc.fr',
        'googleMap' => 'https://g.page/mrocpartdieu?share'
    ],
    ['type' => 'Salle de bloc',
        'name' => 'MROC VILLEURBANNE',
        'webSiteName' => 'villeurbanne.mroc.fr',
        'webSite' => 'https://villeurbanne.mroc.fr/',
        'googleMap' => 'https://g.page/mrocvilleurbanne?share'
    ]
    ];
$outsideRooms =[
    ['name'=>'Mur de la Mulatière',
    'infos'=> 'Site de structure artificielle d\'escalade gratuite et libre d\'accès intéressant pour ses voies jusqu\'au 5c.',
    'webSite'=> 'https://www.lamulatiere.fr/index.php/Loisirs?idpage=128&idmetacontenu=177',
    'googleMap'=>'https://www.google.com/maps/place/Mur+de+La+Mulati%C3%A8re/@45.7256682,4.8061058,15z/data=!4m12!1m6!3m5!1s0x0:0xce7e8929450f0a6d!2sMur+de+La+Mulati%C3%A8re!8m2!3d45.7256682!4d4.8061058!3m4!1s0x0:0xce7e8929450f0a6d!8m2!3d45.7256682!4d4.8061058'
    ],
    ['name'=>'Mur de la Croix Rousse',
    'infos'=> 'Site de structure artificielle d\'escalade gratuite et libre d\'accès intéressant pour ses voies jusqu\'au 5c et du 6a au 6c.',
    'webSite'=> 'https://climbingaway.fr/fr/site-escalade/mur-de-la-croix-rousse',
    'googleMap'=>'https://www.google.com/maps/search/mur+escalade+de+la+croix+rousse/@45.7779541,4.8197794,16z'
    ],
    ['name' =>'Salle d\'escalade de Curis au Mont d\'Or',
    'infos'=> 'Vingt six voies sont proposées entre 10 et 15m de haut. La FFME en assure l’entretien et la sécurité.',
    'webSite'=> 'https://www.curis.fr/site-descalade/',
    'googleMap'=>'https://www.google.com/maps/place/Curris/@45.867891,4.8131168,15z/data=!4m5!3m4!1s0x0:0x777b76898a0f317e!8m2!3d45.867891!4d4.8131168'
    ]
];
$events=[
    ['name'=> 'Challenge Grimpe',
    'infos'=>'Rejoignez-nous ce samedi 14 mars pour notre nouveau challenge chronométré : un.e seul.e grimpeur.se sera gagnant.e !',
    'webSite'=>'#',
    'img'=>'images/gd_climber_force.jpg',
    'photoCreditLink'=>'https://visualhunt.com/re6/95a6fcb0',
    'photoCreditName'=>'Visualhunt.com'
    ],
    ['name'=> 'Ice Climbing !',
    'infos'=>'Dimanche 22 mars, nous vous proposons de venir affronter les torrents glacés des Alpes. Au programme, escalade d\'une cascade gelée, qui promet pas mal de frissons !',
    'webSite'=>'#',
    'img'=>'images/gd_iceClimb.jpg',
    'photoCreditLink'=>'https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1247606',
    'photoCreditName'=>'Pixabay.com'
    ],
    ['name'=> 'Grimper avec vos Gones!',
    'infos'=>'Le samedi 28 mars, à partir de 15h : parents débutants ou expérimentés, faites découvrir votre passion à vos enfants ! Ils auront accès à un mur dédié, accompagnés d\'un.e animateur.trice, en toute sécurité. Activités accessibles aux enfants à partir de 4 ans.',
    'webSite'=>'#',
    'img'=>'images/gd_enFamille.png',
    'photoCreditLink'=>'https://visualhunt.com/re6/e4cb601b',
    'photoCreditName'=>'VisualHunt.com'
    ],
];
$climbTogether=[
    ['name'=>'Robert',
        'infos'=>'Robert, grimpeur expert à Villeurbanne cherche un.e partenaire de grimpe,
                    contactez-le ici.',
        'img'=>'images/gd_robert.jpg',
        'contact'=>'#'
        ],
    [
        'name'=>'Claire',
        'infos'=>'Claire, grimpeuse expérimentée, cherche un.e partenaire de grimpe, contactez-la ici.',
        'img'=>'images/gd_claire.png',
        'contact'=>'#'
    ]
];