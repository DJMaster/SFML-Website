<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'View.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">View.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VIEW_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_VIEW_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Matrix3.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>RenderTarget;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="code" href="classsf_1_1View.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1View.php" title="This class defines a view (position, size, etc.) ; you can consider it as a 2D camera.">View</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1View.php" title="This class defines a view (position, size, etc.) ; you can consider it as a 2D camera.">View</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">FloatRect</a>&amp; ViewRect = <a class="code" href="classsf_1_1Rect.php">FloatRect</a>(0, 0, 1000, 1000));</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <a class="code" href="classsf_1_1View.php" title="This class defines a view (position, size, etc.) ; you can consider it as a 2D camera.">View</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; Center, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; HalfSize);</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <span class="keywordtype">void</span> SetCenter(<span class="keywordtype">float</span> X, <span class="keywordtype">float</span> Y);</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="keywordtype">void</span> SetCenter(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; Center);</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    <span class="keywordtype">void</span> SetHalfSize(<span class="keywordtype">float</span> HalfWidth, <span class="keywordtype">float</span> HalfHeight);</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    <span class="keywordtype">void</span> SetHalfSize(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; HalfSize);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">void</span> SetFromRect(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">FloatRect</a>&amp; ViewRect);</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; GetCenter() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; GetHalfSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">sf::FloatRect</a>&amp; GetRect() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    <span class="keywordtype">void</span> Move(<span class="keywordtype">float</span> OffsetX, <span class="keywordtype">float</span> OffsetY);</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;    <span class="keywordtype">void</span> Move(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>&amp; Offset);</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;    <span class="keywordtype">void</span> Zoom(<span class="keywordtype">float</span> Factor);</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, image, ...)">RenderTarget</a>;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Matrix3.php" title="Utility class to manipulate 3x3 matrices representing 2D transformations.">Matrix3</a>&amp; GetMatrix() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;    <span class="keywordtype">void</span> RecomputeMatrix();</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a> myCenter;     </div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a> myHalfSize;   </div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a>    myRect;       </div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;    <a class="code" href="classsf_1_1Matrix3.php" title="Utility class to manipulate 3x3 matrices representing 2D transformations.">Matrix3</a>      myMatrix;     </div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;    <span class="keywordtype">bool</span>         myNeedUpdate; </div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;};</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;<span class="preprocessor">#endif // SFML_VIEW_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>