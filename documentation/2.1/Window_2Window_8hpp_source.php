<?php
    $version = '2.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Window.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_91aff02cfffdbbdd31d48df547831556.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Window/Window.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOW_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_WINDOW_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Window/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/ContextSettings.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/VideoMode.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/WindowHandle.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/WindowStyle.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Clock.hpp&gt;</span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <span class="keyword">class </span>GlContext;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keyword">class </span>WindowImpl;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;}</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="keyword">class </span>Event;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno"><a class="code" href="classsf_1_1Window.php">   57</a></span>&#160;<span class="keyword">class </span>SFML_WINDOW_API <a class="code" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">Window</a> : <a class="code" href="classsf_1_1GlResource.php" title="Base class for classes that require an OpenGL context.">GlResource</a>, <a class="code" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">NonCopyable</a></div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;{</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <a class="code" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">Window</a>();</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <a class="code" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">Window</a>(<a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">VideoMode</a> mode, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">String</a>&amp; title, Uint32 style = <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37" title="Default window style.">Style::Default</a>, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>());</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">Window</a>(WindowHandle handle, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>());</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">Window</a>();</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">void</span> create(<a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">VideoMode</a> mode, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">String</a>&amp; title, Uint32 style = <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37" title="Default window style.">Style::Default</a>, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>());</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;    <span class="keywordtype">void</span> create(WindowHandle handle, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>());</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    <span class="keywordtype">void</span> close();</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="keywordtype">bool</span> isOpen() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php" title="Structure defining the settings of the OpenGL context attached to a window.">ContextSettings</a>&amp; getSettings() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keywordtype">bool</span> pollEvent(<a class="code" href="classsf_1_1Event.php" title="Defines a system event and its parameters.">Event</a>&amp; event);</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;</div>
<div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;    <span class="keywordtype">bool</span> waitEvent(<a class="code" href="classsf_1_1Event.php" title="Defines a system event and its parameters.">Event</a>&amp; event);</div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;</div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;    <a class="code" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors.">Vector2i</a> getPosition() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;    <span class="keywordtype">void</span> setPosition(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors.">Vector2i</a>&amp; position);</div>
<div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;</div>
<div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> getSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;</div>
<div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;    <span class="keywordtype">void</span> setSize(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> size);</div>
<div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;</div>
<div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;    <span class="keywordtype">void</span> setTitle(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">String</a>&amp; title);</div>
<div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;</div>
<div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;    <span class="keywordtype">void</span> setIcon(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keyword">const</span> Uint8* pixels);</div>
<div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;</div>
<div class="line"><a name="l00314"></a><span class="lineno">  314</span>&#160;    <span class="keywordtype">void</span> setVisible(<span class="keywordtype">bool</span> visible);</div>
<div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;</div>
<div class="line"><a name="l00329"></a><span class="lineno">  329</span>&#160;    <span class="keywordtype">void</span> setVerticalSyncEnabled(<span class="keywordtype">bool</span> enabled);</div>
<div class="line"><a name="l00330"></a><span class="lineno">  330</span>&#160;</div>
<div class="line"><a name="l00339"></a><span class="lineno">  339</span>&#160;    <span class="keywordtype">void</span> setMouseCursorVisible(<span class="keywordtype">bool</span> visible);</div>
<div class="line"><a name="l00340"></a><span class="lineno">  340</span>&#160;</div>
<div class="line"><a name="l00353"></a><span class="lineno">  353</span>&#160;    <span class="keywordtype">void</span> setKeyRepeatEnabled(<span class="keywordtype">bool</span> enabled);</div>
<div class="line"><a name="l00354"></a><span class="lineno">  354</span>&#160;</div>
<div class="line"><a name="l00370"></a><span class="lineno">  370</span>&#160;    <span class="keywordtype">void</span> setFramerateLimit(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> limit);</div>
<div class="line"><a name="l00371"></a><span class="lineno">  371</span>&#160;</div>
<div class="line"><a name="l00383"></a><span class="lineno">  383</span>&#160;    <span class="keywordtype">void</span> setJoystickThreshold(<span class="keywordtype">float</span> threshold);</div>
<div class="line"><a name="l00384"></a><span class="lineno">  384</span>&#160;</div>
<div class="line"><a name="l00400"></a><span class="lineno">  400</span>&#160;    <span class="keywordtype">bool</span> setActive(<span class="keywordtype">bool</span> active = <span class="keyword">true</span>) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00401"></a><span class="lineno">  401</span>&#160;</div>
<div class="line"><a name="l00410"></a><span class="lineno">  410</span>&#160;    <span class="keywordtype">void</span> display();</div>
<div class="line"><a name="l00411"></a><span class="lineno">  411</span>&#160;</div>
<div class="line"><a name="l00424"></a><span class="lineno">  424</span>&#160;    WindowHandle getSystemHandle() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00425"></a><span class="lineno">  425</span>&#160;</div>
<div class="line"><a name="l00426"></a><span class="lineno">  426</span>&#160;<span class="keyword">protected</span> :</div>
<div class="line"><a name="l00427"></a><span class="lineno">  427</span>&#160;</div>
<div class="line"><a name="l00436"></a><span class="lineno">  436</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onCreate();</div>
<div class="line"><a name="l00437"></a><span class="lineno">  437</span>&#160;</div>
<div class="line"><a name="l00445"></a><span class="lineno">  445</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onResize();</div>
<div class="line"><a name="l00446"></a><span class="lineno">  446</span>&#160;</div>
<div class="line"><a name="l00447"></a><span class="lineno">  447</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00448"></a><span class="lineno">  448</span>&#160;</div>
<div class="line"><a name="l00461"></a><span class="lineno">  461</span>&#160;    <span class="keywordtype">bool</span> filterEvent(<span class="keyword">const</span> <a class="code" href="classsf_1_1Event.php" title="Defines a system event and its parameters.">Event</a>&amp; event);</div>
<div class="line"><a name="l00462"></a><span class="lineno">  462</span>&#160;</div>
<div class="line"><a name="l00467"></a><span class="lineno">  467</span>&#160;    <span class="keywordtype">void</span> initialize();</div>
<div class="line"><a name="l00468"></a><span class="lineno">  468</span>&#160;</div>
<div class="line"><a name="l00470"></a><span class="lineno">  470</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00472"></a><span class="lineno">  472</span>&#160;<span class="comment"></span>    priv::WindowImpl* m_impl;           </div>
<div class="line"><a name="l00473"></a><span class="lineno">  473</span>&#160;    priv::GlContext*  m_context;        </div>
<div class="line"><a name="l00474"></a><span class="lineno">  474</span>&#160;    <a class="code" href="classsf_1_1Clock.php" title="Utility class that measures the elapsed time.">Clock</a>             m_clock;          </div>
<div class="line"><a name="l00475"></a><span class="lineno">  475</span>&#160;    <a class="code" href="classsf_1_1Time.php" title="Represents a time value.">Time</a>              m_frameTimeLimit; </div>
<div class="line"><a name="l00476"></a><span class="lineno">  476</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>          m_size;           </div>
<div class="line"><a name="l00477"></a><span class="lineno">  477</span>&#160;};</div>
<div class="line"><a name="l00478"></a><span class="lineno">  478</span>&#160;</div>
<div class="line"><a name="l00479"></a><span class="lineno">  479</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00480"></a><span class="lineno">  480</span>&#160;</div>
<div class="line"><a name="l00481"></a><span class="lineno">  481</span>&#160;</div>
<div class="line"><a name="l00482"></a><span class="lineno">  482</span>&#160;<span class="preprocessor">#endif // SFML_WINDOW_HPP</span></div>
<div class="line"><a name="l00483"></a><span class="lineno">  483</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00484"></a><span class="lineno">  484</span>&#160;</div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>