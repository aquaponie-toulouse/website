<?php 
	$page_title="Page administration site de l'ATA";
	$page_description="Page d'administration de l'Association Toulousaine d'Aquaponie réservée aux membres actifs";
	include($_SERVER['DOCUMENT_ROOT']."/aquaponie-toulouse.fr/includes/header.html"); ?>

	<body>

	<!-- Date: <?php echo date('Y-m-d H:i:s'); ?><br/> -->
	<!-- MyIP: <?php echo exec('curl ipecho.net/plain'); ?><br/> -->
	<!--Other URLs: ifconfig.me -->

	<?php 
		$page_welcome="BIENVENUE SUR L'ESPACE MEMBRES ACTIFS DE l'ATA";
		include($_SERVER['DOCUMENT_ROOT']."/aquaponie-toulouse.fr/includes/nav.html"); 
	?>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<hr>
	<h2>OUTILS DE GESTION:</h2>
	<p>
		Les liens ci-dessous sont destinés à faciliter le travail collaboratifs des membres actifs de l'ATA.
		Merci de ne pas divulguer les informations personnelles ou confidentielles.
	</p>
	<br/>
	
	<!-- Lien compte-rendu -->
	<a href="https://docs.google.com/document/d/157AXD7FPKvc0E8Kj2VXyq_ZcgO3YoFkOkKFCsdZNOss/edit?usp=sharing" >=> PREPARATION CR REUNION </a><br/>
	<br/>
	<!-- Lien prochaine réunion -->	
	<a href="http://doodle.com/poll/9hrrskcymn8ggzvr" >=> PROCHAINE REUNION </a>
	(<a href="https://doodle.com/poll/9hrrskcymn8ggzvrph7pcdxs/admin?tmail=poll_admin_adminlink&tlink=adminbtn">lien admin </a>)<br/>
	<br/>
	
	AJOUTER VISUALISATION GOOGLE AGENDA ATA
	<iframe src="https://calendar.google.com/calendar/embed?title=Agenda%20de%20l%27Association%20Toulousaine%20d%27Aquaponie&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23ccffff&amp;src=admin%40aquaponie-toulouse.fr&amp;color=%231B887A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%23853104&amp;src=aquaponie-toulouse.fr_3tpgqb7kp6378h09kg286oqghk%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="800" height="500" frameborder="0" scrolling="no">
	</iframe>
	</br>
	<!-- Liens Gestion de tâches -->
	<a href="http://www.evernote.com/l/AQikm3EcsXBHOoeOLF80EZ-Q1by-XKSeF40/" >=> GESTION PROJET EVERNOTE </a><br/>
	<br/>
	<!--
	<a href="https://aquaponics.framaboard.org/?controller=auth&action=login">=> GESTION DE TÂCHES (Kanboard Framaboard) </a><br/>
	<br/>
	 -->
	<!-- Liens forums
	<a href="https://framateam.org/asso-aquaponie/channels/admin-asso">=> CHAT/PROJETS (Mattermost Framateam) </a><br/>
	<br/>
	 -->
	<!-- Liens sondages
	<a href="https://framadate.org/6OhbKRdDL6qCgMbj">=> SONDAGE Nom, Logo ...</a><br/>
	<br/>
	 -->
	
	<h2>DOCUMENTS:</h2>
	<br/>
	<ul>
		<!-- Docs are updated via the google drive. Saving new versions over the doc keeps the link valid :-)-->
		<!-- docs/ATA - Charte - v1.0.htm -->
		<li>* CHARTE ATA :
		<a href="https://drive.google.com/file/d/0B6vMzQQOvAINNkZNa2tBM2xoZVU/view?usp=sharing">[LIEN version 6 points] </a>
		<a href="https://drive.google.com/file/d/0B6vMzQQOvAINMEVfTjBCMmJKV2s/view?usp=sharing">[LIEN version 2 paragraphs]</a>
		</li><br/>
		<!-- docs/ATA - Statuts - v1.0.htm -->
		<li>* STATUTS ATA
		<a href="https://drive.google.com/file/d/0B6vMzQQOvAINcy1tLTNnYjBiNlU/view?usp=sharing">LIEN DOC PDF</a>
		</li><br/>
		<li>* REGLEMENT INTERIEUR ATA (draft)
		<a href="https://drive.google.com/file/d/0B6vMzQQOvAINZEx6UUVHZzk0OWc/view?usp=sharing">LIEN DOC PDF</a>
		</li><br/>
		<li>* PROJET AUZEVILLE : 
		<a href="https://drive.google.com/drive/folders/0B1vpQAJHjjMgNDh4OUNUTVkwaDg?usp=sharing">LIEN DOSSIER GDRIVE </a>
		</li><br/>
		<li>* DIMENSIONNEMENT : 
		<a href="https://drive.google.com/drive/folders/0B6vMzQQOvAINZjlkcUs4VmJweWc?usp=sharing">LIEN DOSSIER GDRIVE</a>
		</li><br/>
		<li></li><br/>
	</ul>
	
	
	<!-- Schémas aquaponie
	<img src="img/Schema-aquaponie-Elisa_Desque-v0.1.png" title="ATA-schéma_aquaponie-Elisa_DESQUE" alt="Fichier absent !" height="1103" width="1418" >
		<figcaption >Image ATA : Schéma cycle aquaponie</figcaption>
		
	<a href="https://prezi.com/jpc8dwk8dpxj/plantes/">* Prezi Olivier :</a><br/>
	
	<iframe id="iframe_container" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" 
	src="https://prezi.com/embed/sfxnvgzzjphu/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;landing_data=bHVZZmNaNDBIWnNjdEVENDRhZDFNZGNIUE43MHdLNWpsdFJLb2ZHanI0NUJkNUk2THBJbitOQmxGcFdyczZkQ1hBPT0&amp;landing_sign=XCCayl-3iOzNIRWJ3h0IwFoo8ON-5frSgBC87iKK9Rs" 
	width="800" height="600" frameborder="0"></iframe>
	
	-->
	
	<h2>LIENS:</h2>
	<a href="http://aquaponie-toulouse.fr">* Site web officiel de l'ATA</a><br/>	
	<a href="http://lechampdupossible.net/realisations/>">* Le Champ du Possible - Site web</a><br/>

	<br/>
	
	<h2>RECHERCHE LOGO:</h2>
	<figure style="text-align:center">
		<img src="img/220px-Cathar_cross.png" title="croix cathare" alt="Fichier absent !" height="200" width="200" >
		<figcaption >Fig 1: Logo Région Toulousaine</figcaption>
		
		<img src="img/logo-green.png" title="Green Tech Aquaponics (Copyright ?)" alt="Fichier absent !" height="158" width="202" >
		<figcaption >Fig 2: Logo Green Tech Aquaponics</figcaption>
	</figure>
	
	<br/>

	</body>
</html>
