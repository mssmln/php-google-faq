<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
  $faqs = [
    [
      'title' => '<h2>How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?</h2>',
      'text' => "<p>The recent <a href='#'>ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.</p>
      <p>Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.</p>
      <p>If you have a removal request, please fill out this <a href='#'>web form</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.</p>
      <p>We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.</p>
      <p>When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.</p>"
    ],
     [
       'title' => '<h2>How does Google protect my privacy and keep my information secure?</h2>',
       'text' => "<p>We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>
       <p>We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p>
       <p>You can find out more about safety and security online, including how to protect yourself and your family online, at the <a href='#'>Google Safety Centre</a>.</p>
       <p><a href='#'>Find out more</a> about how we keep your personal information private and safe – and put you in control.</p>"

     ],
    [
      'title' => '<h2>Why is my account associated with a country?</h2>',
      'text' => "<p>Your account is associated with a country (or territory) in the Terms ofService so that we can determine two things:</p>
      <ol type='1'><li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:</li>
      <ol type='a'><li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li>
      <li>Google LLC, based in the United States, for the rest of the world</li></ol>
      <li>The version of the terms that govern our relationship, which can vary depending on local laws</li></ol>
      <p>Keep in mind that Google services are essentially the same, regardless of the affiliate that provides the services or your country association.</p>
      <h3>Determining the country associated with your account</h3>
      <p>When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services – typically where you’ve spent the most time in the last year.</p>
      <p>Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.</p>
      <p>If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. <a href='#'>Contact us<i class='fas fa-external-link-alt'></i></a> if you think that your country association is wrong.</p>"
    ],
    [
      'title' => '<h2>How can I remove information about myself from Google’s search results?</h2>',
      'text' => "<p>Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <a href='#'>contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <a href='#'>click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <a href='#'>visit our help page for more information</a>.</p>"
    ],
    [
      'title' => '<h2>Are my search queries sent to websites when I click on Google Search results?</h2>',
      'text' => "<p>In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a href='#'>Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a href='#'>here</a>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.</p>"
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
    <section class="container">
      <?php foreach ($faqs as $faq){ // se non metti il codice html tra 2 tag php stamperà solo l'ultima voce dell'array
        // var_dump($faq);
        // $title = $faq["title"];
        // var_dump($title);


      #} ?>
      <div class="faq">
        <?php echo $faq["title"] // sono senza tag html perchè gli ho messi direttamente nel value del array , se qui li lasciassi, me ne troverei in più vuoti, visibili dal inspector ?>
        <?php echo $faq["text"] ?>

      </div>

    <?php  }?>

    <!--  //$title ; // anche salvandola in una variabile ti stampa sempre l'ultima
    //var_dump($title);
    ?> -->



    </section>
  </main>

  <footer>
    <nav class="container">
      <ul>
        <li><a href="#">google</a></li>
        <li><a href="#">about google</a></li>
        <li><a href="#">privacy</a></li>
        <li><a href="#">terms</a></li>

      </ul>
    </nav>

  </footer>

</body>
</html>
