<?php 
  $pagename = 'Busa (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
td, p { font: 10pt Tahoma }
td { font-weight: bold;  padding: 2px 10px }
h1 { font: bold 16pt Tahoma; color: #4444cc }
h2 { font: bold 12pt Tahoma; color: #4444cc }
table.display tr .gap { width: 16px; border: none; }
table.display tr td { font: 10pt Tahoma; border: solid 1px #ccccff; padding: 4px }
table.display tr th { font: bold 10pt Tahoma; border: solid 1px #ccccff; padding: 4px; text-align: left }
table.display { border-collapse: collapse; }
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 35px;
            margin: 2px 0px 0px 4px;
            
        }
        
        #K_SPACE {
          width: 234px; 
          
            background-image: url('key-space.gif'); 
          
        }

        #K_BKSLASH {
          width: 42px; 
          
            background-image: url('key-bkslash.gif'); 
          
        }
        
        #K_oE2 {
          
            display:none;
          
        }
        
        #K_SHIFTL {
          width: 80px;background-image: url('key-shiftl.gif');
        }
        
        .plain {
          
            background-image: url('key-plain.gif');
          
          background-repeat: no-repeat;
          width: 34px;
        }
        
        .special {
          background-repeat: no-repeat;
          
        }
        
        .keycap {
          font: bold 7pt Arial; 
          position: absolute; 
          left: 6px; 
          top: 6px;
        }
        
        .key .keycap {          
          display: block;
        }
        
        .special .keycap {
          display: block;
        }
        
        .keytext {
          font: 12pt "Doulos SIL", "Charis", "Code2000", "Arial Unicode MS", "Arial"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }    
        
        .hotkey, .hotkeya {
          border-left: solid 1px #c0c0c0;
          border-top: solid 1px #c0c0c0;
          border-right: solid 1px #808080;
          border-bottom: solid 1px #808080;
          width: 2em; height: 2em;
          text-align: center;
          padding: 4px;                  
          margin: 6px 4px;
          background: #e0e0e0;
        }                 
        
        .hotkeyplus { padding: 4px 0; margin: 6px 0; height: 2em }
        
        .hotkeya { width: 3em }
        
        .hotkeys tr td { white-space: nowrap; vertical-align: middle }
        
        td.char { font: 20pt "Doulos SIL", "Charis", "Code2000", "Arial Unicode MS" }
END;
  require_once('header.php');
?>

<p>This package includes a keyboard called: 
    <b>Busa (SIL)</b>
designed for use with <b>Boko</b>, <b>Bokobaru</b> and <b>Busa</b> and related languages.</p>
                          
<table><tr><td style='vertical-align: top; padding-right: 30px'>

<h2>Key Combinations</h2>
    
<table class='hotkeys'>
  <tr><td><span class='hotkey'>[</span></td><td class='char'>ɛ</td><td><span class='hotkey'>{</span></td><td class='char'>Ɛ</td></tr>
  <tr><td><span class='hotkey'>]</span></td><td class='char'>ɛ</td><td><span class='hotkey'>}</span></td><td class='char'>Ɔ</td></tr>
</table>
<table class='hotkeys'>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>2</span></td><td class='char'>ɑ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>@</span></td><td class='char'>@</td></tr>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>3</span></td><td class='char'>ɡ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>#</span></td><td class='char'>#</td></tr>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>6</span></td><td class='char'>ŋ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>6</span></td><td class='char'>Ŋ</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>c</span></td><td class='char'>ç</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>C</span></td><td class='char'>Ç</td></tr>  
</table>          

</td><td style='vertical-align: top'>

<h2>Diacritic Combinations</h2>

<table class='hotkeys'>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>2</span></td><td class='char'>◌̣</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>g</span></td><td class='char'>◌̂</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>h</span></td><td class='char'>◌̀</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>j</span></td><td class='char'>◌́</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>k</span></td><td class='char'>◌̃</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>l</span></td><td class='char'>◌̃̀</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>;</span></td><td class='char'>◌̃́</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>'</span></td><td class='char'>◌̃̄</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>/</span></td><td class='char'>◌̄</td></tr>
</table> 

</td></tr></table>

<h2>Fonts</h2>

<p>The fonts <b>Doulos SIL</b> or <b>Charis</b> work well with this keyboard. Charis is part of this keyboard package.</p>


<H2>Keyboard Layout</H2>
       <P>The keyboard layout is displayed below in Keyboard graphics.</P>
     <div id='osk' data-states='default shift alt shift-alt'>
</div>
