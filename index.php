<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
  $faqs = [
    [
      'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
      'text' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant,orexcessive.Since this ruling was published on 13 May 2014, weve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the publics right to know anddistribute information.If you have a removal request, please fill out this web form. Youll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change forsearch engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement andwe are working hard to devise a process that complies with the law.When you search fora name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches formost names, not just pages that have been affected by a removal.'
    ],
    [
      'title' => 'How does Google protect my privacy and keep my information secure?',
      'text' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant,orexcessive.Since this ruling was published on 13 May 2014, weve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the publics right to know anddistribute information.If you have a removal request, please fill out this web form. Youll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change forsearch engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement andwe are working hard to devise a process that complies with the law.When you search fora name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches formost names, not just pages that have been affected by a removal.'

    ],
    [
      'title' => 'Why is my account associated with a country?',
      'text' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant,orexcessive.Since this ruling was published on 13 May 2014, weve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the publics right to know anddistribute information.If you have a removal request, please fill out this web form. Youll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change forsearch engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement andwe are working hard to devise a process that complies with the law.When you search fora name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches formost names, not just pages that have been affected by a removal.'
    ],
    [
      'title' => 'How can I remove information about myself from Google’s search results?',
      'text' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant,orexcessive.Since this ruling was published on 13 May 2014, weve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the publics right to know anddistribute information.If you have a removal request, please fill out this web form. Youll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change forsearch engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement andwe are working hard to devise a process that complies with the law.When you search fora name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches formost names, not just pages that have been affected by a removal.'
    ],
    [
      'title' => 'Are my search queries sent to websites when I click on Google Search results?',
      'text' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant,orexcessive.Since this ruling was published on 13 May 2014, weve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the publics right to know anddistribute information.If you have a removal request, please fill out this web form. Youll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change forsearch engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement andwe are working hard to devise a process that complies with the law.When you search fora name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches formost names, not just pages that have been affected by a removal.'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Google's FAQ with php</title>
</head>
<body>
  <header>
    <div class="top">
      <h2>privacy &amp; terms</h2>
      <div class="apps">
        <i class="fas fa-ellipsis-v"></i>

      </div>

    </div>
    <div class="bottom">
      <nav>
        <ul>
          <li><a href="#">Overview</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Technologies</a></li>
          <li><a href="#">FAQ</a></li>

        </ul>
      </nav>

    </div>

  </header>

  <main>
    <section>

    </section>
  </main>

  <footer>

  </footer>

</body>
</html>
