<?php
  $pagetitle = 'Kreative SuperCyrillic Keyboard Layout';
  $pagename = 'SuperCyrillic Keyboard Layout';
  $pagestyle = <<<END
	th, td {
		padding: 1pt 12pt 1pt 0pt;
		text-align: left;
	}
	.hidden {
		display: none !important;
	}
	code {
		font-size: 10pt;
		font-weight: bold;
		padding: 4px;
	}
	/* KEYBOARD */
	table.k {
		font-family: "Georgia", "Times New Roman", serif;
		font-size: 16px;
		border-collapse: collapse;
		table-layout: fixed;
		width: 842px;
	}
	table.k td {
		padding: 2px;
		text-align: center;
		vertical-align: middle;
		height: 23px;
	}
	table.k td.t,
	table.k td.tl,
	table.k td.tr {
		border-top: solid 2px black;
	}
	table.k td.b,
	table.k td.bl,
	table.k td.br {
		border-bottom: solid 2px black;
	}
	table.k td.t,
	table.k td.b,
	table.k td.tl,
	table.k td.bl {
		border-left: solid 2px black;
	}
	table.k td.t,
	table.k td.b,
	table.k td.tr,
	table.k td.br {
		border-right: solid 2px black;
	}
	table.k td.m {
		background: #ccc;
	}
	table.k td.d {
		background: #fd5;
	}
	table.k td.o {
		background: #ddf;
	}
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Easily type Cyrillic letters for Russian, Belarusian, Ukrainian,
<br>Tatar, Bashkir, Kazakh, Kyrgyz, Yakut (Sakha), Tajik, Uzbek,
<br>Azerbaijani, Mongolian, Serbian, Macedonian, and Bulgarian.</p>
<h3>The Layout</h3>
<p>
	Kreative SuperCyrillic keyboard layout is based on the Russian phonetic keyboard layout.<br>
	It allows for the input of all characters across all Cyrillic layouts using a single unified layout.<br>
	Type language-specific letters using Option on Mac OS X, Right Alt on Linux and Windows.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">~</td>
				<td colspan="2" class="tr">¬</td>
				<td colspan="2" class="tl">!</td>
				<td colspan="2" class="tr">„</td>
				<td colspan="2" class="tl">"</td>
				<td colspan="2" class="tr">“</td>
				<td colspan="2" class="tl">№</td>
				<td colspan="2" class="tr">₸</td>
				<td colspan="2" class="tl">¤</td>
				<td colspan="2" class="tr">₮</td>
				<td colspan="2" class="tl">%</td>
				<td colspan="2" class="tr">€</td>
				<td colspan="2" class="tl">?</td>
				<td colspan="2" class="tr">‚</td>
				<td colspan="2" class="tl">'</td>
				<td colspan="2" class="tr">‘</td>
				<td colspan="2" class="tl">*</td>
				<td colspan="2" class="tr">₽</td>
				<td colspan="2" class="tl">(</td>
				<td colspan="2" class="tr">₴</td>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr">⃀</td>
				<td colspan="2" class="tl">_</td>
				<td colspan="2" class="tr">+</td>
				<td colspan="2" class="tl">,</td>
				<td colspan="2" class="tr">;</td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">`</td>
				<td colspan="2" class="br">^</td>
				<td colspan="2" class="bl">1</td>
				<td colspan="2" class="br">§</td>
				<td colspan="2" class="bl">2</td>
				<td colspan="2" class="br">@</td>
				<td colspan="2" class="bl">3</td>
				<td colspan="2" class="br">#</td>
				<td colspan="2" class="bl">4</td>
				<td colspan="2" class="br">$</td>
				<td colspan="2" class="bl">5</td>
				<td colspan="2" class="br">&lt;</td>
				<td colspan="2" class="bl">6</td>
				<td colspan="2" class="br">&gt;</td>
				<td colspan="2" class="bl">7</td>
				<td colspan="2" class="br">[</td>
				<td colspan="2" class="bl">8</td>
				<td colspan="2" class="br">]</td>
				<td colspan="2" class="bl">9</td>
				<td colspan="2" class="br">{</td>
				<td colspan="2" class="bl">0</td>
				<td colspan="2" class="br">}</td>
				<td colspan="2" class="bl">-</td>
				<td colspan="2" class="br">=</td>
				<td colspan="2" class="bl">.</td>
				<td colspan="2" class="br">:</td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl">Я</td>
				<td colspan="2" class="tr">Ј</td>
				<td colspan="2" class="tl">В</td>
				<td colspan="2" class="tr">Ӣ</td>
				<td colspan="2" class="tl">Е</td>
				<td colspan="2" class="tr">Ѝ</td>
				<td colspan="2" class="tl">Р</td>
				<td colspan="2" class="tr">Ҕ</td>
				<td colspan="2" class="tl">Т</td>
				<td colspan="2" class="tr">Ү</td>
				<td colspan="2" class="tl">Ы</td>
				<td colspan="2" class="tr">Ӯ</td>
				<td colspan="2" class="tl">У</td>
				<td colspan="2" class="tr">Ў</td>
				<td colspan="2" class="tl">И</td>
				<td colspan="2" class="tr">І</td>
				<td colspan="2" class="tl">О</td>
				<td colspan="2" class="tr">Ө</td>
				<td colspan="2" class="tl">П</td>
				<td colspan="2" class="tr">Һ</td>
				<td colspan="2" class="tl">Ш</td>
				<td colspan="2" class="tr">Ћ</td>
				<td colspan="2" class="tl">Щ</td>
				<td colspan="2" class="tr">Ђ</td>
				<td colspan="3" class="tl">/</td>
				<td colspan="3" class="tr">|</td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl">я</td>
				<td colspan="2" class="br">ј</td>
				<td colspan="2" class="bl">в</td>
				<td colspan="2" class="br">ӣ</td>
				<td colspan="2" class="bl">е</td>
				<td colspan="2" class="br">ѝ</td>
				<td colspan="2" class="bl">р</td>
				<td colspan="2" class="br">ҕ</td>
				<td colspan="2" class="bl">т</td>
				<td colspan="2" class="br">ү</td>
				<td colspan="2" class="bl">ы</td>
				<td colspan="2" class="br">ӯ</td>
				<td colspan="2" class="bl">у</td>
				<td colspan="2" class="br">ў</td>
				<td colspan="2" class="bl">и</td>
				<td colspan="2" class="br">і</td>
				<td colspan="2" class="bl">о</td>
				<td colspan="2" class="br">ө</td>
				<td colspan="2" class="bl">п</td>
				<td colspan="2" class="br">һ</td>
				<td colspan="2" class="bl">ш</td>
				<td colspan="2" class="br">ћ</td>
				<td colspan="2" class="bl">щ</td>
				<td colspan="2" class="br">ђ</td>
				<td colspan="3" class="bl">\</td>
				<td colspan="3" class="br">¥</td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl">А</td>
				<td colspan="2" class="tr">Ә</td>
				<td colspan="2" class="tl">С</td>
				<td colspan="2" class="tr">Ҫ</td>
				<td colspan="2" class="tl">Д</td>
				<td colspan="2" class="tr">Ғ</td>
				<td colspan="2" class="tl">Ф</td>
				<td colspan="2" class="tr">Ѓ</td>
				<td colspan="2" class="tl">Г</td>
				<td colspan="2" class="tr">Ґ</td>
				<td colspan="2" class="tl">Ч</td>
				<td colspan="2" class="tr">Ҷ</td>
				<td colspan="2" class="tl">Й</td>
				<td colspan="2" class="tr">Ї</td>
				<td colspan="2" class="tl">К</td>
				<td colspan="2" class="tr">Қ</td>
				<td colspan="2" class="tl">Л</td>
				<td colspan="2" class="tr">Љ</td>
				<td colspan="2" class="tl">Ъ</td>
				<td colspan="2" class="tr">Њ</td>
				<td colspan="2" class="tl">Э</td>
				<td colspan="2" class="tr">Є</td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl">а</td>
				<td colspan="2" class="br">ә</td>
				<td colspan="2" class="bl">с</td>
				<td colspan="2" class="br">ҫ</td>
				<td colspan="2" class="bl">д</td>
				<td colspan="2" class="br">ғ</td>
				<td colspan="2" class="bl">ф</td>
				<td colspan="2" class="br">ѓ</td>
				<td colspan="2" class="bl">г</td>
				<td colspan="2" class="br">ґ</td>
				<td colspan="2" class="bl">ч</td>
				<td colspan="2" class="br">ҷ</td>
				<td colspan="2" class="bl">й</td>
				<td colspan="2" class="br">ї</td>
				<td colspan="2" class="bl">к</td>
				<td colspan="2" class="br">қ</td>
				<td colspan="2" class="bl">л</td>
				<td colspan="2" class="br">љ</td>
				<td colspan="2" class="bl">ъ</td>
				<td colspan="2" class="br">њ</td>
				<td colspan="2" class="bl">э</td>
				<td colspan="2" class="br">є</td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl">З</td>
				<td colspan="2" class="tr">Ҙ</td>
				<td colspan="2" class="tl">Х</td>
				<td colspan="2" class="tr">Ҳ</td>
				<td colspan="2" class="tl">Ц</td>
				<td colspan="2" class="tr">Џ</td>
				<td colspan="2" class="tl">Ж</td>
				<td colspan="2" class="tr">Җ</td>
				<td colspan="2" class="tl">Б</td>
				<td colspan="2" class="tr">Ҹ</td>
				<td colspan="2" class="tl">Н</td>
				<td colspan="2" class="tr">Ң</td>
				<td colspan="2" class="tl">М</td>
				<td colspan="2" class="tr">Ҥ</td>
				<td colspan="2" class="tl">Ь</td>
				<td colspan="2" class="tr">Ќ</td>
				<td colspan="2" class="tl">Ю</td>
				<td colspan="2" class="tr">Ҡ</td>
				<td colspan="2" class="tl">Ё</td>
				<td colspan="2" class="tr">Ҝ</td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl">з</td>
				<td colspan="2" class="br">ҙ</td>
				<td colspan="2" class="bl">х</td>
				<td colspan="2" class="br">ҳ</td>
				<td colspan="2" class="bl">ц</td>
				<td colspan="2" class="br">џ</td>
				<td colspan="2" class="bl">ж</td>
				<td colspan="2" class="br">җ</td>
				<td colspan="2" class="bl">б</td>
				<td colspan="2" class="br">ҹ</td>
				<td colspan="2" class="bl">н</td>
				<td colspan="2" class="br">ң</td>
				<td colspan="2" class="bl">м</td>
				<td colspan="2" class="br">ҥ</td>
				<td colspan="2" class="bl">ь</td>
				<td colspan="2" class="br">ќ</td>
				<td colspan="2" class="bl">ю</td>
				<td colspan="2" class="br">ҡ</td>
				<td colspan="2" class="bl">ё</td>
				<td colspan="2" class="br">ҝ</td>
				<td colspan="11" class="b m">shift</td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
				<td colspan="26" class="t">nbsp</td>
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="b m">control</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="26" class="b">space</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">control</td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">nbsp</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">space</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">nbsp</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">space</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
		</table>
<p>© Kreative Software</p>
<script>
	function prep() {
		var ua = navigator.userAgent || navigator.appVersion;
		var mac = (ua.indexOf('Macintosh') >= 0) || (ua.indexOf('Mac OS') >= 0) || (ua.indexOf('MacOS') >= 0);
		var win = (ua.indexOf('Windows') >= 0);
		var os = (mac ? 'mac' : (win ? 'win' : 'linux'));
		var e = document.getElementsByClassName(os);
		for (var i = 0; i < e.length; i++) {
			e[i].className = e[i].className.replace('hidden', '');
		}
	}
	prep();
</script>
