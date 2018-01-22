<!DOCTYPE html>
<html>
<head>
	<title>Apprendre JS</title>
</head>
<body>
	<label id="lbl1">Bienvenue ici</label>
	<script src="fichier.js"  type="text/javascript"></script>
	<script type="text/javascript">
		var config = {
			document.getElementById('lbl1').innerHtml = Date(),
			id_mbr: 502,
			post_par_page: 50
		};
	</script>
	<button onClick="tst()">Cliques moi</button>
	<ul>
		milk
		eggs
		bread
		hummus
	</ul>
	<ul>
	  <li>milk</li>
	  <li>eggs</li>
	  <li>bread</li>
	  <li>hummus</li>
	</ul>
	<ol>
	  <li>milk</li>
	  <li>eggs</li>
	  <li>bread</li>
	  <li>hummus</li>
	</ol>
	<dl>
	  <dt>soliloque</dt>
	  <dd>Dans une pièce de théâtre, quand un personnage se parle à lui-même, pour méditer sur ses pensées ou sentiments, pour ainsi les communiquer aux spectateurs mais pas aux autres personnages.</dd>
	  <dt>monologue</dt>
	  <dd>Dans une pièce de théâtre, quand un personnage partage ses pensées à haute voix avec le public et tous les personnages présents.</dd>
	  <dt>aparté</dt>
	  <dd>Dans une pièce de théâtre, quand un personnage partage un commentaire seulement avec le public pour produire un effet dramatique ou humoristique. Il s'agit le plus souvent d'un sentiment, d'une pensée secrète, d'une information sur le contexte.</dd>
	</dl>
</body>
</html>