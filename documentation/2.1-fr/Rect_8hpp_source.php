<?php
    $version = '2.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Rect.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Rect.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RECT_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_RECT_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;algorithm&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="code" href="classsf_1_1Rect.php">   42</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect</a></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    <a class="code" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37" title="Default constructor.">Rect</a>();</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <a class="code" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37" title="Default constructor.">Rect</a>(T rectLeft, T rectTop, T rectWidth, T rectHeight);</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    <a class="code" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37" title="Default constructor.">Rect</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors.">Vector2&lt;T&gt;</a>&amp; position, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors.">Vector2&lt;T&gt;</a>&amp; size);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> U&gt;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37" title="Default constructor.">Rect</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;U&gt;</a>&amp; rectangle);</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1Rect.php#aa8a5364c84de6dd5299f833b54e31ef1" title="Check if a point is inside the rectangle&#39;s area.">contains</a>(T x, T y) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1Rect.php#aa8a5364c84de6dd5299f833b54e31ef1" title="Check if a point is inside the rectangle&#39;s area.">contains</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors.">Vector2&lt;T&gt;</a>&amp; point) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1Rect.php#a566740c8f58e01bb052266f47e7e1011" title="Check the intersection between two rectangles.">intersects</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; rectangle) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;    <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1Rect.php#a566740c8f58e01bb052266f47e7e1011" title="Check the intersection between two rectangles.">intersects</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; rectangle, <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; intersection) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00151"></a><span class="lineno"><a class="code" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">  151</a></span>&#160;<span class="comment"></span>    T <a class="code" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32" title="Left coordinate of the rectangle.">left</a>;   </div>
<div class="line"><a name="l00152"></a><span class="lineno"><a class="code" href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">  152</a></span>&#160;    T <a class="code" href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3" title="Top coordinate of the rectangle.">top</a>;    </div>
<div class="line"><a name="l00153"></a><span class="lineno"><a class="code" href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f">  153</a></span>&#160;    T <a class="code" href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f" title="Width of the rectangle.">width</a>;  </div>
<div class="line"><a name="l00154"></a><span class="lineno"><a class="code" href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd">  154</a></span>&#160;    T <a class="code" href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd" title="Height of the rectangle.">height</a>; </div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;};</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;<span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;<span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles.">Rect&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.inl&gt;</span></div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;<span class="comment">// Create typedefs for the most common types</span></div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Rect.php">Rect&lt;int&gt;</a>   <a class="code" href="classsf_1_1Rect.php">IntRect</a>;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Rect.php">Rect&lt;float&gt;</a> <a class="code" href="classsf_1_1Rect.php">FloatRect</a>;</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;</div>
<div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;</div>
<div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;<span class="preprocessor">#endif // SFML_RECT_HPP</span></div>
<div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;</div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>