<?php


// Doc:
// new PluginDefinition("#"; "filename", "Display Name", "Website URI", "category" )
//
// categories currently include
// * editor => Editor plugins
// * parser => Parser plugins
// * third	=> Thrid party library plugins
//
// Feel free to add categories

$plugins = array();

$plugins["1"] = new PluginDefinition("1", "codemirror.tid", "CodeMirror Core Plugin", "http://www.tiddlywiki.com/codemirrordemo.html", "editor");  
$plugins["2"] = new PluginDefinition("2", "markdown.tid", "Markdown Core Plugin", "http://www.tiddlywiki.com/markdowndemo.html", "parser");  
$plugins["3"] = new PluginDefinition("3", "tw2parser.tid", "Classic Parser Core Plugin", "http://www.tiddlywiki.com/classicparserdemo.html", "parser");  
$plugins["4"] = new PluginDefinition("4", "highlight.tid", "Highlight.js Core Plugin", "http://www.tiddlywiki.com/highlightdemo.html", "third");  
$plugins["5"] = new PluginDefinition("5", "d3.tid", "D3.js Core Plugin", "http://www.tiddlywiki.com/d3demo.html", "third");  


?>
