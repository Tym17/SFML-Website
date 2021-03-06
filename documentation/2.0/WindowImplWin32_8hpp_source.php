<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_e08987e907e430954db197f1220bd556.php">src</a></li><li class="navelem"><a class="el" href="dir_67163b7d99179e1ca51fe5e67c990233.php">SFML</a></li><li class="navelem"><a class="el" href="dir_6ae484f7449d3a65758d28d1198ce9c8.php">Window</a></li><li class="navelem"><a class="el" href="dir_21a8f7d2b27cf87eac6109eb501192fd.php">Win32</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">WindowImplWin32.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOWIMPLWIN32_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_WINDOWIMPLWIN32_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Window/Event.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/WindowImpl.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;windows.h&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">class </span>WindowImplWin32 : <span class="keyword">public</span> WindowImpl</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    WindowImplWin32(WindowHandle handle);</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    WindowImplWin32(VideoMode mode, <span class="keyword">const</span> String&amp; title, Uint32 style);</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    ~WindowImplWin32();</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    <span class="keyword">virtual</span> WindowHandle getSystemHandle() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keyword">virtual</span> Vector2i getPosition() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setPosition(<span class="keyword">const</span> Vector2i&amp; position);</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    <span class="keyword">virtual</span> Vector2u getSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setSize(<span class="keyword">const</span> Vector2u&amp; size);</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setTitle(<span class="keyword">const</span> String&amp; title);</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setIcon(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keyword">const</span> Uint8* pixels);</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setVisible(<span class="keywordtype">bool</span> visible);</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setMouseCursorVisible(<span class="keywordtype">bool</span> visible);</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> setKeyRepeatEnabled(<span class="keywordtype">bool</span> enabled);</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> processEvents();</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="keywordtype">void</span> registerWindowClass();</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;    <span class="keywordtype">void</span> switchToFullscreen(<span class="keyword">const</span> VideoMode&amp; mode);</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;    <span class="keywordtype">void</span> cleanup();</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;    <span class="keywordtype">void</span> processEvent(UINT message, WPARAM wParam, LPARAM lParam);</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142" title="Key codes.">Keyboard::Key</a> virtualKeyCodeToSF(WPARAM key, LPARAM flags);</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> hasUnicodeSupport();</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;    <span class="keyword">static</span> LRESULT CALLBACK globalOnEvent(HWND handle, UINT message, WPARAM wParam, LPARAM lParam);</div>
<div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;<span class="comment"></span>    HWND     m_handle;           </div>
<div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;    LONG_PTR m_callback;         </div>
<div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;    HCURSOR  m_cursor;           </div>
<div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;    HICON    m_icon;             </div>
<div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;    <span class="keywordtype">bool</span>     m_keyRepeatEnabled; </div>
<div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;    <span class="keywordtype">bool</span>     m_isCursorIn;       </div>
<div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;    Vector2u m_lastSize;         </div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;    <span class="keywordtype">bool</span>     m_resizing;         </div>
<div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;};</div>
<div class="line"><a name="l00242"></a><span class="lineno">  242</span>&#160;</div>
<div class="line"><a name="l00243"></a><span class="lineno">  243</span>&#160;} <span class="comment">// namespace priv</span></div>
<div class="line"><a name="l00244"></a><span class="lineno">  244</span>&#160;</div>
<div class="line"><a name="l00245"></a><span class="lineno">  245</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;</div>
<div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;<span class="preprocessor">#endif // SFML_WINDOWIMPLWIN32_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
