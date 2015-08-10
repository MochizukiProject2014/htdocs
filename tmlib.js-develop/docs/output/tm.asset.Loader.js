Ext.data.JsonP.tm_asset_Loader({"tagname":"class","name":"tm.asset.Loader","extends":"tm.event.EventDispatcher","mixins":[],"alternateClassNames":[],"aliases":{},"singleton":false,"requires":[],"uses":[],"enum":null,"override":null,"inheritable":null,"inheritdoc":null,"meta":{},"private":null,"id":"class-tm.asset.Loader","members":{"cfg":[],"property":[{"name":"_listeners","tagname":"property","owner":"tm.event.EventDispatcher","meta":{"private":true},"id":"property-_listeners"},{"name":"assets","tagname":"property","owner":"tm.asset.Loader","meta":{},"id":"property-assets"}],"method":[{"name":"constructor","tagname":"method","owner":"tm.asset.Loader","meta":{},"id":"method-constructor"},{"name":"_load","tagname":"method","owner":"tm.asset.Loader","meta":{"private":true},"id":"method-_load"},{"name":"_loadByObject","tagname":"method","owner":"tm.asset.Loader","meta":{"private":true},"id":"method-_loadByObject"},{"name":"_loadString","tagname":"method","owner":"tm.asset.Loader","meta":{"private":true},"id":"method-_loadString"},{"name":"addEventListener","tagname":"method","owner":"tm.event.EventDispatcher","meta":{},"id":"method-addEventListener"},{"name":"clearEventListener","tagname":"method","owner":"tm.event.EventDispatcher","meta":{"chainable":true},"id":"method-clearEventListener"},{"name":"contains","tagname":"method","owner":"tm.asset.Loader","meta":{},"id":"method-contains"},{"name":"dispatchEvent","tagname":"method","owner":"tm.event.EventDispatcher","meta":{},"id":"method-dispatchEvent"},{"name":"fire","tagname":"method","owner":"tm.event.EventDispatcher","meta":{"chainable":true},"id":"method-fire"},{"name":"get","tagname":"method","owner":"tm.asset.Loader","meta":{},"id":"method-get"},{"name":"hasEventListener","tagname":"method","owner":"tm.event.EventDispatcher","meta":{},"id":"method-hasEventListener"},{"name":"load","tagname":"method","owner":"tm.asset.Loader","meta":{"chainable":true},"id":"method-load"},{"name":"off","tagname":"method","owner":"tm.event.EventDispatcher","meta":{"chainable":true},"id":"method-off"},{"name":"on","tagname":"method","owner":"tm.event.EventDispatcher","meta":{"chainable":true},"id":"method-on"},{"name":"removeEventListener","tagname":"method","owner":"tm.event.EventDispatcher","meta":{},"id":"method-removeEventListener"},{"name":"set","tagname":"method","owner":"tm.asset.Loader","meta":{"chainable":true},"id":"method-set"}],"event":[],"css_var":[],"css_mixin":[]},"linenr":5,"files":[{"filename":"loader.js","href":"loader.html#tm-asset-Loader"}],"html_meta":{},"statics":{"cfg":[],"property":[],"method":[],"event":[],"css_var":[],"css_mixin":[]},"component":false,"superclasses":["tm.event.EventDispatcher"],"subclasses":[],"mixedInto":[],"parentMixins":[],"html":"<div><pre class=\"hierarchy\"><h4>Hierarchy</h4><div class='subclass first-child'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='docClass'>tm.event.EventDispatcher</a><div class='subclass '><strong>tm.asset.Loader</strong></div></div><h4>Files</h4><div class='dependency'><a href='source/loader.html#tm-asset-Loader' target='_blank'>loader.js</a></div></pre><div class='doc-contents'><p>アセットローダー</p>\n</div><div class='members'><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-property'>Properties</h3><div class='subsection'><div id='property-_listeners' class='member first-child inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-property-_listeners' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-property-_listeners' class='name not-expandable'>_listeners</a><span> : Object</span><strong class='private signature' >private</strong></div><div class='description'><div class='short'>\n</div><div class='long'>\n</div></div></div><div id='property-assets' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-property-assets' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-property-assets' class='name not-expandable'>assets</a><span> : Object</span></div><div class='description'><div class='short'><p>アセット</p>\n</div><div class='long'><p>アセット</p>\n</div></div></div></div></div><div class='members-section'><div class='definedBy'>Defined By</div><h3 class='members-title icon-method'>Methods</h3><div class='subsection'><div id='method-constructor' class='member first-child not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-constructor' target='_blank' class='view-source'>view source</a></div><strong class='new-keyword'>new</strong><a href='#!/api/tm.asset.Loader-method-constructor' class='name expandable'>tm.asset.Loader</a>( <span class='pre'></span> ) : <a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a></div><div class='description'><div class='short'> ...</div><div class='long'>\n<h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a></span><div class='sub-desc'>\n</div></li></ul><p>Overrides: <a href='#!/api/tm.event.EventDispatcher-method-constructor' rel='tm.event.EventDispatcher-method-constructor' class='docClass'>tm.event.EventDispatcher.constructor</a></p></div></div></div><div id='method-_load' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-_load' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-_load' class='name expandable'>_load</a>( <span class='pre'>key, path, type</span> )<strong class='private signature' >private</strong></div><div class='description'><div class='short'>アセットのロード ...</div><div class='long'><p>アセットのロード</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>key</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>path</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-_loadByObject' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-_loadByObject' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-_loadByObject' class='name expandable'>_loadByObject</a>( <span class='pre'>hash</span> )<strong class='private signature' >private</strong></div><div class='description'><div class='short'>オブジェクト指定のアセットのロード ...</div><div class='long'><p>オブジェクト指定のアセットのロード</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>hash</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-_loadString' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-_loadString' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-_loadString' class='name expandable'>_loadString</a>( <span class='pre'>key, path, type</span> )<strong class='private signature' >private</strong></div><div class='description'><div class='short'>文字列指定のアセットのロード ...</div><div class='long'><p>文字列指定のアセットのロード</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>key</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>path</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-addEventListener' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-addEventListener' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-addEventListener' class='name expandable'>addEventListener</a>( <span class='pre'></span> )</div><div class='description'><div class='short'>on と同じ ...</div><div class='long'><p>on と同じ</p>\n</div></div></div><div id='method-clearEventListener' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-clearEventListener' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-clearEventListener' class='name expandable'>clearEventListener</a>( <span class='pre'>type</span> ) : <a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>type に登録されているリスナーを全てクリア ...</div><div class='long'><p>type に登録されているリスナーを全てクリア</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div><div id='method-contains' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-contains' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-contains' class='name expandable'>contains</a>( <span class='pre'>key</span> )</div><div class='description'><div class='short'>キーと一致するアセットを含んでいるか ...</div><div class='long'><p>キーと一致するアセットを含んでいるか</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>key</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-dispatchEvent' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-dispatchEvent' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-dispatchEvent' class='name expandable'>dispatchEvent</a>( <span class='pre'></span> )</div><div class='description'><div class='short'>fire と同じ ...</div><div class='long'><p>fire と同じ</p>\n</div></div></div><div id='method-fire' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-fire' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-fire' class='name expandable'>fire</a>( <span class='pre'>e</span> ) : <a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>イベント発火 ...</div><div class='long'><p>イベント発火</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>e</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div><div id='method-get' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-get' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-get' class='name expandable'>get</a>( <span class='pre'>key</span> )</div><div class='description'><div class='short'>アセットのゲット ...</div><div class='long'><p>アセットのゲット</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>key</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-hasEventListener' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-hasEventListener' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-hasEventListener' class='name expandable'>hasEventListener</a>( <span class='pre'>type</span> )</div><div class='description'><div class='short'>type に登録されたイベントがあるかをチェック ...</div><div class='long'><p>type に登録されたイベントがあるかをチェック</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li></ul></div></div></div><div id='method-load' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-load' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-load' class='name expandable'>load</a>( <span class='pre'>arg</span> ) : <a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>アセットのロード実行 ...</div><div class='long'><p>アセットのロード実行</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>arg</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div><div id='method-off' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-off' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-off' class='name expandable'>off</a>( <span class='pre'>type, listener</span> ) : <a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>リスナーを削除 ...</div><div class='long'><p>リスナーを削除</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>listener</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div><div id='method-on' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-on' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-on' class='name expandable'>on</a>( <span class='pre'>type, listener</span> ) : <a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>イベントリスナー追加 ...</div><div class='long'><p>イベントリスナー追加</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>type</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>listener</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.event.EventDispatcher\" rel=\"tm.event.EventDispatcher\" class=\"docClass\">tm.event.EventDispatcher</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div><div id='method-removeEventListener' class='member  inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><a href='#!/api/tm.event.EventDispatcher' rel='tm.event.EventDispatcher' class='defined-in docClass'>tm.event.EventDispatcher</a><br/><a href='source/eventdispatcher.html#tm-event-EventDispatcher-method-removeEventListener' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.event.EventDispatcher-method-removeEventListener' class='name expandable'>removeEventListener</a>( <span class='pre'></span> )</div><div class='description'><div class='short'>off と同じ ...</div><div class='long'><p>off と同じ</p>\n</div></div></div><div id='method-set' class='member  not-inherited'><a href='#' class='side expandable'><span>&nbsp;</span></a><div class='title'><div class='meta'><span class='defined-in' rel='tm.asset.Loader'>tm.asset.Loader</span><br/><a href='source/loader.html#tm-asset-Loader-method-set' target='_blank' class='view-source'>view source</a></div><a href='#!/api/tm.asset.Loader-method-set' class='name expandable'>set</a>( <span class='pre'>key, asset</span> ) : <a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a><strong class='chainable signature' >chainable</strong></div><div class='description'><div class='short'>アセットのセット ...</div><div class='long'><p>アセットのセット</p>\n<h3 class=\"pa\">Parameters</h3><ul><li><span class='pre'>key</span> : Object<div class='sub-desc'>\n</div></li><li><span class='pre'>asset</span> : Object<div class='sub-desc'>\n</div></li></ul><h3 class='pa'>Returns</h3><ul><li><span class='pre'><a href=\"#!/api/tm.asset.Loader\" rel=\"tm.asset.Loader\" class=\"docClass\">tm.asset.Loader</a></span><div class='sub-desc'><p>this</p>\n</div></li></ul></div></div></div></div></div></div></div>"});