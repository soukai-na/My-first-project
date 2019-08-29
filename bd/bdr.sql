-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Mai 2018 à 06:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`) VALUES
(1, 'PDF ou Vidéos : Que choisir pour mieux apprendre la programmation', 'Ce sujet est très important surtout pour les débutants en programmation. Eux qui n''ont pas encore des méthodes efficaces pour mieux apprendre la programmation. Vous vous êtes décidé d''apprendre la programmation mais vous manquez des stratégies ou méthodes d''apprentissage? Cet article est là pour vous aider de choisir entre suivre les cours PDF ou tutoriels vidéos.\r\n\r\nPDF ou vidéos que choisir? C''est la stratégie qui compte. Cette stratégie est celle que je vous montre dans cet article. Si vous êtes débutant en programmation, je vous demande de bien faire le choix dès le début car tout dépend de la manière dont on commence.\r\n\r\nJe vais être plus clair et bref envers vous dans cet article. Ces stratégies sont mes expériences personnelles et elles ne pourront peut-être pas fournir les même résultats mais ce qui est sûr, peu importe votre stratégie d''apprentissage, le but est de mieux apprendre, de bien comprendre et de bien appliquer les cours suivis.\r\n\r\nA lire : Comment commencer la programmation\r\nApprendre la programmation avec les cours PDF c''est mieux\r\n\r\nMes cours PHP en PDFMes cours PHP en PDF\r\n\r\nNous sommes à l''époque où le numérique domine tous les secteurs de la vie quotidienne. Il n''est plus nécessaire aujourd''hui d''aller dans une bibliothèque pour lire des livres(mais c''est important d''y aller). A partir de son smartphone ou ordinateur, on peut télécharger des tonnes de livres au format PDF(Portable Document Format) et de les lire quand on veut, où on veut et comme on veut.\r\n\r\nIl en est de même pour votre apprentissage en programmation. En optant pour les PDF, vous avez toute la liberté pour suivre vos cours. Mais le problème est de stratégie. Vous choisissez de lire des PDF mais comment procéder à bien maitriser ce que vous avez sur votre téléphone ou ordinateur.\r\nQuelques conseils pour mieux apprendre la programmation avec les PDF\r\n\r\n    Choisir un bon cours;\r\n    Télécharger ces cours depuis le site de l''auteur;\r\n    Ne pas suivre deux ou plusieurs cours à la fois. Un cours suffit;\r\n    Relire le cours si vous ne comprenez pas;\r\n    Ne pas regarder le nombre de pages du livre;\r\n    Lire au moins 10 pages par jour. Même 50 pages par jours;\r\n    Pratiquer au même moment de la lecture;\r\n    Avoir un cahier pour noter les choses importantes.\r\n\r\nAvec ces quelques conseils, vous comprenez au moins que le but de mieux apprendre, de bien comprendre et de bien appliquer les cours suivis.\r\nApprendre la programmation avec les cours vidéos c''est beaucoup plus mieux\r\n\r\nMes tutoriels JavaScriptMes tutoriels JavaScript\r\n\r\nCe que j''aime le plus sur les tutoriels vidéos c''est que je mens ça à l''aise quand je les regarde. C''est peut-être aussi votre cas. Si ce n''est pas votre cas, pas de problème car il le sera bientôt.\r\n\r\nSuivre des tutoriels est beaucoup plus avantageux que lire des PDF. Vous avez l''impression d''être devant un formateur qui vous explique avec tout les détails comment arriver au résultat final.\r\n\r\nDans les tutoriels vidéos, les auteurs des cours sont beaucoup plus explicites car ils savent que la personne qui regarde la vidéo, n''aime pas vraiment lire des PDF, préfère regarder, écouter et pratiquer au même moment.\r\n\r\nA lire : 4 astuces pour devenir un développeur web sans payer des formations\r\nQuelques conseils pour mieux apprendre la programmation avec les vidéos\r\n\r\n    Abonnez-vous à une chaîne Youtube qui propose des cours que vous cherchez;\r\n    Téléchargez les tutoriels de cette chaîne;\r\n    Regardez s''il y a des commentaires positives sur ces vidéos;\r\n    Commencez de suivre ce cours chapitre par chapitre;\r\n    Pratiquez au même moment que vous regardez la vidéo;\r\n    Ne vous focalisez sur la durée de la vidéo mais focalisez vous sur le contenu de la vidéo;\r\n    Ayez un cahier à côté pour avoir des notes.\r\n\r\nTout comme les PDF, le but est de mieux apprendre, de bien comprendre et de bien pratiquer ce que vous apprenez.\r\n\r\nPour terminer, je dirai que vous pouvez aussi combiner ces deux stratégies pour accélérer votre apprentissage. C''est ce que j''ai fait pour apprendre le JavaScript. J''avais un cours PDF téléchargé depuis openclassrooms.com et des tutoriels de Pierre Giraud.\r\n\r\nSi cet article vous a plu, veuillez nous dire dans les commentaires votre stratégie d’apprentissage. Vous utilisez plus les PDF ou les tutoriels vidéos?'),
(2, 'Mes sites préférés pour apprendre la programmation web', 'Enfin je vous écrit l''article sur la question que vous me posiez souvent; celle de connaître les sites internet qui m''ont permis d''apprendre la programmation. Et non! Celle de connaître les sites internet qui me permettent d''apprendre la programmation. Jusqu''aujourd''hui j''apprends toujours. Je suis un éternel apprenti.\r\n\r\nDans cet article je ne parle pas des meilleurs sites pour apprendre les langages programmation web mais plutôt de mes sites préférés pour apprendre les langages de programmation web. J''ai visité et je visite des centaines de sites internet à la recherche des meilleurs cours de programmation et tous ces sites m''apportent une énorme connaissance en programmation web.\r\n\r\nSur le web, il y a des milliers de sites internet qui proposent des cours en ligne. 243tech aussi en fait parti. Mais le problème est que chaque site a sa façon de présenter les cours et d''autres même, ne permettent pas au lecteur de comprendre ce qu''il lit.\r\n\r\nA lire : Top 5 de meilleurs langages de programmation en 2017\r\nPourquoi ces sites sont-ils mes préférés?\r\n\r\nJe considère les sites que je vais vous montrer comme préféré parce qu''à travers eux, j''ai appris la programmation comme il fallait par rapport aux autres sites. Bien que je les ai connu il y a de cela deux ans, je suis quand-même obligé de les considérer comme mes préférés.\r\n\r\nIl y aussi quelques critères qui mes poussent toujours d''aller apprendre la programmation vers ces sites. Parmi ces critères, je peux citer :\r\n\r\n    Des cours en format PDF\r\n    Des cours vidéos(tutoriels)\r\n    Un forum très riche\r\n    Nombre de visiteurs sur le site\r\n    Facilité de s''inscrire\r\n    Des visiteurs compétents\r\n    Facilité de communiquer avec les auteurs des cours\r\n\r\nLes trois premières critères sont celles que je trouve les plus importantes : des cours pdf, tutoriels et un forum très enrichissant.\r\n\r\nJe ne vais pas vous faire une liste de 10 ou 30 sites mais seulement une liste de 3 sites. Oui il y a seulement trois sites que je considère comme mes préférés et découvrons-les maintenant.\r\nOpenclassrooms\r\n\r\nwww.openclassrooms.com\r\n\r\nJe suis sûr que pendant votre lecture, vous vous attendez seulement de voir ce site sur la liste de mes sites préférés pour apprendre la programmation et vous ne vous êtes pas trompé.\r\n\r\nC''était en 2016 que j''ai visité pour la première fois ce site créé par Matthieu Nebra communément appelé Mateo. Imaginez que vous êtes nul dans un domaine et vous rencontrez une personne qui vous dit avec conviction que dans les jours à venir, vous ne serez plus un nul. Quel serait votre sentiment? La joie je suis sûr.\r\n\r\nC''est en fait ce qui se passe sur Openclassrooms. On commence à vous apprendre un langage de programmation de A à Z et à la fin, vous devenez un BON programmeur.\r\n\r\nA lire 9 qualités pour devenir un bon programmeur\r\n\r\nVous trouverez sur ce site des cours en format PDF, des vidéos et un forum très très enrichissant. Visitez-le, créer un compte et participer aux sujets de discussion sur le forum.\r\nAlsacreation\r\n\r\nwww.alsacreation.com\r\n\r\nCe que j''aime le plus sur ce site c''est plus le web design. Vous trouverez sur alsacreation.com des meilleurs cours pour les mises à forme de vos site web.\r\n\r\nJ''ai appris pas mal de choses sur ce site et si je peux citer quelques une :\r\n\r\n    Media Queries\r\n    Ajouter une favicon sur son site\r\n    La notion de responsive friendly\r\n    Ajouter un numéro de téléphone sur un lien HTML\r\n    etc.\r\n\r\nIl y plein de trucs que vous trouverez si vous faites un tour.\r\nPRIMFX\r\n\r\nwww.primfx.com\r\n\r\nC’était comme par hasard, un soir je fais un tours sur Youtube et je tombe sur une vidéo de Boris Flesch sur sa chaîne Youtube. J''avais pris mon temps à regarder quelques tutoriels PHP qu''il proposait et c''est depuis lors que j''ai commencé à visiter son site.\r\n\r\nPrimFx propose des cours vidéos des langages de programmation web et le gamming. Pour des cours vidéos, vous trouverez une série de tutoriels CSS, HTML, PHP et JavaScript qui est maintenant au 11e chapitre.\r\n\r\n243tech possède un compte sur ce site que vous pouvez voir sur ce lien : profil 243tech\r\n\r\nCe sont là donc mes trois sites internet préférés pour apprendre la programmation web. Je pense qu''ils vus seront utiles.\r\n\r\nCe que je vous demande de faire, c''est de les visiter, de créer un compte et de participer aux discussion des forums. Un MERCI dans le commentaire me ferra du bien.'),
(3, '6 astuces pour placer son site(blog) en première page de Google', 'Ne pas être dans Google c''est ne pas exister… Mais il y a encore pire que ça : ne pas être dans les premières pages de résultats de Google pour vos principaux mots-clés, c''est quasiment l''inexistence de votre site ou blog.\r\n\r\nJe vous dévoile donc dans cet article, mes 6 astuces qui m''ont permis de se placer en première page de Google et de descendre à la deuxième page que j''occupe actuellement. Je travaille encore dur pour retrouver la première page et c''est dans pas longtemps.\r\n\r\nGoogle.com est le premier site le plus visité au monde. C''est grâce lui que votre site peut, lui aussi, devenir l''un des sites les plus visités au monde.\r\n\r\nLogo de Google\r\n\r\nBien sûr que votre site peut avoir une autre source de trafic comme par exemple les réseaux sociaux : Facebook, Twitter, Whatsapp, et autres mais cela ne vous rapportera pas assez de visiteurs sur votre site.\r\n\r\nA lire : C''est quoi le référencement naturel ou SEO\r\n\r\nIl n''y a qu''un secret pour placer son site en première page de Google et ce secret, vous l''aurez dans chaque astuce que je vais vous montrer dans cet article. C''est donc à vous de le découvrir.\r\nPourquoi se placer en première page de Google\r\n\r\nPremièrement je dirai pour avoir du trafic sur votre site. Imaginez ceci : quand un internaute arrive sur Google et qu''il fait une recherche. Cet internaute sera peut-être pressé de trouver au plus vite que possible le résultat de sa recherche et pourrait s''arrêter aux résultats de la première ou la deuxième page ou encore la troisième page.\r\n\r\nSi votre site se trouvait à la sixième page ou pire encore à la trentième page(oui ça existe), cet internaute ne connaîtra JAMAIS votre site. Ceci étant dit, si votre site se trouve dans les premières pages, vous avez probablement de chance d''attirer plus de visiteurs que si ce dernier se trouvait vers la cinquième ou la vingtième page des résultats.\r\n\r\nVous avez créé votre site pour qu''il soit visité et connu, non pas pour que vous soyez le seul et unique visiteur. Si vous avez cette envie d''optimiser votre site dans les moteurs de recherches ou si vous souhaitez placer votre site en première page de Google, appliquez dès maintenant les 6 astuces que je vous dévoile dans les lignes suivantes:\r\n1. Écrire des longs articles sur son site(blog)\r\n\r\nAu début j''écrivais des articles avec moins de 500 mots et je suis sûr que vous l''aviez déjà remarqué et il y a certains visiteurs du site qui m''ont fait cette remarque. Mais ce n''est plus le cas aujourd''hui car j''écris des articles un peu longs avec au moins 1000 mots.\r\n\r\nA lire : Webmaster : 5 difficultés que vous pourriez rencontrer au début\r\n\r\nParmi les critères que Google tient compte pour référencer votre site, il y a aussi le temps que les visiteurs passent sur ce site. Plus ils explorent votre site ou lisent vos articles, plus Google donne de la valeur à votre site.\r\n\r\nUn article long permettra aux lecteurs de rester aussi longtemps sur votre site et vous permettra aussi d''avoir de la valeur aux yeux de Google. Je ne vous dis pas d''écrire du n''importe quoi. Non. Donnez plus de la valeur à vos articles pour que Google aussi vous la donne. Personne ne lira vos articles si elle ne comprend rien.\r\n\r\nÉcrivez au minimum 1000 mots par article et vous aurez votre gain chez Google. N''écrivez surtout pas des articles avec moins de 500 mot. Je l''ai fait à mes débuts mais je ne le fais plus car ces articles sont mis à jour malgré que d''autres sont restés comme ça.\r\n2. Lier les articles de son site(blog) par des liens internes\r\n\r\nIci on parle aussi de maillage interne c''est à dire vous allez lier les articles de votre site par des liens qui pointeront toujours vers votre site. Ceci fera comprendre à Google que votre site site contient du contenu qui plait aux internautes et permettra aussi aux internautes de passer plus de temps sur votre site. Plus ils passent du temps sur votre site, plus Google donne de la valeur à votre site.\r\n\r\nQuand vous placez un lien dans un article, vous devez vous assurer que ce lien a trait avec cet article car vous n''allez pas proposer un lien d''article qui parle de smartphone dans un article de référencement naturel.\r\n\r\nPour terminer je dirai qu''ajouter au moins deux à trois liens dans vos articles et vous remarquerez que le temps moyen sur votre site aurait grimpé.\r\n3. Obtenir des partages sur les réseaux sociaux\r\n\r\nLiens entrants de réseaux sociaux\r\n\r\nJe ne cesserai de vous rappeler que les réseaux sociaux font parti des sources de trafic pour votre site. Votre présence sur les réseaux sociaux aura de l''influence sur votre site.\r\n\r\nPlus les liens de vos articles sont partagés, plus ils ramèneront de visiteurs, et plus ils ramèneront des visiteurs, plus ces visiteurs passeront du temps à lire vos articles, et plus ils passeront plus de temps sur votre site, plus Google donnera de la valeur à votre site.\r\n\r\nA lire : 10 secrets pour réussir sa Page Facebook\r\n\r\nInsérez les boutons de partage Facebook ou Twitter dans vos articles pour permettre aux visiteurs de partager vos articles avec facilité.\r\n\r\nJe profite aussi pour vous dire qu''à la fin de chaque article publié sur ce site, il y a un bouton de partage Facebook donc ça me fera du bien si vous prenez votre temps de cliquer sur cet bouton pour partager nos articles. Merci\r\n4. Obtenir des liens entrants des sites différents\r\n\r\nles backlinks vers son site\r\n\r\nCe quatrième point vient s''opposer au deuxième? Non. Il vient complémenter le deuxième point. Un lien entrant est un lien externe c''est à dire le lien de votre site qui de trouve sur un autre site et à chaque fois qu''on cliquera sur ce lien, vous aurez un nouveau visiteur sur votre site.\r\n\r\nOn utilise aussi le terme backlink pour parler des liens entrants sur son site\r\n\r\nIl y plusieurs moyens d''obtenir des liens entrants sur son site : forum, article invité, partenariat, etc.\r\n\r\nJe suis rédacteur à restraweb.com le premier site et magazine congolais sur les Nouvelles Technologies de l''Information et de la Communication au Congo/Brazzaville créé par un jeune passionné des TIC, Restra Poaty. Avec restraweb.com, j''ai écrit deux articles et ces articles ont fait découvert le site 243tech.com au plus grand nombre de personnes et ils m''ont apporté du trafic sur le site.\r\n\r\nJe vous invite donc à lire mes deux articles écrits sur restraweb.com : Forum National sur le Numérique et Journée des Intelligences Numériques. Je vous invite aussi de partager ces articles sur les réseaux sociaux et de télécharger les 5 numéros du magazine Restra Mag déjà publié sur le site. Des bonnes choses à toute l''équipe de Restraweb.\r\n5. Ne pas chercher à optimiser ses mots-clés plus que nécessaire\r\n\r\nLorsque vous écrivez un article, vous choisissez bien sûr un ou plusieurs mots-clés pour cet article enfin de l''optimiser pour les moteurs de recherche.\r\n\r\nCe qui est à retenir est que vous ne devez pas répéter ces mots-clés à plusieurs fois dans l''article. Modérez l''utilisation des mots-clés pour permettre à Google de vous placer dans les premières pages avec des mots-clés précis.'),
(4, 'Google Analytics : le premier outil Google pour les webmasters', 'Google présente en son sein plusieurs outils pour les webmasters et dans cet article, on va découvrir ensemble le premier outil Google que tout webmaster ne peut jamais ignorer : Google Analytics.\r\n\r\nGoogle Analytics est un outil web créé par la société américaine Google. Il permet au webmaster de voir les statistiques du trafic de son site web. Avec Google Analytics, vous aurez la possibilité de savoir comment les visiteurs de votre site explorent votre chef d’œuvre.\r\n\r\nPeut-être que votre site est déjà en ligne et vous vous posez la question de savoir s''il y a des gens qui visitent votre site; avec Google Analytics, vous aurez la réponse à votre question.\r\n\r\nComme il s''agit d''un outil Google, il vous faudra donc ouvrir un compte Google Analytics en utilisant votre compte Gmail et de suivre les instructions l''une après l''autre.\r\n\r\nA lire : 9 choses à faire avant de lancer un site web\r\nS''inscrire sur Google Analytics\r\n\r\nLa première chose à faire c''est d''ouvrir un compte sur Google Analytics en allant sur ce lien www.analytics.google.com et suivez les instructions.\r\n\r\nA la fin de votre inscription, vous aurez un bout de codes JavaScript que vous devez placez sur la balise <head> de vos page web. Ces codes permettra à Google d''avoir les informations sur vos pages afin de vous permettre à votre tour d''analyser les statistiques de votre site.\r\n\r\nCet outil regroupe beaucoup de fonctionnalités que je ne saurai vous les faire découvrir dans cet articles. Pour être plus bref, je vous présente alors les 5 principales fonctionnalités de Google Analytics.\r\n5 principales fonctionnalités de Google Analytics\r\n\r\nAprès avoir installé Google Analytics sur votre site, vous devez maintenant connaître ces 5 principales fonctionnalités de cet outil qui vous permettront de mieux gérer le trafic sur votre site web.\r\n1. Analyser le trafic de votre site web\r\n\r\nLe trafic de 243tech sur Google Analytics\r\n\r\nGoogle Analytics vous permet de voir les statistiques du trafic de votre site web pour une période ou temps(en heures, jours, semaines, mois, et même par année). Avec cet outil, vous avez la possibilité de connaître :\r\n\r\n    Le nombre de sessions;\r\n    La moyenne des pages vues par visiteur;\r\n    Le nombre de visiteurs uniques;\r\n    La durée moyenne de sessions;\r\n    Le pourcentage des nouveaux visiteurs contre les visiteurs qui retournent sur le site;\r\n\r\nGoogle Analytics est facile à utiliser : vous pouvez changer les périodes auxquelles vous voulez analyser ou comparer les résultats de votre trafic.\r\n2. La composition du trafic\r\n\r\nLes pays d''où vient le trafic de 243tech\r\n\r\nAvec Google Analytics, vous avez la possibilité de savoir de quels pays proviennent les visiteurs de votre site. Il est important de connaître la situation géographique de vos visiteurs car ça vous permet de créer du contenu qui va répondre à leur besoin.\r\n\r\nGoogle Analytics est un véritable mine d''or de données pour apprendre plus à propos des visiteurs de votre site. Vous pouvez connaître leurs :\r\n\r\n    Pays;\r\n    Continent;\r\n    Langues;\r\n    Age;\r\n    Sexe;\r\n    Intérêt;\r\n\r\nVous pouvez aussi découvrir quels navigateurs web ils utilisent pour explorer votre site et quels marques de téléphone ou ordinateurs ils utilisent.\r\n3. De quel canal viennent les visiteurs de votre site\r\n\r\nTant qu''il est important de savoir QUI visite votre site, il est aussi très important de savoir PAR QUEL CANAL cette personne arrive sur votre site.\r\n\r\nGoogle Analytics est le meilleur outil qui vous permet de savoir par canal les internautes arrivent sur votre site. Les internautes peuvent arriver sur votre par :\r\n\r\n    Une recherche organique : à travers les moteurs de recherche(Google, Luka.cd, Bing).\r\n    Trafic direct : l''internaute saisi directement l''adresse de votre site dans le navigateur.\r\n    Les médias sociaux : grâce par exemple à Facebook, Twitter, Whatsapp et autres réseaux sociaux, les internautes peuvent arriver sur votre site web.\r\n    Email et newsletter : il y a des internautes qui visitent votre site suite à un mail ou à un abonnement sur votre newsletter.\r\n    Autres : il y a plusieurs canaux qui peuvent ramener les visiteurs vers votre site.\r\n\r\nVous avez aussi la possibilité de voir les mots-clés qui attirent les visiteurs sur votre site. Parfois Google joue l''idiot sur cette étape en affichant « Not provided » qui signifie qu''il n''y a pas de mots-clés qui ramènent les visiteurs vers votre site.\r\n\r\nMais ce que vous devez faire pour palier à ce problème, c''est de lier votre compte Google Analytics à votre compte Google Search Controle.\r\n4. Ce que font les internautes sur votre site web.\r\n\r\nLes pages vues sur 243tech\r\n\r\nMaintenant que vous savez QUI visite votre site web, COMBIEN de temps les visiteurs restent sur votre site, QUEL marque de téléphone et ordinateur ils utilisent, DEPUIS quel pays vivent-ils et QUELS sont les mots-clés qui les amène,t sur votre site, vous avez presque toutes les statistiques du trafic de votre site web mais ce n''est pas tout.\r\n\r\nLa question à se poser maintenant c''est de savoir que font les internautes sur votre site? Avec cette Google Analytics, vous avez la possibilité de voir les pages de votre site les plus vues et pendant combien de temps les internautes restent sur votre site.\r\n\r\nCeci vous permettra d''avoir d''idées sur comment optimiser les pages de votre site et comment partager les contenus de votre site sur les réseaux sociaux.\r\n5. Voir les informations de votre site en temps réel\r\n\r\nLa dernière fonctionnalité que je vous présente est que vous pouvez voir les statistiques de votre site en temps réel. Vous avez la possibilité de voir combien de personnes visitent votre site actuellement et quelles sont les pages qu''elles explorent, quels sont les mots-clés qui les ont amenés vers le site, et tant d''autres choses.\r\n\r\nVous avez en quelques minutes de lecture compris c''est quoi Google Analytics et n’hésitez surtout de l’intégrer sur votre site ou sur votre futur votre site web.'),
(5, 'Webmaster : 5 difficultés que vous pourriez rencontrer au début', 'Cet article présente 5 difficultés que vous pourriez rencontrer en étant webmaster ou débutant. Je l''ai écrit en titre de rappel, et pour interpeller les futurs webmaster qui pensent que ce métier est so easy(tellement facile). Oui il peut être facile. Mais pas comme vous le pensez.\r\n\r\nÊtre webmaster est un métier qui demande tout d''abord d''être persévérant et courageux. Mes premiers mois dans ce domaine n''ont pas été tels que je l''imaginai c''est à dire avoir plus de trafic sur le site, augmenter le nombre de fans sur la page Facebook, plus d''abonnés sur Twitter, créer des nouvelles rélations, trouver des nouveaux projets(emploi), et pourquoi pas gagner de l''argent.\r\n\r\nA lire : 10 sécrets pour réussir sa page Facebook\r\n\r\nTout cela, n''était que de l''imagination avant de devenir webmaster. Vous devez savoir qu''un webmaster est une personne qui gère le fonctionnement d''un site web et comment voulez-vous directement réussir dans ce métier si vous gérez mal votre site web?\r\n\r\nCette question, on me l''avait aussi posée et elle m''avait pousser de voir les choses d''une autre façon qu''au début.\r\nLes webmasters débutant rencontrent beaucoup de difficultés\r\n\r\nLes difficultés pour webmaster\r\n\r\nCet article, je l''ai lu plus de vingt fois avant de le mettre en ligne car j''ai mis en écrit toutes les premières erreurs que j''ai commises au début et les difficultés que j''ai rencontrées dans ce beau métier.\r\n\r\nLe chemin sera trop long et parfois, vous allez connaître 1000 périodes de doutes, vous allez parfois perdre votre confiance en vous, vous allez vous sentir mal, non légitime, vous ne verrez que des commentaires négatifs, vous allez oublier de manger, vous allez travailler dur pour aucun résultat, vous allez tester 36 fois une stratégie qui n''aboutira à rien du tout. Vous allez vous demander : <<Pourquoi les autres y arrivent et pas moi?>>\r\n\r\nIls y arrivent parce qu''ils ont mis du temps en leur service. Cet article n''est pas écrit pour vous faire ou pour vous effrayer mais je l''ai écrit pour vous aider à surmonter les difficultés qui se présenteront devant vous car je ne veux pas que vous ayez le même début que le mien.\r\n\r\nDécouvrons maintenant ensemble les 5 difficultés qu''un webmaster peut rencontrer à ses débuts de carrière. Oui c''est une carrière pour nous(vous et moi).\r\n1. Votre site ne sera pas directement connu\r\n\r\nDifficulté pour webmaster à faire connaître son site\r\n\r\nAu lancement de ce site, donc le lundi 25 Décembre 2017, j''étais satisfait parce que j''avais une centaine de visiteurs sur le site. Mais quelques jours après, quand j''ai fait un tour sur Google Analytics pour voir les statistiques du site, j''avais remarqué que j''ai perdu la moitié de visiteurs et je me suis étonné en disant : <<Où sont passés mes visiteurs!!!>> mais aucune réponse de la part de Google Analytics.\r\n\r\nA lire : 9 choses à faire avant de lancer un site web\r\n\r\nIls étaient parti sans revenir. Votre site ne sera pas connu dès les premiers jours de son existence et vous devez travailler pour le faire connaître. Comment ça? C''est très simple. Imaginez que vous avez trouvé une nouvelle copine et vous souhaitez qu''elle soit connue de votre entourage. Que feriez-vous? Vous allez bien sûr la présenter à vos potes, la familles et autres personnes.\r\n\r\nC''est la même chose que vous devez faire pour que votre site web soit connu par un grand nombre de personnes. Vous devez faire sa promotion dans tous le canaux possible.\r\n\r\nSoignez le référencement du site, animez bien votre page Facebook, participez dans les conférences qui traitent sur la thématique de votre site, bien utiliser votre liste d''e-mailing, faites de votre site le sujet discussion entre amis et en faisant tout ça, vous aurez la chance que votre site soit connu et de dévier la première difficulté.\r\n2. Manque de motivation chez le webmaster\r\n\r\nÊtre webmaster, c''est aussi avoir de la motivation. Vous devez toujours être motiver à chaque seconde car nombreux sont ceux-là qui ont abandonné parce qu''ils ont passé beaucoup plus de temps pour qu''au finish : aucun résultat.\r\n\r\nLe manque de motivation n''est pas vraiment une difficulté qui vient de l’extérieur mais plutôt de l’intérieur. Vous êtes le seul responsable de votre site et si vous n''^tes pas motivé pour le gérer, vous risquez de confondre qui vous êtes à qui vous voulez être.\r\n\r\nCombattez cette difficulté chaque jour. Consacrez 80% de vos journées à faire ce qui est bien pour l''évolution de votre site et je pense qu''au fil du temps, vous me donnerez peut-être raison.\r\n3. Vos codes sources peuvent planter sans votre intervention\r\n\r\nCodes sources bug\r\n\r\nC''est la plus pire d''obstacle à rencontrer sur le web. Deux semaines après le lancement de 243tech.com, le site avait rencontré un bug et cela avait pris deux jours et seize heures.\r\n\r\nLes images ne s''affichaient plus, on ne pouvait pas lire des articles. Pendant ces deux jours, on ne pouvait voir que la page d’accueil.\r\n\r\nL''ordinateur ne fait que ce qu''on lui demande de faire. Il est temps de bien vérifier vos codes avant de mettre votre site en ligne car vous le savez bien que moi l''omission d''un point-virgule(;) peut arrêter le fonctionnement d''un programme informatique.\r\n\r\nA chaque fois que votre site aura des problèmes, prenez d''abord le temps d''analyser ces problèmes avant de les résoudre. Si en votre capacité vous n''arriver pas à résoudre le problème, faites appel à un expert que vous connaissez.\r\n4. C''est toujours moi qui dépense\r\n\r\nOui bien sûr que ça sera toujours vous qui devez dépenser pour votre site au début. On trouve sur internet des nombreux articles sur comment gagner de l''argent facilement sur internet mais si vous prenez le temps de lire ces articles, vous découvrirez que ce n''est pas facile de gagner de l''argent sur internet.\r\n\r\nEn fait réussir sur internet, c''est travailler beaucoup sans gagner pour au final, gagner beaucoup sans travailler. Je m''explique:\r\n\r\n    Travaillez beaucoup sans gagner : au début de votre vie sur le vie, vous DEVEZ beaucoup travailler pour votre site web pour gagner premièrement du trafic sur le site. Votre dépense ne sera pas seulement financière mais aussi intellectuelle. Mettez votre intelligence en service de votre site car il n''y a pas de plus belle satisfaction dans la vie que de travailler dur et que ça paye.\r\n    Gagnez beaucoup sans travailler : une fois que votre sacrifice atteindra le haut de l''échelle, il sera donc le moment pour vous de vous jouir de votre travail. Ce que vous gagnerez n''est pas seulement l''argent mais aussi des rélations, la visibilité, beaucoup de trafic sur le site, et autres.\r\n\r\n5. Votre entourage ne sera pas toujours d''accord avec vous\r\n\r\nÊtre Webmaster est un métier à part entière. C''est comme être professeur dans une université, mécanicien dans un garage, ou encore hôtesse de l''air dans une compagnie d''aviation. Mais peu de gens accorde de l''importance à notre(vous et moi) métier.\r\n\r\nVotre entourage(famille et amis) ne sera pas toujours d''accord avec vous. Ils ne vont peut-être pas partager la même vision que vous mais ce que vous devez savoir c''est que c''est votre vision et non la leur. Faites ce que vous aimez et n''écouter pas les critiques de votre entourage.\r\n\r\nPeut-être que vous n''avez pas rencontré ces difficultés dans votre début mais je suis sûr qu''il y a ceux-là comme moi qui ont rencontrés les difficultés citées dans cet articles. Si dans votre début vous avez rencontré quelque chose que je n''ai parlé ici, veuillez me le dire dans les commentaires pour aider les futurs webmasters à contourner ces problèmes.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;