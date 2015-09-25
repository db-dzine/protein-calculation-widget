<?
$html = '<div class="widget-heading clearfix"><h3>'.$instance['title'].'</h3></div>';
$html .= '<div class="widget-heading clearfix"><label for="'.$this->get_widget_slug().'-typ">Ihr Typ</h4></label>';
$html .= '<div class="widget-content clearfix">
<select name="'.$this->get_widget_slug().'-typ" id="'.$this->get_widget_slug().'-typ">
	<option value="nicht-sportler">Nicht Sportler</option>
	<option value="sportler">Sportler</option>
	<option value="aufbau">Fitness/Bodybuilding (Aufbau)</option>
	<option value="diaet">Fitness/Bodybuilding (Diät)</option>
</select>
</div>';
$html .= '<div class="widget-heading clearfix"><label for="'.$this->get_widget_slug().'-gewicht">Ihr Gewicht (in kg)</label></div>';
$html .= '<div class="widget-content clearfix">
<input name="'.$this->get_widget_slug().'-gewicht" id="'.$this->get_widget_slug().'-gewicht" type="text">
</div>';
$html .= '<div id="kfa-container" style="display:none"><div class="widget-heading clearfix"><label>Ihr Körperfettanteil (in %)</label> <br>
Hilfe benötigt? <a class="image-popup" title="Körperfettanteil Männer" href="'. plugins_url( $this->get_widget_slug().'/img/male.jpg') .'" target="_blank">Für Männer</a> / <a class="image-popup" title="Körperfettanteil Frauen" href="'. plugins_url( $this->get_widget_slug().'/img/female.jpg') .'" target="_blank">Für Frauen</a></div>';
$html .= '<div class="widget-content clearfix">
<input name="'.$this->get_widget_slug().'-kfa" id="'.$this->get_widget_slug().'-kfa" type="text"><br/>
</div></div>';
$html .= '<div class="widget-content clearfix">
<h4>Ihr Ergebnis: <span id="'.$this->get_widget_slug().'-ergebnis"></span>g Protein / pro Tag</h4><br/>
Zur Verfügung gestellt von <a target="_blank" href="http://protein.de">protein.de</a>
</div>';


echo $html;
?>