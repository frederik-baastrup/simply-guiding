<?php
/* IPS-konsulentuddannelse i dokument-layout (inc/doc.php). Teksten er den samme som på siden – kun omstruktureret. */
$folder = get_template_directory_uri() . '/assets/ips-konsulentuddannelse-folder.pdf';
return [
  'aside' => [
    'label' => 'Academy',
    'title' => 'IPS-konsulentuddannelse',
    'text'  => 'For dig, der arbejder i en kommune eller et jobcenter.',
    'facts' => [
      ['Varighed', 'Typisk 54 uger'],
      ['Kursusdage', '15'],
      ['Form', 'Teori, øvelser og rollespil'],
      ['Afslutning', 'Fidelity-evaluering'],
      ['Betaling', 'Faktura eller EAN'],
    ],
    'buttons' => [['Kontakt os', '/kontakt/'], ['Se folder', $folder, 'outline', true]],
    'note' => 'Eller ring på <a href="tel:+4526344454">26 34 44 54</a>',
  ],
  'toc' => 'På siden',
  'sections' => [
    ['id' => 'kort-fortalt', 'nav' => 'Kort fortalt', 'title' => 'Kort fortalt', 'blocks' => [
      ['type' => 'summary', 'boxes' => [
        ['title' => 'Det lærer du', 'tone' => 'green', 'items' => [
          'IPS-metoden og de otte principper, den bygger på',
          'At screene kandidater og arbejde tværfagligt',
          'Virksomhedskontakt, praktikker og jobmatch',
        ]],
        ['title' => 'Det får du', 'tone' => 'sand', 'items' => [
          'Løbende supervision på dine kandidatforløb',
          'Undervisning, praktiske øvelser og rollespil',
          'Mulighed for titlen Certificeret Advanced Practitioner',
        ]],
      ]],
    ]],
    ['id' => 'om-uddannelsen', 'nav' => 'Om uddannelsen', 'title' => 'Bliv uddannet til IPS-konsulent hos Simply Guiding', 'blocks' => [
      ['type' => 'lead', 'text' => 'Med uddannelsen til IPS-konsulent får du indgående viden om metoden og bliver klædt på til at praktisere alle elementer i metoden. Lær om on-boarding af kandidater, at virksomhedsmatche og at opstarte et arbejdsrettet forløb, samt tværfagligt samarbejde og fastholdelse af kandidaten i job eller uddannelse.'],
      ['type' => 'img', 'src' => 'kursus-tilmeld.jpg', 'alt' => 'Kursusdeltagere hos Simply Guiding'],
      ['type' => 'p', 'text' => 'Du og dine kolleger får løbende supervision af din praksis som IPS-konsulent med vejledning på dine kandidatforløb. I jobcentre, der ønsker at introducere IPS som ny praksis, uddannes typisk flere medarbejdere til rollen som IPS-konsulent, så de sammen udgør et IPS-team.'],
    ]],
    ['id' => 'det-laerer-du', 'nav' => 'Det lærer du', 'title' => 'Hvad lærer du på konsulentuddannelsen?', 'blocks' => [
      ['type' => 'p', 'text' => 'På konsulentuddannelsen bliver du undervist i IPS-metoden og de otte principper, som metoden bygger på. Du lærer at screene kandidater til IPS-forløb og at arbejde tværfagligt med IPS-kandidaten i centrum.'],
      ['type' => 'p', 'text' => 'Uddannelsen giver dig desuden konkrete værktøjer til arbejdet med at støtte psykisk sårbare i at opnå job eller uddannelse, herunder virksomhedskontakt, etablering af praktikker og jobmatch.'],
      ['type' => 'p', 'text' => 'Du lærer at kortlægge dine kandidaters muligheder på arbejdsmarkedet og at udarbejde en ambitiøs og realistisk plan med fokus på beskæftigelse på det ordinære arbejdsmarked eller adgang til uddannelse.'],
    ]],
    ['id' => 'kursets-indhold', 'nav' => 'Kursets indhold', 'title' => 'Hvad indeholder IPS-kurset?', 'blocks' => [
      ['type' => 'p', 'text' => 'Kurset veksler mellem tre måder at lære på:'],
      ['type' => 'steps', 'items' => [
        ['01', 'Teoretisk viden', 'Principperne og metoden bag IPS, IPS-manualen, værktøjerne og komplementære teorier – og hvordan du omsætter det i arbejdet med kandidater og virksomheder.', 'book'],
        ['02', 'Praktiske øvelser', 'Du arbejder med dine egne kandidater, vi gennemgår cases i dybden, og du får løbende feedback, så dine sager ikke går i stå.', 'puzzle'],
        ['03', 'Rollespil', 'Du trænes i de situationer, der kan opstå i et IPS-forløb – fx at screene kandidater og arbejde tværfagligt med kandidaten i fokus.', 'people'],
      ]],
    ]],
    ['id' => 'fidelity', 'nav' => 'Fidelity', 'title' => 'Afslut med Fidelity og bliv Advanced Practitioner', 'blocks' => [
      ['type' => 'p', 'text' => 'Som det afsluttende led i konsulentuddannelsen kan der gennemføres en Fidelity-evaluering, udført af vores egne IPS-konsulenter. Fidelity er din blåstempling af, at du – sammen med dine kollegaer – udfører IPS-indsatsen korrekt og effektivt i overensstemmelse med metoden.'],
      ['type' => 'img', 'src' => 'uddannelse-fidelity.jpg', 'alt' => 'IPS-team til evaluering'],
      ['type' => 'p', 'text' => 'Jeres indsats bliver vurderet ud fra Fidelity-skalaen, og I modtager både en mundtlig tilbagemelding og en skriftlig rapport med score.'],
      ['type' => 'callout', 'icon' => 'shield', 'title' => 'Certificeret Advanced Practitioner', 'text' => 'Når du har gennemført en Fidelity, opnår du titlen Certificeret Advanced Practitioner.'],
    ]],
    ['id' => 'i-hverdagen', 'nav' => 'IPS i hverdagen', 'title' => 'IPS-metoden bliver en integreret del af din arbejdsdag', 'blocks' => [
      ['type' => 'lead', 'text' => 'IPS er en beskæftigelsesindsats målrettet mennesker med psykiske diagnoser eller psykisk sårbarhed, som har et ønske om – og er motiverede for – at komme i arbejde eller uddannelse.'],
      ['type' => 'p', 'text' => 'Med IPS-indsatsens principper og værktøjer lærer du, hvordan du følger borgerens vej og sætter deres ønsker og drømme i centrum. Det sker blandt andet ved at afdække, hvad der interesserer den enkelte, samt at kortlægge og beskrive deres kompetencer. Målet er at give den rette støtte og finde det bedst mulige jobmatch.'],
      ['type' => 'img', 'src' => 'uddannelse-integreret.jpg', 'alt' => 'IPS-konsulent i samtale'],
      ['type' => 'p', 'text' => 'IPS-opgaverne er ofte mere omfattende end i en traditionel jobindsats. De spænder fra jobafklaring til håndtering af konkrete vanskeligheder og udfordringer i borgerens hverdag. Arbejdet koordineres, hvor det er relevant, med andre støttepersoner som fx bostøtte, sociale mentorer eller psykiatriske behandlere.'],
      ['type' => 'p', 'text' => 'Som IPS-konsulent arbejder du aktivt med dine IPS-kandidater – uanset deres sygdomsstatus – så længe de er motiverede for at komme i arbejde eller uddannelse. Det er deres motivation og fremtidsønsker, der er omdrejningspunktet i indsatsen. Det ønskede slutmål for IPS er job, uddannelse og hel eller delvis selvforsørgelse. Metoden læner sig op ad principperne om empowerment og mestring af eget liv.'],
    ]],
    ['id' => 'for-hvem', 'nav' => 'Hvem er den for?', 'title' => 'Hvem er uddannelsen for?', 'blocks' => [
      ['type' => 'p', 'text' => 'Vores IPS-uddannelse er for dig, der:'],
      ['type' => 'checks', 'items' => [
        'Ønsker at kunne arbejde selvstændigt med IPS-opgaver i hverdagen',
        'Er kreativ og vedholdende i din problemløsning og ser muligheder – uanset borgerens forudsætninger',
        'Har et ønske om at opnå indgående viden om IPS-metoden og tilgangen til jobskabelse',
        'Vil oplæres i metoder som den motiverende samtale, den værdsættende samtale og andre relevante tilgange',
        'Allerede arbejder med borgerrettede eller virksomhedsrettede aktiviteter i et jobcenter',
      ]],
    ]],
    ['id' => 'hvorfor-os', 'nav' => 'Hvorfor Simply Guiding?', 'title' => 'Hvorfor Simply Guiding?', 'blocks' => [
      ['type' => 'p', 'text' => 'Vi er den førende leverandør af den evidensbaserede IPS-metode, som hjælper psykisk sårbare tilbage til et stabilt og givende arbejdsliv.'],
      ['type' => 'p', 'text' => 'Vores kurser og uddannelser er rettet mod dig, der arbejder i en kommune eller et jobcenter, og som ønsker mere erfaringsbaseret og praksisnær viden om IPS eller vil uddanne dig til at arbejde med metoden.'],
    ]],
    ['id' => 'praktisk', 'nav' => 'Praktisk information', 'title' => 'Praktisk information om kurset', 'blocks' => [
      ['type' => 'facts', 'items' => [
        ['clock', 'Varighed', 'Typisk 54 uger med 15 kursusdage, planlagt i samarbejde med jer.'],
        ['card', 'Betaling', 'Almindelig faktura – eller betaling via EAN-nummer.'],
        ['tag', 'Pris', 'Ring til os for en nærmere drøftelse af uddannelsens indhold og pris.'],
        ['calendar', 'Booking', 'Ring eller skriv til os for at høre mere om booking af uddannelsen.'],
      ]],
      ['type' => 'buttons', 'items' => [['Kontakt os', '/kontakt/'], ['Se folder', $folder, 'outline', true]]],
    ]],
  ],
];
