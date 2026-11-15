<?php
/* Cases (/cases/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
get_template_part('template-parts/page-hero', null, [
  'label' => 'Cases', 'title' => 'Se vores cases her',
  'lead'  => 'Historier om kandidater, der har været gennem et forløb hos os – fortalt af kandidaten, virksomheden eller Simply Guiding.',
  'img' => 'cases-hero.jpg', 'img_w' => 1422, 'img_h' => 1067, 'alt' => 'Samtale i et jobcenter', 'btn2_href' => '#cases',
]);
$cases = [
  ['sannes-historie', 'Sannes historie', 'Min IPS-konsulent troede på mig', 'Da Sanne startede i sit IPS-forløb havde hun været uden job i 7 år. Og selv om hun altid havde sagt til sig selv, at hun nok skulle komme tilbage på arbejdsmarkedet, var hun for alvor begyndt at tvivle. Læs historien om, hvordan vi med IPS-metoden hjalp Sanne i job.', 'Læs Sannes historie'],
  ['kadans-historie', 'Kadans historie', 'Mistro spærrede for drømmen om job', 'Her kan du læse om syriske Kadans vej til job som maler efter 1½ år i Danmark. Kadans IPS integrationskonsulent ved Simply Guiding er selv et eksempel på en IPS-succeshistorie. IPS-konsulenten hjalp Kadan i en periode på 6 måneder.', 'Læs Kadans historie'],
  ['sofies-historie', 'Sofies historie', 'Fra patient til studerende', '“Det var et personligt forløb og jeg følte ikke, at jeg var et nummer i rækken. Efter nogle møder gik det op for mig, at den altså var god nok, hun var der rent faktisk for at støtte mig og i mit tempo. Det betød, at jeg kunne knytte mig til IPS-konsulenten.”', 'Læs Sofies historie'],
  ['martins-historie', 'Martins historie', 'Martins drømmejob opstod uventet', 'På grund af sin ADHD havde han svært ved at fastholde et job og var nu på et ressourceforløb med udsigt til førtidspension. Et fremtidsscenarie han bestemt ikke var glad for, for han ville gerne have et arbejde. Her fortæller Martin og virksomheden deres IPS-historie.', 'Læs Martins historie'],
  ['annas-historie', 'Annas historie', '"Nu er jeg igen én, der kan noget"', 'Efter blot 5 måneders forløb hos Simply Guiding blev 41-årige Anna selvforsørgende. Hun bevægede sig fra en 18 måneder lang sygemelding pga. stress til at åbne et bed & breakfast. I dag oplever Anna, at hun er en, der kan noget igen. Her fortæller hun sin historie.', 'Læs Annas historie'],
  ['gunhilds-historie', 'Gunhilds historie', 'Vejen tilbage til arbejdsmarkedet', 'Efter flere års kamp med sine psykiske lidelser endte Gunhild i et ressourceforløb, hvor hun fik tildelt en mentor og en sagsbehandler fra Stevns Kommune, som satte hende i kontakt med en IPS-konsulent fra Simply Guiding. Det blev starten på Gunhilds rejse til et bedre arbejdsliv.', 'Læs Gunhilds historie'],
];
?>
<div id="indhold"></div>
<?php
/* Ny opbygning 15. nov. 2026 i cases-ny.php */
require get_template_directory() . '/cases-ny.php';
get_template_part('template-parts/quote', null, [
  'label' => 'Gunhilds historie',
  'quote' => '"Min IPS-konsulent spurgte mig, hvad jeg ønskede at få ud af at arbejde, og hvad jeg drømte om. Jeg havde slet ikke tænkt på mit arbejdsliv på den måde. Jeg havde nærmere tænkt på, hvad jeg som lærer burde give mine elever i stedet for at fokusere på, hvad jeg selv ville have ud af undervisningen og jobbet."',
  'name' => 'Gunhild', 'role' => 'Deltager på IPS-forløb', 'btn_text' => 'Læs Gunhilds historie', 'btn_href' => '/cases/gunhilds-historie/',
]);
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
