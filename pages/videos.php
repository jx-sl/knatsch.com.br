		<section class="main">
			<h3>Videos</h3>
			<p>Confira alguns knatschs ao vivo:</p>
			<article>
				<h4>For Whom the Bell tolls [Metallica Cover]</h4>
				<p>Ao vivo na Rua Coberta em São Vendelino</p>
				<iframe width="420" height="315" src="//www.youtube.com/embed/JM-Zo0dHzJA" frameborder="0" allowfullscreen></iframe>
			</article>
			<article>
				<h4>Gaúchos</h4>
				<p>Ao vivo no Kerbfest em São Vendelino</p>
				<iframe width="420" height="315" src="//www.youtube.com/embed/ZhueGutzpw0" frameborder="0" allowfullscreen></iframe>
			</article>
			<article>
				<h4>Lendário Peter</h4>
				<p>Ao vivo em Sao Vendelino comemorando o Dia Mundial do Rock 2013</p>
				<iframe width="420" height="315" src="//www.youtube.com/embed/UNMAM_TyqVA" frameborder="0" allowfullscreen></iframe>
			</article>
			<article>
				<h4>Eu quero Mucra [Replicantes Cover]</h4>
				<p>Ao vivo em Carlos Barbosa no Festival Underground por um Mundo Melhor</p>
				<iframe width="420" height="315" src="//www.youtube.com/embed/2i2Lr-gxFio" frameborder="0" allowfullscreen></iframe>
			</article>
		</section>
		<script type="text/javascript">
			function setYoutubeContent(data) {
			  var feed = data.feed;
			  var entries = feed.entry || [];
			  var html = ['<ul>'];
			  for (var i = 0; i < entries.length; i++) {
			    var entry = entries[i];
			    var title = entry.title.$t;
			    html.push('<li>', title, '</li>');
			  }
			  html.push('</ul>');
			  document.getElementById('videos').innerHTML = html.join('');
			} 
		</script>
		<script type="text/javascript" src="http://gdata.youtube.com/feeds/users/jfgriebeler/uploads?v=2&alt=json-in-script&format=5&callback=setYoutubeContent"></script>