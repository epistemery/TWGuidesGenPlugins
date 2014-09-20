<?php


// Doc:
// new PluginDefinition("#"; "filename", "Display Name", "Website URI", "category" )
//
// categories currently include
// * core => Core Plugins
// * widgets => Widgets
// * ui	=> UI
// * macros	=> Macros
//
// Feel free to add categories

$plugins = array();

//Core
$plugins["1"] = new PluginDefinition("1", "codemirror.tid", "CodeMirror Core Plugin", "http://www.tiddlywiki.com/codemirrordemo.html", "core");  
$plugins["2"] = new PluginDefinition("2", "markdown.tid", "Markdown Core Plugin", "http://www.tiddlywiki.com/markdowndemo.html", "core");  
$plugins["3"] = new PluginDefinition("3", "tw2parser.tid", "Classic Parser Core Plugin", "http://www.tiddlywiki.com/classicparserdemo.html", "core");  
$plugins["4"] = new PluginDefinition("4", "highlight.tid", "Highlight.js Core Plugin", "http://www.tiddlywiki.com/highlightdemo.html", "core");  
$plugins["5"] = new PluginDefinition("5", "d3.tid", "D3.js Core Plugin", "http://www.tiddlywiki.com/d3demo.html", "core");  

//Eucaly
$plugins["6"] = new PluginDefinition("6", "eucaly_flexwidth.tid", "FlexWidth", "http://eucaly-tw5.tiddlyspot.com/", "ui");  
$plugins["7"] = new PluginDefinition("7", "eucaly_quickjump.tid", "QuickJump", "http://eucaly-tw5.tiddlyspot.com/", "ui");  
$plugins["8"] = new PluginDefinition("8", "eucaly_popuptagger.tid", "PopupTagger", "http://eucaly-tw5.tiddlyspot.com/", "ui");  

//ahahn
$plugins["9"] = new PluginDefinition("9", "ahahn_hoverWidget.tid", "HoverWidget", "http://twguides.org/wiki/hover-widget.html", "widget");  

?>
